<?php
// if form not yet submitted
// display form
if (!isset($_POST['submit'])) {
  $username = (isset($_COOKIE['name'])) ? $_COOKIE['name'] : '';      
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
   "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Project 9-3: Building A Better Login Form</title>
  </head>
  <body>
    <h2>Project 9-3: Building A Better Login Form</h2>
    <form method="post" action="login.php">
      Username: <br />
      <input type="text" name="username" value="<?php echo $username; ?>"/>
      <p>
      Password: <br />
      <input type="password" name="password" />
      <p>
      <input type="checkbox" name="sticky" checked />
      Remember me 
      <p>
      <input type="submit" name="submit" value="Log In" />      
    </form>
  </body>
</html>
<?php      
// if form submitted
// check supplied login credentials 
// against database
} else {
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  // check input
  if (empty($username)) {
    die('ERROR: Please enter your username');  
  }
  if (empty($password)) {
    die('ERROR: Please enter your password');  
  }
  
  // attempt database connection
  try {
     $pdo = new PDO('mysql:dbname=test;host=localhost', 'root', '');
  } catch (PDOException $e) {
     die("ERROR: Could not connect: " . $e->getMessage());
  }

  // escape special characters in input
  $username = $pdo->quote($username);
  
  // check if usernames exists      
  $sql = "SELECT COUNT(*) FROM users WHERE username = $username";
  if ($result = $pdo->query($sql)) {
    $row = $result->fetch();
    // if yes, fetch the encrypted password
    if ($row[0] == 1) {
      $sql = "SELECT password FROM users WHERE username = $username";        
      // encrypt the password entered into the form
      // test it against the encrypted password stored in the database
      // if the two match, the password is correct
      if ($result = $pdo->query($sql)) {
        $row = $result->fetch();          
        $salt = $row[0];  
        if (crypt($password, $salt) == $salt) {
          // password correct
          // start a new session  
          // save the username to the session
          // if required, set a cookie with the username
          // redirect the browser to the main application page 
          session_start();
          $_SESSION['username'] = $username;
          if ($_POST['sticky']) {
            setcookie('name', $_POST['username'], mktime()+86400);
          }
          header('Location: main.php');           
        } else {
          echo 'You entered an incorrect password.';            
        }
      } else {
        echo "ERROR: Could not execute $sql. " . print_r($pdo->errorInfo());
      }          
    } else {
      echo 'You entered an incorrect username.';            
    }
  } else {
    echo "ERROR: Could not execute $sql. " . print_r($pdo->errorInfo());
  }
  
  // close connection
  unset($pdo);     
}
?>    
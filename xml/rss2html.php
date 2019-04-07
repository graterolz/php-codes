<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Project 8-3: Reading RSS Feeds</title>
		<style type="text/css">
			div.heading {
				font-weight: bolder;
			}
			div.story {
				background-color: white;
				border: 1px solid black;
				width: 320px;
				height: 200px;
				margin: 20px;
			}
			div.headline a {
				font-weight: bolder;
				color: orange;
				margin: 5px;
			}
			div.body {
				margin: 5px;
			}
			div.timestamp {
				font-size: smaller;
				font-style: italic;
				margin: 5px;
			}
			ul {
				list-style-type: none;
			}
			li {
				float: left;
			}
		</style>
	</head>
	<body>
		<h2>Project 8-3: Reading RSS Feeds</h2>
		<?php
			// read newsvine.com's RSS feed for top technology news stories
			$xml = simplexml_load_file("http://www.newsvine.com/_feeds/rss2/tag?id=technology") or die("ERROR: Cannot read RSS feed");
		?>
		<h3 style="heading"><?php echo $xml->channel->title; ?></h3>
		<ul>
		<?php
			// iterate over list of stories
			// print each story's title, URL and timestamp
			// and then the story body
			foreach ($xml->channel->item as $item) {
		?>
			<li>
				<div class="story">
					<div class="headline"><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></div>
					<div class="timestamp"><?php echo $item->pubDate; ?></div>
					<div class="body"><?php echo $item->description; ?></div>
				</div>
				</li>
		<?php
			}
		?>
		</ul>
	</body>
</html>
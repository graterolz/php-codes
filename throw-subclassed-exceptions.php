<?php
	// subclass Exception
	class MissingFileException extends Exception { }
	class DuplicateFileException extends Exception { }
	class FileIOException extends Exception { }
	// set file name
	// attempt to copy and then delete file
	$file = 'dummy.txt';
	try {
		if (!file_exists($file)) {
			throw new MissingFileException($file);
		}
		if (file_exists("$file.new")) {
			throw new DuplicateFileException("$file.new");
		}
		if (!copy($file, "$file.new")) {
			throw new FileIOException("$file.new");
		}
		if (!unlink($file)) {
			throw new FileIOException($file);
		}
	}
	catch (MissingFileException $e) {
		echo 'ERROR: Could not find file \'' . $e->getMessage() . '\'';
		exit();
	}
	catch (DuplicateFileException $e) {
		echo 'ERROR: Destination file \'' . $e->getMessage() . '\' already exists';
		exit();
	}
	catch (FileIOException $e) {
		echo 'ERROR: Could not perform file input/output operation on file \'' . $e->getMessage() . '\'';
		exit();
	}
	catch (Exception $e) {
		echo 'Oops! Something bad happened on line ' . $e->getLine() . ': ' . $e->getMessage();
		exit();
	}
	echo 'SUCCESS: File operation successful.';
?>

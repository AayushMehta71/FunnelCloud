<? include('connectToDB.inc.php')

?>
<!DOCTYPE html>
<html lang='en'>
	<head>			
	</head>
	<body>	
		<form method='post' id='bookform' action='book_event.php'>
			<h1>Book Us Today!</h1>
			<input type='text' name='name' placeholder='Full Name' >
			<input type='email' name='email' placeholder='Email' >
			<input type='date' name='date'>
			<textarea name='message' form='bookform' placeholder='Place a Message'></textarea>
			<input type='submit' value='Send' name='event_btn'>
		</form>
	</body>
</html>
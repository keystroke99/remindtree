<!DOCTYPE html>
<html>
<head>
	<title>Test SMS Twilio</title>
</head>
<body>
	<form action="{{url('testsms')}}" method="POST" enctype="multipart/form-data">
		{{csrf_field()}}
		<input type="number" name="mobile" placeholder="Enter Mobile number">
		<br>
		<input type="text" name="content" placeholder="Enter MEssage">
		<br>
		<input type="submit" name="">
	</form>
</body>
</html>
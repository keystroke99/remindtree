<!DOCTYPE html>
<html>
<head>
	<title>Send Email</title>
</head>
<body>
<form action="{{url('sendemail')}}" method="POST" enctype="multipart/form-data">
	{{csrf_field()}}
	<h1>Testing Email Functionality</h1>
	<input type="text" name="title" placeholder="Title">
	<br> 
	<input type="text" name="content" placeholder="Content">
	<br>
	<input type="submit" name="">
</form>
</body>
</html>
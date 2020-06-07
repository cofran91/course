<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
</head>
<body>
	@include('nav')
	<h1>Contact</h1>
	<form action="{{ route('contact.store') }}" method="POST">
		@csrf
		<label>Name</label>
		<input type="text" name="name"><br>
		{!! $errors->first('name', ':message') !!}<br><br>
		<label>Asunto</label>
		<input type="text" name="subject"><br> 
		{!! $errors->first('subject', ':message') !!}<br><br>
		<label>Email</label>
		<input type="email" name="email"><br>
		{!! $errors->first('email', ':message') !!}<br><br>
		<label>Contenido</label>
		<textarea name="content"></textarea><br>
		{!! $errors->first('contenido', ':message') !!}<br><br>
		<button type="submit">Enviar</button>
	</form>
</body>
</html>
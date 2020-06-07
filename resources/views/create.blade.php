<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>
	<h1>crear nuevo proyecto</h1>
	<form action="{{ route('create.store') }}" method="POST">
		@csrf
		<label>name</label>
		<input type="text" name="name" value="{{old('name')}}">
		{{$errors->first('name')}}<br><br>
		<label>descripcion</label>
		<textarea name="description">{{old('description')}}</textarea>
		{{$errors->first('description')}}<br><br>
		<label>url</label>
		<input type="text" name="url" value="{{old('url')}}">
		{{$errors->first('url')}}<br><br>
		<button type="submit">Crear</button>
	</form>
</body>
</html>
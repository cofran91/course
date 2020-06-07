<!DOCTYPE html>
<html>
<head>
	<title>>Edit</title>
</head>
<body>
	<h1>Editar proyecto</h1>
	<form action="{{ route('edit.store', $projectedit['project_url']) }}" method="POST">
		@method('PUT')
		@csrf
		<label>name</label>
		<input type="text" name="name" value="{{$projectedit['project_name']}}"><br><br>
		<label>descripcion</label>
		<textarea name="description">{{$projectedit['project_description']}}</textarea><br><br>
		<label>url</label>
		<input type="text" name="url" value="{{$projectedit['project_url']}}">
		<button type="submit">Guardar</button>
	</form>
</body>
</html>
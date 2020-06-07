<!DOCTYPE html>
<html>
<head>
	<title>Proyecto</title>
</head>
<body>
	<h1>{{$projectShow['project_name']}}</h1>
	<h2>{{$projectShow['project_description']}}</h2>
	@auth
		<a href="{{ route('edit.index', $projectShow['project_url']) }}">editar</a>
	@endauth
	
</body>
</html>
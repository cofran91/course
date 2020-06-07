<!DOCTYPE html>
<html>
<head>
	<title>Portfolio</title>
</head>
<body>
	@include('nav')
	<h1>Portfolio</h1>
	@auth
		<a href="{{ route('create.index') }}">Crear proyecto</a>
	@endauth
	<ul>
		@forelse($project as $projectItem)
			<li>
				<a href="{{ route('project.show', $projectItem['project_url'] ) }}">{{ $projectItem['project_name']}}</a>
				@auth
					<form action="{{ route('delete',  $projectItem['project_url']) }}" method="POST">
					@method('DELETE');
					@csrf
					<button type="submit">eliminar</button>
				</form>
				@endauth
			</li>
		@empty
			<li>No hay proyectos para mostrar</li>
		@endforelse
	</ul>
</body>
</html>
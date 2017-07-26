<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>My Tasks Home</h1>
@foreach ($tasks as $task)

	<a href="/tasks/{{ $task->id }}">

		<li>{{ $task->body }}</li>

	</a>
	
@endforeach
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>My Tasks</h1>
@foreach ($task as $tasks)
	<li>{{ $tasks->body }}</li>
@endforeach
</body>
</html
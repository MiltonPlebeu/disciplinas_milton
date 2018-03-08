<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<ul>
@foreach ($disciplinas as $disciplina)
<li>{{$disciplina->titulo}}</li>
@endforeach
</ul>
</body>
</html>
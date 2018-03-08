<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="/disciplinas/create">Cadastrar disciplina</a>

<ul>
@foreach ($disciplinas as $disciplina)
<li><a href="/disciplinas/{{$disciplina->id}}">{{$disciplina->titulo}}</li>
@endforeach
</ul>
</body>
</html>
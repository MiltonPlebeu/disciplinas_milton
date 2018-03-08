<form method="POST" action="/disciplinas">
{{ csrf_field() }}
Título:<input name="titulo">
Título:<textarea name="ementa"></textarea>
<button type="Submit">Salvar</button>
</form>
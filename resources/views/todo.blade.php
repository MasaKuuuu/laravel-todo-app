<h1>PHPerのための「Laravel 入門を語り合う」PHP TechCafe</h1>

<h2>Todoアプリ</h2>

<h3>新規追加</h3>
<form action="/todo/create" method="post">
    @csrf
    <input type="text" name="task">
    <input type="submit" value="追加">
</form>

<hr>

<h3>登録済み</h3>

<div>
    @foreach ($todos as $todo)
    <form action="/todo/edit" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$todo->id}}">
        <input type="text" name="task" value="{{$todo->task}}">
        <input type="submit" value="編集">
        <input type="button" onclick="location.href='/todo/delete?id={{$todo->id}}'" value="削除">
    </form>
    @endforeach
</div>
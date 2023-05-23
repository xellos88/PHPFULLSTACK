<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>테스트 인덱스</h1>
    <h5>{{$name}}</h5>
    <hr>
    <a href="{{route('tasks.index')}}">tasks.index</a>
    
    <br>
    <a href="{{route('tasks.show', ['task'=>13])}}">Tasks.show</a>

    <form action="{{route('tasks.update', ['task'=>1])}}" method="post">
    @csrf
    @method('put')
    <input type="hidden" name="id" value="php506">
    <input type="hidden" name="pw" value="506">
    <input type="hidden" name="name" value="admin">
    <button type="submit">tasks.update</button>
    </form>

    <a href="{{route('tasks.edit', ['task'=>999])}}">Tasks.edit</a>

    <br>
    <form action="{{route('tasks.store')}}" method="post">
    @csrf
    <input type="text" name="id" value="php506">
    <input type="text" name="pw" value="506">
    <button type="submit">tasks.store</button>
    </form>

</body>
</html>
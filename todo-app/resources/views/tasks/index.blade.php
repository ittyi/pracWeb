<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>タスクリスト</title>
</head>
<body>
    <h1>タスク管理</h1>

    <form action="/tasks" method="POST">
        @csrf
        <label for="name">タスク名:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">追加</button>
    </form>

    <h2>タスク一覧</h2>
    <ul>
        @foreach($tasks as $task)
            <li>{{ $task->name }}</li>
        @endforeach
    </ul>
</body>
</html>

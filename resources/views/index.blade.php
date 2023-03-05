<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')実践アプリ開発入門</title>

  @vite('css/reset.css/style.css')
</head>

<body>
  <h1>@yield('title'){{$todo}}</h1>
  <div class="homepage">
    @yield('content')
     <div class="inner">
      <header>
        <h1 class="header-title">TodoList</h1>
      </header>
      <main>
        <div class="form">
          <form action="/" method="get">
          @csrf
            <input type="text" class="text">
          </form>
          <div class="create-btn">
            <p class="create-btn_text">追加</p>
          </div>
        </div>
        <div class="title">
          <h2 class="date-1">作成日</h2>
          <h2 class="name">タスク名</h2>
          <h2 class="update">更新</h2>
          <h2 class="delete">削除</h2>
        </div>
        <div class="content">
          <div class="date-2">2023-03-03 01:08:52</div>
          <form action="/" method="get">
          @csrf
            <input type="text" class="task">
          </form>
          <div class="update-btn">
            <p class="update-btn_text">更新</p>
          </div>
          <div class="delete-btn">
            <p class="delete-btn_text">削除</p>
          </div>
        </div>
      </main>
     </div>
    </div>
</body>

</html>

@section('title', 'index.blade.php')

@section('content')
<table>
  <tr>
    <th>id</th>
    <th>string</th>
    <th>timestamp</th>
    <th>timestamp</th>
  </tr>
  @foreach ($todos as $todo)
  <tr>
    <td>{{$todo->id}}</td>
    <td>{{$todo->string}}</td>
    <td>{{$todo->timestamp}}</td>
    <td>{{$todo->timestamp}}</td>
  </tr>
  @endforeach
</table>
@endsection

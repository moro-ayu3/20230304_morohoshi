<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>実践アプリ開発入門</title>
  <style>
    .homepage {
      width: 100%;
      padding: 5% 5%;
      background-color: #191970;
    }

    .inner {
      width: 700px;
      height: 300px;
      border-radius: 10px 10px 10px 10px;
      background-color: #fff;
      margin: 0 auto;
    }

    .header-title {
      font-size: 30px;
      font-weight: bold;
      color: black;
      margin-top: 30px;
      margin-left: 20px;
    }

    .form {
      display: inline-block;
      margin: -20px -15px;
    }

    .text {
      width: 500px;
      height: 30px;
      border: solid 1px #c0c0c0;
      margin-left: 20px;
      border-radius: 5px 5px 5px 5px;
      display: inline-block;
    }

    .create-btn {
      width: 80px;
      height: 40px;
      margin-left: 20px;
      margin-right: 20px;
      border-radius: 10px 10px 10px 10px;
      border: solid 3px #9966CC;
      display: inline-block;
      font-size: 15px;
      font-weight: bold;
      color: #9966CC;
      padding:10px 20px 10px 20px;
    }

    table {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 30px;
      margin-bottom: 40px;
    }

    .date-1 {
      margin-left: 50px;
      font-size: 20px;
      font-weight: bold;
      color: black;
    }

    .name {
      margin-left: 80px;
      font-size: 20px;
      font-weight: bold;
      color: black;
    }

    .update {
      margin-left: 40px;
      font-size: 20px;
      font-weight: bold;
      color: black;
    }

    .delete {
      margin-left: 20px;
      margin-right: 20px;
      font-size: 20px;
      font-weight: bold;
      color: black;
    }

    .parent {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .date-2 {
      margin-left: 20px;
      font-size: 20px;
      color: black;
    }

    .input-update {
      width: 200px;
      height: 20px;
      border: solid 1px #c0c0c0;
      border-radius: 5px 5px 5px 5px;
      margin-left: 10px;
    }

    .button-update {
      width: 80px;
      height: 40px;
      border-radius: 10px 10px 10px 10px;
      border: solid 3px #ffa500;
      margin-left: 10px;
      font-size: 15px;
      font-weight: bold;
      color: #ffa500;
      padding: 10px 20px;
    }

    .button-delete {
      width: 80px;
      height: 40px;
      border-radius: 10px 10px 10px 10px;
      border: solid 3px #40e0d0;
      margin-left: 10px;
      margin-right: 20px;
      font-size: 15px;
      font-weight: bold;
      color: #40e0d0;
      padding: 10px 20px;
    }

  </style>
</head>

<body>
  <div class="homepage">
     <div class="inner">
      <header>
        <h1 class="header-title">TodoList</h1>
      </header>
      <main>
        <div class="form">
          <form action="/todo/create" method="get">
          @csrf
            <input type="text" class="text">
            <button class="create-btn">追加
            </button>
          </form>
        </div>

        <table>
          <tr>
            <th class="date-1">作成日</th>
            <th class="name">タスク名</th>
            <th class="update">更新</th>
            <th class="delete">削除</th>
          </tr>
          @foreach($todos as $todo)
          <tr>
            <td>
              {{ $todo->created_at}}
            </td>
            <div class="parent"></div>
              <form action="/todo/update" method="post">
                @csrf
                <td>
                  <input type="text" class="input-update" value="" name="content" />
                </td>
                <td>
                  <button class="button-update">更新</button>
                </td>
              </form>
              <td>
                <form action="/todo/delete" method="post">
                  @csrf
                  <button class="button-delete">削除</button>
                </form>
              </td>
              </div>
          </tr>
          @endforeach
        </table>
      </main>
     </div>
    </div>
</body>

</html>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/user/pomodoro.css') }}">
    <title>Macaタイマー</title>
</head>
<body>
    <div id="container">
        <h3 class="title">Macaタイマー</h3>
        <div id="page1">
            <p id="timer">{{ $pomo->timer }}</p>
            <button id="stopBtn">一時停止</button>
            <button>リスタート</button>
            <input type="checkbox" name="repeat" value="1" >リピート
            <select name="example1">
                <option value="サンプル1">選択肢のサンプル1</option>
                <option value="サンプル2">選択肢のサンプル2</option>
                <option value="サンプル3">選択肢のサンプル3</option>
                <option value="サンプル4">選択肢のサンプル4</option>
                <option value="サンプル5">選択肢のサンプル5</option>
            </select>
            <a href="{{ route('user.start_pomo') }}">テスト</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="{{ asset('js/user/pomodoro.js') }}"></script>
</body>
</html>
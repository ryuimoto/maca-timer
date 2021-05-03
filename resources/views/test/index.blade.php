<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
  
    <h1>タイマー</h1>
    <h2 class="timer"></h2>
    <button class="start_btn">開始</button>
    <button class="stop_btn">ストップ</button>
    <script>
        var sec = 180;

        var dt = new Date();
        console.log("Start: ", dt);
        var endDt = new Date(dt.getTime() + sec * 1000);
        console.log("End : ", endDt);

        // 1秒おきにカウントダウン
        var cnt = sec;
        var id = setInterval(function(){
            cnt--;
            console.log(cnt);
            var $elm = $('.timer').text(cnt);

            // 現在日時と終了日時を比較
            dt = new Date();
            if(dt.getTime() >= endDt.getTime()){
                clearInterval(id);
                console.log("Finish!");
            }
        }, 1000);

        $('.start_btn').click(function(){
            alert(464565);
        });


    </script>
</body>
</html>
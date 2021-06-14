<!DOCTYPE html>
<html>
<head>
  <meta charset="ja">
  <title>ポモドーロタイマー</title>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <meta name="viewport"
    content="width=device-width, maximum-scale=1.0, minimum-scale=0.5,user-scalable=yes,initial-scale=1.0" />
  <!-- Bootstrap 導入部分ここから -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <!-- Bootstrap 導入部分ここまで -->
</head>
<body>
  <div id="container">
    <h3 class="title">MacaTimer</h3>
    <!-- トップページ -->
    <div id="page1">
      <div class="mContainer">
        <!-- flex -->
        <div class="d-flex flex-row justify-content-center" style="height: 100%;">
          <div class="p-2 areaStyle1 align-self-center flexFill">
            <p class="textStyle1">WORK</p>
            <div class="dropdown">
              <!-- flex -->
              <div class="d-flex justify-content-center">
                <div class="p-2">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    25
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <a class="dropdown-item" value="15">15</a>
                    <a class="dropdown-item" value="20">20</a>
                    <a class="dropdown-item" value="25">25</a>
                    <a class="dropdown-item" value="30">30</a>
                    <a class="dropdown-item" value="35">35</a>
                    <a class="dropdown-item" value="40">40</a>
                    <a class="dropdown-item" value="45">45</a>
                  </div>
                </div>
                <div class="p-2 align-self-center">
                  <p class="textStyle2">分</p>
                </div>
              </div>
            </div>
          </div>
          <div class="p-2 areaStyle1 align-self-center flexFill">
            <p class="textStyle1">INTERVAL</p>
            <div class="dropdown">
              <!-- flex -->
              <div class="d-flex justify-content-center">
                <div class="p-2">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    05
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <a class="dropdown-item" value="05">05</a>
                    <a class="dropdown-item" value="10">10</a>
                    <a class="dropdown-item" value="15">15</a>
                  </div>
                </div>
                <div class="p-2 align-self-center">
                  <p class="textStyle2">分</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- button -->
      <div>
        <button id="startBtn" type="button" class="secBtn btn btn-outline-secondary">スタート</button>
      </div>
    </div>
    <!-- タイマーページ -->
    <div id="page2" class="displayNone">
      <!-- カウントダウン -->
      <div class="mContainer">
        <div class="d-flex flex-column justify-content-center" style="height: 100%;">
          <div class="p-2 align-self-center">
            <p id="work">WORK</p>
          </div>
          <div class="p-2 align-self-center">
            <p id="timer"></p>
          </div>
        </div>
      </div>
      <!-- button -->
      <div>
        <button id="stopBtn" type="button" class="btn btn-outline-secondary">一時停止</button>
        <button id="cancelBtn" type="button" class="btn btn-outline-secondary">キャンセル</button>
      </div>
      <audio id="sound-file-decision1" preload="auto">
        <source src="{{ asset('sound/decision1.mp3') }}" type="audio/mp3">
      </audio>
      <audio id="sound-file-decision4" preload="auto">
        <source src="{{ asset('sound/decision4.mp3') }}" type="audio/mp3">
      </audio>
    </div>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
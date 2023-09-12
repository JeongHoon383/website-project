<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo:wght@400;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Nanum+Gothic:wght@400;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&family=Noto+Sans+KR:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/sub-layout.css">
  <link rel="stylesheet" href="./css/home.css">
  <link rel="stylesheet" href="./css/greet.css">
  <link rel="stylesheet" href="./css/preloader.css">
  <link rel="stylesheet" href="./css/location.css">
  <link rel="stylesheet" href="./css/biz-intro.css">
  <link rel="stylesheet" href="./css/biz-area.css">
  <link rel="stylesheet" href="./css/gallery.css">
  <link rel="stylesheet" href="./css/online.css">
  <link rel="stylesheet" href="./css/faq.css">
  <link rel="stylesheet" href="./css/board.css">
  <link rel="stylesheet" href="./css/home2.css">

  <script src="https://kit.fontawesome.com/fc06d2bfa6.js" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="./js/common.js"></script>
  <!-- common.js는 최하단에 써줘야됨 -->
  <title>Document</title>
</head>
<body>
  <?php include "preloader.php" ?>
  <header>
    <nav class="member">
      <div class="center">
        <a href="#">로그인</a>
        <a href="#">회원가입</a>
        <a href="#">SNS</a>
      </div>
    </nav>
    <div class="bottom">
      <h1>
        <a href="./index.php">
          <img src="./img/icons/logo.png" alt="">
        </a>
      </h1>
      <script src="./js/gnb.js"></script> <!-- script -->
      <nav class="gnb">
      <?php include "menu.php" ?>
      </nav>
    </div>
  </header>

  <nav class="quick">
    <b>quick <br> menu</b>
    <a href="./biz-intro.php">
    <i class="fa-solid fa-building"></i>
    <span>사업분야</span>
    </a>

    <a href="./online.php">
    <i class="fa-solid fa-envelope-open-text"></i>
    <span>온라인문의</span>
    </a>
    
    <a href="./location.php">
    <i class="fa-solid fa-location-dot"></i>
    <span>오시는 길</span>
    </a>

    <button class="top">
    <i class="fa-solid fa-arrow-up"></i>top
    </button>
  </nav>
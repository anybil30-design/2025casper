<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>현대자동차 - 캐스퍼 서브 홈페이지(스크롤 레이아웃)</title>
  <!-- css초기화 -->
  <link href="./css/reset.css" rel="stylesheet" type="text/css" />
  <!-- 공통서식 -->
  <link href="./css/common.css" rel="stylesheet" type="text/css" />
  <!-- 레이아웃 서식 -->
  <link href="./css/layout.css" rel="stylesheet" type="text/css" />
  <!-- 서브 서식 -->
  <link href="./css/sub.css" rel="stylesheet" type="text/css" />
  <!-- 폰트어썸 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
</head>
<body>
  <!-- 상단헤더영역 시작 -->
  <header>
    <h1>
      <a href="index.html" title="메인페이지로 바로가기">
        <img src="./images/logo-casper_black.png" alt="상단로고_블랙">
      </a>
    </h1>

    <!-- 메인 메뉴 -->
    <nav class="m_menu" aria-label="메인메뉴">
      <ul class="gnb">
        <li><a href="#intro" title="소개" class="arctic_scroll">소개</a></li>
        <li><a href="#test_drive" title="체험" class="arctic_scroll">체험</a></li>
        <li><a href="#event" title="이벤트" class="arctic_scroll">이벤트</a></li>
        <li><a href="#buy" title="구매" class="arctic_scroll">구매</a></li>
        <li><a href="#customer" title="고객지원" class="arctic_scroll">고객지원</a></li>
      </ul>
    </nav>

    <!-- 오른쪽 끝에 배치될 아이콘 2개(로그인, 알림) -->
    <div class="nav_icon icon1">
      <a href="login.php" title="로그인 페이지로 이동하기"><span class="fas fa-user"></span></a>
      <span>로그인</span>
    </div>
    <div class="nav_icon icon2">
      <span class="fas fa-bell"></span>
      <span>알림</span>
    </div>

  </header>
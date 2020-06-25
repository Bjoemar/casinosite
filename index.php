<html lang="en"><head>
    <title>WONDER WOMAN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

<!--    <script src="js/jquery-3.2.1.min.js"></script>-->
<!--    <script src="js/bootstrap.min.js"></script>-->
    <script type="text/javascript" async="" src="https://cdn.livechatinc.com/tracking.js"></script><script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/jquery.number.min.js"></script>
    <script type="text/javascript" src="js/parsley.min.js"></script>
    <script type="text/javascript" src="js/parsley.remote.min.js"></script>
    <script type="text/javascript" src="js/jquery.vticker.min.js"></script>
    <script type="text/javascript" src="js/lazyload.min.js"></script>
    <script type="text/javascript" src="js/alertify.min.js"></script>

    <link href="css/font-awesome.css" rel="stylesheet">
<!--    <link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/wonder.css">
    <link rel="stylesheet" href="css/alertify.min.css">
    <link rel="stylesheet" href="css/themes/default.min.css">

<!--    <script type="text/javascript" src="js/script.js"></script>-->
    <script type="text/javascript" src="js/wonder.min.js"></script>

    <script type="text/javascript" src="//js.pusher.com/4.1/pusher.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $(document).bind("contextmenu", function (e) {
                return false;
            });

            
            
            if (location.pathname === '/'){
                var isLogin = "";
                var newMsgCount = '0';
                if (parseInt(newMsgCount) > 0 && parseInt(isLogin)){
                    alertify.alert("알림", "새로운 쪽지가 " + newMsgCount + "개 있습니다. [쪽지함]에서 확인하세요.");
                }
            }
        });

        $(document).bind('selectstart', function () {
            return false;
        });
        $(document).bind('dragstart', function () {
            return false;
        });

        window.onload = function () {
                    };
    </script>
    <style type="text/css">* {<br>		-webkit-user-select: text !important;<br>		-moz-user-select: text !important;<br>		-ms-user-select: text !important;<br>		 user-select: text !important;<br>	}</style><style type="text/css">* {<br>        -webkit-user-select: text !important;<br>        -moz-user-select: text !important;<br>        -ms-user-select: text !important;<br>         user-select: text !important;<br>    }</style></head>

<body>
<audio id="newMSG">
    <source src="sound/message.mp3" type="audio/mpeg">
</audio>
<audio id="alertMSG">
    <source src="sound/alert.wav" type="audio/mpeg">
</audio>
<div class="wrapper_loading hidden">
    <img src="img/loading.gif" class="wrapper_loading_img" alt="loading">
</div>

<div class="wrapper">

    <div class="nav-main">
    <div class="center">
        <a href="/" class="ww-logo">
            <img class="pattern" src="img/logo/pattern.png">
            <img class="body" src="img/logo/body.png">
            <img class="wonder-woman" src="img/logo/wonder-woman.png">
            <img class="casino" src="img/logo/casino.png">
        </a>
        <div class="link-grp">
            <ul class="bs-ul">
                <li>
                    <a href="javascript:void(0);" class="catma-btn casino open-casino"><span class="icon-img deposit"></span> 카지노</a>
                </li>
                <li>
                    <a href="javascript:void(0);"class="catma-btn slot open-slot"><span class="icon-img withdraw"></span> 슬롯머신</a>
                </li>
                <li>
                    <a href="javascript:void(0);"class="catma-btn sports open-sports"><span class="icon-img event"></span> 스포츠</a>
                </li>
                <li>
                    <a href="javascript:void(0);"class="catma-btn minigame open-minigame"><span class="icon-img notice"></span> 미니게임</a>
                </li>
<!--                 <li data-toggle="modal" data-target=".customerModal">
                    <a href="javascript:void(0);"><span class="icon-img customer"></span> 공지사항</a>
                </li> -->
                <li class="notice-link">
                    <a href="javascript:void(0);"><span class="icon-img notice"></span> 공지사항</a>
                </li>
            </ul>
        </div>
        <div class="bal-container">
                        <div class="before-login active">
                <button type="button" class="bal-btn yellow" data-toggle="modal" data-target=".loginModal">
                    <div class="inner">
                        <img src="img/icon/login-icon.png">
                        <span>로그인</span>
                    </div>
                </button>
                <button type="button" class="bal-btn" data-toggle="modal" data-target=".joinModal">
                    <div class="inner">
                        <img class="star" src="img/icon/join-icon.png">
                        <span>회원가입</span>
                    </div>
                </button>
            </div>
                    </div>
    </div>
</div>
    <div class="page-content">

        <div class="banner-main">
    <div class="banner-pane">
        <img class="banner-bg" src="img/banner/banner-bg.png">
        <img class="deco-light" src="img/banner/light.png">
        <div class="banner-carousel carousel" data-ride="carousel" data-interval="3000" data-onterval="false">
            <div class="carousel-inner">
                                                <div class="item  active ">
                    <div class="text-cont">
                        <div class="inner">
                            <p class="white">미니게임천국에 오신 것을 환영 합니다!</p>
                            <p class="title" data-text="카지노,슬롯,스포츠,미니게임!">카지노,슬롯,스포츠,미니게임!</p>
                            <p class="blue">게임에 관련된 문의부탁 드립니다.</p>
                        </div>
                    </div>
                </div>
                                            </div>
            <ol class="carousel-indicators">
                                                <li data-target=".banner-carousel" data-slide-to="0" class="active"></li>
                                            </ol>
        </div>
    </div>
</div>
        <div class="row-main">

            <div class="category-main">
    <a href="javascript:void(0);" class="catma-btn casino open-casino">
        <img class="main-img" src="img/category/casino.jpg">
        <div class="content">
            <div class="main-div">
                <img class="icon-img" src="img/category/casino-icon.png">
            </div>
            <div class="pane">
                <div class="inner">
                    <div class="text-cont">
                        <span>카지노</span>
                    </div>
                    <button class="enter-btn">게입입장</button>
                </div>
            </div>
        </div>
    </a>
    <a href="javascript:void(0);" class="catma-btn slot open-slot">
        <img class="main-img" src="img/category/slot.jpg">
        <div class="content">
            <div class="main-div">
                <img class="icon-img" src="img/category/slot-icon.png">
            </div>
            <div class="pane">
                <div class="inner">
                    <div class="text-cont">
                        <span>슬롯머신</span>
                    </div>
                    <button class="enter-btn">게입입장</button>
                </div>
            </div>
        </div>
    </a>
    <a href="javascript:void(0);" class="catma-btn sports open-sports">
        <img class="main-img" src="img/category/sports.jpg">
        <div class="content">
            <div class="main-div">
                <img class="icon-img" src="img/category/sports-icon.png">
            </div>
            <div class="pane">
                <div class="inner">
                    <div class="text-cont">
                        <span>스포츠</span>
                    </div>
                    <button class="enter-btn">게입입장</button>
                </div>
            </div>
        </div>
    </a>
    <a href="javascript:void(0);" class="catma-btn minigame open-minigame">
        <img class="main-img" src="img/category/minigame.jpg">
        <div class="content">
            <div class="main-div">
                <img class="icon-img" src="img/category/minigame-icon.png">
            </div>
            <div class="pane">
                <div class="inner">
                    <div class="text-cont">
                        <span>미니게임</span>
                    </div>
                    <button class="enter-btn">게입입장</button>
                </div>
            </div>
        </div>
    </a>
</div>
            <div class="withdraw-board">
    <div class="head">
        <div class="ww-deco">
            <img src="img/bg/wl-deco.png">
        </div>
        <span></span><span class="yellow">공지사항</span><span class="red"></span>
    </div>
    <div class="wb-table rolling-realtime" style="overflow: hidden; position: relative; height: 312px;">
        <ul style="position: absolute; margin: 0px; padding: 0px; top: -39.7009px;">
                                             

        <li class="tr" style="margin: 0px; padding: 0px; height: 52px;">
                <div class="user yellow">
                            <span>
                                xm***
                            </span>
                </div>
                <div class="amount pink">
                    <span>1,800,000 원</span>
                </div>
                <div class="date">
                    <span>06-24 20:20</span>
                </div>
            </li><li class="tr" style="margin: 0px; padding: 0px; height: 52px;">
                <div class="user yellow">
                            <span>
                                jo***
                            </span>
                </div>
                <div class="amount pink">
                    <span>1,000,000 원</span>
                </div>
                <div class="date">
                    <span>06-25 08:45</span>
                </div>
            </li><li class="tr" style="margin: 0px; padding: 0px; height: 52px;">
                <div class="user yellow">
                            <span>
                                winuf***
                            </span>
                </div>
                <div class="amount pink">
                    <span>140,000 원</span>
                </div>
                <div class="date">
                    <span>06-25 07:59</span>
                </div>
            </li><li class="tr" style="margin: 0px; padding: 0px; height: 52px;">
                <div class="user yellow">
                            <span>
                                nams***
                            </span>
                </div>
                <div class="amount pink">
                    <span>3,800,000 원</span>
                </div>
                <div class="date">
                    <span>06-25 06:58</span>
                </div>
            </li><li class="tr" style="margin: 0px; padding: 0px; height: 52px;">
                <div class="user yellow">
                            <span>
                                cy***
                            </span>
                </div>
                <div class="amount pink">
                    <span>400,000 원</span>
                </div>
                <div class="date">
                    <span>06-25 01:06</span>
                </div>
            </li><li class="tr" style="margin: 0px; padding: 0px; height: 52px;">
                <div class="user yellow">
                            <span>
                                yun14***
                            </span>
                </div>
                <div class="amount pink">
                    <span>500,000 원</span>
                </div>
                <div class="date">
                    <span>06-24 21:35</span>
                </div>
            </li><li class="tr" style="margin: 0px; padding: 0px; height: 52px;">
                <div class="user yellow">
                            <span>
                                dargum***
                            </span>
                </div>
                <div class="amount pink">
                    <span>500,000 원</span>
                </div>
                <div class="date">
                    <span>06-24 20:21</span>
                </div>
            </li><li class="tr" style="margin: 0px; padding: 0px; height: 52px;">
                <div class="user yellow">
                            <span>
                                xm***
                            </span>
                </div>
                <div class="amount pink">
                    <span>1,800,000 원</span>
                </div>
                <div class="date">
                    <span>06-24 20:20</span>
                </div>
            </li></ul>
    </div>
</div>
        </div>

        <div class="board-main">
    <div class="board-pane">

        <div class="customer-board">

            <p class="title"><span class="icon-img mod-icon-img"></span><span class="highlight">미니게임천국</span></p>

            <div class="cb-row">
                <div class="icon-cont">
                    <img src="img/icon/telegram.png">
                </div>
                <div class="text-cont">
                    <span class="info">하단채팅창이용바랍니다.</span>
                </div>
            </div>
            <div class="cb-row">
                <div class="icon-cont">
                    <img src="img/icon/kakao.png">
                </div>
                <div class="text-cont">
                    <span class="info">하단채팅창이용바랍니다.</span>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>

    <div class="footer-main">
    <img src="img/logo/footer.png">
    <p class="info-text">카지노,슬롯,스포츠,미니게임</p>
    <p class="copyright">ⓒ COPYRIGHT WONDERWOMAN CASINO 2020 ALL RIGHTS RESERVED.</p>
</div>
<div class="sn-overlay"></div>


</div>

<div class="categoryModal modal fade" role="dialog">
    <div class="category-modal modal-dialog">
        <div class="close-mdl-cont">
            <button class="mdl-close-btn" data-dismiss="modal">
                <span class="icon-img"></span>
                <p>화면닫기</p>
            </button>
        </div>
        <div class="category-nav">
            <a href="javascript:void(0);" class="ch-btn casino open-casino">
                <div class="icon-cont">
                    <img src="img/icon/cat-casino.png">
                </div>
                <p>라이브카지노</p>
            </a>
            <a href="javascript:void(0);" class="ch-btn slot open-slot">
                <div class="icon-cont">
                    <img src="img/icon/cat-slot.png">
                </div>
                <p>술롯게임</p>
            </a>
            <a href="javascript:void(0);" class="ch-btn sports open-sports">
                <div class="icon-cont">
                    <img src="img/icon/cat-sports.png">
                </div>
                <p>스포츠</p>
            </a>
            <a href="javascript:void(0);" class="ch-btn minigame open-minigame">
                <div class="icon-cont">
                    <img src="img/icon/cat-minigame.png">
                </div>
                <p>미니게임</p>
            </a>
        </div>
        <div class="category-games">
            <div class="tab slot-tab active">
                <div class="center">
                    <a href="javascript:void(0);" class="game-btn">
                        <div class="main-cont">
                            <img class="main-img" src="img/slot/playson.jpg">
                            <button class="play-btn"><i class="fa fa-play"></i></button>
                        </div>
                        <div class="game-bg">
                            <img src="img/bg/game-bg.png">
                        </div>
                        <div class="foot">
                            <div class="icon-cont">
                                <img src="img/slot-icon/playson.png">
                            </div>
                            <p class="name">플레이슨</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="tab casino-tab">
                <div class="center">
                    <a href="javascript:void(0);" class="game-btn">
                        <div class="main-cont">
                            <img class="main-img" src="img/casino/evolution.jpg">
                            <button class="play-btn"><i class="fa fa-play"></i></button>
                        </div>
                        <div class="game-bg">
                            <img src="img/bg/game-bg.png">
                        </div>
                        <div class="foot">
                            <div class="icon-cont">
                                <img src="img/casino-icon/evolution.png">
                            </div>
                            <p class="name">에볼루션</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="tab sports-tab">
                <div class="center">
                    <a href="javascript:void(0);" class="game-btn">
                        <div class="main-cont">
                            <img class="main-img" src="img/sports/bbin.jpg">
                            <button class="play-btn"><i class="fa fa-play"></i></button>
                        </div>
                        <div class="game-bg">
                            <img src="img/bg/game-bg.png">
                        </div>
                        <div class="foot">
                            <div class="icon-cont">
                                <img src="img/slot-icon/bbin.png">
                            </div>
                            <p class="name">비비아이엔</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="tab minigame-tab">
                <div class="center">
                    <a href="javascript:void(0);" class="game-btn">
                        <div class="main-cont">
                            <img class="main-img" src="img/sports/bbin.jpg">
                            <button class="play-btn"><i class="fa fa-play"></i></button>
                        </div>
                        <div class="game-bg">
                             <img src="img/bg/game-bg.png">
                        </div>
                        <div class="foot">
                            <div class="icon-cont">
                                <img src="img/slot-icon/bbin.png">
                            </div>
                            <p class="name">비비아이엔</p>
                        </div>
                    </a>
                 <!--    <a href="javascript:void(0);" class="game-btn"">
                        <div class="main-cont">
                            <img class="main-img" src="img/minigame/cq9.jpg">
                            <button class="play-btn"><i class="fa fa-play"></i></button>
                        </div>
                        <div class="game-bg">
                            <img src="img/bg/game-bg2.png">
                        </div>
                        <div class="foot">
                            <div class="icon-cont">
                                <img src="img/slot-icon/cq9.png">
                            </div>
                            <p class="name">피싱게임</p>
                        </div>
                    </a>
                    <a href="javascript:void(0);" class="game-btn"">
                        <div class="main-cont">
                            <img class="main-img" src="img/minigame/betsoft.jpg">
                            <button class="play-btn"><i class="fa fa-play"></i></button>
                        </div>
                        <div class="game-bg">
                            <img src="img/bg/game-bg2.png">
                        </div>
                        <div class="foot">
                            <div class="icon-cont">
                                <img src="img/slot-icon/betsoft.png">
                            </div>
                            <p class="name">맥스퀘스트</p>
                        </div>
                    </a> -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="loginModal subpg-modal modal fade" role="dialog">
    <div class="bs-modal modal-dialog">
        <div class="mdl-head">
            <img class="logo" src="img/logo/body.png">
            <p class="title">로그인</p>
            <button class="mdl-close-btn" data-dismiss="modal">
                <span class="icon-img"></span>
                <p>화면닫기</p>
            </button>
        </div>
        <div class="mdl-menu">
            <ul class="bs-ul btn-grp">
                <li>
                    <button type="button" class="active"><i class="fa fa-key"></i> 로그인</button>
                </li>
                <li>
                    <button type="button" class="join-link"><i class="fa fa-user-plus"></i> 회원가입</button>
                </li>
            </ul>
        </div>
        <div class="modal-body">
            <form id="loginForm" action="https://www.ck-301.com/login" method="post" data-parsley-validate="true" novalidate="">
                <input type="hidden" name="_token" value="xdDVDsUgZbNsYwuoyM4x2P7gTXBKT1xZlLIshzAd">
                <div class="form-container">
                    <div class="form-group">
                        <div class="labels">
                            <p>아이디</p>
                        </div>
                        <div class="infos">
                            <input type="text" placeholder="아이디" name="mb_login_id" data-parsley-required="required" data-parsley-required-message="필수입력 항목입니다." autocomplete="off" data-parsley-id="0303"><ul class="parsley-errors-list" id="parsley-id-0303"></ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="labels">
                            <p>비밀번호</p>
                        </div>
                        <div class="infos">
                            <input type="password" placeholder="비밀번호" name="password" data-parsley-required="required" data-parsley-required-message="필수입력 항목입니다." autocomplete="off" data-parsley-id="6814"><ul class="parsley-errors-list" id="parsley-id-6814"></ul>
                        </div>
                    </div>
                </div>
                <div class="modal-btn-foot form">
                    <div class="btn-cont">
                        <button type="submit" class="purple login-btn"><i class="fa fa-lock-open"></i> 로그인</button>
                        <button type="reset" class="join-link"><i class="fa fa-file-signature"></i> 회원가입</button>
                    </div>
                </div>
            </form>

        </div>
        <div class="modal-footer"></div>
    </div>
</div><div class="joinModal subpg-modal modal fade" role="dialog">
    <div class="bs-modal modal-dialog">
        <div class="mdl-head">
            <img class="logo" src="img/logo/body.png">
            <p class="title">회원가입</p>
            <button class="mdl-close-btn" data-dismiss="modal">
                <span class="icon-img"></span>
                <p>화면닫기</p>
            </button>
        </div>
        <div class="mdl-menu">
            <ul class="bs-ul btn-grp">
                <li>
                    <button type="button" class="login-link"><i class="fa fa-key"></i> 로그인</button>
                </li>
                <li>
                    <button type="button" class="active"><i class="fa fa-user-plus"></i> 회원가입</button>
                </li>
            </ul>
        </div>
        <div class="modal-body">
            <form id="signUpForm" action="/signUp" method="post" data-parsley-validate="" novalidate="">
                <input id="certified_number" name="certified_number" type="hidden" value="">
                <input type="hidden" name="_token" value="xdDVDsUgZbNsYwuoyM4x2P7gTXBKT1xZlLIshzAd">
                <div class="form-container">
                    <div class="form-group">
                        <div class="labels">
                            <p>아이디</p>
                        </div>
                        <div class="infos">
                            <input class="form-control " id="mb_login_id_signup" data-parsley-trigger="change" data-parsley-pattern="/^[a-z]+[a-z0-9]{5,12}$/g" data-parsley-pattern-message="유효하지 않은 값입니다." maxlength="12" data-parsley-required="true" data-parsley-required-message="필수입력 항목입니다." data-parsley-minlength="5" data-parsley-minlength-message="5 자 이상 입력하세요." data-parsley-maxlength="12" data-parsley-maxlength-message="12 자 이하로 입력하세요." data-parsley-remote="/duplicateLoginId" data-parsley-remote-message="이미 사용 중입니다." data-parsley-remote-validator="reverse" placeholder="6자이상 영문, 숫자만 가능" autocomplete="off" name="mb_login_id" type="text" value="" data-parsley-id="3319"><ul class="parsley-errors-list" id="parsley-id-3319"></ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="labels">
                            <p>이름</p>
                        </div>
                        <div class="infos">
                            <input class="form-control " id="mb_player_name" data-parsley-trigger="input change" data-parsley-pattern="/^[ㄱ-ㅎ|가-힣|a-z|A-Z|]+$/" data-parsley-pattern-message="유효하지 않은 값입니다." data-parsley-required="true" data-parsley-required-message="필수입력 항목입니다." data-parsley-minlength="2" data-parsley-minlength-message="2 자 이상 입력하세요." data-parsley-maxlength="6" data-parsley-maxlength-message="6 자 이하로 입력하세요." placeholder="2자이상 한글,영문만 가능(예금주와 동일해야 함)" autocomplete="off" name="mb_name1" type="text" value="" data-parsley-id="3047"><ul class="parsley-errors-list" id="parsley-id-3047"></ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="labels">
                            <p>닉네임</p>
                        </div>
                        <div class="infos">
                            <input class="form-control " data-parsley-trigger="input change" data-parsley-pattern="/^[ㄱ-ㅎ|가-힣|a-z|A-Z|0-9|\*]+$/" data-parsley-pattern-message="유효하지 않은 값입니다." data-parsley-required="true" data-parsley-required-message="필수입력 항목입니다." data-parsley-minlength="2" data-parsley-minlength-message="2 자 이상 입력하세요." data-parsley-maxlength="6" data-parsley-maxlength-message="6 자 이하로 입력하세요." placeholder="2자이상 한글,영문 및 숫자 가능" autocomplete="off" name="mb_nick" type="text" value="" data-parsley-id="3389"><ul class="parsley-errors-list" id="parsley-id-3389"></ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="labels">
                            <p>비밀번호</p>
                        </div>
                        <div class="infos">
                            <input class="form-control " id="password2" maxlength="12" data-parsley-trigger="change" data-parsley-required="true" data-parsley-required-message="필수입력 항목입니다." data-parsley-maxlength="12" data-parsley-maxlength-message="12 자 이하로 입력하세요." data-parsley-minlength="6" data-parsley-minlength-message="6 자 이상 입력하세요." autocomplete="off" name="password" type="password" value="" data-parsley-id="4602"><ul class="parsley-errors-list" id="parsley-id-4602"></ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="labels">
                            <p>비밀번호확인</p>
                        </div>
                        <div class="infos">
                            <input class="form-control " data-parsley-equalto="#password2" data-parsley-equalto-message="비밀번호가 일치하지 않습니다." maxlength="12" data-parsley-trigger="change" data-parsley-required="true" data-parsley-required-message="필수입력 항목입니다." data-parsley-minlength="6" data-parsley-minlength-message="6 자 이상 입력하세요." autocomplete="off" name="password_confirm" type="password" value="" data-parsley-id="3495"><ul class="parsley-errors-list" id="parsley-id-3495"></ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="labels">
                            <p>전화번호</p>
                        </div>
                        <div class="infos">
                            <input class="form-control" id="mb_tel" data-parsley-type="digits" data-parsley-type-message="이 값은 숫자만 입력 가능합니다." data-parsley-pattern="/^[0-9]*$/" data-parsley-pattern-message="유효하지 않은 값입니다." maxlength="15" data-parsley-trigger="change input focusin focusout" data-parsley-required="true" data-parsley-required-message="필수입력 항목입니다." data-parsley-maxlength="15" data-parsley-maxlength-message="15 자 이하로 입력하세요." data-parsley-minlength="9" data-parsley-minlength-message="9 자 이상 입력하세요." placeholder="'-'없이 숫자 만 입력" data-parsley-remote="/duplicateLoginTel" data-parsley-remote-message="이미 등록된 전화번호 입니다." data-parsley-remote-validator="reverse" autocomplete="off" name="mb_tel" type="text" value="" data-parsley-id="0905"><ul class="parsley-errors-list" id="parsley-id-0905"></ul>
                            <!--<button type="button">인증요청</button>-->
                        </div>
                    </div>
                    <!--<div class="form-group w-btn">
                        <div class="labels">
                            <p>인증번호</p>
                        </div>
                        <div class="infos">
                            <input class="form-control" data-parsley-type="digits" data-parsley-type-message="이 값은 숫자만 입력 가능합니다." data-parsley-pattern="/^[0-9]*$/" data-parsley-pattern-message="유효하지 않은 값입니다." data-parsley-trigger="change input focusin" data-parsley-required="true" data-parsley-equalto="#certified_number" data-parsley-equalto-message="버튼을 눌러 인증번호를 확인하세요." data-parsley-required-message="필수입력 항목입니다." autocomplete="off" placeholder="문자 미수신 시 관리자문의" name="certify_number" type="text" value="">
                            <button type="button">인증확인</button>
                        </div>
                    </div>-->
                    <div class="form-group">
                        <div class="labels">
                            <p>은행명</p>
                        </div>
                        <div class="infos">
                            <label>
                                <select id="mb_bank_name" class="form-control " data-parsley-required="true" data-parsley-required-message="필수입력 항목입니다." name="mb_bank_name" data-parsley-id="3421"><option value="" selected="selected">선택하세요.</option><option value="KB국민은행">KB국민은행</option><option value="신한은행">신한은행</option><option value="우리은행">우리은행</option><option value="KEB하나은행">KEB하나은행</option><option value="케이뱅크">케이뱅크</option><option value="카카오뱅크">카카오뱅크</option><option value="KDB산업은행">KDB산업은행</option><option value="IBK기업은행">IBK기업은행</option><option value="NH농협은행">NH농협은행</option><option value="NH증권">NH증권</option><option value="수협은행">수협은행</option><option value="대구은행">대구은행</option><option value="BNK부산은행">BNK부산은행</option><option value="BNK경남은행">BNK경남은행</option><option value="광주은행">광주은행</option><option value="전북은행">전북은행</option><option value="제주은행">제주은행</option><option value="농·축협">농·축협</option><option value="농협">농협</option><option value="축협">축협</option><option value="새마을금고">새마을금고</option><option value="우체국">우체국</option><option value="신용협동조합">신용협동조합</option><option value="산림조합">산림조합</option><option value="HSBC은행">HSBC은행</option><option value="한국씨티은행">한국씨티은행</option><option value="한국스탠다드차타드은행">한국스탠다드차타드은행</option><option value="신한금융투자">신한금융투자</option><option value="하나금융투자">하나금융투자</option><option value="DB금융투자">DB금융투자</option><option value="유안타증권">유안타증권</option><option value="유진투자증권">유진투자증권</option><option value="한국투자증권">한국투자증권</option><option value="상호저축은행">상호저축은행</option><option value="상호저축은행중앙회">상호저축은행중앙회</option><option value="미래애셋">미래에셋</option><option value="삼성증권">삼성증권</option><option value="SC제일은행">SC제일은행</option></select><ul class="parsley-errors-list" id="parsley-id-3421"></ul>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="labels">
                            <p>계좌번호</p>
                        </div>
                        <div class="infos">
                            <input id="mb_bank_account" class="form-control " data-parsley-type="digits" data-parsley-type-message="이 값은 숫자만 입력 가능합니다." data-parsley-pattern="/^[0-9]*$/" data-parsley-pattern-message="유효하지 않은 값입니다." maxlength="30" data-parsley-trigger="change" data-parsley-maxlength="30" data-parsley-maxlength-message="30 자 이하로 입력하세요." data-parsley-required="true" data-parsley-required-message="필수입력 항목입니다." placeholder="'-'없이 숫자 만 입력" data-parsley-remote="/duplicateLoginBanking" data-parsley-remote-message="message.usedBankingNumber" data-parsley-remote-validator="reverse" autocomplete="off" name="mb_bank_account" type="text" value="" data-parsley-id="5531"><ul class="parsley-errors-list" id="parsley-id-5531"></ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="labels">
                            <p>예금주</p>
                        </div>
                        <div class="infos">
                            <input id="mb_account_name" class="form-control" data-parsley-trigger="change" data-parsley-pattern="/^[ㄱ-ㅎ|가-힣|a-z|A-Z|]+$/" data-parsley-pattern-message="유효하지 않은 값입니다." maxlength="12" data-parsley-minlength="2" data-parsley-minlength-message="3 자 이상 입력하세요." data-parsley-maxlength="12" data-parsley-maxlength-message="12 자 이하로 입력하세요." data-parsley-required="true" data-parsley-required-message="필수입력 항목입니다." placeholder="2자이상 한글, 영문만 가능(예금주는 수정불가/고객센터문의)" data-parsley-remote-message="message.usedAccountName" autocomplete="off" name="mb_account_name" type="text" value="" data-parsley-id="1057"><ul class="parsley-errors-list" id="parsley-id-1057"></ul>
                        </div>
                    </div>
                </div>
                <div class="modal-btn-foot form">
                    <div class="btn-cont">
                        <button type="submit" class="purple join">
                            <i class="fa fa-sign-in-alt"></i> 회원가입
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer"></div>
    </div>
</div>
<div class="customerModal subpg-modal modal fade" role="dialog">
    <div class="bs-modal modal-dialog customer">
        <div class="mdl-head">
            <img class="logo" src="img/logo/body.png">
            <p class="title">고객센터</p>
            <button class="mdl-close-btn" data-dismiss="modal">
                <span class="icon-img"></span>
                <p>화면닫기</p>
            </button>
        </div>
        <div class="mdl-menu">
            <i class="fa fa-headset"></i>
            <span class="cs-title">언제든지 가입하시고 문의해주시면 빠르게 답변 드리겠습니다.</span>
        </div>
        <div class="modal-body">
            <div class="apps-cont">
                <div class="cont bio">
                    <img src="img/icon/cs-tele.png">
                    <div class="bottom-dots"></div>
                </div>
                <div class="cont bio">
                    <img src="img/icon/cs-kakao.png">
                    <div class="bottom-dots"></div>
                </div>
                <div class="cont bio">
                    <img src="img/icon/cs-skype.png">
                    <div class="bottom-dots"></div>
                </div>
                <div class="cont bio">
                    <img src="img/icon/cs-wechat.png">
                    <div class="bottom-dots"></div>
                </div>
            </div>
            <div class="cs-text-cont">
                <div class="cs-row">
                    <div class="labels">
                        <span>유저 문의 :</span>
                    </div>
                    <div class="infos">
                        <span></span>
                    </div>
                </div>
                <div class="cs-row">
                    <div class="labels">
                        <span>파트너 문의 :</span>
                    </div>
                    <div class="infos">
                        <span>하단채팅창이용바랍니다.</span>
                    </div>
                </div>
                <div class="cs-row">
                    <div class="labels">
                        <span>유저 문의 :</span>
                    </div>
                    <div class="infos">
                        <span></span>
                    </div>
                </div>
                <div class="cs-row">
                    <div class="labels">
                        <span>파트너 문의 :</span>
                    </div>
                    <div class="infos">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <p>* 빠른 상담을 원하시면 우측하단 <span class="yellow">실시간 채팅서비스</span>를 이용하세요</p>
        </div>
    </div>
</div>

<div class="noticeModal subpg-modal modal fade" role="dialog" style="display: none;">
    <div class="bs-modal modal-dialog">
        <div class="mdl-head">
            <img class="logo" src="img/logo/body.png">
            <p class="title">공지사항</p>
            <button class="mdl-close-btn" data-dismiss="modal">
                <span class="icon-img"></span>
                <p>화면닫기</p>
            </button>
        </div>

        <div class="notice-section"><div class="modal-body ">
                <table class="bs-table notice-table">
                    <colgroup>
                        <col width="10%">
                        <col width="50%">
                        <col width="40%">
                    </colgroup>
                    <thead>
                    <tr>
                        <th>번호</th>
                        <th>제목</th>
                        <th>작성일</th>
                    </tr>
                    </thead>
                    <tbody>
                                    <tr>
                        <td class="text-center count">1</td>
                        <td class="text-left title cursor-pointer" onclick="viewNoticeDetail('812', '1')">
                            <a href="javascript:void(0);">◈ 원더우먼 운영진 입니다. ◈</a>
                                        </td>
                        <td class="text-center date">2020-04-06</td>
                    </tr>
                            <tr>
                        <td class="text-center count">2</td>
                        <td class="text-left title cursor-pointer" onclick="viewNoticeDetail('810', '2')">
                            <a href="javascript:void(0);">◈ 빠른 브라우저에 대한 안내 ◈</a>
                                        </td>
                        <td class="text-center date">2020-04-06</td>
                    </tr>
                            <tr>
                        <td class="text-center count">3</td>
                        <td class="text-left title cursor-pointer" onclick="viewNoticeDetail('809', '3')">
                            <a href="javascript:void(0);">★ 마틴베팅 관련안내 ★</a>
                                        </td>
                        <td class="text-center date">2020-04-05</td>
                    </tr>
                            <tr>
                        <td class="text-center count">4</td>
                        <td class="text-left title cursor-pointer" onclick="viewNoticeDetail('808', '4')">
                            <a href="javascript:void(0);">◈ 시스템 악용 배팅 및 부정 배팅에 대한 안내 ◈</a>
                                        </td>
                        <td class="text-center date">2020-04-05</td>
                    </tr>
                            <tr>
                        <td class="text-center count">5</td>
                        <td class="text-left title cursor-pointer" onclick="viewNoticeDetail('807', '5')">
                            <a href="javascript:void(0);">★ 배팅규정 및 사이트 이용 설명★</a>
                                        </td>
                        <td class="text-center date">2020-04-05</td>
                    </tr>
                            <tr>
                        <td class="text-center count">6</td>
                        <td class="text-left title cursor-pointer" onclick="viewNoticeDetail('773', '6')">
                            <a href="javascript:void(0);">◈ 입출금 규정에 대한 관리자안내 ◈</a>
                                        </td>
                        <td class="text-center date">2020-03-23</td>
                    </tr>
                            <tr>
                        <td class="text-center count">7</td>
                        <td class="text-left title cursor-pointer" onclick="viewNoticeDetail('772', '7')">
                            <a href="javascript:void(0);">  ★ 입금계좌안내 및 입금규정사항★</a>
                                        </td>
                        <td class="text-center date">2020-03-23</td>
                    </tr>
                                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <ul class="pagination">
                            <li><a href="javascript:void(0);" class="active">1</a></li>            </ul>
            </div>
        </div>
    </div>
</div>


<div class="noticeviewModal subpg-modal modal fade" role="dialog" style="display: none;">
    <div class="bs-modal modal-dialog">
        <div class="mdl-head">
            <img class="logo" src="img/logo/body.png">
            <p class="title">공지사항</p>
            <button class="mdl-close-btn" data-dismiss="modal">
                <span class="icon-img"></span>
                <p>화면닫기</p>
            </button>
        </div>
        <div class="modal-body notice-view-section">

                <table class="bs-table">
                    <colgroup>
                        <col width="10%">
                        <col width="50%">
                        <col width="40%">
                    </colgroup>
                    <thead>
                    <tr>
                        <th>번호</th>
                        <th>제목</th>
                        <th>작성일</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td class="count text-center">1</td>
                        <td class="text-left title">
                            <a href="javascript:void(0);">◈ 원더우먼 운영진 입니다. ◈</a>
                        </td>
                        <td class="text-center date">2020-04-06</td>
                    </tr>
                    </tbody>
                </table>
            <div class="board-view">
                <div class="inner-cont">
                    <p>
                    </p><p>현재 양방향 배터 및 포인트 악용 유저가</p><p>빈번히 적발이 되고 있습니다.</p><p><br></p><p>▶ 신규 콤프 및 보너스 악용 적발 시</p><p>모든 이벤트 참여 불가, 입금액 / 지급된 포인트 몰수</p><p><br></p><p>▶ 양빵 배터 확인 시 전액 몰수</p><p><br></p><p>▶ 롤링 콤프 / 보너스 악용 시 앞으로 진행될</p><p>모든 이벤트 참여 불가합니다</p><p><br></p><p>▶ 양빵으로 의심되는 유저나, 포인트 악용으로</p><p>의심되는 유저는 모든 보너스 제외 대상.</p><p><br></p><p>*타사와 같이 협력하고 있으며,</p><p>불이익 받는일 없도록 유의하시기 바랍니다.</p><p><br></p><p>감사합니다.&nbsp;&nbsp;</p><div><br></div>
                    <p></p>
                </div>
            </div>

            <div class="modal-btn-foot three">
                <div class="btn-cont">
                    <button type="button" class="pink back-notice-list">
                        <i class="fa fa-arrow-alt-circle-left"></i>목록가기
                    </button>
                            <button type="button" onclick="viewNoticeDetail('810','2')">
                        <i class="fa fa-caret-square-left"></i>이전글
                    </button>
                                    <button type="button" onclick="alertify.alert('알림', '다음글이 없습니다.')">
                        <i class="fa fa-caret-square-right"></i>다음글보기
                    </button>
                </div>
            </div>

            <script>
                $('.back-notice-list').click(function(){
                    $('.noticeModal').modal('show');
                    $('.noticeviewModal').modal('hide');
                    $('body').addClass('mld-active');
                });
            </script>
        </div>
        <div class="modal-footer"></div>
    </div>
</div>


<div class="gameviewModal subpg-modal modal fade" role="dialog" style="display: none;">
    <div class="bs-modal modal-dialog">
        <div class="mdl-head">
            <img class="logo" src="img/logo/body.png">
            <p class="title">공지사항</p>
            <button class="mdl-close-btn" data-dismiss="modal">
                <span class="icon-img"></span>
                <p>화면닫기</p>
            </button>
        </div>
        <div id="gameWrapper" class="modal-body notice-view-section" style="background: transparent; box-shadow: none;">
            <iframe id="gameFRAME" src="https://hiikgame.com/game/hiiktalk_kick/" style="width: 840px;height: 1054px;border: none;     transform-origin: 0px 0px 0px;" ></iframe>
        </div>
        <div class="modal-footer"></div>
    </div>
</div>
</body></html>
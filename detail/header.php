<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:description" content="공식 아델휴 타운하우스 분양 정보 사이트">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="공식 아델휴 타운하우스 분양 정보 사이트">
    <meta name="keywords" content="아델휴 타운하우스">
    <meta name="author" content="adelhyu.info">
    <link rel="shortcut icon" href="http://www.adelhyu.info/favicon.ico">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="http://www.adelhyu.info/favicon.ico">

    <title>ADEL休 상세정보</title>


    <link href="./asset/bootstrap.min.css" rel="stylesheet">
    <link href="./asset/font-awesome.min.css" rel="stylesheet">
    <link href="./asset/main.css" rel="stylesheet">

    <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="asset/bootstrap.3.3.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var trigger = $('.hamburger'),
                overlay = $('.overlay'),
                isClosed = false;

            trigger.click(function () {
                hamburger_cross();
            });

            function hamburger_cross() {

                if (isClosed == true) {
                    overlay.hide();
                    trigger.removeClass('is-open');
                    trigger.addClass('is-closed');
                    isClosed = false;
                } else {
                    overlay.show();
                    trigger.removeClass('is-closed');
                    trigger.addClass('is-open');
                    isClosed = true;
                }
            }

            $('[data-toggle="offcanvas"]').click(function () {
                $('#wrapper').toggleClass('toggled');
            });

            <?php if(isset($_GET['first']) && $_GET['first'] === 'y'){ ?>
            $('.hamburger').trigger('click');
            <?php } ?>
        });

    </script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-83951537-1', 'auto');
        ga('send', 'pageview');

    </script>


</head>
<body>

<div id="wrapper">
    <div class="overlay"></div>

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav">
            <li class="sidebar-brand line">
                <a class="navbar-brand" href="http://adelhyu.info"><img src="../img/logo/logo.png"
                                                                        class="img-responsive" alt="logo"></a>
            </li>

            <li class="line">
                <a href="/detail/architectureplan.php">건축 설계 / 구성</a>
            </li>

            <li class="dropdown line">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">실내구성 / 단위평면 <span class="caret"></span></a>
                <ul class="dropdown-menu" role="">
                    <li><a href="/detail/up-a.php">A Type</a></li>
                    <li><a href="/detail/up-b.php">B Type</a></li>
                    <li><a href="/detail/up-c.php">C Type</a></li>
                    <li><a href="/detail/up-d.php">D Type</a></li>
                    <li><a href="/detail/up-e.php">E Type</a></li>
                    <li><a href="/detail/up-f.php">F Type</a></li>
                    <li><a href="/detail/up-g.php">G Type</a></li>
                    <li><a href="/detail/up-h.php">H Type</a></li>
                </ul>
            </li>
            <!--<li>
                <a href="/detail/unitplan.php">UNIT PLAN</a>
            </li>-->
           <!-- <li class="line">
                <a href="/detail/spaceplan.php">실내구성</a>
            </li>-->
            <li class="line">
                <a href="/detail/price.php">분양가</a>
            </li>
            <!--<li class="line">
                <a href="/detail/photos.php">사진자료</a>
            </li>-->
           <li class="line">
                <a href="/detail/magazine.php">매거진</a>
            </li>


            <!--<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Works <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Dropdown heading</li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                </ul>
            </li>-->
        </ul>
    </nav>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
        </button>
<?php include './header.php'; ?>

<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="asset/up.css" rel="stylesheet" type="text/css">

<div class="container">
    <div class="center" style="text-align: center;">
        <h1 id="detail-h1">실내구성 / 단위평면</h1>
        <!--<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>-->
    </div>

    <div class="filter" style="margin-top:10px;">
        <!--<a class="d-btn" href="#all">전체보기</a>-->
        <a class="d-btn first-filter" href="#1">4단지 H타입 1세대</a>
    </div>
    <div class="gallery">
        <div class="large-12 columns">
            <a href="#" class="1"><img src="img/unitplan/4-h-1.jpg"></a>
        </div>
    </div>
    <script>

        $('.filter a').click(function (e) {
            e.preventDefault();
            var a = $(this).attr('href');
            a = a.substr(1);
            $('.gallery a').each(function () {
                if (!$(this).hasClass(a) && a != 'all')
                    $(this).addClass('hide');
                else
                    $(this).removeClass('hide');
            });

        });

        $('.gallery a').click(function (e) {
            e.preventDefault();
            var $i = $(this);
            $('.gallery a').not($i).toggleClass('pophide');
            $i.toggleClass('pop');
        });

        $('.first-filter').trigger('click');
    </script>
</div>

<?php include './footer.php'; ?>

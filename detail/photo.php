<?php include './header.php'; ?>

<link type="text/css" rel="stylesheet" href="./asset/pgwslideshow.css">

<div class="container">
    <div class="center">
        <h2>PHOTO</h2>
        <!--<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>-->
    </div>

    <div class="row">
        <ul class="pgwSlideshow">
            <li><img src="./img/magazine/mgz1.jpg" alt="San Francisco, USA" data-description="Golden Gate Bridge"></li>
            <li><img src="./img/magazine/mgz1.jpg" alt="Rio de Janeiro, Brazil"></li>
            <li><img src="./img/magazine/mgz1.jpg" alt="" data-large-src="london.jpg"></li>
            <li><img src="./img/magazine/mgz1.jpg" alt=""></li>
            <li><img src="./img/magazine/mgz1.jpg" alt=""></li>
            <li><img src="./img/magazine/mgz1.jpg" alt=""></li>
            <li><img src="./img/magazine/mgz1.jpg" alt=""></li>
            <li><img src="./img/magazine/mgz1.jpg" alt=""></li>
            <li><img src="./img/magazine/mgz1.jpg" alt=""></li>
            <li><img src="./img/magazine/mgz1.jpg" alt=""></li>
            <li><img src="./img/magazine/mgz1.jpg" alt=""></li>
            <li>
                <a href="#" target="_blank">
                    <img src="./img/magazine/mgz1.jpg" alt="Monaco">
                </a>
            </li>
        </ul>
    </div>
</div>


</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<script src="./asset/jquery.js"></script>
<script src="./asset/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf-8" src="./asset/pgwslideshow.js"></script>
<script>
    $(document).ready(function () {
        $('.pgwSlideshow').pgwSlideshow();
    });
</script>
</body>
</html>


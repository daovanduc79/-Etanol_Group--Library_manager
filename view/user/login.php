<style>
    .carousel-item h1 {
        color: #fff;
        font-size: 20px;
        margin: 75px auto;
        text-align: center;
    }

    .login-block {

        width: 50%;
        margin: 0 auto;

    }

    .signup__overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.76);
    / / background-color: rgba(0, 0, 0, 0.33);
    }

    .login_sec {

        padding: 0px;
        background-color: #f8fafb;

    }

    .login_sec img {

        margin: 24px auto;

    }

    .banner-sec {
    / / background: url(https://static.pexels.com/photos/33972/pexels-photo.jpg) no-repeat left bottom;
    / / background-size: cover;
    / / min-height: 500 px;
    / / border-radius: 0 10 px 10 px 0;
    / / padding: 0;
    }


    .carousel-fade .carousel-item {
        opacity: 0;
        transition-duration: .6s;
        transition-property: opacity;
    }

    .carousel-indicators {

        bottom: -41px;
    }

    .carousel-indicators .active {
        background-color: #fff;
    }

    .carousel-fade .carousel-item.active,
    .carousel-fade .carousel-item-next.carousel-item-left,
    .carousel-fade .carousel-item-prev.carousel-item-right {
        opacity: 1;
    }

    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-right {
        opacity: 0;
    }

    .carousel-fade .carousel-item-next,
    .carousel-fade .carousel-item-prev,
    .carousel-fade .carousel-item.active,
    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-prev {
        transform: translateX(0);
        transform: translate3d(0, 0, 0);
    }

    .container {

        -webkit-box-shadow: 0 0.1875rem 1.5rem rgba(0, 0, 0, 0.2);
        box-shadow: 0 0.1875rem 1.5rem rgba(0, 0, 0, 0.2);
        border-radius: 0.375rem;
        margin-bottom: 5%;

    }

    .carousel-inner {
        border-radius: 0 10px 10px 0;
    }

    .carousel-caption {
        text-align: left;
        left: 5%;
    }

    .login-sec {
        padding: 50px 30px;
        position: relative;
    }

    .login-sec .copy-text {
        position: absolute;
        width: 80%;
        bottom: 20px;
        font-size: 13px;
        text-align: center;
    }

    .login-sec .copy-text i {
        color: #FEB58A;
    }

    .login-sec .copy-text a {
        color: #E36262;
    }

    .login-sec h2 {
        margin-bottom: 30px;
        font-weight: 800;
        font-size: 30px;
        color: #DE6262;
    }

    .login-sec h2:after {
        content: " ";
        width: 100px;
        height: 5px;
        background: #FEB58A;
        display: block;
        margin-top: 8px;
        border-radius: 3px;
        margin-left: auto;
        margin-right: auto
    }


    .banner-text {
        width: 70%;
        position: absolute;
        bottom: 40px;
        padding-left: 20px;
    }

    .banner-text h2 {
        color: #fff;
        font-weight: 600;
    }

    .banner-text h2:after {
        content: " ";
        width: 100px;
        height: 5px;
        background: #FFF;
        display: block;
        margin-top: 20px;
        border-radius: 3px;
    }

    .banner-text p {
        color: #fff;
    }


    /* login start */

    .container-login100-form-btn {
        margin: 0 auto;
        display: block;
        text-align: center;
        padding-top: 1%;
        padding-bottom: 2%;
    }

    .login100-form {
        width: 100%;
    }


    .validate-input {
        position: relative;
    }

    .wrap-input100 {
        width: 100%;
        position: relative;
        border-bottom: 2px solid #d9d9d9;
        margin-bottom: 5%;
    }

    .label-input100 {

        font-size: 14px;
        color: #333333;
        line-height: 1.5;
        padding-left: 7px;
    }

    textarea:focus,
    input:focus {
        border-color: transparent !important;
    }

    .input100:focus + .focus-input100::before {
        width: 100%;
    }


    .input100 {
        font-size: 12px;
        color: #333333;
        line-height: 1.2;
        display: block;
        width: 100%;
        height: 30px;
        background: transparent;
        padding: 0 7px 0 43px;
    }

    .focus-input100 {
        position: absolute;
        display: block;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        pointer-events: none;
    }

    .focus-input100::before {
        content: "";
        display: block;
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 2px;
        background: #7f7f7f;
        -webkit-transition: all 0.4s;
        -o-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;
    }

    .focus-input100::after {
        font-family: "FontAwesome";
        content: "\f007";
        color: #adadad;
        font-size: 22px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        height: calc(100% - 20px);
        bottom: 0;
        left: 0;
        padding-left: 13px;
        padding-top: 3px;
    }

    .focus-input100.password::after {
        font-family: "FontAwesome";
        content: "\f023";
        color: #adadad;
        font-size: 22px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        height: calc(100% - 20px);
        bottom: 0;
        left: 0;
        padding-left: 13px;
        padding-top: 3px;
    }

    input {
        outline: none;
        border: none;
    }


    .flex-c-m {
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        -ms-align-items: center;
        align-items: center;
    }

    .login100-social-item {
        font-size: 12px;
        color: #fff;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        margin: 5px;
    }

    .bg1 {
        background-color: #DE6262;
    }


    .bg3 {
        background-color: #ea4335;
    }


</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<!-- new login start -->
<section class="login-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4 banner-sec">
                <div class="signup__overlay"></div>
                <form class="login-form" method="post">
                    <div class="banner">
                        <div id="demo" class="carousel slide carousel-fade" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                <li data-target="#demo" data-slide-to="1"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="http://blog.cetusvn.net/data/upload/article/3142/IMG_1045.JPG"
                                         class="img-fluid">
                                    <h1>GROW with Technology</h1>
                                </div>
                                <div class="carousel-item">
                                    <img src="http://cdn.kinhtedothi.vn/524/2018/8/3/thu%20vien%20anh%20minh%20hoa.jpg"
                                         class="img-fluid">
                                    <h1>DISCOVER GROWTH</h1>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-md-8 login-sec">
                <h2 class="text-center">Login Now</h2>
                <form class="login100-form validate-form">
                    <div class="wrap-input100 validate-input">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="text" name="email" placeholder="Type your username">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="Type your password">
                        <span class="focus-input100 password"></span>
                    </div>
                    <?php
                    if (isset($_SESSION['errorLogin'])) {
                        echo $_SESSION['errorLogin'];
                        unset($_SESSION['errorLogin']);
                    }
                    ?>
                    <div class="text-right p-t-8 p-b-31">
                        <a href="#">
                            Forgot password?
                        </a>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <button class="btn btn-primary mr-2">
                                Login
                            </button>
                            <a class="btn btn-primary mr-2" href="index.php?pages=user&actions=registration">
                                New User
                            </a>
                        </div>
                    </div>

                    <div class="txt1 text-center p-t-54 p-b-20">
  <span>
  Or Sign Up Using
  </span>
                    </div>

                    <div class="flex-c-m">
                        <a href="#" class="login100-social-item bg1">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" class="login100-social-item bg3">
                            <i class="fa fa-google"></i>
                        </a>
                    </div>
                </form>

                <div class="copy-text">Created with
                    <i class="fa fa-heart"></i> by
                    <a href="#">Etanol.Group</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

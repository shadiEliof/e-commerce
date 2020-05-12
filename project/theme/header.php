<?php
$menu = main_model::fetch_heder_menu();
$information = main_model::fetch_informations();
$categories= main_model::fetch_categories();

?>


<div class="wrapper">

    <!-- Start header -->
    <header class="main-header js-fixed-header dt-sl">
        <!-- Start ads -->
        <a href="#" class="ads-header hidden-sm" target="_blank"
           style="background-image: url(/project/public/assets/assets/img/banner/large-ads.jpg)"></a>
        <!-- End ads -->
        <!-- Start topbar -->
        <div class="container main-container">
            <div class="topbar dt-sl">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="logo-area float-right">
                            <a href="#">
                                <img src="/project/public/assets/assets/img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 hidden-sm">
                        <div class="search-area dt-sl">
                            <form action="" class="search">
                                <input type="text"
                                       placeholder="نام کالا، برند و یا دسته مورد نظر خود را جستجو کنید…">
                                <button type="submit"><img src="/project/public/assets/assets/img/theme/search.png"
                                                           alt=""></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 topbar-left">
                        <ul class="nav float-left">

                            <?php
                            if (isset($_SESSION['is_login'])&&$_SESSION['is_login']==true){
                                partial("account-button", [
                                ]);
                            }else{
                                partial("login-button", [
                                ]);
                            }
                             ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End topbar -->

        <!-- Start bottom-header -->
        <div class="bottom-header dt-sl mb-sm-bottom-header">
            <div class="container main-container">
                <!-- Start Main-Menu -->
                <?php partial("main-menu", [
                    "menu" => $menu,
                    "categories" => $categories

                ]) ?>
                <!-- End Main-Menu -->
            </div>
        </div>
        <!-- End bottom-header -->
    </header>
    <!-- End header -->

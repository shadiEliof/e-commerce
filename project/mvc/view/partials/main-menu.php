<?php

?>

<nav class="main-menu dt-sl">
    <ul class="list float-right hidden-sm">
        <?php foreach ($categories as $item) { ?>
            <li class="list-item list-item-has-children mega-menu mega-menu-col-2">
                <a class="nav-link" href="#"><?= $item["category_title"];?></a>
                <ul class="sub-menu nav">
                <?php foreach ($item['subs'] as $sub) { ?>

                        <li class="list-item list-item-has-children">
                            <a class="nav-link" href="#"><?= $sub["category_title"];?></a>
                            <?php foreach ($sub['subs'] as $sub2) { ?>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#"><?= $sub2["category_title"];?></a>
                                    </li>
                                </ul>
                            <?php } ?>
                        </li>



                <?php } ?>
                </ul>
            <!--    <ul class="sub-menu nav">
                    <li class="list-item list-item-has-children">
                        <a class="nav-link" href="#">عنوان دسته</a>
                        <ul class="sub-menu nav">
                            <li class="list-item">
                                <a class="nav-link" href="#">زیر منو یک</a>
                            </li>
                            <li class="list-item">
                                <a class="nav-link" href="#">زیر منو دو</a>
                            </li>
                            <li class="list-item">
                                <a class="nav-link" href="#">زیر منو سه</a>
                            </li>
                            <li class="list-item">
                                <a class="nav-link" href="#">زیر منو چهار</a>
                            </li>
                            <li class="list-item">
                                <a class="nav-link" href="#">زیر منو پنج</a>
                            </li>
                            <li class="list-item">
                                <a class="nav-link" href="#">زیر منو شش</a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-item list-item-has-children">
                        <a class="nav-link" href="#">عنوان دسته</a>
                        <ul class="sub-menu nav">
                            <li class="list-item">
                                <a class="nav-link" href="#">زیر منو یک</a>
                            </li>
                            <li class="list-item">
                                <a class="nav-link" href="#">زیر منو دو</a>
                            </li>
                            <li class="list-item">
                                <a class="nav-link" href="#">زیر منو سه</a>
                            </li>
                            <li class="list-item">
                                <a class="nav-link" href="#">زیر منو چهار</a>
                            </li>
                            <li class="list-item">
                                <a class="nav-link" href="#">زیر منو پنج</a>
                            </li>
                            <li class="list-item">
                                <a class="nav-link" href="#">زیر منو شش</a>
                            </li>
                            <li class="list-item">
                                <a class="nav-link" href="#">زیر منو هفت</a>
                            </li>
                        </ul>
                    </li>
                </ul>-->


            </li>
        <?php } ?>

    </ul>
    <ul class="nav float-left">
        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true"
               aria-expanded="false">
                <span class="label-dropdown">سبد خرید</span>
                <i class="mdi mdi-cart-outline"></i>
                <span class="count">2</span>
            </a>
            <div class="dropdown-menu cart dropdown-menu-sm dropdown-menu-left">
                <div class="dropdown-header">سبد خرید</div>
                <div class="dropdown-list-icons">
                    <a href="#" class="dropdown-item">
                        <div class="dropdown-item-icon">
                            <img src="/project/public/assets/assets/img/cart/01.jpg" alt="">
                        </div>
                        <div class="mr-3">
                            تیشرت مردانه
                            <div class="pt-1">۵۹,۰۰۰ تومان</div>
                        </div>
                        <button class="remove"><i class="mdi mdi-close"></i></button>
                    </a>
                    <a href="#" class="dropdown-item">
                        <div class="dropdown-item-icon">
                            <img src="/project/public/assets/assets/img/cart/02.jpg" alt="">
                        </div>
                        <div class="mr-3">
                            کت مردانه
                            <div class="pt-1">۱۹۹,۰۰۰ تومان</div>
                        </div>
                        <button class="remove"><i class="mdi mdi-close"></i></button>
                    </a>
                </div>
                <hr>
                <div class="dropdown-footer text-center">
                    <div class="dt-sl mb-3">
                        <span class="float-right">جمع :</span>
                        <span class="float-left">۲۵۸,۰۰۰ تومان</span>
                    </div>
                    <a href="#" class="btn btn-success">مشاهده سبد خرید</a>
                    <a href="#" class="btn btn-primary">پرداخت</a>
                </div>
            </div>
        </li>
    </ul>
    <button class="btn-menu">
        <div class="align align__justify">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </button>
    <div class="side-menu">
        <div class="logo-nav-res dt-sl text-center">
            <a href="#">
                <img src="/project/public/assets/assets/img/logo.png" alt="">
            </a>
        </div>
        <div class="search-box-side-menu dt-sl text-center mt-2 mb-3">
            <form action="">
                <input type="text" name="s" placeholder="جستجو کنید...">
                <i class="mdi mdi-magnify"></i>
            </form>
        </div>
        <ul class="navbar-nav dt-sl">
            <li class="sub-menu">
                <a href="#">کالای دیجیتال</a>
                <ul>
                    <li class="sub-menu">
                        <a href="#">عنوان دسته</a>
                        <ul>
                            <li>
                                <a href="#">زیر منو یک</a>
                            </li>
                            <li>
                                <a href="#">زیر منو دو</a>
                            </li>
                            <li>
                                <a href="#">زیر منو سه</a>
                            </li>
                            <li>
                                <a href="#">زیر منو چهار</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="#">عنوان دسته</a>
                        <ul>
                            <li>
                                <a href="#">زیر منو یک</a>
                            </li>
                            <li>
                                <a href="#">زیر منو دو</a>
                            </li>
                            <li>
                                <a href="#">زیر منو سه</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">عنوان دسته</a>
                    </li>
                    <li>
                        <a href="#">عنوان دسته</a>
                    </li>
                    <li class="sub-menu">
                        <a href="#">عنوان دسته</a>
                        <ul>
                            <li>
                                <a href="#">زیر منو یک</a>
                            </li>
                            <li>
                                <a href="#">زیر منو دو</a>
                            </li>
                            <li>
                                <a href="#">زیر منو سه</a>
                            </li>
                            <li>
                                <a href="#">زیر منو چهار</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="#">بهداشت و سلامت</a>
                <ul>
                    <li class="sub-menu">
                        <a href="#">عنوان دسته</a>
                        <ul>
                            <li>
                                <a href="#">زیر منو یک</a>
                            </li>
                            <li>
                                <a href="#">زیر منو دو</a>
                            </li>
                            <li>
                                <a href="#">زیر منو سه</a>
                            </li>
                            <li>
                                <a href="#">زیر منو چهار</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="#">عنوان دسته</a>
                        <ul>
                            <li>
                                <a href="#">زیر منو یک</a>
                            </li>
                            <li>
                                <a href="#">زیر منو دو</a>
                            </li>
                            <li>
                                <a href="#">زیر منو سه</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">عنوان دسته</a>
                    </li>
                    <li>
                        <a href="#">عنوان دسته</a>
                    </li>
                    <li class="sub-menu">
                        <a href="#">عنوان دسته</a>
                        <ul>
                            <li>
                                <a href="#">زیر منو یک</a>
                            </li>
                            <li>
                                <a href="#">زیر منو دو</a>
                            </li>
                            <li>
                                <a href="#">زیر منو سه</a>
                            </li>
                            <li>
                                <a href="#">زیر منو چهار</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="#">ابزار و اداری</a>
                <ul>
                    <li class="sub-menu">
                        <a href="#">عنوان دسته</a>
                        <ul>
                            <li>
                                <a href="#">زیر منو یک</a>
                            </li>
                            <li>
                                <a href="#">زیر منو دو</a>
                            </li>
                            <li>
                                <a href="#">زیر منو سه</a>
                            </li>
                            <li>
                                <a href="#">زیر منو چهار</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="#">عنوان دسته</a>
                        <ul>
                            <li>
                                <a href="#">زیر منو یک</a>
                            </li>
                            <li>
                                <a href="#">زیر منو دو</a>
                            </li>
                            <li>
                                <a href="#">زیر منو سه</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">عنوان دسته</a>
                    </li>
                    <li>
                        <a href="#">عنوان دسته</a>
                    </li>
                    <li class="sub-menu">
                        <a href="#">عنوان دسته</a>
                        <ul>
                            <li>
                                <a href="#">زیر منو یک</a>
                            </li>
                            <li>
                                <a href="#">زیر منو دو</a>
                            </li>
                            <li>
                                <a href="#">زیر منو سه</a>
                            </li>
                            <li>
                                <a href="#">زیر منو چهار</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">مد و پوشاک</a>
            </li>
            <li>
                <a href="#">خانه و آشپزخانه</a>
            </li>
            <li>
                <a href="#">ورزش و سفر</a>
            </li>
        </ul>
    </div>
    <div class="overlay-side-menu">
    </div>
</nav>
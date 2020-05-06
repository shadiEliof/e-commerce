<?php

?>
<!-- Start main-content -->
<main class="main-content dt-sl mt-4 mb-3" dir="rtl">
    <div class="container main-container">
        <div class="row">

            <!-- Start Sidebar -->
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 sticky-sidebar">
                <div class="profile-sidebar dt-sl">
                    <div class="dt-sl dt-sn mb-3">
                        <div class="profile-sidebar-header dt-sl">
                            <div class="profile-avatar float-right">
                                <img src="/project/public/assets/assets/img/theme/avatar.png" alt="">
                            </div>
                            <div class="profile-header-content mr-3 mt-2 float-right">
                                <span class="d-block profile-username"><?= $user['first_name']." ".$user['last_name']; ?></span>
                                <span class="d-block profile-phone"><?= $user['mobile']; ?></span>
                            </div>
                            <div class="profile-point mt-3 mb-2 dt-sl">
                                <span class="float-right label-profile-point">امتیاز شما:</span>
                                <span class="float-left value-profile-point">120</span>
                            </div>
                            <div class="profile-link mt-2 dt-sl">
                                <div class="row">
                                    <div class="col-6 text-center">
                                        <a href="#">
                                            <i class="mdi mdi-lock-reset"></i>
                                            <span class="d-block">تغییر رمز</span>
                                        </a>
                                    </div>
                                    <div class="col-6 text-center">
                                        <a href="/user/logout">
                                            <i class="mdi mdi-logout-variant"></i>
                                            <span class="d-block">خروج از حساب</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dt-sl dt-sn mb-3 text-center">
                        <a href="#">
                            <img src="/project/public/assets/assets/img/banner/sidebar-banner-3.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="dt-sl dt-sn mb-3">
                        <div class="profile-menu-section dt-sl">
                            <div class="label-profile-menu mt-2 mb-2">
                                <span>حساب کاربری شما</span>
                            </div>
                            <div class="profile-menu">
                                <ul>
                                    <li>
                                        <a href="#" class="active">
                                            <i class="mdi mdi-account-circle-outline"></i>
                                            پروفایل
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-basket"></i>
                                            همه سفارش ها
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-backburger"></i>
                                            درخواست مرجوعی
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-heart-outline"></i>
                                            لیست علاقمندی ها
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-glasses"></i>
                                            نقد و نظرات
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-sign-direction"></i>
                                            آدرس ها
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-eye-outline"></i>
                                            بازدیدهای اخیر
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-account-edit-outline"></i>
                                            اطلاعات شخصی
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Sidebar -->

            <!-- Start Content -->
            <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12">
                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        <div class="px-3">
                            <div
                                class="section-title text-sm-title title-wide mb-1 no-after-title-wide dt-sl mb-2">
                                <h2>اطلاعات شخصی</h2>
                            </div>
                            <div class="profile-section dt-sl">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="label-info">
                                            <span>نام و نام خانوادگی:</span>
                                        </div>
                                        <div class="value-info">
                                            <span><?= $user['first_name']." ".$user['last_name']; ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="label-info">
                                            <span>پست الکترونیک:</span>
                                        </div>
                                        <div class="value-info">
                                            <span><?= $user['user_email']; ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="label-info">
                                            <span>شماره تلفن همراه:</span>
                                        </div>
                                        <div class="value-info">
                                            <span><?= $user['mobile']; ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="label-info">
                                            <span>کد ملی:</span>
                                        </div>
                                        <div class="value-info">
                                            <span>-</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="label-info">
                                            <span>دریافت خبرنامه:</span>
                                        </div>
                                        <div class="value-info">
                                            <span>خیر</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="label-info">
                                            <span>شماره کارت:</span>
                                        </div>
                                        <div class="value-info">
                                            <span>-</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-section-link">
                                    <a href="#" class="border-bottom-dt">
                                        <i class="mdi mdi-account-edit-outline"></i>
                                        ویرایش اطلاعات شخصی
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="px-3">
                            <div
                                class="section-title text-sm-title title-wide mb-1 no-after-title-wide dt-sl mb-2">
                                <h2>لیست آخرین علاقه‌مندی‌ها</h2>
                            </div>
                            <div class="profile-section dt-sl">
                                <ul class="list-favorites">
                                    <li>
                                        <a href="#">
                                            <img src="/project/public/assets/assets/img/products/016.jpg" alt="">
                                            <span>کت مردانه مجلسی مدل k-m-5500</span>
                                        </a>
                                        <button>
                                            <i class="mdi mdi-trash-can-outline"></i>
                                        </button>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/project/public/assets/assets/img/products/020.jpg" alt="">
                                            <span>کت مردانه مجلسی مدل k-m-5640</span>
                                        </a>
                                        <button>
                                            <i class="mdi mdi-trash-can-outline"></i>
                                        </button>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/project/public/assets/assets/img/products/017.jpg" alt="">
                                            <span>کت مردانه مجلسی مدل k-m-5110</span>
                                        </a>
                                        <button>
                                            <i class="mdi mdi-trash-can-outline"></i>
                                        </button>
                                    </li>
                                </ul>
                                <div class="profile-section-link">
                                    <a href="#" class="border-bottom-dt">
                                        <i class="mdi mdi-square-edit-outline"></i>
                                        مشاهده و ویرایش لیست مورد علاقه
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <div
                            class="section-title text-sm-title title-wide mb-1 no-after-title-wide dt-sl mb-2 px-res-1">
                            <h2>آخرین سفارش‌ها</h2>
                        </div>
                        <div class="dt-sl">
                            <div class="table-responsive">
                                <table class="table table-order">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>شماره سفارش</th>
                                        <th>تاریخ ثبت سفارش</th>
                                        <th>مبلغ قابل پرداخت</th>
                                        <th>مبلغ کل</th>
                                        <th>عملیات پرداخت</th>
                                        <th>جزییات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>DDC-57456951</td>
                                        <td>۳۱ مرداد ۱۳۹۸</td>
                                        <td>۰</td>
                                        <td>۹,۹۸۹,۰۰۰ تومان</td>
                                        <td>لغو شده</td>
                                        <td class="details-link">
                                            <a href="#">
                                                <i class="mdi mdi-chevron-left"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>DKC-45173498</td>
                                        <td>۱۰ خرداد ۱۳۹۸</td>
                                        <td>۰</td>
                                        <td>۱۸,۰۴۹,۰۰۰ تومان</td>
                                        <td>لغو شده</td>
                                        <td class="details-link">
                                            <a href="#">
                                                <i class="mdi mdi-chevron-left"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>DDC-58976951</td>
                                        <td>۲۱ مرداد ۱۳۹۸</td>
                                        <td>۰</td>
                                        <td>۹,۱۸۹,۰۰۰ تومان</td>
                                        <td>لغو شده</td>
                                        <td class="details-link">
                                            <a href="#">
                                                <i class="mdi mdi-chevron-left"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="link-to-orders" colspan="7"><a href="#">مشاهده لیست سفارش
                                                ها</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content -->

        </div>
      
    </div>
</main>
<!-- End main-content -->

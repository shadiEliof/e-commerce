<?php
?>
<main class="main-content dt-sl mt-4 mb-3">
    <div class="container main-container" dir="rtl">

        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 col-12 mx-auto">
                <div class="form-ui dt-sl dt-sn pt-4">
                    <div class="section-title title-wide mb-1 no-after-title-wide">
                        <h2 class="font-weight-bold">ثبت نام در فروشگاه</h2>
                    </div>
                    <div class="message-light">
                        <?= $message?>
                    </div>
                    <form id="register-form" action="/user/register_submit" method="post">
                        <div class="form-row-title">
                            <h3> شماره موبایل</h3>
                        </div>
                        <div class="form-row with-icon">
                            <input id="mobile" name="mobile" type="text" class="input-ui pr-2" placeholder="شماره موبایل خود را وارد نمایید">
                            <i class="mdi mdi-account-circle-outline"></i>
                        </div>
                        <div class="form-row-title">
                            <h3>رمز عبور</h3>
                        </div>
                        <div class="form-row with-icon">
                            <input id="password" name="password" type="password" class="input-ui pr-2" placeholder="رمز عبور خود را وارد نمایید">
                            <i class="mdi mdi-lock-open-variant-outline"></i>
                        </div>
                        <div class="form-row mt-2">
                            <div class="custom-control custom-checkbox float-right mt-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                <label class="custom-control-label text-justify" for="customCheck3">
                                    <a href="#">حریم خصوصی</a> و <a href="#">شرایط و قوانین</a> استفاده از سرویس های سایت دیدیکالا را مطالعه نموده و با کلیه موارد آن موافقم.
                                </label>
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <button type="submit" class="btn-primary-cm btn-with-icon mx-auto w-100">
                                <i class="mdi mdi-account-circle-outline"></i>
                                ثبت نام در فروشگاه
                            </button>
                        </div>
                        <div class="form-footer text-right mt-3">
                            <span class="d-block font-weight-bold">قبلا ثبت نام کرده اید؟</span>
                            <a href="/user/show_login_form" class="d-inline-block mr-3 mt-2">وارد شوید</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</main>

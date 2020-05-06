<main class="main-content dt-sl mt-4 mb-3">
    <div class="container main-container">

        <div class="row" dir="rtl">
            <div class="col-xl-4 col-lg-5 col-md-7 col-12 mx-auto">
                <div class="form-ui dt-sl dt-sn pt-4">
                    <div class="section-title title-wide mb-1 no-after-title-wide">
                        <h2 id="enter" class="font-weight-bold">ورود به فروشگاه</h2>
                    </div>
                    <div class="message-light">
                        <?= $message?>
                    </div>
                    <form id="login-form"  action="/user/login_submit" method="post">
                        <div class="form-row-title">
                            <h3>شماره موبایل</h3>
                        </div>
                        <div class="form-row with-icon">
                            <input id="mobile" name="mobile" type="text" class="input-ui pr-2" placeholder="ایمیل یا شماره موبایل خود را وارد نمایید">
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
                                <label class="custom-control-label" for="customCheck3">
                                    مرا به خاطر بسپار
                                </label>
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <button class="btn-primary-cm btn-with-icon mx-auto w-100">
                                <i class="mdi mdi-login-variant"></i>
                                ورود به فروشگاه
                            </button>
                        </div>
                        <div class="form-footer text-right mt-3">
                            <span class="d-block font-weight-bold">کاربر جدید هستید؟</span>
                            <a href="/user/show_register_form" class="d-inline-block mr-3 mt-2">ثبت نام در فروشگاه</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</main>


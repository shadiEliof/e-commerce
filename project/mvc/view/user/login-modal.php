<!-- Central Modal Small -->
<div class="modal fade rtl" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-md" >


        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title w-100  rtl tar" id="myModalLabel"><?= _LOGIN_REGISTER ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Default form login -->
                <form class="text-center  border-light p-5" action="/user/loginSubmit" method="post">

                    <p class="h4 mb-4 rtl tar"><?= _LOGIN ?></p>

                    <!-- Email -->
                    <input type="text" name="username" id="defaultLoginFormEmail" class="form-control mb-4"
                           placeholder="<?= _USERNAME ?>">

                    <!-- Password -->
                    <input type="password"  name="password" id="defaultLoginFormPassword" class="form-control mb-4"
                           placeholder="<?= _PASSWORD ?>">

                    <div class="d-flex justify-content-around">
                        <div>
                            <!-- Remember me -->
                            <!--<div class="custom-control custom-checkbox rtl">
                                <input type="checkbox" class="custom-control-input rtl" id="defaultLoginFormRemember">
                                <label class="custom-control-label rtl"
                                       for="defaultLoginFormRemember"><?/*= _REMEMBER_ME */?></label>
                            </div>-->
                        </div>
                        <div>
                            <!-- Forgot password -->
                            <!--<a href=""><?/*= _FORGOT_PASSWORD */?>؟</a>-->
                        </div>
                    </div>

                    <!-- Sign in button -->
                    <button class="btn btn-block my-4 background_color_primary color_white" type="submit"><?= _LOGIN ?>؟</button>

                    <!-- Register -->
                    <p><?= _NOT_A_MEMBER ?>
                        <a href="/user/register"><?= _REGISTER ?></a>
                    </p>

                </form>
                <!-- Default form login -->
            </div>
        </div>
    </div>
</div>
<!-- Central Modal Small -->

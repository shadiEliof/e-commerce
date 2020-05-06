$(document).ready(function () {

    $("#login-form").submit(function (event) {

        $mobile = $("#mobile").val();
        if ($mobile.length != 11) {
            alert("تعداد ارقام شماره موبایل صحیح نمی باشد.");
            event.preventDefault();
        } else if (!$mobile.startsWith("09")) {
            alert("فرمت شماره موبایل صحیح نمی باشد.");
            event.preventDefault();
        } else {
            $(this).submit();
        }
    });
    $("#register-form").submit(function (event) {

        $mobile = $("#mobile").val();
        $password = $("#password").val();

        if ($password.length < 5) {
            alert("رمز عبور ضعیف می باشد تعداد ارقام باید بیش از پنج کاراکتر باشد");
            event.preventDefault();
        } else if ($mobile.length != 11) {
            alert("تعداد ارقام شماره موبایل صحیح نمی باشد.");
            event.preventDefault();
        } else if (!$mobile.startsWith("09")) {
            alert("فرمت شماره موبایل صحیح نمی باشد.");
            event.preventDefault();
        } else {
            $("#register-form").submit();
            /*$.getJSON("/user/check_existing_mobile/" + $mobile, function (data, status) {
                if (data.result === "user-exist") {
                    alert("شما قبلا با این شماره موبایل ثبت نام کرده اید ");
                    event.preventDefault(event);
                    return;
                }else if(data.result === "user-not-exist")  {
                    $("#register-form").submit();
                }

            });*/

        }
    });
});


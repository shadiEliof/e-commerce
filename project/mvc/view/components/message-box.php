<?php
$data=[
    "prefix" => "-mini",
    "message"=>"ثبت نام شما با موفقیت انجام شد"
];


$message=$message !=null ? $message:"";
$url=$url !=null ? $url:"";
$btn_title=$btn_title !=null ? $btn_title:"";
?>
<!-- Start main-content -->
<main class="main-content dt-sl mt-4 mb-3">
    <div class="container main-container">

        <div class="row">
            <div class="col-12">
                <div class="dt-sl dt-sn pt-3 pb-5">
                    <div class="error-page text-center">
                        <h1><?= $message ?></h1>
                        <a href="<?= $url ?>" class="btn-primary-cm"><?= $btn_title ?></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
<!-- End main-content -->

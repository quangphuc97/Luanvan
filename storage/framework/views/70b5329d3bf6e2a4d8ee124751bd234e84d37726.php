<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo asset("bootstrap-3.3.7-dist/css/bootstrap.css"); ?>">
    <script src="<?php echo asset("bootstrap-3.3.7-dist/js/jquery-3.3.1.js"); ?>"></script>
    <script src="<?php echo asset("bootstrap-3.3.7-dist/js/bootstrap.js"); ?>"></script>
    <link rel="stylesheet" href="<?php echo asset("style.css"); ?>">
    <title>Sàn giao dịch nông sản</title>
</head>
<body>
<?php echo $__env->make('khung.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
<div class="quangcao">
    <div class="tieude">
        <div style="font-weight: bold;">Sàn giao dịch nông sản hỗ trợ</div>
        <div>Mua,bán, truy xuất nông sản</div>
    </div>
</div>

</body>
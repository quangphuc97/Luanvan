<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo asset("bootstrap-3.3.7-dist/css/bootstrap.css"); ?>">
    <script src="<?php echo asset("bootstrap-3.3.7-dist/js/jquery-3.3.1.js"); ?>"></script>
    <script src="<?php echo asset("bootstrap-3.3.7-dist/js/bootstrap.js"); ?>"></script>
    <link rel="stylesheet" href="<?php echo asset("style.css"); ?>">
    <title>Tin bán nông sản</title>
</head>
<body>
<div class="main">
<?php echo $__env->make('khung.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
    <div class="bantin">
    <div class="container" >
        <h3 style="text-align: center;">Tin Bán</h3>
<div class="row">
    <nav class="col-sm-3" id="myScrollspy">
        <h3>Chọn loại nông sản</h3>
        <ul class="nav nav-pills nav-stacked">

            <li class="dropdown active">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Lương thực<span class="caret"></span></a>
                <ul class="dropdown-menu scrollable-menu" role="menu">
                    <li><a href="">Lúa</a></li>
                    <li><a href="">Ngô</a></li>
                    <li><a href="">Khoai</a></li>
                    <li><a href="">Sắn</a></li>
                    <li><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Trái cây<span class="caret"></span></a>
                <ul class="dropdown-menu scrollable-menu" role="menu">
                    <li><a href="">Táo</a></li>
                    <li><a href="">Măng cụt</a></li>
                    <li><a href="">Sầu riêng</a></li>
                    <li><a href="">Me</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Trái cây<span class="caret"></span></a>
                <ul class="dropdown-menu scrollable-menu" role="menu">
                    <li><a href="">Táo</a></li>
                    <li><a href="">Măng cụt</a></li>
                    <li><a href="">Sầu riêng</a></li>
                    <li><a href="">Me</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Lương thực<span class="caret"></span></a>
                <ul class="dropdown-menu scrollable-menu" role="menu">
                    <li><a href="">Lúa</a></li>
                    <li><a href="">Ngô</a></li>
                    <li><a href="">Khoai</a></li>
                    <li><a href="">Sắn</a></li>
                </ul>
            </li>
        </ul>
    </nav>
<div class="col-sm-9">
    <div class="row timkiem">
        <div class="col-sm-6">
        <div class="form-group has-feedback has-search">
        <span class="glyphicon glyphicon-search form-control-feedback"></span>
        <input type="text" class="form-control" placeholder="Nhập từ khóa cần tìm kiếm">
        </div>
        </div>
    <div class="col-sm-6">
                <button type="button" class="btn btn-primary">Tìm kiếm</button>
     </div>
    </div>
    <div class="row tin">
        <div class="col-sm-8 bentrai">
        <div class="tieude">Cần bán 1 tấn lúa thái</div>
            <div>abcdemxedeojdksfmlasmdlasd;ưqeqwasdass</div>
        </div>
        <div class="col-sm-4 benphai">
           <div> đ3000000 - 3500000</div>
            <div>Hạn nộp: 30/1/2019</div>
            <div>Số báo giá: 0</div>
        </div>
    </div>
</div>
</div>

    </div>
</div>
</div>
</body>
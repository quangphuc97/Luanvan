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
@include('khung.header');
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
        <button type="button" class="btn btn-success">Đăng tin</button>
    </div>
    </div>
    <div class="row boloc">
        <div class="col-sm-2"><h4>Bộ lọc</h4> </div>
        <div class="col-sm-2"> <button type="button" class="btn">Đã thu hoạch</button> </div>
            <div class="col-sm-2">  <button type="button" class="btn">Chưa thu hoạch</button> </div>
                <div class="col-sm-2">   <button type="button" class="btn">Đã chế biến</button> </div>
    </div>
    <div class="row danhsachtin">
        <div class="col-sm-8 bentrai">
            <div class="tieude"> <a href="tinban">Cần bán 1 tấn lúa thái </a></div>
            <div class="noidung">Hiện đa số các sàn giao dịch nông sản (SGDNS) hoạt động chủ yếu theo phương thức giao ngay. Vậy nhưng, dù các giao dịch rất minh bạch, giá ổn định, hàng hóa được kiểm định chất lượng… nhưng nhiều SGDNS vẫn chưa đủ sức lôi kéo người dân mang hàng hóa đến bán. Chẳng hạn, SGDNS Cần Giờ sau khi khai trương rầm rộ chỉ "trụ" được vài chục phiên đã phải lặng lẽ đóng cửa. Nguyên nhân là điều kiện kinh doanh tại sàn không thuận tiện cho người dân như cách làm ăn với thương lái. Tương tự, sàn giao dịch hạt điều tại Bình Phước sau mấy phiên thử nghiệm cũng đành dẹp bỏ vì các doanh nghiệp phải có hàng ký gửi mới có thể khớp lệnh, nhưng nguồn cung điều phụ thuộc vào nhập khẩu nên chẳng doanh nghiệp nào có hàng dự trữ.</div>

        </div>
        <div class="col-sm-4 benphai">
           <div><span class="nhan">Khởi điểm</span>3000000 VND</div>
            <div><span class="nhan">Hạn nộp</span>30/1/2019</div>
            <div><span class="nhan">Trạng thái sản phẩm</span>Đã thu hoạch</div>
            <div><span class="nhan">Trạng thái tin</span>Nhận chào giá</div>
            <div><span class="nhan">Số báo giá</span>0</div>
        </div>
    </div>
</div>
</div>

    </div>
</div>
</div>
</body>
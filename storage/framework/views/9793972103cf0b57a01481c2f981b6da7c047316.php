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
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 bantin">
                    <div><a href="">Tin bán</a> > <a href="">Lương thực</a> > <a href="">Lúa</a></div>
                    <div class="tieude"><h3>Cần bán 1 tấn lúa thái</h3></div>
                <div>Loại sản phẩm: Lương thực. Sản phẩm: Lúa. Hạn nộp: 30/1/2019</div>
                    <div class="noidung">Hiện đa số các sàn giao dịch nông sản (SGDNS) hoạt động chủ yếu theo phương thức giao ngay. Vậy nhưng, dù các giao dịch rất minh bạch, giá ổn định, hàng hóa được kiểm định chất lượng… nhưng nhiều SGDNS vẫn chưa đủ sức lôi kéo người dân mang hàng hóa đến bán. Chẳng hạn, SGDNS Cần Giờ sau khi khai trương rầm rộ chỉ "trụ" được vài chục phiên đã phải lặng lẽ đóng cửa. Nguyên nhân là điều kiện kinh doanh tại sàn không thuận tiện cho người dân như cách làm ăn với thương lái. Tương tự, sàn giao dịch hạt điều tại Bình Phước sau mấy phiên thử nghiệm cũng đành dẹp bỏ vì các doanh nghiệp phải có hàng ký gửi mới có thể khớp lệnh, nhưng nguồn cung điều phụ thuộc vào nhập khẩu nên chẳng doanh nghiệp nào có hàng dự trữ.</div>
                </div>
                <div class="col-sm-4 phaibantin">
                <div><h4>Thông tin tin bán</h4></div>
                    <div><span class="nhan">ID</span>12345</div>
                    <div><span class="nhan">Ngày đăng</span>1/1/2019</div>
                    <div><span class="nhan">Hạn nộp</span>30/1/2019</div>
                    <div><span class="nhan">Giá khởi điểm</span>3 triệu</div>
                    <div><h4>Thông tin người bán</h4></div>
                    <div><span class="nhan">Usernam</span>abcd</div>
                    <div><span class="nhan">Họ tên</span>Trần Huỳnh Quang Phúc</div>
                    <div><span class="nhan">Email</span>abcd@gmail.com</div>
                    <div><span class="nhan">Đến từ</span>Vĩnh Long</div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 daugia">
                  <div><h3 style=" border-bottom: 0.5px solid #cccccc;padding-bottom: 15px;">Thông tin chào giá</h3></div>
                    <div>Để gửi chào giá, vui lòng <a href="">đăng nhập</a></div>
                </div>
                <div class="col-sm-12 danhsachdaugia">
                    <div class="col-sm-4">
                    <div><a href="">QuangPhuc</a></div>
                    </div>
                    <div class="col-sm-4">
                    <div>Đến từ: Vĩnh Long</div>
                    <div>Ngày gia nhập: 1/1/2019</div>
                    </div>
                    <div class="col-sm-4">
                    <div>Báo giá: 3 triệu</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
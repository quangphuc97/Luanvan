<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo asset("bootstrap-3.3.7-dist/css/bootstrap.css"); ?>">
    <script src="<?php echo asset("bootstrap-3.3.7-dist/js/jquery-3.3.1.js"); ?>"></script>
    <script src="<?php echo asset("bootstrap-3.3.7-dist/js/bootstrap.js"); ?>"></script>
    <link rel="stylesheet" href="<?php echo asset("style.css"); ?>">
    <title>Sàn giao dịch nông sản</title>
</head>
<body>
<table>
    <tr><th>ID</th></tr>
    @foreach($brands as $data)
        <tr>
    <td>{{$data->id}}</td>
        </tr>
@endforeach
</table>
<div class="container">
{{ $brands->links() }}
</div>
</body>
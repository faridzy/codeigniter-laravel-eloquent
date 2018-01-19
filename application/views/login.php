<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dorang Cell | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome-4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">

    <script src="<?php echo base_url() ?>assets/template/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/script/lib.js"></script>
    <script src="<?php echo base_url() ?>assets/script/core.js"></script>
    <script> BASE_URL = "<?php echo base_url() ?>"; </script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Dorang</b>Cell</a>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">Silahkan Masukkan Password dan Username Anda !</p>
        <div id="result-user"></div>
        <form id="form-user" onsubmit="return false;">
            <div class="form-group has-feedback">
                <input class="form-control" name="username" value="" placeholder="Username" required="" type="text">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input class="form-control" name="password" value="" placeholder="Password" required="" type="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
            </div>
           <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
        </form>
    </div>
     
</div>
<!-- /.login-box -->

<script src="<?php echo base_url() ?>/assets/template/dist/js/jquery-ui.min.js"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="<?php echo base_url() ?>assets/script/datatables.min.js"></script>
<script src="<?php echo base_url() ?>assets/script/moment.js"></script>
<script src="<?php echo base_url() ?>assets/template/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/template/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url() ?>assets/template/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url() ?>assets/template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="<?php echo base_url() ?>assets/template/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url() ?>assets/template/plugins/fastclick/fastclick.min.js"></script>
<script src="<?php echo base_url() ?>assets/template/dist/js/app.min.js"></script>
<script>
    $("#form-user").submit(function () {
        var data = getFormData("form-user");
        ajaxTransfer("login/login", data, "#result-user");
    })
</script>
</body>
</html>
<!DOCTYPE html>

<html lang="en">
    <head>
        <?php header("Content-Type:text/html;charset=UTF-8"); ?>
        <meta charset="UTF-8">
        <?php $this->load->helper('url'); ?>
        <link rel="stylesheet" href="<?= base_url('public/bootstrap/css/bootstrap.css') ?>">
        <link rel="stylesheet" href="<?= base_url('public/css/loginCss.css') ?>">
        <script src="<?= base_url('public/jQuery/jquery-1.9.1.min.js') ?>"></script>

        <script src="<?= base_url('public/bootstrap/js/bootstrap.min.js') ?>"></script>

        <title>登录</title>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="<?= base_url('public/js/html5shiv.js') ?>"></script>
        <![endif]-->

        <!--[if lte IE 6]>
        <link rel="stylesheet" type="text/css" href="<?= base_url('public/bootstrap/css/bootstrap-ie6.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url('public/bootstrap/css/ie.css') ?>">
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <form class="form-signin" method="post">
                <h2 class="form-signin-heading">投票登录</h2>
                <input type="text" class="input-block-level" placeholder="用户名" name="username">
                <input type="password" class="input-block-level" placeholder="密码" name="password">
                <button class="btn btn-large btn-primary" type="submit">登录</button>
            </form>
        </div>
    </body>

</html>    
<!--[if lte IE 6]>
    <script src="<?= base_url('public/bootstrap/js/bootstrap-ie.js') ?>"></script>
<![endif]-->
<!--[if lt IE 9]>
<style type="text/css">
#fuckIE {
        font: 14px "宋体", Helvetica, Arial, sans-serif;
        display: block;
    position: fixed;
    top: 0px;
    left: 0px;
    right: 0px;
    height: 25px;
    line-height:25px;
    width: 100%;
    text-align: center;
    z-index:999;
    border-bottom: 1px solid #000000;
    background: #FFEE77;
    color: #000;
}
#fuckIE:hover {
    background: #00FF00;
        cursor:pointer;
}
</style>
<a id="fuckIE" href="#">请使用现代浏览器！谢谢！</a> 
<![endif]-->



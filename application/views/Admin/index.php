<html lang="en">
    <head>
        
        <?php header("Content-Type:text/html;charset=UTF-8"); ?>
        <meta charset="UTF-8">
        <?php $this->load->helper('url'); ?>
        <?php if (!isset($name)) {  redirect(base_url('Admin/login'), 'refresh');  }?>
        <link rel="stylesheet" href="<?= base_url('public/bootstrap/css/bootstrap.css') ?>">
        <link rel="stylesheet" href="<?= base_url('public/css/loginCss.css') ?>">
        <script src="<?= base_url('public/jQuery/jquery-1.9.1.min.js') ?>"></script>

        <script src="<?= base_url('public/bootstrap/js/bootstrap.min.js') ?>"></script>

        <title>投票页面</title>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="<?= base_url('public/js/html5shiv.js') ?>"></script>
        <![endif]-->
        <!--[if lte IE 6]>
        <link rel="stylesheet" type="text/css" href="<?= base_url('public/bootstrap/css/bootstrap-ie6.css')?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url('public/bootstrap/css/ie.css')?>">
        <![endif]-->
        <style type="text/css">
            body {
                padding-top: 20px;
                padding-bottom: 40px;
                background-color: #ffffff;
            }

            .container-narrow {
                margin: 0 auto;
                max-width: 700px;
                _width:700px;
            }
            .container-narrow > hr {
                margin: 30px 0;
            }

            .jumbotron {
                margin: 60px 0;
                text-align: center;
            }
            .jumbotron h1 {
                font-size: 72px;
                line-height: 1;
            }
            .jumbotron .btn {
                font-size: 21px;
                padding: 14px 24px;
            }

            .marketing {
                margin: 60px 0;
            }
            .marketing p + h4 {
                margin-top: 28px;
            }
        </style>

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script type="text/javascript">
            function ShowMyModal() {
                $('#myModal').modal();
            }
            function ShowVoteModal() {
                $('#vote').modal();
            }
        </script>
    </head>

    <body>

        <div class="container-narrow">

            <div class="masthead">
                <ul class="nav nav-pills pull-right">
                    <li class="active"><a href="#">主页</a></li>
                    <li><a href="javascript:alert('暂无 _(:3」∠)_ ')">关于</a></li>
                    <li><a href="javascript:alert('暂无 _(:3」∠)_ ')">抽奖</a></li>
                </ul>
                <h3 class="muted">精英班班长投票</h3>
            </div>

            <hr>

            <div class="jumbotron">
                <h1>为了....</h1>
                <p class="lead">一统江湖。现如今投票选班长一位</p>
                <?php $is_vote; if ($vote==0){$is_vote="未投票";} else {$is_vote="已投票";}?>
                <a class="btn btn-large btn-success" onclick="<?php if ($is_vote=="未投票") {echo "ShowVoteModal()"; } else {echo "ShowMyModal()"; }?>">投票</a>
            </div>

            <hr>

            <div class="footer">
                
                <p>© <?php echo "名字：".$name."    学号：".$num."     ".$is_vote; ?></p>
            </div>

        </div> <!-- /container -->

        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="myModalLabel">我的天</h4>
            </div>
            <div class="modal-body">
                <h5>同学，你不是投票过了吗？<img src="<?= base_url('public/img/back.png') ?>"></h5>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">关闭</button>
            </div>
        </div>

        <div id="vote" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="myModalLabel">投票中！</h4> 
            </div>
            <div class="modal-body">
                <form action="<?= base_url('VoteAdmin/put_result') ?>" method="post">
                    <select name="vote_option">
                        <?php 
                        for ($i=0;$i<count($vote_name);$i++){
                            echo '<option>'."$vote_name[$i]".'</option>';
                        }
                        ?>
                    </select>
                    <input name="voting_name" type="hidden" value="<?php echo $name;?>">
                    <button class="btn btn-info">光荣地投一票</button>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">关闭</button>
            </div>
        </div>

    </body>
</html>
<!--[if lte IE 6]>
    <script src="<?= base_url('public/bootstrap/js/bootstrap-ie.js')?>"></script>
<![endif]-->
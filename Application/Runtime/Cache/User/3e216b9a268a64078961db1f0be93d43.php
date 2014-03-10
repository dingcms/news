<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title><?php echo ($title); ?>-当真是，当真事？！</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="<?php echo ($keywords); ?>" />
        <meta name="description" content="<?php echo ($description); ?>" />
        <link rel="stylesheet" type="text/css" href="/qiuyun/dogocms32/Public<?php echo ($style_common); ?>/v3.1.1/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="/qiuyun/dogocms32/Public<?php echo ($style_common); ?>/v3.1.1/css/bootstrap-theme.min.css"/>
        <link rel="stylesheet" type="text/css" href="/qiuyun/dogocms32/Public<?php echo ($style_common); ?>/css/alertify.css"/>
        <link rel="stylesheet" type="text/css" href="/qiuyun/dogocms32/Public<?php echo ($style_common); ?>/css/alertify.default.css"/>
        <link rel="stylesheet" type="text/css" href="/qiuyun/dogocms32/Public<?php echo ($style); ?>/style/common.css"/>
        <link rel="stylesheet" type="text/css" href="/qiuyun/dogocms32/Public<?php echo ($style); ?>/style/style.css"/>
    </head>
    <body>
        <div class="dogo-page ">
            <div class="container">
                <header class="dogo-header">
                    <nav class="navbar navbar-default navbar-static" role="navigation">
                        <div class="navbar-header">
                            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-js-navbar-collapse">
                                <span class="sr-only"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo U('Home/Index/index');?>">当真是，当真事？！</a>
                        </div>
                        <div class="collapse navbar-collapse bs-js-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <?php if(is_array($navhead)): $i = 0; $__LIST__ = $navhead;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navlist): $mod = ($i % 2 );++$i;?><li class="dropdown">
                                    <?php if($navlist["children"] == ''): ?><a id="" href="/qiuyun/dogocms32<?php echo ($navlist["url"]); ?>" role="button" class="dropdown-toggle" data-toggle=""><?php echo ($navlist["text"]); ?> </a>
                                        <?php else: ?>
                                        <a id="" href="/qiuyun/dogocms32<?php echo ($navlist["url"]); ?>" role="button" class="dropdown-toggle" data-toggle="dropdown"><?php echo ($navlist["text"]); ?> <b class="caret"></b></a><?php endif; ?>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="">
                                        <?php if(is_array($navlist["children"])): $i = 0; $__LIST__ = $navlist["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li role="presentation"><a role="menuitem" href="/qiuyun/dogocms32<?php echo ($vo["url"]); ?>"><?php echo ($vo["text"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                        <!--<li role="presentation" class="divider"></li>-->
                                    </ul>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li id="fat-menu" class="dropdown">
                                    <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">会员中心<b class="caret"></b></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                                        <?php if(session('LOGIN_M_STATUS')=='TRUE'){ ?>
                                        <li><a role="menuitem" href="<?php echo U('User/Index/index');?>"> <span class="glyphicon glyphicon-home"></span> 我的主页</a></li>
                                        <li><a role="menuitem" href="<?php echo U('User/Index/changePwd');?>"> <span class="glyphicon glyphicon-edit"></span> 修改密码</a></li>
                                        <li class="divider"></li>
                                        <li><a role="menuitem" href="<?php echo U('User/Passport/logout');?>"> <span class="glyphicon glyphicon-log-out"></span> 退出登录</a></li>
                                        <?php }else{ ?>
                                        <li><a role="menuitem" href="<?php echo U('User/Passport/login');?>" title="登录"> <span class="glyphicon glyphicon-log-in"></span> 登录</a></li>
                                        <li><a role="menuitem" href="<?php echo U('User/Passport/signup');?>" title="注册"><span class="glyphicon glyphicon-plus-sign"></span>注册</a></li>
                                        <li><a role="menuitem" href="<?php echo U('User/Passport/resetPassword');?>"> <span class="glyphicon glyphicon-question-sign"></span> 忘记密码</a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /.nav-collapse -->
                    </nav>
                </header>






<div class="row">
    <div class="col-md-3">
        <div class="dogo-sidebar">
            <div class="list-group">
    <a href="javascript:void(0)" class="list-group-item dogo-nav-header">个人中心</a>
    <a href="<?php echo U('User/Index/index');?>" class="list-group-item <?php if(($sidebar_active) == "index"): ?>active<?php endif; ?>">我的主页</a>
    <a href="<?php echo U('User/Index/personal');?>" class="list-group-item <?php if(($sidebar_active) == "personal"): ?>active<?php endif; ?>">个人资料</a>
    <a href="<?php echo U('User/Index/email');?>" class="list-group-item <?php if(($sidebar_active) == "email"): ?>active<?php endif; ?>">邮箱修改</a>
    <a href="<?php echo U('User/Index/changePwd');?>" class="list-group-item <?php if(($sidebar_active) == "changepwd"): ?>active<?php endif; ?>">修改密码</a>
    <a href="javascript:void(0)" class="list-group-item dogo-nav-header">信息管理</a>
    <a href="<?php echo U('User/Index/newsAdd');?>" class="list-group-item <?php if(($sidebar_active) == "news_add"): ?>active<?php endif; ?>">说说当真SHI</a>
    <a href="<?php echo U('User/Index/newsList');?>" class="list-group-item <?php if(($sidebar_active) == "news_list"): ?>active<?php endif; ?>">我的当SHI<span class="badge"><?php echo ($count_newslist); ?></span></a>
    <!--
    <a href="javascript:void(0)" class="list-group-item dogo-nav-header">商务中心</a>
    <a href="<?php echo U('');?>" class="list-group-item <?php if(($sidebar_active) == ""): ?>active<?php endif; ?>">我的订单<span class="badge">20</span></a>
    <a href="<?php echo U('User/Index/addressList');?>" class="list-group-item <?php if(($sidebar_active) == "address"): ?>active<?php endif; ?>">收货地址<span class="badge"><?php echo ($count_address); ?></span></a>
    <a href="javascript:void(0)" class="list-group-item dogo-nav-header">消息管理</a>
    <a href="<?php echo U('');?>" class="list-group-item <?php if(($sidebar_active) == ""): ?>active<?php endif; ?>">我的留言<span class="badge">9999</span></a>
    <a href="<?php echo U('');?>" class="list-group-item <?php if(($sidebar_active) == ""): ?>active<?php endif; ?>">我的消息<span class="badge">42</span></a>
    <a href="javascript:void(0)" class="list-group-item dogo-nav-header">扩展管理</a>
    <a href="<?php echo U('User/Index/apiList');?>" class="list-group-item <?php if(($sidebar_active) == "apilist"): ?>active<?php endif; ?>">api接口<span class="badge"><?php echo ($count_apilist); ?></span></a>
    -->
    <a href="<?php echo U('User/Passport/logout');?>" class="list-group-item">退出登录</a>
</div>
        </div><!--dogo-sidebar-->
    </div><!--col-md-->
    <div class="col-md-9">
        <div class="dogo-member">
            <h4>邮箱管理</h4>
            <div class="dogo-blank"></div>
            <form class="form-horizontal" role="form" action="<?php echo U('User/Index/doEmail');?>" method="post">
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label input-lg">邮箱状态：</label>
                    <div class="col-sm-10">
                        <?php if(($data["email_status"]) == "20"): ?><span class="btn btn-success">已认证</span>
                        <?php else: ?>
                        <span class="btn btn-danger">未认证</span>
                        <span class="btn btn-info" data-toggle="modal" data-target="#dialog_emailauth">我要认证</span>

                        <!-- Modal -->
                        <div class="modal fade" id="dialog_emailauth" tabindex="-1" role="dialog" aria-labelledby="dialog_emailauth" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">邮箱验证</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h5><?php echo ($data["email"]); ?></h5>
                                        <div class="dogo-blank"></div>
                                        <span class="btn btn-info click_emailauth">发送邮件</span>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal --><?php endif; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label input-lg">邮箱：</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control input-lg" id="inputEmail" placeholder="邮箱" value="<?php echo ($data["email"]); ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-default col-lg-12 btn-lg dogo-color-white">修改邮箱</button>
            </form>
        </div><!--dogo-member-->
    </div><!--col-md-->
</div><!--row-->

<footer class="dogo-footer">
    <div class="dogo-blank"></div>

    <div class="row">
        <div class="col-md-12 dogo-align-center">
            <p></p>
        </div><!--col-md-->
    </div><!--row-->
</footer>
<script type="text/javascript" src="/qiuyun/dogocms32/Public<?php echo ($style_common); ?>/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="/qiuyun/dogocms32/Public<?php echo ($style_common); ?>/v3.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/qiuyun/dogocms32/Public<?php echo ($style_common); ?>/js/alertify.min.js"></script>
<script type="text/javascript" src="/qiuyun/dogocms32/Public<?php echo ($style_common); ?>/js/jquery.cookie.js"></script>

<script>
    $(function() {
        $('.dogo-box-content img').each(function() {
            $(this).addClass('img-responsive');
        });
    });
</script>
<script>
    $(function() {
        $('.click_emailauth').click(function() {
            $.ajax({
                type: "POST",
                url: '<?php echo U("User/Index/authEmail");?>',
                dataType: "json",
                success: function(data) {
                    if (data.status == 1) {
                        alert(data.msg);
                    } else {
                        alert(data.msg);
                    }
                }
            });
        });
    });
</script>
</div><!--container-->
</div><!--dogo-page-->

</body>
</html>
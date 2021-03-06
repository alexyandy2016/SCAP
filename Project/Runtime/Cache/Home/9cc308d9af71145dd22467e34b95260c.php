<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta charset="utf-8">
    <title>SCAP - 盛成活动平台</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=no">
    <link rel="shortcut icon" href="http://scap.mama.cn/image/favicon.ico">
    <link href="http://scap.mama.cn/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="http://scap.mama.cn/css/sweet-alert/sweet-alert.css" rel="stylesheet" type="text/css" />
    <link href="http://scap.mama.cn/css/styles.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
      <script src="http://scap.mama.cn/js/vendor/html5shiv.min.js"></script>
      <script src="http://scap.mama.cn/js/vendor/respond.min.js"></script>
    <![endif]-->
    <!-- script references -->
    
    <script type="text/javascript" language="javascript" src="http://scap.mama.cn/js/jquery/jquery-1.11.1.min.js"></script>

    <script type="text/javascript" language="javascript" src="http://scap.mama.cn/js/bootstrap/bootstrap.min.js"></script>

    <script src="http://scap.mama.cn/js/vendor/scripts.js"></script>
    
    <script src="http://scap.mama.cn/js/sweet-alert/sweet-alert.min.js"></script>

</head>
<body>
<div class="wrapper">
<div class="box">
<div class="row row-offcanvas row-offcanvas-left">

<!-- sidebar -->
<div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">

    <ul class="nav">
        <li><a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
    </ul>

    <div class="sidebar-header hidden-xs">
		<img src="http://scap.mama.cn/upload/avatar/thumbmini_<?php echo (session('avatar')); ?>">
		<h2><?php echo (session('username')); ?></h2>
		<h3><?php echo (session('email')); ?><a href="#"><i class="fa fa-chevron-down"></i></a></h3>
	</div>
    <ul class="nav hidden-xs" id="lg-menu">
        <li><a href="#" class="activities"><i class="glyphicon glyphicon-list-alt"></i> 即将进行</a></li>
        <li><a href="#" class="underway"><i class="glyphicon glyphicon-screenshot"></i> 正在进行</a></li>
        <li><a href="#" class="expired"><i class="glyphicon glyphicon-film"></i> 历史回顾</a></li>
        <?php if(session('groupid')==10){ ?>
        <li><a href="#" class="adduser"><i class="glyphicon glyphicon-check"></i> 新增用户</a></li>
        <?php } ?>
    </ul>
    <ul class="list-unstyled hidden-xs" id="sidebar-footer">
        <li>
            <a href="http://scap.mama.cn/Home"><h3>SCAP</h3> <i class="glyphicon glyphicon-heart-empty"></i> 盛成活动平台</a>
        </li>
    </ul>

    <!-- tiny only nav-->
    <ul class="nav visible-xs" id="xs-menu">
        <li><a href="#" class="text-center activities"><i class="glyphicon glyphicon-list-alt"></i></a></li>
        <li><a href="#" class="text-center underway"><i class="glyphicon glyphicon-screenshot"></i></a></li>
        <li><a href="#" class="text-center expired"><i class="glyphicon glyphicon-film"></i></a></li>
        <?php if(session('groupid')==10){ ?>
        <li><a href="#" class="text-center adduser"><i class="glyphicon glyphicon-check"></i></a></li>
        <?php } ?>
    </ul>

</div>
<!-- /sidebar -->

<!-- main right col -->
<div class="column col-sm-10 col-xs-11" id="main">

<!-- top nav -->
<div class="navbar navbar-blue navbar-static-top">
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand logo">SCAP</a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation" style="padding-left: 15px;padding-right: 15px;">
        <form class="navbar-form navbar-left">
            <div class="input-group input-group-sm" style="max-width:360px;">
                <input type="text" class="form-control" placeholder="用户名/标题/内容/标签" name="keyword">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="button" id="searchbtn"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>
        </form>
        <ul class="nav navbar-nav">
            <li>
                <a href="http://scap.mama.cn/Home/Main/index"><i class="glyphicon glyphicon-home"></i> Home</a>
            </li>
            <li>
                <a href="#" role="button" id="create"><i class="glyphicon glyphicon-plus"></i> 我来组织</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right" style="margin-bottom: 0px;">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></a>
                <ul class="dropdown-menu" >
                    <li class="dropdown-menu-header text-center">
					<strong>帐号</strong>
					</li>
                    <li><a href="#" class="space"><i class="glyphicon glyphicon-star" style="color: #bcbfc1;margin-right: 15px;"></i>个人中心</a></li>
                    <li><a href="http://scap.mama.cn/Home/Login/logout"><i class="glyphicon glyphicon-log-out" style="color: #bcbfc1;margin-right: 15px;"></i>退出</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
<!-- /top nav -->

<div class="padding">
    <div class="full col-sm-9">
    <!-- main content -->
        <div id="maincontent">

        </div>
    <!-- /main content -->
    </div><!-- /col-9 -->
</div><!-- /padding -->
</div>
<!-- /main -->

<!-- profile -->
<div id="profileModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                 <div id="profile_username">admin</div>
            </div>
            <div class="modal-body">
              <div class="row" style="margin-top:15px;">
                <div class="col-md-3 col-lg-3 " align="center"><img src="" id="profile_avatar" class="img-circle"></div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>用户组:</td>
                        <td id="profile_group" style="font-weight:bold;"></td>
                      </tr>
                      <tr>
                        <td>公司职位:</td>
                        <td id="profile_position" style="font-weight:bold;"></td>
                      </tr>
                      <tr>
                        <td>性别:</td>
                        <td id="profile_gender" style="font-weight:bold;"></td>
                      </tr>
                        <tr>
	                        <td>邮箱:</td>
	                        <td id="profile_email" style="font-weight:bold;"></td>
                        </tr>
                      <tr>
                        <td>手机号码:</td>
                        <td id="profile_mobile" style="font-weight:bold;"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /profile -->

</div>
</div>
</div>
</div>
<script>
$(function(){

	loadPageActivities();
	
	$(".adduser").on("click",function(e){
		loadPageAddUser();
	});
	
	$(".activities").on("click",function(e){
		loadPageActivities();
	})

	$("#create").on("click",function(e){
		loadPageCreateActivity();
	});
	
	$(".underway").on("click",function(e){
		loadPageActivityUnderway();
	});
	
	$(".expired").on("click",function(e){
		loadPageActivityExpired();
	});

    $(".space").on("click",function(e){
        loadPagePersonalSpace();
    });

    $("#searchbtn").on('click',function(){
        var keyword = $.trim($('input[name="keyword"]').val());
        if(!keyword==''){
        	 $("#maincontent").empty();
             $("#maincontent").load("http://scap.mama.cn/Home/activity/activities?keyword="+keyword);
             $.trim($('input[name="keyword"]').val(''));
        }
    });

    $(document).keydown(function(event) {
        if (event.keyCode == 13 && $('input[name="keyword"]').is(":focus")) {
            $("#searchbtn").click();
            event.preventDefault();
        }
    });
});

function alertMsg(msg,type,tag){
    if($("#alert").length>0){
        $("#alert").remove();
    }
    type = type ? type : 'alert-danger';
    tag  = tag  ? tag  : '出错!';
    $("#alertdiv").append(
            '<div class="alert '+type+'" id="alert">'+
            '<a href="#" class="close" data-dismiss="alert">&times;</a>'+
            '<strong>'+tag+' </strong>' +msg+
            '</div>');
    $("#alertdiv").slideDown(300);
    $("#alert").on("close.bs.alert",function(){
        $("#alertdiv").slideUp(300);
    });
}

function loadPageActivities(){
	$("#maincontent").empty();
	$("#maincontent").load("http://scap.mama.cn/Home/activity/activities",function(){
		adjust();
	});
}

function loadPageAddUser(){
	$("#maincontent").empty();
	$("#maincontent").load("http://scap.mama.cn/Home/Admin/addUser");
}

function loadPageCreateActivity(){
	$("#maincontent").empty();
	$("#maincontent").load("http://scap.mama.cn/Home/Activity/createActivity",function(){
		/*you should load the scripts sequentially @hjh*/
		$.getScript('http://scap.mama.cn/js/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js',function(){
			$.getScript('http://scap.mama.cn/js/bootstrap-datetimepicker/bootstrap-datetimepicker.zh-CN.js',function(){	
				$("[data-toggle='tooltip']").tooltip();
				$('.datetimepicker').datetimepicker({
			        language: 'zh-CN',
			        weekStart: 1,
			        todayBtn:  1,
			        autoclose: 1,
			        todayHighlight: 1,
			        startView: 2,
			        forceParse: 0
			    });
			});
		});
	});
}

function loadPageActivityUnderway(){
	$("#maincontent").empty();
	$("#maincontent").load("http://scap.mama.cn/Home/Activity/activityUnderway");
}
function loadPageViewPosts(aid){
    $("#maincontent").empty();
    $("#maincontent").load("http://scap.mama.cn/Home/Post/viewPosts?aid="+aid);
}
function loadPageActivityInfo(aid){
    $("#maincontent").empty();
    $("#maincontent").load("http://scap.mama.cn/Home/Activity/activityInfo?aid="+aid);
}
function loadPageActivityExpired(){
	$("#maincontent").empty();
    $("#maincontent").load("http://scap.mama.cn/Home/Activity/activityExpired");
}
function loadPagePersonalSpace(){
    $("#maincontent").empty();
    $("#maincontent").load("http://scap.mama.cn/Home/User/personalSpace");
}
function loadPageProfile(uid){
	$.ajax({
		type:'post',
		url:'http://scap.mama.cn/Home/User/getProfile',
		data:{uid:uid},
		async: true,
        cache: false,
	    success:function(profile){
	    	$("#profile_username").text(profile.username);
	    	$("#profile_group").text(profile.group);
	    	$("#profile_gender").text(profile.gender);
	    	$("#profile_mobile").text(profile.mobile);
	    	$("#profile_email").text(profile.email);
	    	$("#profile_position").text(profile.profile);
	    	$("#profile_avatar").attr('src',"http://scap.mama.cn/upload/avatar/thumbmini_"+profile.avatar);
	    	$('#profileModal').modal('show');
	    }
	});
}

</script>
</body>
</html>
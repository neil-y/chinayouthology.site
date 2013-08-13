<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>民泰银如意贵金属行情分析系统 - 民泰贵金属</title>
<link rel="shortcut icon" href="/resources/template/favicon.ico" />
<link rel="stylesheet" href="/resources/template/css/reset.css" />
<link rel="stylesheet" href="/resources/template/css/public.css" />
<link rel="stylesheet" href="/resources/template/css/screen.css" />
<!--[if IE]>
<script src="/resources/template/js/ie/html5.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<style type="text/css">.css3{behavior: url(/resources/template/js/ie/css3.htc);-pie-lazy-init: true; position: relative;}.ie6png{-pie-png-fix: true;}</style>
<script src="/resources/template/js/ie/ie9.js"></script>
<![endif]-->
<!--[if IE 6]>
<script src="/resources/template/js/ie/png.js"></script>
<script>DD_belatedPNG.fix('.pngfix, .pngfix img');</script>
<![endif]-->
<script src="/resources/template/js/ie/modernizr.js"></script>
<script src="/resources/template/js/jquery/jquery.js"></script>
<script>
var timeout         = 0;
var closetimer		= 0;
var ddmenuitem      = 0;
function Subnav_open()
{	Subnav_canceltimer();
	Subnav_close();
	ddmenuitem = $(this).find('ul').eq(0).css('visibility', 'visible');}
function Subnav_close()
{	if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');}
function Subnav_timer()
{	closetimer = window.setTimeout(Subnav_close, timeout);}
function Subnav_canceltimer()
{	if(closetimer)
	{	window.clearTimeout(closetimer);
		closetimer = null;}}
$(document).ready(function()
{	$('#nav > ul > li').bind('mouseover', Subnav_open);
	$('#nav > ul > li').bind('mouseout',  Subnav_timer);});
document.onclick = Subnav_close;
</script>
</head>
<style>
.top_img {
	width:770px;
	height:123px;
}
body {
    background: #FEF9E5 url(/resources/template/images/bg-body.png) repeat-x center 95px;
    color: #2B2B2B;
    height: 100%;
    width: 100%;
}
.ads-wrap {
	background: #F5F5F5;
}
</style>

<body>
<div class="ads-wrap cf">
	<div class="gridsystem cf">
		<div class="ad">
			<object id="flashSeg" data="/resources/template/images/swf/topBanner3.swf" type="application/x-shockwave-flash" width="980" height="90">           
				<param name="movie" value="/resources/template/images/swf/topBanner3.swf" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#ffffff" />
				<param name="allowScriptAccess" value="sameDomain" />
				<param name="allowFullScreen" value="true" />
				<param name="wmode" value="transparent"/>
			</object>
		</div>
	</div>
</div><!-- //top ads -->


<div class="gridsystem top-wrap cf">
	<header id="header" class="cf">
		<div class="header-top pngfix cf">
	    	<h1 id="logo" class="pngfix">
	    		<a href="/">
	    			<img src="/resources/template/images/logo.png" alt="民泰贵金属" title="民泰贵金属" />
	    		</a>
	    	</h1>
	    	<div class="head-banner">
				<object data="/resources/template/images/swf/Banner.swf" type="application/x-shockwave-flash" width="445" height="75">             
					<param name="movie" value="/resources/template/images/swf/Banner.swf" />
					<param name="quality" value="high" />
					<param name="bgcolor" value="#ffffff" />
					<param name="allowScriptAccess" value="sameDomain" />
					<param name="allowFullScreen" value="true" />
					<param name="wmode" value="transparent"/>
				</object>	    		
	    	</div>

    	</div>
        <nav id="nav" class="css3 cf">
        	<ul>
			<li><a <?php if(isset($curr) && $curr == "index") echo 'class="acitve"';?> href="/">首 页</a></li>
				<li><a <?php if(isset($curr) && $curr == "pro") echo 'class="acitve"';?> href="/item/show/pro_detail">产品介绍</a>
					<ul>
						<li><a href="/item/show/pro_detail">产品详情</a></li>
						<li><a href="/item/show/pro_features">投资特点</a></li>
						<li><a href="/item/show/pro_trade">交易细则</a></li>
						<li><a href="/item/show/pro_case">投资案例</a></li>
						<li><a href="/item/show/pro_guarantee">投资者权益保障</a></li>
					</ul>
        		</li>
        		<li><a  <?php if(isset($curr) && $curr == "about") echo 'class="acitve"';?> href="/item/show/about_us">公司资质</a>
					<ul>
						<li><a href="/item/show/about_us">公司简介</a></li>
						<li><a target="_blank" href="/item/show/about_advantage">民泰优势</a></li>
						<li><a href="/item/show/about_license">资质证书</a></li>
						<li><a href="/news/media">媒体报道</a></li>
						<li><a href="/item/show/about_mcx">关于交易所</a></li>
					</ul>
        		</li>
        		<li><a  <?php if(isset($curr) && $curr == "research") echo 'class="acitve"';?> href="/item/show/research_analyst">民泰研究所</a>
					<ul>
						<li><a target="_blank" href="/item/show/research_analyst">明星团队</a></li>
						<li><a href="/news/more/1">原创研究</a></li>
						<li><a href="/news/more/2">盘面播报</a></li>
						<li><a href="/news/more/3">分析评论</a></li>
						<li><a href="/news/more/4">市场要闻</a></li>
						<li><a href="/item/show/research_price">行情中心</a></li>
					</ul>
        		</li>
        		<li><a  <?php if(isset($curr) && $curr == "guide") echo 'class="acitve"';?> href="/item/show/guide_guide">新手指南</a>
					<ul>
						<li><a href="/item/show/guide_guide">新手入门</a></li>
						<li><a href="/item/show/guide_variety">开户指南</a></li>
						<li><a href="/item/show/guide_notice">交易须知</a></li>
						<li><a href="/item/show/guide_imitate">注册模拟帐户</a></li>
					</ul>
        		</li>
        		<li><a  <?php if(isset($curr) && $curr == "xy") echo 'class="acitve"';?> href="/news/morexy/9">贵金属学院</a>
					<ul>
						<li><a href="/news/morexy/9">投资入门</a></li>
						<li><a href="/news/morexy/10">投资技巧</a></li>
						<li><a href="/news/morexy/11">名师指导</a></li>
						<li><a href="/news/morexy/12">常见问题</a></li>
					</ul>
        		</li>
        		<li><a  <?php if(isset($curr) && $curr == "sd") echo 'class="acitve"';?> href="/item/show/sd_download">软件下载</a>
					<ul>
						<li><a href="/item/show/sd_download">软件下载</a></li>
						<li><a href="/item/show/sd_video">软件操作视频</a></li>
					</ul>
        		</li>
        		<li><a  <?php if(isset($curr) && $curr == "app") echo 'class="acitve"';?> target="_blank" href="/item/show/app_ios">手机交易</a>
					<ul>
						<li><a target="_blank" href="/item/show/app_ios">IOS版下载</a></li>
						<li><a target="_blank" href="/item/show/app_android">Android版下载</a></li>
					</ul>
        		</li>
        		<li><a  <?php if(isset($curr) && $curr == "media") echo 'class="acitve"';?> href="/news/media_news">媒体报道</a>
					<ul>
						<li><a href="/news/media_news">媒体报道</a></li>
					</ul>
        		</li>
        		<li><a  <?php if(isset($curr) && $curr == "online") echo 'class="acitve"';?> href="/item/show/online_userform">在线咨询</a>
					<ul>
						<li><a href="/item/show/online_userform">咨询建议</a></li>
						<li><a href="/item/show/online_account">预约开户</a></li>
						<li><a href="/item/show/online_variety">开户流程</a></li>
						<li><a href="/item/show/online_tutor">签约辅导</a></li>
						<li><a href="/news/wt_news">常见问题</a></li>
					</ul>
        		</li>
        	</ul>
        </nav>

    </header>
</div><!-- //header -->



<div id="container" class="gridsystem cf">
	<div class="mt-10 mb-12 cf">
		<div class="ansys-swf fl">
		    <object id="flashSeg" data="/resources/template/images/ansys/ansys.swf" type="application/x-shockwave-flash" width="510" height="360">             
				<param name="movie" value="/resources/template/images/ansys/ansys.swf" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#ffffff" />
				<param name="allowScriptAccess" value="sameDomain" />
				<param name="allowFullScreen" value="true" />
				<param name="wmode" value="transparent"/>
			</object>
		</div>
		<div class="ansys-login fr">
			<table width="100%" cellspacing="0" cellpadding="0" border="0" class="softintro">
		  		<tr>
		    		<td valign="top" height="36" id="SoftTitle" class="pngfix"><img alt="" src="/resources/template/images/ansys/title.png"></td>
		  		</tr>
				<tr>
					<td height="54" id="SoftTitle2">
						<table width="100%" cellspacing="0" cellpadding="0" border="0">
							<tr>
							    <td>
							    	<table width="100%" cellspacing="0" cellpadding="0" border="0">
								      <tr class="softintro">
								        <td height="20">最新版本：<span style="color:Blue">7.07.10.50</span>&nbsp;&nbsp;&nbsp;&nbsp;软件大小：5.43MB</td>
								      </tr>
								      <tr class="softintro">
								        <td height="20">更新日期：<span style="color:green">2012-07-13</span></td>
								      </tr>
								      <tr class="softintro">
								        <td height="20">运行环境：Win XP / Win7 / 2003 / Vista / Win8</td>
								      </tr>
								    </table>
								</td>
								<td width="160">
									<a target="_blank" href="http://pan.baidu.com/share/link?shareid=79005&amp;uk=2181346185">
										<img width="108" height="42" src="/resources/template/images/ansys/download_btn.jpg">
									</a>
								</td>
							</tr>
						</table>
					</td>
				</tr>
	    	</table>
	    	<div class="ansys-loginbox">
				<a name="reg"></a>
	        	<div style="height:30px; line-height:30px; background:#EFEFEF; padding-left:8px; font-size:14px;">免费获取账号密码</div>
	            <div class="phone">
					<form action="/register/mintaiReg" method="post">
	                <div><span class="title">姓&nbsp;&nbsp;&nbsp;名：</span><span class="cone"><input type="text" class="input-txt" id="ContentPlaceHolder1_username" name="name"></span></div>
	                <div><span class="title">手机号码：</span><span class="cone"><input type="text" maxlength="11" class="input-txt" id="ContentPlaceHolder1_mobilePhone" name="phone"></span></div>

				                  <input type="hidden" value="银如意-4" id="id" name="type">
	                <div style="line-height:22px; padding:10px 15px;">&nbsp;&nbsp;&nbsp;&nbsp;请注意填写真实手机号码，以便接收账号密码以及在您忘记账号密码后可以通过点击找回密码，我们系统将给您重新发送账号密码短信</div>
	                <div style="text-align:center; padding: 20px 0;">
	                <input type="submit" class="button" id="ContentPlaceHolder1_Button3" value="提交" name="ctl00$ContentPlaceHolder1$Button3"></div>
					</form>
							<?php
								if($this->session->flashdata('success'))
								{
									echo "<br/><span style='color:red;'>" . $this->session->flashdata('success') . "</span>";		
								}
							?>

	        	</div>
            </div>
		</div>
	</div><!-- //top -->

	<div class="smod css3">
		<div class="shd">
			<h2>手机行情下载</h2>
			<span>全国唯一天通金在线交易，买卖建仓平仓更便捷。</span>
		</div>
		<div class="sbd cf">
			<div class="phone-wrap">
				<a target="_blank" href="/WEB/MobileApp_ios.html"><img src="/resources/template/images/ansys/ios_banner.jpg" /></a>
				<a target="_blank" href="/WEB/MobileApp_android.html"><img src="/resources/template/images/ansys/android_banner.jpg" /></a>
			</div>
		</div>
	</div><!-- //smod -->

	<div class="ad-ansys cf">
		<img src="/resources/template/images/ansys/ad-ansys.jpg" alt="ad" />
	</div>

	<div class="smod css3 mb-20">
		<div class="shd">
			<h2>软件简介</h2>
			<span><a href="#">赚钱你拿走，亏钱我买单，做模拟交易，赢百万实盘</a></span>
		</div>
		<div class="soft-info sbd">
			民泰银行如意行情资讯终端集成国内外贵金属行情、外汇指数、彭博路透实时资讯，民泰研究所在线实时解盘，分析师互动于一身，是民泰贵金属实盘客户服务平台，让您可以在看行情的同时，活的最实时的信息资讯，以及操作策略。【民泰贵金属实盘客户请勿注册，实盘客户软件平台拥有更高权限，可以直接与专属分析师进行在线交流，实盘客户账号密码，民泰贵金属客服部将给您单独分配】
		</div>
	</div><!-- //smod -->

	<div class="smod css3 mb-20">
		<div class="shd">
			<h2>系统特点</h2>
		</div>
		<div class="sfeature-pic sbd cf">
			<img src="/resources/template/images/ansys/c1.jpg" alt="c1" />
			<img src="/resources/template/images/ansys/c2.jpg" alt="c2" />
			<img src="/resources/template/images/ansys/c3.jpg" alt="c3" />
			<img src="/resources/template/images/ansys/c4.jpg" alt="c4" />
			<img src="/resources/template/images/ansys/c5.jpg" alt="c5" />
			<img src="/resources/template/images/ansys/c6.jpg" alt="c6" />
		</div>
	</div><!-- //smod -->

	<div class="smod css3">
		<div class="shd">
			<h2>如何在银如意中直接启动交易软件</h2>
		</div>
		<div class="step-pic sbd cf">
			<img src="/resources/template/images/ansys/step1.jpg" width="450" height="220" alt="step1" />
			<img src="/resources/template/images/ansys/step2.jpg" width="424" height="220" alt="step2" />
			<img src="/resources/template/images/ansys/step3.jpg" width="424" height="180" alt="step3" />
			<img src="/resources/template/images/ansys/step4.jpg" width="424" height="180" alt="step4" />
			<img src="/resources/template/images/ansys/step5.jpg" width="424" height="150" alt="step5" />
			<img src="/resources/template/images/ansys/step6.jpg" width="424" height="150" alt="step6" />
		</div>
	</div><!-- //smod -->

</div><!-- //container -->


<?php
	$this->load->view('_footer');
?>



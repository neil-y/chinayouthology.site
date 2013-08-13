<!DOCTYPE HTML>
<!--[if IE 6]><html class="ie6 ielt9 no-css3 no-js lte7" lang="en" dir="ltr"><![endif]-->
<!--[if IE 7]><html class="ie7 ielt9 no-css3 no-js lte7" lang="en" dir="ltr"><![endif]-->
<!--[if IE 8]><html class="ie8 ielt9 no-css3 no-js" lang="en" dir="ltr"><![endif]-->
<!--[if IE 9]><html class="ie9 ielt9 no-css3 no-js" lang="en" dir="ltr"><![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8) | !(IE 9) ]><!--><html lang="en" dir="ltr" class="no-js"><!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>操盘密码 - 民泰经典操盘线 - 民泰贵金属</title>
<link rel="shortcut icon" href="/resources/template/favicon.ico" />
<link rel="stylesheet" href="/resources/template/css/reset.css" />
<link rel="stylesheet" href="/resources/template/css/public.css" />
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
<style>
body {
	background: url(/resources/template/images/bg-body.png) repeat-x center top #F3F3F3;
}
.s-table {
	width: 100%;
}
.s-footer a {
	color: #000;
}
.input {
    width: 158px;
    border: solid 0px;
    height:24px;
    line-height:24px;
}
</style>
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
<script>
function checkForm() {
    if (document.getElementById("tb_name").value == "") {
        alert("姓名不能为空！");
        return false;
    }

    if (document.getElementById("tb_phone").value == "") {
        alert("电话不能为空！");
        return false;
    }
    else {
        if (!(/^(13[0-9]|15[0-9]|18[0-9])\d{8}$/.test($("#tb_phone").val()))) {
            alert("手机号有误!");
            return false;
        }
    }

	var reg_form = document.getElementById("reg_form");
	reg_form.submit();
}
</script>
</head>
<body>
<style>
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


<div class="wrapper cf">
	<div id="container" class="gridsystem cf">
		
		<table class="s-table">
        	<tr>
            	<td style="background:url(/resources/template/images/trader/banner2.jpg) no-repeat left top; height:368px;" valign="top">
					<table cellpadding="0" cellspacing="0" width="100%" align="center">
						<form action="/register/tryReg" method="post" id="reg_form">
	                    <tr>
	                        <td height="176" width="145">&nbsp;</td>
	                        <td valign="top">
	                            <table cellpadding="0" cellspacing="0" width="100%">
	                                <tr>
	                                    <td height="38" width="290">&nbsp;</td>
	                                    <td>&nbsp;</td>
	                                    <td width="36">&nbsp;</td>
	                                </tr>
	                                <tr>
	                                    <td height="25">&nbsp;</td>
	                                    <td align="center"><a href="/" target="_blank" style="font-size:14px;">贵金属手机行情、模拟交易、实盘喊单--访问民泰官方网站，解决您所有交易问题</a></td>
	                                    <td>&nbsp;</td>
	                                </tr>
	                            </table>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td height="32">&nbsp;</td>
							<td height="30">
						<input id="tb_name" name="name" class="input" type="text" /></td>
	                    </tr>
	                    <tr>
							<td height="44">&nbsp;</td><td>
<input name="type" type="hidden" value="BS指标-2" class="input" type="text" />
<input id="tb_phone" name="phone" class="input" type="text" /></td>
							  <input type="hidden" name="refer" value="<?php echo $refer;?>"/>
							  <input type="hidden" name="host_refer" value="<?php echo $host_refer;?>"/>

	                    </tr>
	                    <tr>
	                        <td height="85" colspan="2" valign="bottom">
	                        	<table cellpadding="0" cellspacing="0" width="83%" align="center" style="margin:auto;">
	                                <tr>
										<td height="93"><input type="image" name="ctl00$ContentPlaceHolder1$btn_ok" id="ContentPlaceHolder1_btn_ok" src="/resources/template/images/trader/ok.png" onclick="return checkForm();" />
</td>
	                            	</tr>
	                            </table>
	                        </td>
	                    </tr>
	                    <tr>
	                    	<td height="19"></td><td height="19"><a href="http://166mintai.com/news/xyshow/763" target="_blank" style="width:160px; height:19px; display:block;"></a></td>  
	          			</tr>
					</form>
	            	</table>
            	</td>
        	</tr>
    	</table>
	    <table class="s-table">
	        <tr>
				<td>
							<?php
								if($this->session->flashdata('success'))
								{
									echo "<br/><span style='color:red;'>" . $this->session->flashdata('success') . "</span><br/><br/>";		
								}
								else
								{
									?>
<img alt="" src="/resources/template/images/trader/1.jpg" />
									<?php
								}
							?>
	            </td>
	        </tr>
	        <tr>
	            <td><img alt="" src="/resources/template/images/trader/2.jpg" /></td>
	        </tr>
	        <tr>
	            <td><img alt="" src="/resources/template/images/trader/3.jpg" /></td>
	        </tr>
	        <tr>
	            <td><img alt="" src="/resources/template/images/trader/4.jpg" /></td>
	        </tr>
	    </table>

	</div><!-- //container -->
</div><!-- //main -->
<?php
	$this->load->view("_footer");
?>

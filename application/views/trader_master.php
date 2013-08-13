<!DOCTYPE HTML>
<!--[if IE 6]><html class="ie6 ielt9 no-css3 no-js lte7" lang="en" dir="ltr"><![endif]-->
<!--[if IE 7]><html class="ie7 ielt9 no-css3 no-js lte7" lang="en" dir="ltr"><![endif]-->
<!--[if IE 8]><html class="ie8 ielt9 no-css3 no-js" lang="en" dir="ltr"><![endif]-->
<!--[if IE 9]><html class="ie9 ielt9 no-css3 no-js" lang="en" dir="ltr"><![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8) | !(IE 9) ]><!--><html lang="en" dir="ltr" class="no-js"><!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>吹响操盘高手集结号！百万实盘资金等你拿！ - 民泰贵金属</title>
<link rel="shortcut icon" href="/resources/template/favicon.ico" />
<link rel="stylesheet" href="/resources/template/css/reset.css" />
<link rel="stylesheet" href="/resources/template/css/public.css" />
<!--[if IE]>
<script src="/resources/template/js/ie/html5.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<style type="text/css">.css3{behavior: url(js/ie/css3.htc);-pie-lazy-init: true; position: relative;}.ie6png{-pie-png-fix: true;}</style>
<script src="/resources/template/js/ie/ie9.js"></script>
<![endif]-->
<!--[if IE 6]>
<script src="/resources/template/js/ie/png.js"></script>
<script>DD_belatedPNG.fix('.pngfix, .pngfix img');</script>
<![endif]-->
<style>
body {
	background: url(/resources/template/images/tradermaster/bg-body.jpg) no-repeat center -60px #fff;
}
#nav {
	border: 1px solid #CBA57E;
	border-radius: 3px;
}
.s-table {
	width: 100%;
}
.input { 
	border:solid 1px #ccc; 
	height: 22px; 
	line-height: 22px; 
	width: 140px;
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
<script type="text/javascript">
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
		<form action="/register/simReg" method="post" id="reg_form">	
		<table class="s-table">
	      <tr>
	        <td height="333" valign="top">
	            <br />
	          </td>
	      </tr>
	      <tr>
	        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
	          <tr>
	            <td width="555" valign="top" style="background:url(/resources/template/images/tradermaster/input.png) no-repeat;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	              <tr>
	                <td width="105" height="50">&nbsp;</td>
	                <td width="45">姓名：</td>
	                <td width="155"><input name="name" type="text" class="input" id="tb_name" /></td>
	                <td width="80">手机号码：</td>
	                <td><input name="phone" type="text" class="input" id="tb_phone" />
							  <input type="hidden" name="refer" value="<?php echo $refer;?>"/>
							  <input type="hidden" name="host_refer" value="<?php echo $host_refer;?>"/>

	                <input type="hidden" name="type" value="百万实盘-3" class="input"/></td>
	              </tr>
	            </table></td>
				<td><input type="image" name="ctl00$ContentPlaceHolder1$btn_ok" id="ContentPlaceHolder1_btn_ok" src="/resources/template/images/tradermaster/btn.png" onclick="return checkForm();" />
							<?php
								if($this->session->flashdata('success'))
								{
									echo "<br/><span style='color:red;'>" . $this->session->flashdata('success') . "</span>";		
								}
							?>

</td>
	          </tr>
	        </table></td>
	      </tr>
	      <tr>
	        <td height="50">&nbsp;</td>
	      </tr>
		</form>
	    </table>
	    <table class="s-table">
	      <tr>
	        <td><img src="/resources/template/images/tradermaster/title1.png" width="329" height="28" /></td>
	      </tr>
	      <tr>
	        <td style="line-height:26px; font-family:微软雅黑;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;民泰贵金属是天津贵金属交易所166号综合会员，您可以把民泰理解为黄金、白银等贵金属交易的券商，民泰为广大投资者提供贵金属交易平台。民泰贵金属独家推出百万实盘活动，让您通过模拟交易学习贵金属投资，由于是模拟交易，您完全不用付出一分钱就能快速了解并且学习贵金属交易。（模拟交易除了资金，其他均和实盘一致）。</td>
	      </tr>
	      <tr>
	        <td>&nbsp;</td>
	      </tr>
	      <tr>
	        <td><img src="/resources/template/images/tradermaster/title7.png" width="209" height="28" /></td>
	      </tr>
	      <tr>
	        <td style="line-height:26px; font-family:微软雅黑;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T+0交易，每天能够把握机会多，不设涨跌停板，正常每日的波动幅度存在50%以上的获利空间。能够见价成交，不论单量和资金量，不存在买不到卖不出的情况。多空双向交易，无论牛熊只要有波动就有获利机会。资金银行三方托管，安全有保障。PC、手机交易均可，可挂单止盈止损，风险易控制。</td>
	      </tr>
	      <tr>
	        <td>&nbsp;</td>
	      </tr>
	      <tr>
	        <td><img src="/resources/template/images/tradermaster/title2.png" width="153" height="28" /></td>
	      </tr>
	      <tr>
	        <td style="line-height:26px; font-family:微软雅黑;">1.   凡年满18岁的中华人民共和国公民都可报名参加。参赛者无需交纳任何费用。为了体现参赛者身份的唯一性以及确认入围决赛的参赛者的资格，同一身份证号码只能注册1个模拟帐号。<br />
	          2.   初赛参赛者可获得10万元人民币虚拟资金作为起始标准，通过民泰贵金属提供的交易系统进行模拟交易。在模拟期间不得进行模拟资金的出入金操作，当完成了5个交易日不少于40手的标准手（15KG）交易（建平仓为一手，迷你手15手为1手标准手），收益率达到30%，我们将赠送300元的手机话费，直接充值至您注册的手机号码。<br />
	          3.     为了让每一位参赛者都能够及时、准确、熟练地掌握白银买卖操作，主办方会不定期通过电子邮件或电话回访每位参赛者的参赛情况。<br />
	        4.   主办方拥有对本次大赛活动规则和交易规则（按照&rdquo;天通银&rdquo;交易规则执行）的最终解释权。</td>
	      </tr>
	      <tr>
	        <td style="line-height:26px; font-family:微软雅黑; color:red;" align="center">所有参赛者必须同意上述所有条款，方可以参加本次大赛并具备获奖资格。每个身份证号只能参加一次。</td>
	      </tr>
	      <tr>
	        <td>&nbsp;</td>
	      </tr>
	      <tr>
	        <td><img src="/resources/template/images/tradermaster/title9.png" alt="" width="153" height="28" /></td>
	      </tr>
	      <tr>
	        <td style="line-height:26px; font-family:微软雅黑;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;完成了5个交易日不少于40手的标准手（15KG）交易（建平仓为一手，迷你手15手为1手标准手），收益率达到30%，获得我们赠送300元的手机话费的投资者，可联系我们的客服进入实盘复赛，我们的客服会协助您开立实盘账户。在实盘交易中达到以下要求的投资者即可联系民泰贵金属客服部进行成绩核对。获得百万实盘资金账号！ 
	            <br />
	            1.&nbsp; 起始资金为20万，在比赛期间不得出入金，当完成了30个交易日不少于400手的标准手（15KG）交易（建平仓为一手，迷你盘15手为1手标准手），且收益率100%以上 
	            <br />
	            2.&nbsp; 起始资金为40万，在比赛期间不得出入金，当完成了30个交易日不少于500手的标准手（15KG）交易（建平仓为一手，迷你盘15手为1手标准手），且收益率95%以上 
	            <br />
	            3.&nbsp; 起始资金为60万，在比赛期间不得出入金，当完成了30个交易日不少于600手的标准手（15KG）交易（建平仓为一手，迷你盘15手为1手标准手），且收益率90%以上 
	            <br />
	            4.&nbsp; 起始资金为80万，在比赛期间不得出入金，当完成了30个交易日不少于700手的标准手（15KG）交易（建平仓为一手，迷你盘15手为1手标准手），且收益率85%以上 
	            <br />
	            5.&nbsp; 起始资金为100万，在比赛期间不得出入金，当完成了30个交易日不少于800手的标准手（15KG）交易（建平仓为一手，迷你盘15手为1手标准手），且收益率80%以上 </td>
	      </tr>
	      <tr>
	        <td style="line-height:26px; font-family:微软雅黑; color:red;" align="center">所有参赛者必须同意上述所有条款，方可以参加本次大赛并具备获奖资格。每个身份证号只能参加一次。</td>
	      </tr>
	      <tr>
	        <td>&nbsp;</td>
	      </tr>
	      <tr>
	        <td bgcolor="#FAF3E4"><img src="/resources/template/images/tradermaster/title4.png" width="192" height="28" /></td>
	      </tr>
	      <tr>
	        <td bgcolor="#FAF3E4" style="line-height:26px; font-family:微软雅黑;">1. 由民泰贵金属提供百万资金的实盘账号，出入金密码由民泰贵金属掌握，获奖者只有该账号的操作权。<br />
	        2. 获奖者将获得该百万实盘资金账号的30个交易日的操作权，在此30个交易日内必须交易满1000手的标准手（15KG）交易（建平仓为一手，迷你手15手为1手标准手），30个交易日的操作结束后，如果百万实盘资金账号产生盈利，扣除税费后，投资者可以获得所有盈利，如果出现亏损，投资者不承担责任。</td>
	      </tr>
	      <tr>
	        <td height="225" align="center" bgcolor="#FAF3E4"><img src="/resources/template/images/tradermaster/pic.jpg" width="712" height="195" /></td>
	      </tr>
	      <tr>
	        <td>&nbsp;</td>
	      </tr>
	      <tr>
	        <td bgcolor="#E8F4FF"><img src="/resources/template/images/tradermaster/title8.png" alt="" width="291" height="28" /></td>
	      </tr>
	      <tr>
	        <td height="40" bgcolor="#E8F4FF"><a href="/WEB/ArticleShow.aspx?ID=38312" target="_blank" style="font-weight:bold;">恭喜实盘客户刘先生QE3一夜斩获30万！</a></td>
	      </tr>
	      <tr>
	        <td>&nbsp;</td>
	      </tr>
	      <tr>
	        <td><img src="/resources/template/images/tradermaster/title5.png" width="153" height="28" /></td>
	      </tr>
	      <tr>
	        <td style="line-height:26px; font-family:微软雅黑;">1. 22小时交易，全国交易时间最长，无开户门槛，资金为0也可以开户。 
	            <br />
	            2. 双向交易，多空均可获利。 
	            <br />
	            3. T+0交易，增加获利机会，降低风险。 
	            <br />
	            4. 5%-18%的保证金交易，5-20倍杠杆，资金利用率高。 
	            <br />
	            5. 无交割时间限制，可长期持仓。 
	            <br />
	            6. 可提取黄金白银实物，随时接受回购。 
	            <br />
	            7. 国际市场报价，无庄家操控。 
	            <br />
	            8. 资金银行第三方托管，可靠安全。 
	            <br />
	            9. 网上交易，手机交易，操作简单便捷。 
	            <br />
	            10. 国内交易机制最灵活，杠杆最大的合法贵金属交易服务平台。 
	            <br />
	            11. 波动幅度大，获利空间大，每日正常波动幅度100-200元，日内潜在获利空间20%-40%。 
	            <br />
	            12. 交易成本方面，纸白银交易成为0.04元/克，天通银手续费为合约总价值的万分之8，双向收取，点差为1千克10元！按照6000元/千克计算，天通银的交易成本为0.0196元/克！上海TD的手续费为单边万9-万18，相较之下，天通银的交易成本是最低的！ 天通银的交易成本是最低的！ </td>
	      </tr>
	      <tr>
	        <td>&nbsp;</td>
	      </tr>
	    </table>

	</div><!-- //container -->
</div><!-- //main -->
	<?php
		$this->load->view("_footer");
	?>

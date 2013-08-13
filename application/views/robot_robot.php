<!DOCTYPE HTML>
<!--[if IE 6]><html class="ie6 ielt9 no-css3 no-js lte7" lang="en" dir="ltr"><![endif]-->
<!--[if IE 7]><html class="ie7 ielt9 no-css3 no-js lte7" lang="en" dir="ltr"><![endif]-->
<!--[if IE 8]><html class="ie8 ielt9 no-css3 no-js" lang="en" dir="ltr"><![endif]-->
<!--[if IE 9]><html class="ie9 ielt9 no-css3 no-js" lang="en" dir="ltr"><![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8) | !(IE 9) ]><!--><html lang="en" dir="ltr" class="no-js"><!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>华尔街算法，机器人喊单 - 民泰贵金属</title>
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
	background: url(/resources/template/images/robot/bg-body.jpg) no-repeat center -65px #22ADEE;
}
#nav {
	border: 1px solid #CBA57E;
	border-radius: 3px;
}
.s-table {
	width: 100%;
}
p {
    font-family: "微软雅黑";
    font-size: 16px;
    list-style: none outside none;
    margin: 0;
    padding: 0;
}
a {
    color: #333333;
    text-decoration: none;
}
a:hover {
    color: #CC3300 !important;
    text-decoration: none;
}
.top {
    color: #810000;
    font-size: 18px;
}
.toptel {
    background: url("/resources/template/images/telbg.jpg") no-repeat scroll center top transparent;
    color: #FFFFFF;
    font-size: 18px;
}
.topjj {
    color: #000000;
    font-size: 16px;
    line-height: 30px;
}
.topmfty {
    color: #000000;
    font-size: 18px;
    line-height: 29px;
}
.step {
    color: #810000;
    font-size: 15px;
    line-height: 25px;
}
.sjxx {
    color: #000000;
    font-size: 16px;
    line-height: 25px;
}
.ask {
    color: #FFFFFF;
    font-size: 18px;
    line-height: 29px;
}
.hzhb {
    color: #000000;
    font-size: 14px;
    line-height: 20px;
}
.inputText {
    border: 1px solid #7F9DB9;
    height: 20px;
    line-height: 20px;
    padding: 1px;
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

	<table class="s-table">
	  <tr>
	    <td height="210">&nbsp;</td>
	  </tr>
	  <tr>
	    <td valign="top" height="345" align="center">
	    	<table width="980" cellspacing="0" cellpadding="0" border="0">
	      <tbody><tr>
	        <td width="39" valign="top" align="left" rowspan="2">&nbsp;</td>
	        <td width="482" valign="top" align="left" rowspan="2"><table width="100%" cellspacing="0" cellpadding="0" border="0">
	          <tbody><tr>
	            <td valign="top" height="345" align="left" class="topjj"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;全球的金融中心在美国，美国的金融中心在华尔街，算法交易作为华尔街主要的投资手段，已经给世界各地资本市场带来了冲击。<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 数据显示，2006年就有71%的基金经理和93%的对冲基金使用算法交易，在美国之外，德国约有40%的贵金属交易都是算法交易商进行的。在中国，我们是算法交易的鼻祖，开辟了新的投资理念。
	<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;交易的本质是为人性弱点设置的游戏，你是否经常被贪恋或恐惧所左右？你是否被经常被市场搞得摸不清头脑而破罐子破摔?你是否爆仓多次却仍找不到好的蹊径？民泰贵金属引进华尔街先进数据模型，全自动电脑程序指令和交易，助你克服人性弱点，成为交易赢家（我们提供TD，纸金银，现货金银，伦敦金银、主流外汇品种喊单策略）
	。</p></td>
	          </tr>
	        </tbody></table></td>
	        <td width="449" height="194">&nbsp;</td>
	        <td width="10" rowspan="2">&nbsp;</td>
	      </tr>
	      <tr>
	        <td valign="top" align="right">
	        	<table width="409" >
				  <tr>
				    <td align="center">
				    	<script>
				           function CheckPl(obj) {
				               if (obj.saytext.value == "") {
				                   alert("请填写您的手机号码");
				                   obj.saytext.focus();
				                   return false;
				               }
				               return true;
				           }
					  </script>
				          <table width="372" cellspacing="2" cellpadding="0" border="0" class="topmfty">
							<form action="/register/experienceReg" method="post" id="reg_form">
				          	<tr>
								<a name="reg"></a>
				              <td width="82" height="35" align="left" style="font-size:16px; font-family:'微软雅黑';">姓&nbsp; &nbsp; &nbsp;&nbsp;名：</td>
				              <td align="left" colspan="3"><input type="text" size="20" id="tb_name" class="inputText" name="name"></td>
				              <td width="110" valign="middle" align="center" rowspan="3">
				                  <input type="image" onclick="return checkForm();" src="/resources/template/images/robot/mftyan.jpg" id="ContentPlaceHolder1_btn_ok" name="ctl00$ContentPlaceHolder1$btn_ok">
				                  <input type="hidden" value="机器人-1" id="id" name="type">
				            </tr>
				            <tr>
				              <td height="35" align="left" style="font-size:16px; font-family:'微软雅黑';">手机号码：</td>
							  <td align="left" colspan="3"><input type="text" size="20" value="" id="tb_phone" class="inputText" name="phone">
							  <input type="hidden" name="refer" value="<?php echo $refer;?>"/>
							  <input type="hidden" name="host_refer" value="<?php echo $host_refer;?>"/>
								</td>
				            </tr>
				            <tr>
							  <td height="20" align="left" style="font-size:12px; font-family:'微软雅黑'; text-align:center;" colspan="4">请填写真实手机号码以便接收短信
							<?php
								if($this->session->flashdata('success'))
								{
									echo "<br/><span style='color:red;'>" . $this->session->flashdata('success') . "</span>";		
								}
							?>
							</td>
				              </tr>
								</form>
				          </table>
				    </td>
				  </tr>
				</table>
			</td>
	      </tr>
	    </table></td>
	  </tr>
	</table>
	<table class="s-table">
	  <tbody><tr>
	    <td valign="top" height="" align="center"><table width="980" cellspacing="0" cellpadding="0" border="0">
	      <tbody><tr>
	        <td width="470" height="">&nbsp;</td>
	      </tr>
	      <tr>
	        <td width="470" valign="top" height="160" align="left"><table width="790" cellspacing="0" cellpadding="0" border="0">
	          <tbody><tr>
	            <td width="66">&nbsp;</td>
	            <td width="724" height="160">
	            	<div style="overflow:hidden;height:160px;width:725px;" id="colee">
		              <div id="colee1">
		                <p><img width="725" src="/resources/template/images/robot/zjjl.jpg" /></p>
		                <p><img width="725" src="/resources/template/images/robot/zjjl.jpg" /></p>
		              </div>
		              <div id="colee2">
		                <p><img width="725" src="/resources/template/images/robot/zjjl.jpg" /></p>
		                <p><img width="725" src="/resources/template/images/robot/zjjl.jpg" /></p>
		              </div>
		            </div>
	                <script>
                        var speed = 50;
						var colee2 = document.getElementById("colee2");
						var colee1 = document.getElementById("colee1");
						var colee = document.getElementById("colee");
						colee2.innerHTML = colee1.innerHTML; //克隆colee1为colee2
						function Marquee1() {
						//当滚动至colee1与colee2交界时
						if (colee2.offsetTop - colee.scrollTop <= 0) {
						colee.scrollTop -= colee1.offsetHeight; //colee跳到最顶端
						} else {
						colee.scrollTop++
						}
						}
						var MyMar1 = setInterval(Marquee1, speed)//设置定时器
						//鼠标移上时清除定时器达到滚动停止的目的
						colee.onmouseover = function () { clearInterval(MyMar1) }
						//鼠标移开时重设定时器
						colee.onmouseout = function () { MyMar1 = setInterval(Marquee1, speed) }
	  				</script>
	                <!--向上滚动代码结束-->
            	</td>
	          </tr>
	        </tbody></table></td>
	      </tr>
	    </tbody></table></td>
	  </tr>
	</tbody>
	</table>

	<table class="s-table">
		  <tbody><tr>
		    <td valign="top" height="" align="center"><table width="980" cellspacing="0" cellpadding="0" border="0">
		      <tbody><tr>
		        <td height="30" colspan="2">&nbsp;</td>
		      </tr>
		      <tr>
		        <td width="719" valign="top" height="" align="left"><table width="683" cellspacing="0" cellpadding="0" border="0" class="step">
		  <tbody><tr>
		    <td width="52" height="203">&nbsp;</td>
		    <td width="282" valign="top" align="left"><table width="100%" cellspacing="0" cellpadding="0" border="0">
		    <tbody>
		        <tr>
		            <td width="52%" valign="top" height="119" align="left">
		            <table width="100%" cellspacing="0" cellpadding="0" border="0">
		                <tbody>
		                    <tr>
		                        <td align="left">语义定量计算技术<br>
		                        垂直语义爬虫技术<br>
		                        实时智能分析技术</td>
		                    </tr>
		                </tbody>
		            </table>
		            </td>
		            <td width="48%" valign="top" align="left">
		            <table width="100%" cellspacing="0" cellpadding="0" border="0">
		                <tbody>
		                    <tr>
		                        <td>百万份析报告<br>
		                        上万名注册分析师<br>
		                        数十家投资机构<br>
		                        全部贵金属类网站<br>
		                    	数据挖掘分析</td>
		                    </tr>
		                </tbody>
		            </table>
		            </td>
		        </tr>
		    </tbody>
		</table></td>
		    <td valign="top" align="left"><table width="349" cellspacing="0" cellpadding="0" border="0" class="step">
		    <tbody>
		        <tr>
		            <td width="146" valign="top" height="203" align="left">
		            <table width="100%" cellspacing="0" cellpadding="0" border="0">
		                <tbody>
		                    <tr>
		                        <td align="right">交易数据比对模型<br>
		                        贵金属ETF量化模型<br>
		                        多维量化统计模型<br>
		                        行业趋势判断模型<br>
		                        贵金属趋势判断模型<br>
		                        多空力度对比模型<br>
		                        时间序列计算模型<br>
		                        技术参数计算模型</td>
		                    </tr>
		                </tbody>
		            </table>
		            </td>
		            <td width="77">
		            <div style="display: none">&nbsp;</div>
		            </td>
		            <td width="126" valign="top" align="left">
		            <table width="100%" cellspacing="0" cellpadding="0" border="0">
		                <tbody>
		                    <tr>
		                        <td height="13">主力操作动向</td>
		                    </tr>
		                    <tr>
		                        <td>分析师准确率<br>
		                        分析师稳定性</td>
		                    </tr>
		                    <tr>
		                        <td>未来涨跌趋势</td>
		                    </tr>
		                    <tr>
		                        <td>明确卖点提示</td>
		                    </tr>
		                </tbody>
		            </table>
		            </td>
		        </tr>
		    </tbody>
		</table></td>
		  </tr>
		</tbody></table>
		</td>
		        <td width="261" align="left"><table width="100%" cellspacing="0" cellpadding="0" border="0">
		          <tbody><tr>
		            <td width="56%" valign="top" align="left" class="sjxx">
		            	<div>系统在4730点位发出买入信号，未来上涨概率达 85%，给予强力买入做多指令</div>
						<div>【民泰机器人】</div></td>
		          </tr>
		          <tr>
		            <td height="25">&nbsp;</td>
		            <td height="25">&nbsp;</td>
		            <td>&nbsp;</td>
		          </tr>
		        </tbody></table></td>
		      </tr>
		    </tbody></table></td>
		  </tr>
		</tbody>
		</table>

		<table class="s-table">
		  <tbody><tr>
		    <td valign="top" height="" align="center"><table class="s-table" style="font-size:12px;">
		      <tbody><tr>
		        <td height="" style=""></td>
		      </tr>
		      <tr>
		        <td valign="top" height="" align="center"><table width="914" cellspacing="0" cellpadding="0" border="0" align="center" class="ask">
		          <tbody><tr>
		            <td height="" background="">&nbsp;</td>
		          </tr>
		          <tr>
		            <td valign="top" align="left"><p>问：机器人喊单的信息每天什么时候能收到？<br>
		答：机器人喊单是结合多层次数据模型和行情波动，在最佳的点位发出入场离场信号，一旦出现信号便发出指令信息。</p></td>
		          </tr>
		          <tr>
		            <td height="43" background="http://www.agjia.com/agjia_ad/images/d.gif">&nbsp;</td>
		          </tr>
		          <tr>
		            <td valign="top" align="left"><p>问：机器人喊单与分析师喊单有什么区别？<br>
		答：机器人喊单主要有两大亮点，一是给投资者更多客观的下单依据，减少盲目主观臆断的成分，二是克服人性的弱点，增强执行力和风险控制能力。这也是大部分亏钱的主要因素。</p></td>
		          </tr>
		          <tr>
		            <td height="43" background="http://www.agjia.com/agjia_ad/images/d.gif">&nbsp;</td>
		          </tr>
		          <tr>
		            <td valign="top" align="left"><p>问：如何才能收到机器人喊单信息？<br>
		答：成为我们的实盘客户，便可免费定制机器人喊单服务，也可在上方填写免费体验申请，获得免费体验机会。</p></td>
		          </tr>
		          <tr>
		            <td height="43" background="http://www.agjia.com/agjia_ad/images/d.gif">&nbsp;</td>
		          </tr>
		        </tbody></table></td>
		      </tr>
		    </tbody></table></td>
		  </tr>
		</tbody>
		</table>

		<table class="s-table" style="background:url(images/robot/bg-footer.jpg) no-repeat;">
		  <tbody><tr>
		    <td valign="top" height="80" align="center"><table width="890" cellspacing="0" cellpadding="0" border="0">
		    <tbody>
		        <tr>
		        <td><img border="0" usemap="#Map" src="/resources/template/images/robot/bank.jpg">
		<map name="Map">
				<area target="_blank" href="/news/xyshow/348" coords="25,46,206,106" shape="rect">
				<area target="_blank" href="/news/xyshow/349" coords="270,45,450,105" shape="rect">
				<area target="_blank" href="/news/xyshow/350" coords="521,45,701,105" shape="rect">
				<area target="_blank" href="/news/xyshow/344" coords="778,45,958,105" shape="rect">
				<area target="_blank" href="/news/xyshow/343" coords="24,122,204,183" shape="rect">
				<area target="_blank" href="/news/xyshow/346" coords="269,122,450,182" shape="rect">
				<area target="_blank" href="/news/xyshow/351" coords="521,122,701,182" shape="rect">
				<area target="_blank" href="/news/xyshow/353" coords="778,123,960,183" shape="rect">
		</map></td>
		      </tr>
		    </tbody>
		</table>      <table width="890" cellspacing="0" cellpadding="0" border="0">
		  <tbody><tr>
		        <td height="60" align="center"><span style="line-height:22px; color:#999;">Copyright(C)2011-2012. <a style="color:#999;" title="民泰贵金属|黄金,白银,铂金,钯金贵金属现货交易" href="http://www.mintai166.com">166jin.com</a> ALL RIGHT RESERVED.<br>
		        <a style="color:#999;" target="_blank" href="http://www.miitbeian.gov.cn/">京ICP备13028347号-1</a>
		</span></td>
		      </tr>
		</tbody></table></td>
		  </tr>
		</tbody>
		</table>
</div><!-- //main -->
</body>
</html>

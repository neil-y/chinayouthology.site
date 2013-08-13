<?php
	$this->load->view("_header");
?>
<script>
/* study tree */
$(document).ready(function () {
	$('.study-list dl dd').hide();
	$('.study-list dl dt').hover(function(){$(this).addClass('hover')},function(){$(this).removeClass('hover')}).click(function(){
	$(this).next().slideToggle('normal');
	});

	$('.study-list .second-level ul').hide();
	$('.study-list .second-level h4').hover(function(){$(this).addClass('hover')},function(){$(this).removeClass('hover')}).click(function(){
	$(this).next().slideToggle('normal');
	});
});
</script>


<div class="main-wrap wrapper cf">
	<div id="container" class="gridsystem cf">
		<div class="container-wrap cf">

			<section class="grid-1 fl">
				<div class="topmenu">
					<dl>
						<dt>新手指南</dt>
						<dd class="active"><a href="guide.html">新手入门</a></dd>
						<dd><a href="guide-variety">开户指南</a></dd>
						<dd><a href="guide-notice.html">交易须知</a></dd>
						<dd><a href="invest-imitate.html">注册模拟帐户</a></dd>
					</dl>
				</div>
				<div class="sidebar-menu">
					<ul>
						<li class="ksdh1"><a href="#">预约开户</a></li>
						<li class="ksdh2"><a href="#">在线咨询</a></li>
						<li class="ksdh3"><a href="#">注册模拟账户</a></li>
						<li class="ksdh4"><a href="#">软件下载</a></li>
						<li class="ksdh5"><a href="#">培训预约表</a></li>
					</ul>
			    </div>
			</section><!-- /sidebar -->
				
			<section class="grid-4 fr">
				<div class="subbanner">
					<img src="/resources/template/images/tutorial.jpg" alt="新手指南" />
				</div>

				<div class="crumbs">
	            	本页位置：<a href="index.html">首页</a><span>&gt;&gt;</span><a href="guide.html">新手指南</a><span>&gt;&gt;</span>新手入门 
	            </div>
				
				<div class="mod3">
					<div class="hd3 cf">
						<h2 class="fl">贵金属市场入门讲义</h2>
					</div>
					<div class="content-wrap">

						<div class="study-list">
							<dl>
								<dt><h3>基础知识</h3></dt>
								<dd>
									<div class="second-level">
										<h4>黄金基础知识</h4>
										<ul>
										    <li><a href="#">认识黄金</a></li>
										    <li><a href="#">黄金的主要用途</a></li>
										    <li><a href="#">黄金的供给与需求</a></li></a></li>
										    <li><a href="#">黄金的历史功能演变</a></li>
										    <li><a href="#">黄金市场</a></li>
										    <li><a href="#">黄金价格走势</a></li>
										</ul>
									</div>
									<div class="second-level">
										<h4>白银基础知识</h4>
										<ul>
										    <li><a href="#">认识白银</a></li>
										    <li><a href="#">白银的供需</a></li>
										    <li><a href="#">白银的历史</a></li>
										    <li><a href="#">白银市场</a></li>
										    <li><a href="#">白银价格走势</a></li>
										</ul>
									</div>
								</dd>
								<dt><h3>国内常见投资工具</h3></dt>
								<dd>
									<ul class="first-level">
										<li><a href="#">白银的货币史</a></li>
										<li><a href="#">天津贵金属交易所品种</a></li>
										<li><a href="#">上海黄金交易所T+D</a></li>
										<li><a href="#">纸黄金与黄金股票</a></li>
										<li><a href="#">贵金属实物投资品种</a></li>
										<li><a href="#">黄金期货及其他投资渠道</a></li>
										<li><a href="#">各投资品种对比</a></li>
									</ul>
								</dd>
								<dt><h3>如何转战贵金属市场</h3></dt>
								<dd>
									<ul class="first-level">
										<li><a href="#">从股票到贵金属</a></li>
										<li><a href="#">从期货到贵金属</a></li>
										<li><a href="#">从外汇到贵金属</a></li>
									</ul>
								</dd>
								<dt><h3>六步轻松开始贵金属交易</h3></dt>
								<dd>
									<div class="second-level">
										<h4>熟悉交易规则</h4>
										<ul>
										    <li><a href="#">黄金交易规则</a></li>
										    <li><a href="#">白银交易规则</a></li>
										</ul>
									</div>
									<ul class="first-level">
										<li><a href="#">选择交易工具</a></li>
										<li><a href="#">如何选择交易商</a></li>
										<li><a href="#">如何开户及常见问题</a></li>
										<li><a href="#">安装交易和行情软件</a></li>
										<li><a href="#">注册并进行模拟交易</a></li>
									</ul>
								</dd>	
								<dt><h3>贵金属做市商之核心概念</h3></dt>
								<dd>
									<ul class="first-level">
										<li><a href="#">什么是贵金属做市商</a></li>
										<li><a href="#">认识做市商制度</a></li>
										<li><a href="#">津贵所相关名词解释</a></li>
									</ul>
								</dd>
								<dt><h3>黄金基本面分析</h3></dt>
								<dd>
									<div class="second-level">
										<h4>宏观经济</h4>
										<ul>
										    <li><a href="#">各国经济增长</a></li>
										    <li><a href="#">各国的货币政策</a></li>
										    <li><a href="#">通货膨胀因素</a></li>
										</ul>
									</div>
									<ul class="first-level">
										<li><a href="#">供需因素</a></li>
										<li><a href="#">政治因素</a></li>
										<li><a href="#">美元走势</a></li>
										<li><a href="#">原油价格</a></li>
										<li><a href="#">相关经济数据</a></li>
										<li><a href="#">市场情绪/心理</a></li>
									</ul>
								</dd>			
								<dt><h3>白银基本面分析</h3></dt>
								<dd>
									<ul class="first-level">
										<li><a href="#">经济形势</a></li>
										<li><a href="#">相关市场价格</a></li>
										<li><a href="#">投资需求</a></li>
									</ul>
								</dd>
								<dt><h3>看懂K线之K线入门</h3></dt>
								<dd>
									<div class="second-level">
										<h4>主要反转形态</h4>
										<ul>
										    <li><a href="#">锤子线和上吊线</a></li>
										    <li><a href="#">吞没形态</a></li>
										    <li><a href="#">乌云盖顶形态</a></li>
										</ul>
									</div>
									<div class="second-level">
										<h4>星线</h4>
										<ul>
										    <li><a href="#">启明星</a></li>
										    <li><a href="#">黄昏星形态</a></li>
										    <li><a href="#">十字黄昏启明星</a></li>
										    <li><a href="#">流星与倒锤子线</a></li>
										</ul>
									</div>
									<div class="second-level">
										<h4>其他反转形态</h4>
										<ul>
										    <li><a href="#">孕线形态</a></li>
										    <li><a href="#">十字孕线形态</a></li>
										    <li><a href="#">平头顶部（底部）</a></li>
										    <li><a href="#">向上跳空两只乌鸦</a></li>
										</ul>
									</div>
									<ul class="first-level">
										<li><a href="#">某些局限性</a></li>
										<li><a href="#">认识蜡烛图</a></li>
									</ul>
								</dd>
								<dt><h3>看懂K线之指标入门</h3></dt>
								<dd>
									<ul class="first-level">
										<li><a href="#">K线图与平均线</a></li>
										<li><a href="#">K线图与MACD</a></li>
										<li><a href="#">K线图与布林带</a></li>
										<li><a href="#">K线图与RSI</a></li>
										<li><a href="#">K线图与KDJ</a></li>
									</ul>
								</dd>
							</dl>
						</div>

					</div>	
		        </div>
			</section><!-- /content -->

		</div>	
	</div><!-- //container -->
</div><!-- //main -->

<?php
	$this->load->view("_footer");
?>


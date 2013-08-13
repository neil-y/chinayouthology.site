<?php
	$this->load->view('_header');
?>
<div class="main-wrap wrapper cf">
	<div id="container" class="gridsystem cf">
		<div class="container-wrap cf">
			<section class="grid-1 fl">
				<div class="topmenu">
					<dl>
						<dt>产品介绍</dt>
						<dd><a href="/item/show/pro_detail">产品详情</a></dd>
						<dd><a href="/item/show/pro_features">投资特点</a></dd>
						<dd><a href="/item/show/pro_trade">交易细则</a></dd>
						<dd class="active"><a href="/news/case_news">投资案例</a></dd>
						<dd><a href="/item/show/pro_guarantee">投资者权益保障</a></dd>
					</dl>
				</div>
				<div class="sidebar-menu">
					<ul>
						<li class="ksdh1"><a href="/item/show/online_account">预约开户</a></li>
						<li class="ksdh2"><a href="/item/show/online_userform">在线咨询</a></li>
						<li class="ksdh3"><a href="/item/show/guide_imitate">注册模拟账户</a></li>
						<li class="ksdh4"><a href="/item/show/sd_download">软件下载</a></li>
						<li class="ksdh5"><a href="/item/show/app_ios">手机交易</a></li>
					</ul>
			    </div>
			</section>
			<section class="grid-4 fr">
				<div class="subbanner">
					<img class="top_img" src="/resources/template/images/chanpingjieshao.jpg" alt="产品介绍" />
				</div>

				<div class="crumbs">
	            	本页位置：<a href="/">首页</a><span>&gt;&gt;</span><a href="/item/show/pro_detail">产品介绍</a><span>&gt;&gt;</span>投资案例 
	            </div>

	            <div class="mod3">
					<div class="hd3 cf">
						<h2 class="fl">投资案例</h2>
					</div>
					<div class="content-wrap">
						<ul class="news-list2">
							<li class="cf">
								<div class="pic-news">
				    				<img src="/resources/template/images/logo2.jpg" alt="民泰贵金属" />
				    			</div>
								<dl>
									<dt><h2>天津贵金属交易所是国际化运营模式的市场</h2></dt>
									<dd>天津贵金属交易所黄金现货（简称天通金）、白银现货交易方式灵活，价格全球联动，24小时交易，市场公平，信息透明，与国际上黄金、白银投资的主流模式一致，让您充分把握黄金、白银的投资良机。</dd>
									<dd>
										<br />
										<strong class="color-gold">盈亏计算公式:</strong>
										<p>盈亏值=（卖出价－买入价）×买入数量－延期费－手续费</p>
									</dd>
								</dl>
							</li>
							<li class="cf">
								<div class="pic-news">
				    				<img src="/resources/template/images/shili1.gif" alt="案例1" />
				    			</div>
								<dl>
									<dd>张先生在3月9日买入2手（2000克）黄金，并于当天卖出。买入价格为300元，卖出价格为303元，他的盈利情况为：</dd>
									<dd><strong>投入保证金：</strong>300×2000×8%=48000元</dd>
									<dd><img src="/resources/template/images/sl1.gif" alt="案例1" /></dd>
									<dd><strong>盈利率：</strong>5035.2÷48000=10.49%</dd>
								</dl>
							</li>
							<li class="cf">
								<div class="pic-news">
				    				<img src="/resources/template/images/shili2.gif" alt="案例1" />
				    			</div>
								<dl>
									<dd>李女士在3月9日买入5手（75千克）白银，并于第三天卖出。买入价格为6500元，卖出价格为6435元，她的亏损情况为：</dd>
									<dd><strong>投入保证金：</strong>75×6500×8%=39000元</dd>
									<dd><img src="/resources/template/images/sl2.gif" alt="案例1" /></dd>
									<dd><strong>盈利率：</strong>-5846.1÷39000=-14.99%</dd>
								</dl>
							</li>
						</ul>
						<div class="sub-news">
							<ul class="news-list">
							<?php
								if(!empty($articles))
								{
									foreach($articles as $article)
									{
									?>
									<li><span><?php echo $article['post_time'];?></span><a title="<?php echo $article['title']?>" target="_blank" href="/news/caseshow/<?php echo $article['id'];?>"><?php echo $article['title'];?></a></li>
									<?php
									}
								}
							?>
				          	</ul>
			          	</div>
		            </div>
		        </div>
			</section><!-- /content -->

		</div>	
	</div><!-- //container -->
</div><!-- //main -->


<?php
	$this->load->view('_footer');
?>

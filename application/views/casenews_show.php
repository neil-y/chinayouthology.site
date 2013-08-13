<?php $this->load->view('_header');?>
<div class="main-wrap wrapper cf">
	<div id="container" class="gridsystem cf">
		<div class="container-wrap cf">

			<section class="grid-1 fl">
				<div class="topmenu">
					<dl>
						<dt>公司资质</dt>
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
						<li class="ksdh2"><a href="/user/form">在线咨询</a></li>
						<li class="ksdh3"><a href="/item/show/invest_imitate">注册模拟账户</a></li>
						<li class="ksdh4"><a href="/item/show/sdownload">软件下载</a></li>
						<li class="ksdh5"><a href="/item/show/app_ios">手机交易</a></li>
					</ul>
			    </div>
			</section><!-- /sidebar -->
				
			<section class="grid-4 fr">
				<div class="subbanner">
					<img class="top_img" src="/resources/template/images/zaixianzixun.jpg" alt="在线咨询" />
				</div>

				<div class="crumbs">
					本页位置：<a href="/">首页</a><span>&gt;&gt;</span><a href="/item/show/pro_detail">产品详情</a><span>&gt;&gt;</span><?php echo $article['typename'];?>
	            </div>

	            <div class="details-wrap">
					<div class="details-title">
						<h1><?php echo $article['title'];?></h1>
						<p><span>发布时间：<?php echo $article['post_time'];?></span>
						<?php 
							if(!empty($article['source']))
							{
								?>
								<span>来源：<?php echo $article['source'];?></span>
								<?php
							}
						?>
						</p>
					</div>
						<?php 
							if(!empty($article['outline']))
							{
								?>
							<div class="summary css3">
								<em class="summary-icon"></em>
								<p class="summary-info"><?php echo $article['outline']?></p>
							</div>

								<?php
							}
						?>

					<div class="details-content">

						<?php echo $article['content'];?>

					</div>

					<div class="statement css3">
						<strong><a target="_blank" href="/">民泰贵金属</a>声明：</strong>
						<p>本文观点、结论和建议仅供参考，并不构成投资依据，投资者据此做出的任何投资决策与本网站和作者无关，风险自担。<a target="_blank" href="/">天通金、</a><a target="_blank" href="/">天通银、</a><a target="_blank" href="/">贵金属投资</a>首选民泰贵金属。</p>
					</div>

					<div class="pages">
					<?php 
						if(isset($pre))
						{
							?>
								<p>上一篇：<a href="/news/caseshow/<?php echo $pre['id'];?>"><?php echo $pre['title']?></a></p>

						<?php
						}
					?>
					<?php 
						if(isset($next))
						{
							?>
								<p>下一篇：<a href="/news/caseshow/<?php echo $next['id'];?>"><?php echo $next['title']?></a></p>

						<?php
						}
					?>
					</div>
			    </div>

			</section><!-- /content -->

		</div>	
	</div><!-- //container -->
</div><!-- //main -->
<?php $this->load->view('_footer');?>

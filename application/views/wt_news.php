<?php
	$this->load->view('_header');
?>


<div class="main-wrap wrapper cf">
	<div id="container" class="gridsystem cf">
		<div class="container-wrap cf">

			<section class="grid-1 fl">
				<div class="topmenu">
					<dl>
						<dt>在线咨询</dt>
						<dd><a href="/item/show/online_userform">咨询建议</a></dd>
						<dd><a href="/item/show/online_account">预约开户</a></dd>
						<dd><a href="/item/show/online_variety">开户流程</a></dd>
						<dd><a href="/item/show/online_tutor">签约辅导</a></dd>
						<dd class="active"><a href="/news/wt_news">常见问题</a></dd>
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
			</section><!-- /sidebar -->
				
			<section class="grid-4 fr">
				<div class="subbanner">
					<img class="top_img" src="/resources/template/images/zaixianzixun.jpg" alt="在线咨询" />
				</div>

				<div class="crumbs">
	            	本页位置：<a href="/">首页</a><span>&gt;&gt;</span><a href="/item/show/online_userform">在线咨询</a><span>&gt;&gt;</span>常见问题
	            </div>

	            <div class="mod3">
					<div class="hd3 cf">
						<h2 class="fl">常见问题</h2>
					</div>
			    	<div class="sub-news new-cont bd cf">
			    		<div class="new-zy">

 		
				    			<div class="new-topwrap cf">
								<?php
									$i=0;
									foreach($list as $news)
									{
										if($i == 0 )
										{
										?>
				    			<div class="pic-news">
				    				<img src="/resources/template/images/pic-news2.jpg" alt="pic-news2" />
				    			</div>
				    			<div class="top-news">
								<h2><a title="<?php echo $news['title'];?>" href="/news/wtshow/<?php echo $news['id'];?>"><?php echo $news['title'];?></a></h2>
								<div class="new-zycont"><?php echo mb_strimwidth($news['outline'], 0, 265, "...", "utf8");?><span>[2013-5-27 9:59:24]</span> <a class="gary" title="<?php echo $news['title'];?>" href="/news/wtshow/<?php echo $news['id'];?>">全文</a> 
						            </div>
					            </div>
				            </div>
				            <ul style="margin-top:6px;" class="news-list">
										<?php
										}
										else
										{
											?>
											<li><span><?php echo $news['post_time'];?></span><a title="<?php echo $news['title'];?>" target="_blank" href="/news/wtshow/<?php echo $news['id'];?>"><?php echo $news['title'];?></a></li>
											<?php
										}
										$i++;
									}
								?>
				          	</ul>
			          	</div>

			          	<div class="paging">
							<?php echo $this->pagination->create_links();?>
							<span>共<?php echo $count;?>条</span>
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

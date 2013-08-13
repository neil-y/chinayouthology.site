			<section class="grid-1 fl">
				<div class="topmenu">
					<dl>
					<dt><?php echo $curr_name;?></dt>
						<?php
							if(isset($items) && !empty($items))	
							{
								foreach($items as $key => $value)	
								{
									?>
										<dd <?php if($curr_sub == $key) echo "class='active'";?>><a href="<?php echo $key;?>"><?php echo $value;?></a></dd>
									<?php
								}
							}
						?>
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


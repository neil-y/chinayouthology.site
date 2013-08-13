	
			<!-- sidebar -->
			<div id="sidebar" class="span2">			
				<div class="accordion custom-acc" id="accordionSB">

					<div class="accordion-group <?php if($menu == 'welcome') echo 'fs';?>">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionSB" href="#dashboardsb">
								<i class="icon-large icon-th-large head_icon"></i>总揽
							</a>
						</div>
						<div id="dashboardsb" class="accordion-body collapse  <?php if($menu == 'welcome') echo 'in';?>">
							<div class="accordion-inner">
								<ul class="nav nav-list">
									<li <?php if($sub_menu == 'welcome_stat') echo 'class="active"';?>><a href="/welcome/index"><i class="icon-large icon-th"></i>统计数据</a></li>
								</ul>
							</div>
						</div>
					</div>
					

				</div>
			</div><!-- sidebar -->
	

	
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
									<li <?php if($sub_menu == 'welcome_stat') echo 'class="active"';?>><a href="/welcome/index"><i class="icon-large icon-th"></i>网站数据</a></li>
								</ul>
							</div>
						</div>
					</div>


					<div class="accordion-group  <?php if($menu == 'report') echo 'fs';?>">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionSB" href="#pagesb">
								<i class="icon-large icon-th-large head_icon"></i>报告管理
							</a>
						</div>
						<div id="pagesb" class="accordion-body collapse   <?php if($menu == 'report') echo 'in';?>">
							<div class="accordion-inner">
								<ul class="nav nav-list">
									<li <?php if($sub_menu == 'report_list') echo 'class="active"';?>><a href="/admin/report"><i class="icon-large icon-th"></i>报告列表</a></li>
									<li <?php if($sub_menu == 'report_from') echo 'class="active"';?>><a href="/admin/report/form"><i class="icon-large icon-th"></i>报告添加</a></li>
								</ul>
							</div>
						</div>
					</div>					

						<div class="accordion-group  <?php if($menu == 'testimonials') echo 'fs';?>">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionSB" href="#testimonials">
								<i class="icon-large icon-th-large head_icon"></i>客户赠言
							</a>
						</div>
						<div id="testimonials" class="accordion-body collapse   <?php if($menu == 'testimonials') echo 'in';?>">
							<div class="accordion-inner">
								<ul class="nav nav-list">
									<li <?php if($sub_menu == 'testimonials_list') echo 'class="active"';?>><a href="javascript:void(0);"><i class="icon-large icon-th"></i>赠言列表</a></li>
									<li <?php if($sub_menu == 'testimonials_form') echo 'class="active"';?>><a href="javascript:void(0);"><i class="icon-large icon-th"></i>赠言添加</a></li>
								</ul>
							</div>
						</div>
					</div>					

					<div class="accordion-group  <?php if($menu == 'staff') echo 'fs';?>">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionSB" href="#staff">
								<i class="icon-large icon-th-large head_icon"></i>员工添加
							</a>
						</div>
						<div id="staff" class="accordion-body collapse   <?php if($menu == 'staff') echo 'in';?>">
							<div class="accordion-inner">
								<ul class="nav nav-list">
									<li <?php if($sub_menu == 'staff_list') echo 'class="active"';?>><a href="javascript:void(0);"><i class="icon-large icon-th"></i>员工列表</a></li>
									<li <?php if($sub_menu == 'staff_form') echo 'class="active"';?>><a href="javascript:void(0);"><i class="icon-large icon-th"></i>员工添加</a></li>
								</ul>
							</div>
						</div>
					</div>					
<!--			
				<div class="accordion-group  <?php if($menu == 'register') echo 'fs';?>">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionSB" href="#registersb">
								<i class="icon-large icon-th-large head_icon"></i>注册管理
							</a>
						</div>
						<div id="registersb" class="accordion-body collapse   <?php if($menu == 'register') echo 'in';?>">
							<div class="accordion-inner">
								<ul class="nav nav-list">
									<li <?php if($sub_menu == 'register_list') echo 'class="active"';?>><a href="/admin/register"><i class="icon-large icon-th"></i>注册列表</a></li>
								</ul>
							</div>
						</div>
					</div>

				<div class="accordion-group  <?php if($menu == 'subscribe') echo 'fs';?>">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionSB" href="#subscribesb">
								<i class="icon-large icon-th-large head_icon"></i>预约开户
							</a>
						</div>
						<div id="subscribesb" class="accordion-body collapse   <?php if($menu == 'subscribe') echo 'in';?>">
							<div class="accordion-inner">
								<ul class="nav nav-list">
									<li <?php if($sub_menu == 'subscribe_list') echo 'class="active"';?>><a href="/admin/subscribe"><i class="icon-large icon-th"></i>预约开户列表</a></li>
								</ul>
							</div>
						</div>
					</div>

			<div class="accordion-group  <?php if($menu == 'simulation') echo 'fs';?>">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionSB" href="#simulationsb">
								<i class="icon-large icon-th-large head_icon"></i>模拟帐户
							</a>
						</div>
						<div id="simulationsb" class="accordion-body collapse   <?php if($menu == 'simulation') echo 'in';?>">
							<div class="accordion-inner">
								<ul class="nav nav-list">
									<li <?php if($sub_menu == 'simulation_list') echo 'class="active"';?>><a href="/admin/simulation"><i class="icon-large icon-th"></i>申请模拟帐户列表</a></li>
								</ul>
							</div>
						</div>
					</div>



					<div class="accordion-group  <?php if($menu == 'user') echo 'fs';?>">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionSB" href="#articlesb">
								<i class="icon-large icon-th-large head_icon"></i>咨询管理
							</a>
						</div>
						<div id="articlesb" class="accordion-body collapse   <?php if($menu == 'user') echo 'in';?>">
							<div class="accordion-inner">
								<ul class="nav nav-list">
									<li <?php if($sub_menu == 'user_list') echo 'class="active"';?>><a href="/admin/user"><i class="icon-large icon-th"></i>咨询列表</a></li>
								</ul>
							</div>
						</div>
					</div>
-->
					<div class="accordion-group  <?php if($menu == 'focus') echo 'fs';?>">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionSB" href="#focussb">
								<i class="icon-large icon-th-large head_icon"></i>文件管理
							</a>
						</div>
						<div id="focussb" class="accordion-body collapse   <?php if($menu == 'focus') echo 'in';?>">
							<div class="accordion-inner">
								<ul class="nav nav-list">
									<li <?php if($sub_menu == 'focus_list') echo 'class="active"';?>><a href="/admin/focus"><i class="icon-large icon-th"></i>文件列表</a></li>
									<li <?php if($sub_menu == 'focus_form') echo 'class="active"';?>><a href="/admin/focus/form"><i class="icon-large icon-th"></i>文件添加</a></li>
								</ul>
							</div>
						</div>
					</div>
					

								</div>
			</div><!-- sidebar -->
	

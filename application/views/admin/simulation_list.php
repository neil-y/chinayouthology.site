			<!-- main content -->
			<div id="main_content" class="span10">
			
				<div class="widget_container">
					<div class="well nomargin">
						<ul class="breadcrumbs-custom in-well">
							<li><a href="javascript:void(0);">模拟帐户管理</a></li>
							<li class="active">模拟帐户列表</li>
						</ul>
					</div>
				</div>	
			
				<div class="row-fluid">
					<div class="widget_container">
						<div class="well nomargin">
							<div class="navbar navbar-static navbar_as_heading">
								<div class="navbar-inner">
									<div class="container" style="width: auto;">
										<a class="brand">模拟列表</a>
									</div>
								</div>
							</div>
												
							<div class="subnav nobg">
								<div class="span2">
															</div>
								<div class="span1">
																</div>
								<div class="span2">
								</div>
								<div class="span2">
								</div>


								<div class="span1">
								</div>
								<div class="span4">
									<div class="pagination">
										<ul>
										<?php echo $this->pagination->create_links();?>
										</ul>
									</div>
								</div>
								</form>	
							</div>
							<table class="table smallfont">
								<thead>
									<tr>
										<td>ID</td>
										<td>名字</td>
										<td>手机号</td>
										<td>身份证</td>
										<td>qq号</td>
										<td>省份 </td>
										<td>城市</td>
										<td>区域</td>
										<td>注册时间</td>
									</tr>
								</thead>
								<tbody>
							<?php
								if(!empty($simulations))
								{
									foreach($simulations as $reg)
									{
										?>
									<tr>
									<td><?php echo $reg['id'];?></td>
									<td><?php echo $reg['name'];?></td>
									<td><span class="label label-info"><?php echo $reg['phone'];?></span></td>
									<td><?php echo $reg['idcard'];?></td>
									<td><?php echo $reg['qqnum'];?></td>
									<td><?php echo $reg['province_name'];?></td>
									<td><?php echo $reg['city_name'];?></td>
									<td><?php echo $reg['area_name'];?></td>
									<td><?php echo $reg['createtime'];?></td>
									</tr>

										<?php
									}
								}
							?>
								</tbody>
							</table>
							<div class="subnav nobg">
								<div class="span2">
															</div>
								<div class="span1">
								</div>
								<div class="span2">
								
								</div>
								<div class="span2">
								
								</div>
								<div class="span1">
									
								</div>
								<div class="span4">
									<div class="pagination">
										<ul>
											<?php echo $this->pagination->create_links();?>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- main content -->


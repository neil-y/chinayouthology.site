			<!-- main content -->
			<div id="main_content" class="span10">
			
				<div class="widget_container">
					<div class="well nomargin">
						<ul class="breadcrumbs-custom in-well">
							<li><a href="javascript:void(0);">预约帐户管理</a></li>
							<li class="active">预约列表</li>
						</ul>
					</div>
				</div>	
			
				<div class="row-fluid">
					<div class="widget_container">
						<div class="well nomargin">
							<div class="navbar navbar-static navbar_as_heading">
								<div class="navbar-inner">
									<div class="container" style="width: auto;">
										<a class="brand">预约列表</a>
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
										<td>投资金额</td>
										<td>qq号</td>
										<td>性别</td>
										<td>注册时间</td>
									</tr>
								</thead>
								<tbody>
							<?php
								if(!empty($subscribes))
								{
									foreach($subscribes as $reg)
									{
										?>
									<tr>
									<td><?php echo $reg['id'];?></td>
									<td><?php echo $reg['name'];?></td>
									<td><span class="label label-info"><?php echo $reg['phone'];?></span></td>
									<td><span class="label label-info"><?php echo $reg['account'];?></span></td>
									<td><?php echo $reg['qqnum'];?></td>
									<td><?php if($reg['gender'] == 1) echo "男"; else echo "女";?></td>
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


			<!-- main content -->
			<div id="main_content" class="span10">
			
				<div class="widget_container">
					<div class="well nomargin">
						<ul class="breadcrumbs-custom in-well">
							<li><a href="javascript:void(0);">总揽</a></li>
							<li class="active">数据统计</li>
						</ul>
					</div>
				</div>	
			
				<div class="row-fluid">
					<div class="widget_container">
						<div class="well nomargin">
							<div class="navbar navbar-static navbar_as_heading">
								<div class="navbar-inner">
									<div class="container" style="width: auto;">
										<a class="brand">统计列表</a>
									</div>
								</div>
							</div>
												
							<div class="subnav nobg">
								<form action="/index.php" method="get">
								<div class="span1">
								<input type="hidden" name="d" value="admin">
								<input type="hidden" name="c" value="register">
								<input type="hidden" name="m" value="index">
								<input type="hidden" name="per_page" value="1">
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
										<td>id</td>
										<td>日期</td>
										<td>类型</td>
										<td>pre_refer</td>
										<td>refer</td>
										<td>注册数</td>
										<td>点击数</td>
									</tr>
								</thead>
								<tbody>
							<?php
								if(!empty($partner))
								{
									foreach($partner as $reg)
									{
										?>
									<tr>
									<td><?php echo $reg['id'];?></td>
									<td><?php echo $reg['createtime'];?></td>
									<td><span class="label label-info"><?php if($reg['type'] == 'mintai') {echo "银如意";} if($reg['type'] == 'robot_robot') {echo " 机器人喊单";} if($reg['type'] == 'trader_master') {echo "模拟帐户";} if($reg['type'] == 'trader_trader') {echo "BS指标";}?></span></td>
									<td><?php echo $reg['pre_refer'];?></td>
									<td><?php echo $reg['refer'];?></td>
									<td><span class="label label-info"><?php echo $reg['register_count'];?></span></td>
									<td><span class="label label-info"><?php echo $reg['count'];?></span></td>
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


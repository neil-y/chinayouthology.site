			<div class="widget_container span10">
				<div class="well nomargin">
					<ul class="breadcrumbs-custom in-well">
						<li><a href="javascript:void(0);">文章管理</a></li>
						<li class="active">分类列表</li>
					</ul>
				</div>
			</div>	
			
			<!-- main content -->
			<div id="main_content" class="span5">
				<div class="widget_container">
					<div class="well nomargin">
						<div class="navbar navbar-static navbar_as_heading">
							<div class="navbar-inner">
								<div class="container" style="width: auto;">
									<a class="brand">分类列表</a>
								</div>
							</div>
						</div>
									
						<table class="table">
							<thead>
								<tr>
									<td>名字</td>
									<td>创建时间</td>
									<td>创建人</td>
									<td>文章数量</td>
								</tr>
							</thead>
							<tbody>
								<?php 
									foreach($articletypes as $type){
										?>
								<tr>
								<td><?php echo $type['name'];?></td>
									<td><?php echo $type['createtime'];?></td>
									<td>杨鹏</td>
									<td><span class="badge badge-info">28</span></td>
								</tr>

										<?php

									}
								?>
						</tbody>
						</table>
					</div>
				</div>
			</div><!-- main content -->
	



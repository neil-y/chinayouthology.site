			<!-- main content -->
			<div id="main_content" class="span10">
			
				<div class="widget_container">
					<div class="well nomargin">
						<ul class="breadcrumbs-custom in-well">
							<li><a href="javascript:void(0);">焦点图管理</a></li>
							<li class="active">焦点图列表</li>
						</ul>
					</div>
				</div>	
			
				<div class="row-fluid">
					<div class="widget_container">
						<div class="well nomargin">
							<div class="navbar navbar-static navbar_as_heading">
								<div class="navbar-inner">
									<div class="container" style="width: auto;">
										<a class="brand">焦点图列表</a>
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
										<td>链接</td>
										<td>图片</td>
										<td>状态</td>
										<td>创建时间</td>
										<td>操作</td>
									</tr>
								</thead>
								<tbody>
							<?php
								if(!empty($focus))
								{
									foreach($focus as $reg)
									{
										?>
									<tr>
									<td><?php echo $reg['id'];?></td>
									<td><?php echo $reg['title'];?></td>
									<td><?php echo $reg['focus_url'];?></td>
									<td><img style="width:300px;" src="/uploads/focus/<?php echo $reg['img_url']?>"></img></td>
									<td><span class="label label-info"><?php if($reg['status'] == 1) echo "已发表"; else echo "存档";?></span></td>
									<td><?php echo $reg['createtime'];?></td>
				<td><a href="/admin/focus/update/<?php echo $reg['id'];?>"><?php if($reg['status'] == 1) echo "存档"; else echo "发表";?></td>
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


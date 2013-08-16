			<!-- main content -->
			<div id="main_content" class="span10">
			
				<div class="widget_container">
					<div class="well nomargin">
						<ul class="breadcrumbs-custom in-well">
							<li><a href="javascript:void(0);">文件管理</a></li>
							<li class="active">文件列表</li>
						</ul>
					</div>
				</div>	
			
				<div class="row-fluid">
					<div class="widget_container">
						<div class="well nomargin">
							<div class="navbar navbar-static navbar_as_heading">
								<div class="navbar-inner">
									<div class="container" style="width: auto;">
										<a class="brand">文件列表</a>
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
										<td>文件</td>
										<td>类型</td>
										<td>报告详情id</td>
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
									<td><?php echo $reg['url'];?></td>
									<td><?php if($reg['type'] !=3) {?><img style="width:300px;" src="/uploads/file/<?php echo $reg['file_url']?>"></img><?php }?></td>
									<td><?php if($reg['type'] ==0){echo "insights焦点图";} if($reg['type'] ==1){echo "openyouthology焦点图";} if($reg['type'] ==2){echo "insights详情焦点图";} if($reg['type'] ==3){echo "普通文件";}?></td>
									<td><?php echo $reg['in_id'];?></td>
									<td><?php echo $reg['createtime'];?></td>
									<td><a href="/admin/focus/update/<?php echo $reg['status']?>"><?php if($reg['status'] == 1){ echo "存档"; }else{echo "上线";}?></a>&nbsp;&nbsp;<a href="/admin/focus/del/<?php echo $reg['id'];?>">删除</a></td>
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


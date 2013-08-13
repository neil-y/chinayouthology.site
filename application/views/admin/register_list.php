			<!-- main content -->
			<div id="main_content" class="span10">
			
				<div class="widget_container">
					<div class="well nomargin">
						<ul class="breadcrumbs-custom in-well">
							<li><a href="javascript:void(0);">注册管理</a></li>
							<li class="active">注册列表</li>
						</ul>
					</div>
				</div>	
			
				<div class="row-fluid">
					<div class="widget_container">
						<div class="well nomargin">
							<div class="navbar navbar-static navbar_as_heading">
								<div class="navbar-inner">
									<div class="container" style="width: auto;">
										<a class="brand">注册列表</a>
									</div>
								</div>
							</div>
												
							<div class="subnav nobg">
								<form action="/index.php" method="get">
								<div class="span2">
									<select name="type" id="cat" class="postform">
									<option value='0' <?php if($type_id == 0) echo "selected";?>>全部</option>
									<option value='1' <?php if($type_id == 1) echo "selected";?>>机器人</option>
									<option value='2' <?php if($type_id == 2) echo "selected";?>>BS指标</option>
									<option value='3' <?php if($type_id == 3) echo "selected";?>> 百万实盘 </option>
									<option value='4' <?php if($type_id == 3) echo "selected";?>>银如意</option>
									</select>
								</div>
								<div class="span1">
								<input type="hidden" name="d" value="admin">
								<input type="hidden" name="c" value="register">
								<input type="hidden" name="m" value="index">
								<input type="hidden" name="per_page" value="1">

									<button type="submit" class="btn btn-small btn-duadua">搜索</button>
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
										<td>注册类型</td>
										<td>注册时间</td>
										<td>来源</td>
										<td>来源网站</td>
										<td>来源ip</td>
									</tr>
								</thead>
								<tbody>
							<?php
								if(!empty($registers))
								{
									foreach($registers as $reg)
									{
										?>
									<tr>
									<td><?php echo $reg['id'];?></td>
									<td><?php echo $reg['name'];?></td>
									<td><?php echo $reg['phone'];?></td>
									<td><span class="label label-info"><?php echo $reg['typename'];?></td>
									<td><?php echo $reg['createtime'];?></td>
									<td><?php echo $reg['refer'];?></td>
									<td><?php echo $reg['host_refer'];?></td>
									<td><?php echo $reg['ip'];?></td>
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


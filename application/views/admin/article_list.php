			<!-- main content -->
			<div id="main_content" class="span10">
			
				<div class="widget_container">
					<div class="well nomargin">
						<ul class="breadcrumbs-custom in-well">
							<li><a href="javascript:void(0);">文章管理</a></li>
							<li class="active">文章列表</li>
						</ul>
					</div>
				</div>	
			
				<div class="row-fluid">
					<div class="widget_container">
						<div class="well nomargin">
							<div class="navbar navbar-static navbar_as_heading">
								<div class="navbar-inner">
									<div class="container" style="width: auto;">
										<a class="brand">文章列表</a>
										<a class="btn pull-right" href="/admin/article/form">添加文章</a>
									</div>
								</div>
							</div>
												
							<div class="subnav nobg">
								<form action="/index.php" method="get">
								<div class="span2">
									<select name="type" id="cat" class="postform">
									<option value='0'>全部</option>
									<?php 
										foreach($types as $type)
										{
											?>
												<option value="<?php echo $type['id'];?>" <?php if($type_id == $type['id']) echo "selected";?>><?php echo $type['name'];?></option>
											<?php
										}
									?>
									</select>
								</div>
								<div class="span1">
								<input type="hidden" name="d" value="admin">
								<input type="hidden" name="c" value="article">
								<input type="hidden" name="m" value="index">
								<input type="hidden" name="per_page" value="<?php echo $num;?>">

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
										<td>标题</td>
										<td>摘要</td>
										<td>来源</td>
										<td>分类</td>
										<td>发表时间</td>
										<td>创建人</td>
										<td>状态</td>
									</tr>
								</thead>
								<tbody>
								<?php 

									foreach($articles as $article) {
										?>
									<tr>
										<td><span class="label label-info"><?php echo $article['id'];?></span></td>
										<td>
										<a target="blank" href="/news/show/<?php echo $article['id'];?>" class="post_title"><?php echo $article['title'];?></a>
											<div class="operation">
												<div class="btn-group" style="display:none;">
												  <a class="btn btn-small" href="/admin/article/edit/<?php echo $article['id'];?>"><i class="icon-eye-2"></i>编辑</a>
												  <a target="blank" class="btn btn-small" href="/news/show/<?php echo $article['id'];?>"><i class="icon-eye-2"></i>查看</a>
												  <a class="btn btn-small" href="/admin/article/del/<?php echo $article['id'];?>" onclick="return confirm('确认删除?')"><i class="icon-eye-2"></i>删除</a>
												</div>
											</div>
										</td>
										<td><?php echo $article['source'];?></td>
										<td><?php if($article['outline'] != "") echo "<span class='label label-info'>有摘要</span>"; else echo '没有'?></td>
										<td><a href="#"><span class="label label-info"><?php echo $article['typename']?></span></a></td>
										<td><?php echo $article['post_time'];?></td>
										<td>杨鹏</td>
										<td><?php if($article['status'] == 1 ) echo '<span class="label label-info">已发表</span>'; else echo '存档';?></td>
									</tr>


										<?php
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


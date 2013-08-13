<div class="widget_container span10">
				<div class="well nomargin">
					<ul class="breadcrumbs-custom in-well">
						<li><a href="javascript:void(0);">焦点图管理</a></li>
						 <li class="active">
							添加焦点图
						</li>
					</ul>
				</div>
		
			</div>	
								<!-- main content -->
			<div id="main_content" class="span10">
				<div class="row-fluid">
					<div class="widget_container">
						<div class="well">
							<div class="navbar navbar-static navbar_as_heading">
								<div class="navbar-inner">
							<form action="/admin/focus/add" method="post" name="article" id='news_form'  enctype="multipart/form-data">	
									<div class="container" style="width: auto;">
									<a class="brand"><i class="icon-th-large-1"></i></a>
									</div>
								</div>
							</div>

							<label>标题</label>
							<input type="text" class="input-xlarge-fluid" name="title" value=""/>							
							<label>链接</label>

							<input type="text" class="input-xlarge-fluid" name="focus_url" value=""/>							
							<label>上传图片</label>

							<input type="file" class="input-xlarge-fluid" name="userfile"/>							

							<br/>	
							<label>状态</label>
							<input type="radio" class="input-xlarge-fluid" name="status" value="yes" />发表
							<input type="radio" class="input-xlarge-fluid" name="status" /> 存档			

				<br/>
				<br/>
				<br/>
<button type="submit" class="btn btn-duadua btn-small" id='post_news'><i class="icon-ok-3"></i>添加</button>
							</form>
							</div>
							
						</div>
					</div>
				</div>
			</div><!-- main content -->


<div class="widget_container span10">
				<div class="well nomargin">
					<ul class="breadcrumbs-custom in-well">
						<li><a href="javascript:void(0);">文件管理</a></li>
						 <li class="active">
							添加文件
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

							<label>文件位置</label>
							<select name="type" id="ty">
								<option value="2">insights详情焦点图</option>
								<option value="3">普通文件</option>
								<option value="0">insights焦点图</option>
								<option value="1">openyouthology焦点图</option>
							</select>
							<br/>
							<label>标题</label>
							<input type="text" class="input-xlarge-fluid" name="title" value=""/>							
							<label>链接</label>
							<input type="text" class="input-xlarge-fluid" name="url" value=""/>							
							<label>报告ID</label>
							<input type="text" class="input-xlarge-fluid" name="in_id" value=""/>							
							<label>上传文件</label>

							<input type="file" class="input-xlarge-fluid" name="userfile"/>							

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


<div class="widget_container span10">
				<div class="well nomargin">
					<ul class="breadcrumbs-custom in-well">
						<li><a href="javascript:void(0);">报告设置</a></li>
						 <li class="active">
							位置设置
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
							<form action="/admin/report/setting_do" method="post" name="article" id='news_form'  enctype="multipart/form-data">	
									<div class="container" style="width: auto;">
									<a class="brand"><i class="icon-th-large-1"></i></a>
									</div>
								</div>
							</div>
							<br/>
							<label>第一排位置设置(id;id)</label>
							<input type="hidden" name="id" value="<?php echo $setting['id'];?>"/>
							<input type="text" class="input-xlarge-fluid" name="first_ids" value="<?php echo $setting['first_ids'];?>"/>							
							<label>底部位置设置</label>
							<input type="text" class="input-xlarge-fluid" name="foot_ids" value="<?php echo $setting['foot_ids'];?>"/>							

				<br/>
				<br/>
				<br/>
<button type="submit" class="btn btn-duadua btn-small" id='post_news'><i class="icon-ok-3"></i>更新</button>
							</form>
							</div>
							
						</div>
					</div>
				</div>
			</div><!-- main content -->


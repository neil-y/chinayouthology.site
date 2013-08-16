<div id="main_content" class="span10">
	<div class="widget_container">
		<div class="well nomargin">
			<ul class="breadcrumbs-custom in-well">
				<li><a href="javascript:void(0);">报告管理</a></li>
				<li class="active">报告列表</li>
			</ul>
		</div>
	</div>	
			
	<div class="row-fluid">
		<div class="widget_container">
			<div class="well nomargin">
				<div class="navbar navbar-static navbar_as_heading">
					<div class="navbar-inner">
						<div class="container" style="width: auto;">
							<a class="brand">报告列表</a>
							<a class="btn pull-right" href="/admin/report/form">添加报告</a>
						</div>
					</div>
				</div>
												
			<div class="subnav nobg"></div>
				<table class="table smallfont">
					<thead>
					<tr>
						<td>ID</td>
						<td>标题</td>
						<td>发表时间</td>
					</tr>
					</thead>
					<tbody>
					<?php  foreach($reports as $report) { ?>
					<tr>
						<td><span class="label label-info"><?php echo $report['id'];?></span></td>
						<td><a target="blank" href="/insights/<?php echo $report['id'];?>" class="post_title"><?php echo $report['title'];?></a>
							<div class="operation">
								<div class="btn-group" style="display:none;">
									<a class="btn btn-small" href="/admin/report/edit/<?php echo $report['id'];?>"><i class="icon-eye-2"></i>编辑</a>
									<a target="blank" class="btn btn-small" href="/insights/<?php echo $report['id'];?>"><i class="icon-eye-2"></i>查看</a>
									<a class="btn btn-small" href="/admin/report/del/<?php echo $report['id'];?>" onclick="return confirm('确认删除?')">
									<i class="icon-eye-2"></i>删除</a>
								</div>
							</div>
						</td>
						<td><?php echo $report['createtime'];?></td>
					</tr>
					<?php } ?>
					</tbody>
				</table>
				<div class="subnav nobg">
					<div class="span4">
						<div class="pagination">
							<ul><?php echo $this->pagination->create_links();?></ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


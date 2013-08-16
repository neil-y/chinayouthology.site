<link rel="stylesheet" href="/resources/editor/themes/default/default.css" />
<link rel="stylesheet" href="/resources/editor/plugins/code/prettify.css" />
<script charset="utf-8" src="/resources/editor/kindeditor-min.js"></script>
<script charset="utf-8" src="/resources/editor/lang/zh_CN.js"></script>
<script charset="utf-8" src="/resources/editor/plugins/code/prettify.js"></script>

<div class="widget_container span10">
	<div class="well nomargin">
		<ul class="breadcrumbs-custom in-well">
			<li><a href="javascript:void(0);">报告管理</a></li>
			<li class="active">
			<?php if(isset($report['id'])) {echo "编辑报告"; }else{ echo "添加报告";}?>
			</li>
		</ul>
	</div>
</div>	

<div id="main_content" class="span10">
	<div class="row-fluid">
		<div class="widget_container">
			<div class="well">
				<div class="navbar navbar-static navbar_as_heading">
					<div class="navbar-inner">
							<div class="container" style="width: auto;">
								<a class="brand"><i class="icon-th-large-1"></i>
								<?php if(isset($report['id'])) {echo "编辑报告"; }else {echo "添加报告"; }?></a>
							</div>
					</div>
				</div>
				<form action="/admin/report/add" method="post" name="article" id='news_form' enctype="multipart/form-data">	
					<label>标题</label>
					<input type="text" name="title" class="input-xxlarge-fluid" value="<?php  if(isset($report)) echo $report['title'];?>">
					<label>封面图片</label>
					<?php  if(isset($report) && !empty($report['cover'])) { ?>
					<img src="/uploads/report/cover/<?php echo $report['cover']?>"><br/><br/>
					<?php } ?>
					<input type="file" name="userfile" class="input-xxlarge-fluid"/>
					<br/>
					<textarea name="content" id='content' style="width: 100%; height: 400px;">
						<?php  if(isset($report)) echo $report['content'];?>
					</textarea>
					<input type="hidden" name="news_content" id="news_content" class="input-xxlarge-fluid" >
					<input type="hidden" name="report_id" class="input-xxlarge-fluid" value="<?php if(isset($report)) echo $report['id'];?>" />
					<br/>
					<button class="btn btn-duadua btn-small" id="post_preview"><i class="icon-ok-3"></i>预览</button>
					<?php if(isset($report)){ ?>
					<button class="btn btn-duadua btn-small" id='update_news'><i class="icon-ok-3"></i>更新</button>
					<?php } else { ?>
					<button class="btn btn-duadua btn-small" id='post_news'><i class="icon-ok-3"></i>添加</button>
					<?php } ?>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" charset="utf-8">
var editor;
	KindEditor.ready(function(K) {
	editor = K.create('textarea[name="content"]', {
					allowFileManager : true
					});
	$('#post_preview').click(function(e) {
		var news_form = document.getElementById('news_form');
		news_form.action = '/admin/report/preview';
		news_form.target = 'blank';
		$('#news_content').attr('value', editor.html());
		news_form.submit();
	});

	$('#post_news').click(function(e) {
		var news_form = document.getElementById('news_form');
		news_form.action = '/admin/report/add';
		news_form.target = '';
		$('#news_content').attr('value', editor.html());
		news_form.submit();
	});

	$('#update_news').click(function(e) {
		var news_form = document.getElementById('news_form');
		news_form.action = '/admin/report/update';
		news_form.target = '';
		$('#news_content').attr('value', editor.html());
		news_form.submit();
	});


});
</script>

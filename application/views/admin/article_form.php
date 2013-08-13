	<link rel="stylesheet" href="/resources/editor/themes/default/default.css" />
	<link rel="stylesheet" href="/resources/editor/plugins/code/prettify.css" />
	<script charset="utf-8" src="/resources/editor/kindeditor-min.js"></script>
	<script charset="utf-8" src="/resources/editor/lang/zh_CN.js"></script>
	<script charset="utf-8" src="/resources/editor/plugins/code/prettify.js"></script>
<div class="widget_container span10">
				<div class="well nomargin">
					<ul class="breadcrumbs-custom in-well">
						<li><a href="javascript:void(0);">文章管理</a></li>
						 <li class="active">
						<?php
							if(isset($article['id']))
								echo "编辑文章";
							else
								echo "添加文章";
						?>
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
							<form action="/admin/article/add" method="post" name="article" id='news_form'>	
									<div class="container" style="width: auto;">
									<a class="brand"><i class="icon-th-large-1"></i>
					<?php
							if(isset($article['id']))
								echo "编辑文章";
							else
								echo "添加文章";
						?></a>
									</div>
								</div>
							</div>
<label>文章类别</label>
							<select name="type_id" class="input-xlarge-fluid">
<?php 
foreach($types as $type){
	?>
		<option class="level-0" value="<?php echo $type['id'] . "_" . $type['name'];?>" <?php if(isset($article) && ($article['type_id'] == $type['id'])) {echo "selected";}?>><?php echo $type['name'];?></option>
	<?php
}
?>
								</select>

							<label>发表时间</label>
							<input type="text" class="input-xlarge-fluid" name="post_time" value="<?php if(isset($article)) echo $article['post_time'];?>"/>							
							<span class="help-block">不填默认当前增加时间(格式：2013-06-24 06:06:52)</span>
							<label>来源</label>
							<input type="text" class="input-xlarge-fluid" name="source" value="<?php  if(isset($article)) echo $article['source'];?>">							
							<input type="hidden" name="news_id" value="<?php  if(isset($article)) echo $article['id'];?>">							
							<label>状态</label>
							<input type="radio" class="input-xlarge-fluid" name="status" value="yes" <?php  if(isset($article) && $article['status'] == 1) echo "checked";?>/> 发表						
							<input type="radio" class="input-xlarge-fluid" name="status"  <?php  if(isset($article) && $article['status'] == 0) echo "checked";?>/> 存档	
							<br/>	
							<br/>	

							<label>标题</label>
							<input type="text" name="title" class="input-xxlarge-fluid" value="<?php  if(isset($article)) echo $article['title'];?>">
							<label>摘要</label>
							<input type="text" name="outline" class="input-xxlarge-fluid" value="<?php  if(isset($article)) echo $article['outline'];?>">
							<textarea name="content" id='content' style="width: 100%; height: 400px;">
							<?php  if(isset($article)) echo $article['content'];?>
							</textarea>
						<input type="hidden" name="news_content" id="news_content" class="input-xxlarge-fluid" >
<br/>
<button class="btn btn-duadua btn-small" id="post_preview"><i class="icon-ok-3"></i>预览</button>
<?php
	if(isset($article))
	{
		?>
		<button class="btn btn-duadua btn-small" id='update_news'><i class="icon-ok-3"></i>更新</button>
		<?php
	}
	else
	{
		?>
<button class="btn btn-duadua btn-small" id='post_news'><i class="icon-ok-3"></i>添加</button>
		<?php
	}
?>

							</form>
							</div>
							
						</div>
					</div>
				</div>
			</div><!-- main content -->
<script type="text/javascript" charset="utf-8">
var editor;
	KindEditor.ready(function(K) {
	editor = K.create('textarea[name="content"]', {
					allowFileManager : true
					});
	$('#post_preview').click(function(e) {
		var news_form = document.getElementById('news_form');
		news_form.action = '/admin/article/preview';
		news_form.target = 'blank';
		$('#news_content').attr('value', editor.html());
		news_form.submit();
	});

	$('#post_news').click(function(e) {
		var news_form = document.getElementById('news_form');
		news_form.action = '/admin/article/add';
		news_form.target = '';
		$('#news_content').attr('value', editor.html());
		news_form.submit();
	});

	$('#update_news').click(function(e) {
		var news_form = document.getElementById('news_form');
		news_form.action = '/admin/article/update';
		news_form.target = '';
		$('#news_content').attr('value', editor.html());
		news_form.submit();
	});


});
</script>


<?php $this->load->view("_header");?>

		<div id="container" class="cf">

			<div class="details-wrap">
				<div class="details-sildeon">

					<div class="scrollable-picwrap cf" style="width: 870px;">
						<a class="prev browse left fl"></a>
						<div class="scrollable-customer fl" id="scrollablePic">
						  <div class="items">

						    <div>
								<ul class="cf">
									<?for($i=0; $i<count($allshow);$i++) { if($i < 5) {?>
									<li><a href="/insights/<?php echo $allshow[$i]['id']?>"><img style="width:111px;height:111px;" src="/uploads/report/cover/<?php echo $allshow[$i]['cover'];?>" alt="insights3" /></a></li>
									<?php }}?>
								</ul>
						    </div>
						  </div>
						</div>
						<a class="next browse right fr"></a>
					</div>

				</div>
				<div class="details-content cf">
					<div class="details-title">			
					<h2><?php echo $report['curr']['title'];?></h2>
					<span><?php echo $report['curr']['createtime']?></span>
					</div>
					<?php if(!empty($focus)) {?>
					<div class="details-silde cf">
						<div id="idTransformView" class="banner cf">
					        <ul id="idSlider" class="slider">
							<?php foreach($focus as $fo){?>
							<li><a href="<?php echo $fo['url'];?>"><img src="/uploads/file/<?php echo $fo['file_url'];?>" alt="<?php echo $fo['title'];?>" /></a></li>
							<?php }?>
							</ul>
							<div id="idNum" class="num">
							<ul>
							<?php $i=0; foreach($focus as $fo){ $i++;?>
								<li><a href="#"><?php echo $i;?></a></li>
							<?php }?>
							</ul>
							</div>
						</div>			
						<script type="text/javascript" src="/resources/front/js/banner-silde.js"></script>
					</div><!-- /details silde2 -->
						<?php }?>
					<p><?php echo $report['curr']['content'];?></p>
					<?php if(isset($file)){?>
					<div class="download cf">
					<a class="btn-large btn-large4" href="/resources/file/<?php echo $file['file_url'];?>">Download this PDF</a>
					</div>
					<?php }?>
				</div>
			</div><!-- /details info -->

		</div><!-- //container -->


	</div><!-- //main -->

<script>
$(function() {
	$("#scrollablePic").scrollable({circular: false, mousewheel: true})
});
</script>

<?php $this->load->view("_footer");?>

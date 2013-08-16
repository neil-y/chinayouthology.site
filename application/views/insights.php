<?php $this->load->view("_header");?>

		<div id="container" class="cf">

			<div class="banner-shadow banner1 cf">
				<div class="banner-wrap cf">
					<div id="idTransformView" class="banner">
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
				</div>				
			</div><!-- /banner -->

			<div class="insights-info cf">					
				<!--
				<h3>更多报告</h3>
				-->
				<h3>报告</h3>
				<ul>
					<?php foreach($reports as $report) {?>
					<li><a href="/insights/<?php echo $report['id'];?>">
					<img style="width:111px;height:111px;" src="/uploads/report/cover/<?php echo $report['cover'];?>" alt="<?php echo $report['title'];?>" />
						<p><?php echo mb_strimwidth($report['title'], 0, 22, '...', 'utf8'); ?></p></a>
					</li>					
					<?php } ?>	
				</ul>
			</div><!-- /insights info -->
		</div><!-- //container -->
	</div><!-- //main -->

<script type="text/javascript" src="/resources/front/js/banner.js"></script>
<?php $this->load->view("_footer");?>

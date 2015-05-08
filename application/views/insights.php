<?php $this->load->view("_header");?>



		<div id="container" class="cf">

			<div class="banner-shadow banner1 cf">
				<div class="banner-wrap cf">

					<div id="flexslider1" class="flexslider">
						<ul class="slides">
							<li><a href="/insights/404"><img style="width:900px;height:400px;" src="/uploads/insights_focus/1.png" alt="banner1" /></a></li>
							<li><a href="#"><img style="width:900px;height:400px;" src="/uploads/insights_focus/2.png" alt="banner1" /></a></li>
							<li><a href="#"><img style="width:900px;height:400px;" src="/uploads/insights_focus/3.png" alt="banner1" /></a></li>
							<li><a href="#"><img style="width:900px;height:400px;" src="/uploads/insights_focus/4.png" alt="banner1" /></a></li>
							<li><a href="#"><img style="width:900px;height:400px;" src="/uploads/insights_focus/5.png" alt="banner1" /></a></li>
							<li><a href="#"><img style="width:900px;height:400px;" src="/uploads/insights_focus/6.png" alt="banner1" /></a></li>
						</ul>

					</div>
				</div>				
			</div><!-- /banner -->

			<div class="insights-info cf">					
				<!--
				<h3>更多报告</h3>
				-->
				<h3>Reports</h3>
				<ul>
				<?php foreach($firstReport as $first) {
					?>
						<li><a href="/insights/<?php echo $first['id'];?>" alt="<?php echo $first['title'];?>">
					<img style="width:111px;height:111px;" src="/uploads/report/cover/<?php echo $first['cover'];?>" alt="<?php echo $first['title'];?>" />
					<p><span><?php echo $first['title'];?></span></p></a>
					</li>					

					<?php
				}?>
					<?php foreach($reports as $report) {?>
					<li><a href="/insights/<?php echo $report['id'];?>" alt="<?php echo $report['title'];?>">
					<img style="width:111px;height:111px;" src="/uploads/report/cover/<?php echo $report['cover'];?>" alt="<?php echo $report['title'];?>" />
					<p><span><?php echo $report['title']; ?></span></p></a>
					</li>					
					<?php } ?>	
				</ul>
			</div><!-- /insights info -->
		</div><!-- //container -->
	</div><!-- //main -->

<script type="text/javascript" src="/resources/front/js/banner.js"></script>
<?php $this->load->view("_footer");?>

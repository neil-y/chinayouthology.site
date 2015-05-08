<?php $this->load->view("_header");?>
<link rel="stylesheet" href="/resources/front/js/jquery/flexslider/flexslider.css">
<script src="/resources/front/js/ie/modernizr.js"></script>
<script src="/resources/front/js/jquery/jquery.js"></script>
<script src="/resources/front/js/jquery/jquery.tools.min.js"></script>
<script>
var timeout         = 0;
var closetimer		= 0;
var ddmenuitem      = 0;
function Subnav_open()
{	Subnav_canceltimer();
	Subnav_close();
	ddmenuitem = $(this).find('ul').eq(0).css('visibility', 'visible');}
function Subnav_close()
{	if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');}
function Subnav_timer()
{	closetimer = window.setTimeout(Subnav_close, timeout);}
function Subnav_canceltimer()
{	if(closetimer)
	{	window.clearTimeout(closetimer);
		closetimer = null;}}
$(document).ready(function()
{	$('#nav > ul > li').bind('mouseover', Subnav_open);
	$('#nav > ul > li').bind('mouseout',  Subnav_timer);});
document.onclick = Subnav_close;
</script>
</head>
<script>
$(function() {

	//详情小图片轮播
	$("#scrollablePic").scrollable({circular: false, mousewheel: true})

});
</script>
<script src="/resources/front/js/jquery/flexslider/jquery.flexslider.min.js"></script>
<script>

//slider
$(window).load(function() {

	// 侧栏小图轮播2
	$('#flexslider1').flexslider({
		animation: "slide",
		controlNav: true, // 是否显示小圆点
		animationLoop: true, // 是否循环轮播
		slideshow: false, // 是否自动轮播
	});	
		
});
</script>


		<div id="container" class="cf">

			<div class="details-wrap">
				<div class="details-sildeon">

					<div class="scrollable-picwrap cf" style="width: 870px;">
						<a class="prev browse left fl"></a>
						<div class="scrollable-customer fl" id="scrollablePic">
						  <div class="items">

						    <div>
								<ul class="cf">
									<?php for($i=0; $i<count($allshow);$i++) { if($i < 5) {?>
									<li><a href="/insights/<?php echo $allshow[$i]['id']?>"><img style="width:111px;height:111px;" src="/uploads/report/cover/<?php echo $allshow[$i]['cover'];?>" alt="insights3" /></a></li>
									<?php }} ?>
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
						<span><?php echo $report['curr']['createtime'];?></span>
					</div>

			<!--

					<?php if(!empty($focus)) {?>

					<div class="wrap-bannerdetails cf">
					<div id="flexslider1" class="flexslider">
						<ul class="slides">
							<?php $i=0; foreach($focus as $fo){ $i++; if($i>10) {break;}?>
							<li><a href="#"><img src="/uploads/file/report/<?php echo $fo['file_url'];?>" alt="banner1" /></a></li>
								<?php }?>
						</ul>
					</div>
				</div>				
					<?php }?>
					-->

					<div class="wrap-bannerdetails cf" style="text-align:center;">
						<img style="max-width:500px;" src="/uploads/report/cover/<?php echo $report['curr']['cover'];?>" alt="insights3" />
					</div>				

					<p><?php echo $report['curr']['content'];?></p>
					<?php if(isset($file)){?>
					<div class="download cf">
					<a class="btn-large btn-large4" href="/download/index/uploads_file_<?php echo $file['file_url'];?>">Download this PDF</a>
					</div>
					<?php }?>

				</div>
			</div><!-- /details info -->
			<?php $this->load->view("_footer");?>

<?php $this->load->view("_header");?>

<link rel="stylesheet" href="/resources/front/js/jquery/colorbox/colorbox.css" />

<script src="/resources/front/js/jquery/jquery.tools.min.js"></script>
<script src="/resources/front/js/jquery/jquery.hover.min.js"></script>
<script src="/resources/front/js/jquery/jquery.colorbox.min.js"></script>

<script type="text/javascript">  
jQuery(function($){
	$('.bar').mosaic({
		animation:'slide'
	});
});
</script>
<script>
$(document).ready(function(){
	$(".popup-inline").colorbox({inline:true, scrolling:true, opacity:0.0, width:"900px", height:"590px"});
	//display hidden
	$(".partners-more").toggle(function(){    
        $(".partners-hidden").show("slideDown"); 
        },function(){ 
        	$(".partners-hidden").hide("slideUp"); 
    });

});
</script>


		<div id="container" class="cf">
			<div class="about-video cf">
		    	<div class="video-wrap">
		    		<!--酷播迷你 CuPlayerMiniV3.0 代码开始-->
					<script type="text/javascript" src="/resources/front/js/player/swfobject.js"></script>
					<div id="CuPlayer">
					<strong>酷播迷你(CuPlayerMiniV3.0) 提示：你的Flash Player版本过低，请<a href="http://www.CuPlayer.com/" >点此进行播放器升级</a></strong>
					</div>
					<script type="text/javascript">
					var so = new SWFObject("/resources/front/js/player/CuPlayerMiniV3_Black_S.swf","CuPlayer","820","410","9","#000000");
					so.addParam("allowfullscreen","true");
					so.addParam("allowscriptaccess","always");
					so.addParam("wmode","opaque");
					so.addParam("quality","high");
					so.addParam("salign","lt");
					so.addVariable("CuPlayerFile","/resources/front/chianyouth.mp4");
					so.addVariable("CuPlayerImage","/resources/front/images/pic-video.jpg");
					so.addVariable("CuPlayerShowImage","false");
					so.addVariable("CuPlayerWidth","820");
					so.addVariable("CuPlayerHeight","410");
					so.addVariable("CuPlayerAutoPlay","false");
					so.addVariable("CuPlayerAutoRepeat","true");
					so.addVariable("CuPlayerShowControl","true");
					so.addVariable("CuPlayerAutoHideControl","false");
					so.addVariable("CuPlayerAutoHideTime","6");
					so.addVariable("CuPlayerVolume","80");
					so.addVariable("CuPlayerGetNext","false");
					so.write("CuPlayer");	
					</script>
					<!--酷播迷你 CuPlayerMiniV3.0 代码结束-->
		    	</div>
			</div><!-- /video -->


			<div class="title-about">
				<h2>YOUTH COME FIRST. RESEARCH IS THE PURSUIT. SUCCEED BY SHARING.</h2>
			</div><!-- /title -->

			<div class="about-info">
				<div class="about1">
					<h3>Our Story</h3>
					<p>In 2008 a group of young, geeky explorers gathered together to found China Youthology.  Right now Chinese youth are creating new values, lifestyles, and relationships, and they are searching for support and guidance.  We feel compelled to explore the questions asked by a new generation.  As Chinese youth, we research for ourselves and for the community.</p>
					<p>China Youthology was also founded because we see big opportunity for brands to connect and be more meaningful to youth. We believe brands have an important role to play in youth's lives, and by asking questions with youth, we endeavour to bring brands into relevance.</p>
					<h4>The DNA of China Youthology is Youth and Ology – Research.</h4>
					<p>Youth is an attitude regardless of age - embrace curiosity, believe in possibilities, challenge norms, and dare to dream. We love youth culture. We champion the youth voice. We are youth. Research is our pursuit. We search for truth and we believe insights lead to change.</p>
					<h4>Our expectation on impact to youth</h4>
					<p>We share insights to youth to inspire youth discovery and encourage them to act on their life meanings. In our day to day research practice, we respect youth, build personal relationships, and inspire them.</p>
					<h4>Our expectation on impact to brands</h4>
					<p>We share insights and facilitate their use to help brands be relevant and meaningful to youth. We believe lasting competitive advantage comes from brands being closer to the people, truly understanding their needs, selling on a human level, and making commerce a relationship of mutual value creation. We hope consumer culture can be a positive force for change in Chinese youth culture, spreading useful ideas and tools.</p>			
				</div>
				<div class="about2">
					<h3>TESTIMONIALS</h3>
					<div id="scrollableSidebar" class="scrollable-sidebar vertical">
						<div class="items">

							<div>
								<ul>
									<li class="cf">
										<div class="pic-shadow1">
											<div class="about2-pic"><img src="/resources/front/images/partner/partner20.jpg" alt="partner" /></div>
										</div>
										<div class="about2-info">
											<p class="txt-n"><span class="douhao">“</span>Youthology provides a mind-opening approach to study the unique tribal behaviour and trends of China’s Millennials. Our Team has been benefited a lot from their in-depth insight workshop and exploratory projects. Lisa and her team always demonstrated their outstanding and unique youth study/research skills to ...</p>
											<p class="txt-i">- Leo Tsoi, VP of Marketing,</p>
											<p class="txt-i">Pepsico International (foods)</p>
										</div>
								    </li>
									<li class="cf">
										<div class="pic-shadow1">
											<div class="about2-pic"><img src="/resources/front/images/partner/partner40.jpg" alt="partner" /></div>
										</div>
										<div class="about2-info">
											<p class="txt-n"><span class="douhao">“</span>Chinese Youth’ is the most dynamic and rapidly influencing area for every marketer in China. I think China Youthology knows how to decode this complex subject. They have done various projects for my team at McCann China and always surprised us with insightful thinking. Especially I like their unconventional approach ...</p>
											<p class="txt-i">- Pratik Thakar, Executive VP...</p>
											<p class="txt-i">McCann China</p>
										</div>
								    </li>
									<li class="cf">
										<div class="pic-shadow1">
											<div class="about2-pic"><img src="/resources/front/images/partner/partner16.jpg" alt="partner" /></div>
										</div>
										<div class="about2-info">
											<p class="txt-n"><span class="douhao">“</span>For NESCAFÉ, China Youthology is more than a ‘research house’ – it is more like a window to connect the brand to the real young spirits. I’m always inspired by their passion...</p>
											<p class="txt-i">- Frank Ren, NESCAFÉ Brand Manager,</p>
											<p class="txt-i">Nestle</p>
										</div>
								    </li>
						        </ul>								
							</div>

							<div>
								<ul>
									<li class="cf">
										<div class="pic-shadow1">
											<div class="about2-pic"><img src="/resources/front/images/partner/partner19.jpg" alt="partner" /></div>
										</div>
										<div class="about2-info">
											<p class="txt-n"><span class="douhao">“</span>China Youthology helps Nokia to keep updated with values and lifestyles of Chinese youth. Their reports are not merely a ‘cross section’ or data load, but rather a holistic view of important phenomena of Chinese youth, as well as interpretations about the context behind ...</p>
											<p class="txt-i">- Weidong Yang, Head of Marketing Activation...</p>
											<p class="txt-i">Greater China, Nokia</p>
										</div>
								    </li>
									<li class="cf">
										<div class="pic-shadow1">
											<div class="about2-pic"><img src="/resources/front/images/partner/partner13.jpg" alt="partner" /></div>
										</div>
										<div class="about2-info">
											<p class="txt-n"><span class="douhao">“</span>Youthology has been and continues to be a great sparring partner in our endeavor to better understand the cultural nuances of the post 85 and post-90 consumers in China. The Youthology team is made of sharp, insightful and reactive team members who provide useful "food for though".</p>
											<p class="txt-i">- SW, Yuesai GM</p>
											<p class="txt-i">L'Oreal China</p>
										</div>
								    </li>
									<li class="cf">
										<div class="pic-shadow1">
											<div class="about2-pic"><img src="/resources/front/images/partner/partner12.jpg" alt="partner" /></div>
										</div>
										<div class="about2-info">
											<p class="txt-n"><span class="douhao">“</span>To become part of the youth culture in China, a brand must firstly embrace and understand the youth. Youthology Monthly has provided a great opportunity for brands to really ’see’ and understand youth.</p>
											<p class="txt-i">- Kewei Li, Design Research</p>
											<p class="txt-i">Li Ning</p>
										</div>
								    </li>
						        </ul>						
							</div>
							<div>
								<ul>
									<li class="cf">
										<div class="pic-shadow1">
											<div class="about2-pic"><img src="/resources/front/images/partner/partner1.jpg" alt="partner" /></div>
										</div>
										<div class="about2-info">
											<p class="txt-n"><span class="douhao">“</span>Young and creative people working as a team and at the same time very professional and well structured in the conduction of the projects.
<br/>project but something special<br/>
It’s so fruitful and interesting to discuss different topics - you always get interesting insights from different ...</p>
											<p class="txt-i">- Ehrhardt, Maria Elisabeth</p>
											<p class="txt-i">Audi</p>
										</div>
								    </li>
									<li class="cf">
										<div class="pic-shadow1">
											<div class="about2-pic"><img src="/resources/front/images/partner/parnter_11.png" alt="partner" /></div>
										</div>
										<div class="about2-info">
											<p class="txt-n"><span class="douhao">“</span>"Youthology doesn´t just provide description – they do deliver understanding.”
"Youthology handles complex questions on the societal market context with remarkable diligence.”."They reveal in a very vivid manner the foreground and background of the life of China´s youth of today."</p>
											<p class="txt-i">- Dr. Christian Neuhaus,Daimler AG</p>
											<p class="txt-i">Society and Technology Research Group, Berlin</p>
										</div>
								    </li>
									<li class="cf">
								    </li>
						        </ul>						
							</div>
			


						</div>		
				</div>
					<script type="text/javascript">
						
						$("#scrollableSidebar").scrollable({circular: true, mousewheel: false, vertical: true}).navigator().autoscroll({
							interval: 6000
						});
						
					</script>
				</div>
			</div><!-- /info -->

			<div class="about-mission mission">
				<h3>We are always growing but never grow old.</h3>
			</div><!-- /title -->			

			<div class="customer">
				<h3>Bios</h3>
				<div class="scrollable-customer-wrap cf">
					<a class="prev icon-view icon-prev" title="上翻">上翻</a>
					<div id="scrollableCustomer" class="scrollable-customer">
						<div class="items">

							<div>
								<ul>
							    	<li>
										<div class="mosaic-block bar">
											<div class="mosaic-overlay">
												<div class="details">
													<h4>Lisa Li</h4>
													<p>Founder, CEO</p>
												</div>
											</div>
											<div class="mosaic-backdrop">
												<div class="customer-photo">
													<a href="#inlineContent1" class="popup-inline"><img src="/resources/front/images/photo/nphoto1.jpg" alt="photo1" /></a>
												</div>
											</div>				    		
								    	</div>
								    </li>
								    <li>
								    	<div class="mosaic-block bar">
											<div class="mosaic-overlay">
												<div class="details">
													<h4>Zafka Zhang</h4>
													<p>Co-Founder, Chief Strategy Officer</p>
												</div>
											</div>
											<div class="mosaic-backdrop">
												<div class="customer-photo">
													<a href="#inlineContent2" class="popup-inline"><img src="/resources/front/images/photo/nphoto2.jpg" alt="photo2" /></a>
												</div>
											</div>								    		
								    	</div>
								    </li>
								    <li>
								    	<div class="mosaic-block bar">
											<div class="mosaic-overlay">
												<div class="details">
													<h4>Kevin Lee</h4>
													<p>Chief Operating Officer</p>
												</div>
											</div>
											<div class="mosaic-backdrop">
												<div class="customer-photo">
													<a href="#inlineContent3" class="popup-inline"><img src="/resources/front/images/photo/nphoto3.jpg" alt="photo3" /></a>
												</div>
											</div>							    		
								    	</div>
								    </li>
								    <li>
								    	<div class="mosaic-block bar">
											<div class="mosaic-overlay">
												<div class="details">
													<h4>Jean Wang</h4>
													<p>Research Director</p>
												</div>
											</div>
											<div class="mosaic-backdrop">
												<div class="customer-photo">
													<a href="#inlineContent4" class="popup-inline"><img src="/resources/front/images/photo/nphoto4.jpg" alt="photo4" /></a>
												</div>
											</div>							    		
								    	</div>
								    </li>
								    <li>
								    	<div class="mosaic-block bar">
											<div class="mosaic-overlay">
												<div class="details">
													<h4>Helen Yu</h4>
													<p>Research Manager & Lead Ethnographer</p>
												</div>
											</div>
											<div class="mosaic-backdrop">
												<div class="customer-photo">
													<a href="#inlineContent5" class="popup-inline"><img src="/resources/front/images/photo/nphoto5.jpg" alt="photo5" /></a>
												</div>
											</div>								    		
								    	</div>
								    </li>
						        </ul>								
							</div><!-- 数据循环部分 这个div整个循环 -->

							<div>
								<ul>
							    	<li>
										<div class="mosaic-block bar">
											<div class="mosaic-overlay">
												<div class="details">
													<h4>Summer Xia</h4>
													<p>Research Manager & Lead Ethnographer</p>
												</div>
											</div>
											<div class="mosaic-backdrop">
												<div class="customer-photo">
													<a href="#inlineContent6" class="popup-inline"><img src="/resources/front/images/photo/nphoto6.jpg" alt="photo6" /></a>
												</div>
											</div>				    		
								    	</div>
								    </li>
								    <li>
								    	<div class="mosaic-block bar">
											<div class="mosaic-overlay">
												<div class="details">
													<h4>Luna Lu</h4>
													<p>Operations Manager & Recruitment Manager</p>
												</div>
											</div>
											<div class="mosaic-backdrop">
												<div class="customer-photo">
													<a href="#inlineContent7" class="popup-inline"><img src="/resources/front/images/photo/nphoto7.jpg" alt="photo7" /></a>
												</div>
											</div>								    		
								    	</div>
								    </li>
								    <li>
								    	<div class="mosaic-block bar">
											<div class="mosaic-overlay">
												<div class="details">
													<h4>Candy Yang</h4>
													<p>Lead Ethnographer & Community Manager</p>
												</div>
											</div>
											<div class="mosaic-backdrop">
												<div class="customer-photo">
													<a href="#inlineContent8" class="popup-inline"><img src="/resources/front/images/photo/nphoto8.jpg" alt="photo8" /></a>
												</div>
											</div>							    		
								    	</div>
								    </li>
								    <!--
									<li>
								    	<div class="mosaic-block bar">
											<div class="mosaic-overlay">
												<div class="details">
													<h4>David Wang</h4>
													<p>Senior Ethnographer</p>
												</div>
											</div>
											<div class="mosaic-backdrop">
												<div class="customer-photo">
													<a href="#inlineContent9" class="popup-inline"><img src="/resources/front/images/photo/nphoto9.jpg" alt="photo9" /></a>
												</div>
											</div>							    		
								    	</div>
								    </li>
									-->
								    <li>
								    	<div class="mosaic-block bar">
											<div class="mosaic-overlay">
												<div class="details">
													<h4>Iris Bian</h4>
													<p>Ethnographer</p>
												</div>
											</div>
											<div class="mosaic-backdrop">
												<div class="customer-photo">
													<a href="#inlineContent10" class="popup-inline"><img src="/resources/front/images/photo/nphoto10.jpg" alt="photo10" /></a>
												</div>
											</div>								    		
								    	</div>
								    </li>
									<li>
								    	<div class="mosaic-block bar">
											<div class="mosaic-overlay">
												<div class="details">
													<h4>Evelyn Yu</h4>
													<p>General Researcher</p>
												</div>
											</div>
											<div class="mosaic-backdrop">
												<div class="customer-photo">
													<a href="#inlineContent13" class="popup-inline"><img src="/resources/front/images/photo/nphoto13.jpg" alt="photo13" /></a>
												</div>
											</div>							    		
								    	</div>
								    </li>
						        </ul>								
							</div><!-- 数据循环部分 这个div整个循环 -->

							<div>
								<ul>
								    
								    <li>
								    	<div class="mosaic-block bar">
											<div class="mosaic-overlay">
												<div class="details">
													<h4>Pheona Chen </h4>
													<p>General Researcher</p>
												</div>
											</div>
											<div class="mosaic-backdrop">
												<div class="customer-photo">
													<a href="#inlineContent15" class="popup-inline"><img src="/resources/front/images/photo/nphoto15.jpg" alt="photo15" /></a>
												</div>
											</div>								    		
								    	</div>
								    </li>
									<li>
										<div class="mosaic-block bar">
											<div class="mosaic-overlay">
												<div class="details">
													<h4>Eddie Bai</h4>
													<p>General Researcher</p>
												</div>
											</div>
											<div class="mosaic-backdrop">
												<div class="customer-photo">
													<a href="#inlineContented" class="popup-inline"><img src="/resources/front/images/photo/nphoto16.jpg" alt="photo16" /></a>
												</div>
											</div>				    		
								    	</div>
								    </li>
									<li>
										<div class="mosaic-block bar">
											<div class="mosaic-overlay">
												<div class="details">
													<h4>Prima Li</h4>
													<p>General Researcher</p>
												</div>
											</div>
											<div class="mosaic-backdrop">
												<div class="customer-photo">
													<a href="#inlineContent22" class="popup-inline"><img src="/resources/front/images/photo/nphoto22.jpg" alt="photo22" /></a>
												</div>
											</div>				    		
								    	</div>
								    </li>
						        </ul>								
							</div><!-- 数据循环部分 这个div整个循环 -->
							<div>
								<ul>
							    	
									<li>
										<div class="mosaic-block bar">
											<div class="mosaic-overlay">
												<div class="details">
													<h4>Reginald Zhu</h4>
													<p>General Researcher</p>
												</div>
											</div>
											<div class="mosaic-backdrop">
												<div class="customer-photo">
													<a href="#inlineContent17" class="popup-inline"><img src="/resources/front/images/photo/nphoto17.jpg" alt="photo17" /></a>
												</div>
											</div>				    		
								    	</div>
								    </li>
								    <li>
										<div class="mosaic-block bar">
											<div class="mosaic-overlay">
												<div class="details">
													<h4>Hannah Lincoln</h4>
													<p>General Researcher</p>
												</div>
											</div>
											<div class="mosaic-backdrop">
												<div class="customer-photo">
													<a href="#inlineContent18" class="popup-inline"><img src="/resources/front/images/photo/nphoto18.jpg" alt="photo18" /></a>
												</div>
											</div>				    		
								    	</div>
								    </li>
								    <li>
										<div class="mosaic-block bar">
											<div class="mosaic-overlay">
												<div class="details">
													<h4>Maggie Cui</h4>
													<p>Operations Specialist</p>
												</div>
											</div>
											<div class="mosaic-backdrop">
												<div class="customer-photo">
													<a href="#inlineContent19" class="popup-inline"><img src="/resources/front/images/photo/nphoto19.jpg" alt="photo19" /></a>
												</div>
											</div>				    		
								    	</div>
								    </li>
								    <li>
										<div class="mosaic-block bar">
											<div class="mosaic-overlay">
												<div class="details">
													<h4>Sindy Hou</h4>
													<p>General Researcher</p>
												</div>
											</div>
											<div class="mosaic-backdrop">
												<div class="customer-photo">
													<a href="#inlineContent20" class="popup-inline"><img src="/resources/front/images/photo/nphoto20.jpg" alt="photo20" /></a>
												</div>
											</div>				    		
								    	</div>
								    </li>
								    <li>
										<div class="mosaic-block bar">
											<div class="mosaic-overlay">
												<div class="details">
													<h4>Ling Qin</h4>
													<p>Ethnographer</p>
												</div>
											</div>
											<div class="mosaic-backdrop">
												<div class="customer-photo">
													<a href="#inlineContent21" class="popup-inline"><img src="/resources/front/images/photo/nphoto21.jpg" alt="photo21" /></a>
												</div>
											</div>				    		
								    	</div>
								    </li>

						        </ul>								
							</div><!-- 数据循环部分 这个div整个循环 -->

						</div>
					</div>
					<a class="next icon-view icon-next" title="下翻">下翻</a>
				</div>
				<div class="cf">
					<!--
					<h3><a class="partners-more" href="javascript:void(0);">more</a>Client Partners</h3>
						-->
					<div class="partner cf"  style="background-color:white;">												
						<ul class="cf">
							<li style="width:100px;height:100px;"><a href="http://www.audi.cn/cn/brand/zh.html" target="_blank"><img src="/resources/front/images/partner/1.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.bacardilimited.com/" target="_blank"><img src="/resources/front/images/partner/2.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.bmw.com/com/en/" target="_blank"><img src="/resources/front/images/partner/3.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.buick.com.cn/" target="_blank"><img src="/resources/front/images/partner/4.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.colgate.com.cn/app/Colgate/CN/HomePage.cvsp" target="_blank"><img src="/resources/front/images/partner/5.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.daimler.com/" target="_blank"><img src="/resources/front/images/partner/6.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.google.com.hk/" target="_blank"><img src="/resources/front/images/partner/7.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.intel.cn/content/www/cn/zh/homepage.html" target="_blank"><img src="/resources/front/images/partner/8.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.jnj.com/" target="_blank"><img src="/resources/front/images/partner/9.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.kraftfoodsgroup.com" target="_blank"><img src="/resources/front/images/partner/10.jpg" style="width:100px;height:100px;"/></a></li>
							
							<li style="width:100px;height:100px;"><a href="http://www.lays.youku.com/" target="_blank"><img src="/resources/front/images/partner/11.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.li-ning.com.cn/" target="_blank"><img src="/resources/front/images/partner/12.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.loreal.com/" target="_blank"><img src="/resources/front/images/partner/13.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.maybellinechina.com/" target="_blank"><img src="/resources/front/images/partner/14.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.metersbonwe.com" target="_blank"><img src="/resources/front/images/partner/15.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.nescafe.com/" target="_blank"><img src="/resources/front/images/partner/16.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.nike.com/cn/zh_cn/" target="_blank"><img src="/resources/front/images/partner/17.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.nivea.com.cn/" target="_blank"><img src="/resources/front/images/partner/18.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.nokia.com" target="_blank"><img src="/resources/front/images/partner/19.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.pepsico.com.cn/" target="_blank"><img src="/resources/front/images/partner/20.jpg" style="width:100px;height:100px;"/></a></li>
							
							<li style="width:100px;height:100px;"><a href="http://www.sogou.com/" target="_blank"><img src="/resources/front/images/partner/21.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.tencent.com/" target="_blank"><img src="/resources/front/images/partner/22.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.unilever.com/" target="_blank"><img src="/resources/front/images/partner/23.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.yahoo.com/" target="_blank"><img src="/resources/front/images/partner/24.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.draftfcb.com/home.aspx" target="_blank"><img src="/resources/front/images/partner/25.jpg" style="width:100px;height:100px;"/></a></li>
							
							<!--<li style="width:100px;height:100px;"><a href="http://www.mediaartslab.com" target="_blank"><img src="/resources/front/images/partner/26.jpg" style="width:100px;height:100px;"/></a></li>-->
							
							<li style="width:100px;height:100px;"><a href="http://www.microsoft.com/zh-cn/default.aspx" target="_blank"><img src="/resources/front/images/partner/27.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.ddbchina.com/en/index.html" target="_blank"><img src="/resources/front/images/partner/28.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.lenovo.com.cn/" target="_blank"><img src="/resources/front/images/partner/29.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.pg.com.cn/" target="_blank"><img src="/resources/front/images/partner/30.jpg" style="width:100px;height:100px;"/></a></li>
							
							<li style="width:100px;height:100px;"><a href="http://www.ogilvy.com.cn" target="_blank"><img src="/resources/front/images/partner/31.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.coca-cola.com.cn/#/home" target="_blank"><img src="/resources/front/images/partner/32.jpg" style="width:100px;height:100px;"/></a></li>
							
							<!--<li style="width:100px;height:100px;"><a href="http://www.phicomm.com/cn/" target="_blank"><img src="/resources/front/images/partner/33.jpg" style="width:100px;height:100px;"/></a></li>-->
							
							<!--<li style="width:100px;height:100px;"><a href="http://www.cdri.org.tw" target="_blank"><img src="/resources/front/images/partner/34.jpg" style="width:100px;height:100px;"/></a></li>-->
							
							<li style="width:100px;height:100px;"><a href="http://www.shiseidochina.com/" target="_blank"><img src="/resources/front/images/partner/35.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://designworksusa.com" target="_blank"><img src="/resources/front/images/partner/36.jpg" style="width:100px;height:100px;"/></a></li>
							<!--<li style="width:100px;height:100px;"><a href="" target="_blank"><img src="/resources/front/images/partner/37.jpg" style="width:100px;height:100px;"/></a></li> -->
							<li style="width:100px;height:100px;"><a href="http://www.edelman.cn/sites/zh/Pages/home.aspx" target="_blank"><img src="/resources/front/images/partner/38.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.tbwa.com/" target="_blank"><img src="/resources/front/images/partner/39.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.groupm.com/" target="_blank"><img src="/resources/front/images/partner/40.jpg" style="width:100px;height:100px;"/></a></li>
							
							<li style="width:100px;height:100px;"><a href="http://mccann.com/" target="_blank"><img src="/resources/front/images/partner/41.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.akqa.com/" target="_blank"><img src="/resources/front/images/partner/42.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.zhaopin.com/" target="_blank"><img src="/resources/front/images/partner/43.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.hsgh.com/" target="_blank"><img src="/resources/front/images/partner/44.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.lynx.cn/" target="_blank"><img src="/resources/front/images/partner/45.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.mediacom.com/en/home" target="_blank"><img src="/resources/front/images/partner/46.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://pernod-ricard.com/" target="_blank"><img src="/resources/front/images/partner/47.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.mcdonalds.com.cn/" target="_blank"><img src="/resources/front/images/partner/48.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.dewarscentre.co.uk/" target="_blank"><img src="/resources/front/images/partner/49.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.wandoujia.com/" target="_blank"><img src="/resources/front/images/partner/50.jpg" style="width:100px;height:100px;"/></a></li>
							
						<!--</ul>
						<ul class="partners-hidden cf"> -->
							<li style="width:100px;height:100px;"><a href="http://www.businessweekly.com.tw" target="_blank"><img src="/resources/front/images/partner/51.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://anheuser-busch.com/" target="_blank"><img src="/resources/front/images/partner/52.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.amway.com.cn/indexhtml/default.html" target="_blank"><img src="/resources/front/images/partner/53.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.wrigley.com/global/index.aspx" target="_blank"><img src="/resources/front/images/partner/54.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.iftf.org/home/" target="_blank"><img src="/resources/front/images/partner/55.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.vancl.com/" target="_blank"><img src="/resources/front/images/partner/56.jpg" style="width:100px;height:100px;"/></a></li>
							<li style="width:100px;height:100px;"><a href="http://www.gmchina.com/gm/front" target="_blank"><img src="/resources/front/images/partner/57.jpg" style="width:100px;height:100px;"/></a></li>
							
						</ul>
					</div>
				</div>					
			</div><!-- /bios -->

		</div><!-- //container -->


	</div><!-- //main -->


</div><!-- //page -->

<!-- This contains the hidden content for inline calls -->
<div class="hidden">
	<div id="inlineContent1" class="inline-content popup-bios">
		<div class="bios-photo">
			<img src="/resources/front/images/photo/lphoto1.jpg" alt="lphoto1" />
			<dl>
				<dt style="color: #F6951C;">Lisa <br /> Li</dt>
				<dd>Founder, CEO</dd>
			</dl>
		</div>
		<div class="bios-info">
			<h2>“<span style="color: #F6951C;">I believe good research must lead to impact.</span>”</h2>
			<p>Lisa enjoys a great reputation and loyal admiration from clients for her determination and capability to understand client’s business issues and digging for actionable insights.</p>
			<p>Lisa has been at the cutting-edge of developing, practicing, and training ground-breaking research approaches for many years, with these methodologies forming the core legacies at China Youthology.</p>
			<p>Her paper (co-authored w/ Lee Ryan) showcasing ethnographic and online interactive youth research approaches was presented in ESOMAR conference (Singapore, May 2008) and nominated as <strong>Best Paper</strong>.</p>
			<p>Before founding China Youthology, Lisa worked at the global market research firm TNS pioneering their qualitative research practice in China.</p>
			<p>Intensively involved in youth projects since 2006, Lisa realized the limitations of conventional market research for the China youth market sector. In 2008, she built a specialized team dedicated to state-of-the-art research approaches for China youth insights. The team has extensive experience in youth ethnography research. </p>
			<p>Lisa has a Master’s degree in Social Psychology at the London School of Economics and a Bachelor’s in Management Science at Fudan University.</p>
			<p>Lisa herself continues to be in the ‘edgy’ youth cohort – she has been the keyboard player of the post-rock band named ‘Prague’ since 1998. </p>
		</div>
		<div class="bios-photos">
			<img src="/resources/front/images/photo/photos1.jpg" alt="photos" />
		</div>
	</div>
</div>
<div class="hidden">
	<div id="inlineContent2" class="inline-content popup-bios">
		<div class="bios-photo">
			<img src="/resources/front/images/photo/lphoto2.jpg" alt="lphoto2" />
			<dl>
				<dt style="color: #F6951C;">Zafka <br /> Zhang</dt>
				<dd>Co-Founder, Chief Strategy Officer</dd>
			</dl>
		</div>
		<div class="bios-info">
			<h2>“<span style="color: #F6951C;">I believe this generation’s creativity has the power to change our present society.</span>”</h2>
			<p>Zafka leads China Youthology’s research of macro context and digital marketing. He is an expert of youth music and art subcultures.</p>
			<p>Zafka was the senior front-page editor and columnist for China's leading business newspaper, 21st Century Business Herald, focusing on in-depth reports in social, political, economic, and Internet topics. He continues to write for online/offline mainstream media (such as 21st CBH, City Pictorial and Urban China) today.</p>
			<p>Zafka is a pioneering digital space researcher and blogger in China. He was head of the research team at HiPiHi (China’s first virtual world platform). He is also an advisor for the Association of Virtual Worlds (global industry association) and a member of Creative Commons China.</p>
			<p>Zafka is an acclaimed sound artist and experimental musician. His art works have been published/exhibited in China, US, Europe, and Asia, among which are highlighted the eARTS festival 2008 and Shanghai and Guangzhou Triennial 2008.</p>
			<p>Zafka obtained two Masters in Political Science, Sociology and Anthropology in Fudan University (Shanghai) and SOAS (School of Oriental and African Studies, Univ. of London). </p>
		</div>
		<div class="bios-photos">
			<img src="/resources/front/images/photo/photos2.jpg" alt="photos" />
		</div>
	</div>
</div>
<div class="hidden">
	<div id="inlineContent3" class="inline-content popup-bios">
		<div class="bios-photo">
			<img src="/resources/front/images/photo/lphoto3.jpg" alt="lphoto3" />
			<dl>
				<dt style="color: #F6951C;">Kevin <br /> Lee</dt>
				<dd>Chief Operating Officer</dd>
			</dl>
		</div>
		<div class="bios-info">
			<h2>“<span style="color: #F6951C;">Building disruptive businesses is the most creative & impactful art form.</span>”</h2>
			<p>Kevin is COO for China Youthology, a cultural innovation lab that offers provocative insights about Chinese youth and facilitates the use of insights to spark actions. There, Kevin leads business strategy & operations, and contributes as a Sr. Insights specialist. </p>
			<p>Kevin is a contributing writer at <a target="_blank" href="http://forbes.com/">Forbes.com</a>, and in 2009 and 2010 Kevin (@kevinkclee) was named one of the top 25 Twitterers in China by AdAge China and China Law Blog.</p>
			<p>Kevin also writes <a target="_blank" href="http://genychina.com/">genYchina.com</a>, a well-regarded blog that discusses the changing interplay between technology, media and culture in China. He also reviews contemporary jazz music.</p>
			<p>Before Youthology, Kevin was China Digital Media and Strategy Director for Ringier AG, an International media group. Leading various divisions, Kevin built and operated national web, ecommerce and mobile platforms in China.</p>
			<p>Kevin is a frequent speaker at international conferences & festivals, most recently speaking at the Cannes Golden Lion Festival 2013 (France), DLD – Digital, Life, Design 2013 (Germany), The Conference 2011 (Sweden)</p>
			<p>Kevin holds an MBA from Canada’s #1 business school, the Schulich School of Business, York University. Graduating Dean’s List Honours, he specializes in Strategic Management and Arts & Media Administration.</p>
		</div>
		<div class="bios-photos">
			<img src="/resources/front/images/photo/photos3.jpg" alt="photos" />
		</div>
	</div>
</div>
<div class="hidden">
	<div id="inlineContent4" class="inline-content popup-bios">
		<div class="bios-photo">
			<img src="/resources/front/images/photo/lphoto4.jpg" alt="lphoto4" />
			<dl>
				<dt style="color: #F6951C;">Jean <br /> Wang</dt>
				<dd>Research Director</dd>
			</dl>
		</div>
		<div class="bios-info">
			<h2>“<span style="color: #F6951C;">Making every little good deed count for a better world.</span>”</h2>
			<p>Jean truly believes in the power of Chinese youth to shape the future of China, and seeks to grow with youth in love and curiosity. </p>
			<p>Jean’s passion is building bridges of deep connection between youth and society, and igniting the positive nature in youth to impact the world.</p>
			<p>Jean has extensive experience in market research, both as an agency professional at TNS and on client slide at SC Johnson and later at Pepsico Food. </p>
			<p>Jean is experienced in both Quantitative and Qualitative research methodologies, and providing clients with constructive & timely suggestions for business strategy development on brand positioning,  product innovation, product/concept evaluation, advertising development, and customer satisfaction tracking. </p>
			<p>During her time with Pepsico, Jean played a critical role in rebuilding the Quaker Brand brand-management approach to one using a consumer insights perspective, with the outcome being a more market-sensitive and market-successful organization.</p>
			<p>Jean obtained a bachelor’s degree in sociology from Shanghai university.</p>
		</div>
		<div class="bios-photos">
			<img src="/resources/front/images/photo/photos4.jpg" alt="photos" />
		</div>
	</div>
</div>
<div class="hidden">
	<div id="inlineContent5" class="inline-content popup-bios">
		<div class="bios-photo">
			<img src="/resources/front/images/photo/lphoto5.jpg" alt="lphoto5" />
			<dl>
				<dt style="color: #F6951C;">Helen <br /> Yu</dt>
				<dd>Research Manager & Lead Ethnographer</dd>
			</dl>
		</div>
		<div class="bios-info">
			<h2>“<span style="color: #F6951C;">Research leads to a deeper thinking about life.</span>”</h2>
			<p>Helen is one of China Youthology’s most experienced ethnographers and is also a leading analyst on business insights. She worked with the global market research firm TNS before joining China Youthology as part of the founding team in 2008. </p>
			<p>Helen’s recent work includes: </p>
			<ul>
				<li>A 2-month foundation research on lower tier youth, from macro background desk research, expert interviews, to extensive ethnographic fieldwork</li>
				<li>An explorative research on trends in mini-car culture for communication strategy for a new car model</li>
				<li>An immersion program on design trend involving youth culture exhibition and expert roundtable with top artist/designer/architect</li>
			</ul>
			<p>Helen holds Master’s Degree in Business Administration from Wuhan University. Being a post 80s herself, she enjoys her job ‘immersing in and stepping back from the youth cohort to bridge the gap between youth and brands’.</p>
			<p>Helen comes from a Tier 3 city in North East of China, lived and worked in Shanghai, and currently in Beijing</p>
		</div>
		<div class="bios-photos">
			<img src="/resources/front/images/photo/photos5.jpg" alt="photos" />
		</div>
	</div>
</div>
<div class="hidden">
	<div id="inlineContent6" class="inline-content popup-bios">
		<div class="bios-photo">
			<img src="/resources/front/images/photo/lphoto6.jpg" alt="lphoto6" />
			<dl>
				<dt style="color: #F6951C;">Summer <br /> Xia</dt>
				<dd>Research Manager & Lead Ethnographer</dd>
			</dl>
		</div>
		<div class="bios-info">
			<h2>“<span style="color: #F6951C;">Empathy! Perfection!</span>”</h2>
			<p>Summer is one of China Youthology’s leading ethnographers and demonstrates her excellence as one of its key project leaders. She worked with the global market research firm TNS before joining China Youthology as a founding team member in 2008. </p>
			<p>Summer’s recent work includes:</p>
			<ul>
				<li>Pepsi Communication Co-creation Workshop: looking to find ways to connect insight with creative, by adopting cultural branding in co-creation workshops.</li>
				<li>Media Habit Study: Innovative ways of behavioral study, new perspectives to understand media landscape and behavior habit of Chinese youth.</li>
				<li>2011 Ypulse Mash-up: Took part in top US youth marketing conference, presenting Youthology’s study of Lower-Tier Youth. Held in San Diego, USA.</li>
			</ul>
			<p>Summer graduated from Zhejiang University with a Bachelor Degree in Electrical Engineering. A native a Hangzhou, she has lived & worked in Shanghai and currently in Beijing</p>
		</div>
		<div class="bios-photos">
			<img src="/resources/front/images/photo/photos6.jpg" alt="photos" />
		</div>
	</div>
</div>
<div class="hidden">
	<div id="inlineContent7" class="inline-content popup-bios">
		<div class="bios-photo">
			<img src="/resources/front/images/photo/lphoto7.jpg" alt="lphoto7" />
			<dl>
				<dt style="color: #F6951C;">Luna <br /> Lu</dt>
				<dd>Operations Manager & Recruitment Manager</dd>
			</dl>
		</div>
		<div class="bios-info">
			<h2>“<span style="color: #F6951C;">Real life is to keep seeking, to enrich ourselves while facing each challenge, to stay the course.</span>”</h2>
			<p>Luna is a passionate Youthologist who excels at bringing process and structure, enabling China Youthology to do more with less. A student of economics and a researcher in practice, Luna applies unique skills of bringing a cultural approach to operations management.</p>
			<p>Prior to joining China Youthology, Luna worked at Jigsaw in qualitative research focusing on youth culture and lifestyle.</p>
			<p>Luna is passionate about online culture, an intense tracker of mainstream pop culture & reality TV, and also digs DIY home design. Recently, Luna has begun learning artisanal gourmet coffee-making and hopes one day to open her own shop.</p>
			<p>Luna also holds the unofficial title of “CEO” – Chief Entertainment Officer.</p>
			<p>Luna holds a Bachelor’s degree in Economics from Dalian Maritime University. She is from Xinjiang province.</p>
		</div>
		<div class="bios-photos">
			<img src="/resources/front/images/photo/photos7.jpg" alt="photos" />
		</div>
	</div>
</div>
<div class="hidden">
	<div id="inlineContent8" class="inline-content popup-bios">
		<div class="bios-photo">
			<img src="/resources/front/images/photo/lphoto8.jpg" alt="lphoto8" />
			<dl>
				<dt style="color: #F6951C;">Candy <br /> Yang</dt>
				<dd>Lead Ethnographer & Community Manager</dd>
			</dl>
		</div>
		<div class="bios-info">
			<h2>“<span style="color: #F6951C;">Being a positive part of youth growing experience brings me great joy.</span>”</h2>
			<p>Candy is a seasoned moderator and ethnographer. She is also one of China Youthology’s key community connectors, easily and naturally befriending all youth she meets. Candy joined China Youthology as a founding team member in 2008. </p>
			<p>Candy started building her research experience being trained by Lisa Li on the ethnographic method, as a trend spotter while she was a university student.</p>
			<p>Today, Candy is a core Youthologist having delivered many successful projects to brands such as Intel, MediaCom, and Nokia.</p>
			<p>Candy is the initiating creator of the Butter Youth Conference, a popular monthly event for youth to share their stories. Since its inception in 2009, over 1500 participants including youth bloggers, grassroots tribe leaders, indie musicians and artists have attended & spoken.</p>
			<p>Candy graduated from Guangdong University of Foreign Studies with a Bachelor Degree in Literature.</p>
			<p>Her native language is Cantonese. </p>
		</div>
		<div class="bios-photos">
			<img src="/resources/front/images/photo/photos8.jpg" alt="photos" />
		</div>
	</div>
</div>
<!--
<div class="hidden">
	<div id="inlineContent9" class="inline-content popup-bios">
		<div class="bios-photo">
			<img src="/resources/front/images/photo/lphoto9.jpg" alt="lphoto9" />
			<dl>
				<dt>David <br /> Wang</dt>
				<dd>Research Manager & Visual Ethnographer</dd>
			</dl>
		</div>
		<div class="bios-info">
			<h2>“<span>The world needs more lost-and-founds for treasure maps.</span>”</h2>
			<p>David has 7 years experience studying contemporary Chinese culture through visual and written ethnography. When he's not watching something through a camera, he's making something to be watched.</p>
			<p>David's China documentaries include such topics as street basketball in urban China, graffiti in Xi'an, rural education systems in Hainan and Hubei, and educational exchange between China and the US. </p>
			<p>His recent projects include ethnographic profiles of Beijing’s urban sofas (<a target="_blank" href="http://www.sofaethno.com">www.sofaethno.com</a>) which has been shared several organizations including the Forum for American-Chinese Exchange at Stanford (FACES), the Meto-Hutong Project, and Chinese student sharing conferences; and “travelling around the world (in Beijing)” has gained a following of inspired Chinese young people (<a target="_blank" href="http://www.yixiaojianda.com">www.yixiaojianda.com</a>).</p>
			<p>David served as Director of Student Programming for Massachusetts International Academy developing culturally-appropriate residential academic programs for Chinese students.</p>
			<p>After graduating from Pomona College with a degree in Asian Studies, David was selected to be a U.S. Fulbright Scholar at Xi'an Jiaotong University to conduct ethnographic research.'</p>
		</div>
		<div class="bios-photos">
			<img src="/resources/front/images/photo/photos9.jpg" alt="photos" />
		</div>
	</div>
</div>
-->
<div class="hidden">
	<div id="inlineContent10" class="inline-content popup-bios">
		<div class="bios-photo">
			<img src="/resources/front/images/photo/lphoto10.jpg" alt="lphoto10" />
			<dl>
				<dt style="color: #F6951C;">Iris <br /> Bian</dt>
				<dd>Ethnographer</dd>
			</dl>
		</div>
		<div class="bios-info">
			<h2>“<span style="color: #F6951C;">Read the hidden meanings behind the world.</span>”</h2>
			<p>Iris works as a general researcher of China Youthology. She joined China Youthology in 2011, prior to which she worked as a marketing & communication officer in Hong Kong.</p>
			<p>Born and raised in Shenzhen, Iris is strongly influenced by Hong Kong and Western Cultures and has a wide range of interests. Thus she is particularly sensitive to the cultural representations of urban youth lifestyle, and able to understand their manifestations in a cross-cultural perspective.</p>
			<p>Iris keeps sharp observation on Chinese youth culture and social-media, especially in the categories of sub-culture, fashion and e-commerce. She spent 4 years in subcultural tribes during her undergraduate years at Wuhan University and continues to maintain very good relationships with subcultural tribe members all over China.</p>
			<p>After joining China Youthology, Iris has served McDonald’s, Google, Amway, Nescafe, Yahoo and Bacardi as key researcher. She has rich experiences in ethography, FGD and immersion of nightlife, consumption and technology categories. </p>
			<p>Iris holds a Master of Arts degree from the Chinese University of Hong Kong, majoring in Intercultural Studies.</p>
		</div>
		<div class="bios-photos">
			<img src="/resources/front/images/photo/photos10.jpg" alt="photos" />
		</div>
	</div>
</div>
<div class="hidden">
	<div id="inlineContent13" class="inline-content popup-bios">
		<div class="bios-photo">
			<img src="/resources/front/images/photo/lphoto13.jpg" alt="lphoto13" />
			<dl>
				<dt style="color: #F6951C;">Evelyn <br /> Yu</dt>
				<dd>General Researcher</dd>
			</dl>
		</div>
		<div class="bios-info">
			<h2>“<span style="color: #F6951C;">Impact others in a positive way!</span>”</h2>
			<p>Before joining China Youthology, Evelyn has 3 years experience working as an account manager in a local marketing consultancy. With a strong interest in information collection, processing, analysis and output, she joined China Youthology in 2012.</p>
			<p>Evelyn is a columnist for China Campus, a leading magazine among Chinese college students. She has 7 years experience writing for youth magazines, gaining in- depth knowledge of youth culture topics and youth culture creators.</p>
			<p>Evelyn also has a very popular online presence. Her Douban open course community Early Bird has more than 20,000 members. Evelyn also writes nuanhuhu.net, a well-regarded blog that discusses self-management and self-learning.</p>
			<p>Evelyn has great passion on visual thinking, especially mindmapping. She has been interviewed by several media like CBN Weekly, and has been invited to lecture at institutions such as Tsinghua EMBA. </p>
			<p>Recently, Evelyn has been working on youth research for brands like Pepsi, Johnson & Johnson, Yahoo and Mercedes Benz. </p>
		</div>
		<div class="bios-photos">
			<img src="/resources/front/images/photo/photos13.jpg" alt="photos" />
		</div>
	</div>
</div>
<div class="hidden">
	<div id="inlineContent15" class="inline-content popup-bios">
		<div class="bios-photo">
			<img src="/resources/front/images/photo/lphoto15.jpg" alt="lphoto15" />
			<dl>
				<dt style="color: #F6951C;">Pheona <br /> Chen</dt>
				<dd>General Researcher</dd>
			</dl>
		</div>
		<div class="bios-info">
			<h2>“<span style="color: #F6951C;">I EXPLORE THE WORLD THROUGH PEOPLE’S STORIES.</span>”</h2>
			<p>Pheona is a researcher at China Youthology. She became interested in Sociology and youth culture during her senior year after participating in a Fulbright Sociology Project on Chinese youth’s internet usage. After graduating, she joined China Youthology.</p>
			<p>Pheona believes that the study of youth is not only about getting to know youth culture but also self-exploration. In the past year and a half, Pheona has employed her ethnographic approach to conduct interviews, anthropological observation, data analysis and desk research. Through other people’s stories, Pheona discovers a great diversity of perspectives. </p>
			<p>Pheona loves watching TV dramas, playing games, and following celebrity idols. She believes entertainment has the power to change the world. She is curious about entertainment’s ability to change people. She pays close attention to fan culture, community culture and the entertainment, gaming, and internet industries. Her biggest dream is to create entertainment that makes people happier and healthier.  </p>
			<p>Pheona graduated from the School of Information Management at Wuhan University.</p>
		</div>
		<div class="bios-photos">
			<img src="/resources/front/images/photo/photos15.jpg" alt="photos" />
		</div>
	</div>
</div>
<div class="hidden">
	<div id="inlineContented" class="inline-content popup-bios">
		<div class="bios-photo">
			<img src="/resources/front/images/photo/lphoto16.jpg" alt="lphoto16" />
			<dl>
				<dt style="color: #F6951C;">Eddie <br /> Bai</dt>
				<dd>General Researcher</dd>
			</dl>
		</div>
		<div class="bios-info">
			<h2>“<span style="color: #F6951C;">Keep growing but never grow old.</span>”</h2>
			<p>Eddie Joined China Youthology in 2012 to begin answering the questions that his degree in Geology could not. Eddie digs deeply into the meaning of life by understand different peoples, their lives, their worries, and their happinesses. He believes this will make himself a better person with each passing day.</p>
			<p>With experience organizing a variety of student groups, Eddie helps CY create recruitment strategies that connect researchers with the right youth. He is committed to designing the best youth recruitment system possible. Eddie’s dream is to start his own company and find success in both work and family.
</p>
			<p>Eddie makes China Youthology’s human resources run smoothly by taking care of taxes，contracts，accounting and office management needs.</p>
			<p>Eddie keeps CY’s space, Qing Gongguan，full of  activities and events for both youth and clients.</p>
			<p>Eddie’s home is full of his DIY interior design projects. He enjoys long boarding at night. He is also an avid League of Legends gamer because the game trains his reactions, patience, strategic thinking, and most importantly self-control.</p>
		</div>
		<div class="bios-photos">
			<img src="/resources/front/images/photo/photos16.jpg" alt="photos" />
		</div>
	</div>
</div>

<div class="hidden">
	<div id="inlineContent17" class="inline-content popup-bios">
		<div class="bios-photo">
			<img src="/resources/front/images/photo/lphoto17.jpg" alt="lphoto17" />
			<dl>
				<dt style="color: #F6951C;">Reginald <br /> Zhu</dt>
				<dd>General Researcher</dd>
			</dl>
		</div>
		<div class="bios-info">
			<h2>“<span style="color: #F6951C;">to be a small but mighty droplet in the ocean. </span>”</h2>
			<p>Reginald loves to listen to people’s stories and observe their daily interactions. He tries to explore undiscovered meanings hidden in daily life, whether through ethnographic immersion or everyday observations.</p>
			
			<p>Reginald believes that even small changes from individuals can contribute to macro social change. As a firm believer in the power of technology to bring people together for positive change, he is an adherent of sharism.</p>
			
			<p>Reginald participated in the investigation of the senior citizens’ service industry. Research was conducted in government offices, local communities, and nursing homes. He conducted immersive research for the philanthropic organization, The Free Lunch Foundation.</p>
			
			<p>e joined China Youthology in 2013, prior to which he worked as the research assistant of a Fulbright program on the topic of Chinese youth’s internet usage. </p>
			
			<p>For fun, he loves biking and walking.</p>
			
			<p>Reginald holds a Degree of Law from Wuhan University, with a focus on sociology.</p>

		</div>
		<div class="bios-photos">
			<img src="/resources/front/images/photo/photos17.jpg" alt="photos" />
		</div>
	</div>
</div>
<div class="hidden">
	<div id="inlineContent18" class="inline-content popup-bios">
		<div class="bios-photo">
			<img src="/resources/front/images/photo/lphoto18.jpg" alt="lphoto18" />
			<dl>
				<dt style="color: #F6951C;">Hannah <br /> Lincoln</dt>
				<dd>General Researcher</dd>
			</dl>
		</div>
		<div class="bios-info">
			<h2>“<span style="color: #F6951C;">Our stories are our greatest contributions to one another.</span>”</h2>
			<p>Hannah is a general researcher at China Youthology, having joined the team in February 2014.</p>
			<p>Hannah is a contributing writer at Forbes.com as well as various China-watch media outlets. </p>
			<p>Before Youthology, Hannah introduced Duvel-Moortgat’s Belgian beers to Western China, serving for two years as Regional Director of Sales in a previously untapped market.</p>
			<p>Hannah loves Beijing and is involved in the city’s expat literary scene, organizing and joining literary events for up-and-coming China-focused Western writers. She loves fiction and is currently working on a book of short stories.</p>
			<p>Hannah holds a MAIS from Johns Hopkins SAIS-Nanjing University, with a focus on Chinese Society. She graduated with Highest Honors from Middlebury College with a dual degrees in Chinese Literature and Religious Studies.</p>
		</div>
		<div class="bios-photos">
			<img src="/resources/front/images/photo/photos18.jpg" alt="photos" />
		</div>
	</div>
</div>
<div class="hidden">
	<div id="inlineContent19" class="inline-content popup-bios">
		<div class="bios-photo">
			<img src="/resources/front/images/photo/lphoto19.jpg" alt="lphoto19" />
			<dl>
				<dt style="color: #F6951C;">Maggie <br /> Cui</dt>
				<dd>Operations Specialist</dd>
			</dl>
		</div>
		<div class="bios-info">
			<h2>“<span style="color: #F6951C;">Seeking art in the mundane.</span>”</h2>
			<p>Maggie joined China Youthology in 2013 as an Operations Specialist.</p>
			<p>Born and raised in Hebei Province, Maggie has always nurtured her creative streak. She is interested in design, especially DIY toys’ clothing. Her ultimate dream is to create her own clothing brand, not for sale but for herself to wear in everyday life.</p>
			<p>Maggie is passionate about travelling. She believes that travel is not only a way to relax, but moreover an exploration of new life possibilities. When travelling, she spends a lot of time just walking around and appreciating all the novelties of a new city.</p>
			<p>Whether travelling or abroad or at home, she is most excited when her explorations give her inspiration for new clothing designs.</p>
			<p>Before Youthology, Maggie had one year of experience at another consulting company as an Operations Specialist.</p>
			<p>Maggie has a double bachelor’s degree of Economics & Law from Jilin Finance & Economics University. She also has two years of overseas study experience in the UK after graduation.</p>
		</div>
		<div class="bios-photos">
			<img src="/resources/front/images/photo/photos19.jpg" alt="photos" />
		</div>
	</div>
</div>
<div class="hidden">
	<div id="inlineContent20" class="inline-content popup-bios">
		<div class="bios-photo">
			<img src="/resources/front/images/photo/lphoto20.jpg" alt="lphoto20" />
			<dl>
				<dt style="color: #F6951C;">Sindy <br /> Hou</dt>
				<dd>General Researcher</dd>
			</dl>
		</div>
		<div class="bios-info">
			<h2>“<span style="color: #F6951C;">decode culture with an open mind and open heart.</span>”</h2>
			<p>Having joined Youthology in 2013, Sindy works as a general researcher.</p>
			<p>Born and raised in the ancient city Pingyao and later in Beijing and Hong Kong, Sindy is particularly interested in historical culture and social culture. She is passionate about people-oriented research.</p>
			<p>Sindy is passionate about social enterprise and social innovation. In 2011, she was selected into 3rd Youth Leadership Summer Camp to initiate social enterprise projects based on field work.She has also interned in the social welfare organization,Breakthrough Ltd., Youth Foundation.</p>
			<p>Sindy is enthusiastic about outdoor activities and life-improvement skills. She joined LOHAS organization (Lifestyle of Health and Sustainability) in college and is an active hiker. She has also received trainings in Dancing Therapy, Mental Health First Aid, and Group Therapy.</p>
			<p>Sindy holds a BA in Journalism from Renmin University of China, an MA in social policy from Chinese University of Hong Kong, graduating Dean’s List Honors and granted Distinguished Academic Scholarship.</p>
		</div>
		<div class="bios-photos">
			<img src="/resources/front/images/photo/photos20.jpg" alt="photos" />
		</div>
	</div>
</div>
<div class="hidden">
	<div id="inlineContent21" class="inline-content popup-bios">
		<div class="bios-photo">
			<img src="/resources/front/images/photo/lphoto21.jpg" alt="lphoto21" />
			<dl>
				<dt style="color: #F6951C;">Ling <br /> Qin</dt>
				<dd>Ethnographer</dd>
			</dl>
		</div>
		<div class="bios-info">
			<h2>“<span style="color: #F6951C;">The world is your oyster.</span>”</h2>
			<p>Qin enjoys youth-oriented research and perceives it as a unique channel to explore the possibility of life and to reflect upon himself.</p>
			<p>Before joining Youthology, Qin worked as a cultural ethnographer in Malmo, Sweden for an urban innovation firm called Va syd. During the Tangma Conference 2011 between China and Sweden, he was the representative and speaker of Va syd, addressing the importance of technology innovation in urban recycling facility to the Chinese side.</p>
			<p>Being an avid fan of cross-cultural communication, Qin organized a weekly culture dialogue saloon in Lund, Sweden for the culture exchange of eastern Asia and Nordic countries. This included panel speakers from top universities in Japan, Korea, HK, China, Sweden, Norway and Denmark.</p>
			<p>Qin is experienced in public presentation. In his senior year of university, Qin was awarded the Championship of English Speaking Contest for Jiangsu province. After graduation, Qin joined New Oriental and had lecture tours around universities in Nanjing, addressing to more than 2,000 students per year.</p>
			<p>Qin holds a joint master’s degree in ethnography from Lund university, Sweden and Copenhagen University, Denmark. For a bachelor’s degree, Qin majored in English and Commerce.</p>
		</div>
		<div class="bios-photos">
			<img src="/resources/front/images/photo/photos21.jpg" alt="photos" />
		</div>
	</div>
</div>
<div class="hidden">
	<div id="inlineContent22" class="inline-content popup-bios">
		<div class="bios-photo">
			<img src="/resources/front/images/photo/lphoto22.jpg" alt="lphoto22" />
			<dl>
				<dt style="color: #F6951C;">Prima <br /> Li</dt>
				<dd>General Researcher</dd>
			</dl>
		</div>
		<div class="bios-info">
			<h2>“<span style="color: #F6951C;">Stay tough, stay real.</span>”</h2>
			<p>With a master’s degree in International Business from Tilburg University in the Netherlands, Prima joined Youthology in 2014 as a general researcher.</p>
			<p>Prior to that, she was an analyst supervisor in a 4A advertisement company, from where she learned first-hand data analysis, digital advertisement and media strategy, as well as social marketing strategy.</p>
			<p>Prima also has experience in industrial analysis. She used to work for a well-known industrial consulting firm, in the fields of social marketing and mobile marketing.</p>
			<p>As a youth culture observer, Prima has good understanding of independent culture and craft beer industry. She is also interested in NGOs, in particular the World Fair Trade Organization.</p>
		</div>
		<div class="bios-photos">
			<img src="/resources/front/images/photo/photos22.jpg" alt="photos" />
		</div>
	</div>
</div>



<script>
$(function() {

	$("#scrollableCustomer").scrollable({circular: true, mousewheel: false}).navigator().autoscroll({
		interval: 8000
	});
});
</script>

<?php $this->load->view("_footer");?>

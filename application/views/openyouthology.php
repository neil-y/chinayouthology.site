<?php $this->load->view("_header");?>

		<div id="container" class="cf">

			<div class="youthology title-youthology">
		    	<h2>China Youthology's open work spaces are created to offer activity and event space<br />for Open Youthology initiatives.</h2>
				<img src="/resources/front/images/icon-rain.png" alt="rain" />
			</div><!-- /youthology -->

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

			<div class="youthology-info">					
				<p>Open Youthology is our platform and process that generates, collects, curates and shares youth stories with the youth community. It allows us to play a role in youth culture, build trust with youth, go deeper into their lives, and connect with the new ideas and peoples that influence Chinese youth today.</p>
				<p>Open Youthology acts as youth inspiration media, fulfilling China Youthology's expectation for impact to youth: sharing provocative insights to Chinese youth to inspire discovery and encouraging them to act on their life meanings.</p>
				<h3>Open Youthology is focused on being:</h3>
				<ul>
					<li>• Inspirational - not only creative, but with the purpose of opening minds, offering alternative ideas & actions, arousing questions on life meanings.</li>
					<li>• Relevant - addressing real life tensions, introducing relatable role models, and offering tips & steps that youth can truly say "I can DO/TRY that."</li>
					<li>• Amplification - working to make the pre-existing youth voice heard louder, not trying to speak for the youth nor champion only one perspective of the youth.</li>
				</ul>
				<p>OpenYouthology.com houses many of the youth stories collected from these activities, with the purpose of sharing and amplifying the great youth stories and inspirations that pioneer Chinese youth culture.</p>
				<div class="cf">
					<a href="#" class="btn-large btn-large1">To explore OpenYouthology.com</a>
					<a href="#" class="btn-large btn-large2">Follow our OpenYouthology Chinese weibo to get daily update about youth!</a>
				</div>
			</div><!-- /youthology info -->
			
			<div class="youthology-event cf">
				<div class="event1">			
					<div class="title-youthology">
				    	<h2> Open Youthology Events</h2>
						<img src="/resources/front/images/icon-rain.png" alt="rain" />
					</div>
					<p>Open Youthology has developed numerous recurring, popular events that share a variety of youth stories to the community. Creative to consumption to social innovation, Open Youthology events are designed to stimulate and inspire youth from all walks of life.</p>
					<dl>
						<dt>Here is a short list of some of our most successful and well-known events:</dt>
						<dd>• Butter Youth Conference</dd>
						<dd>• Youth salon</dd>
						<dd>• China Youth day</dd>
					</dl>
				</div>
				<div class="event2">	
					<p>To learn more about Youthology spaces and participating in Open Youthology events.</p>
					<div class="cf">
						<a href="#" class="btn-large btn-large3">Download this brochure</a>
					</div>					
				</div>
			</div>

		</div><!-- //container -->


	</div><!-- //main -->


<script type="text/javascript" src="/resources/front/js/banner.js"></script>
<?php $this->load->view("_footer");?>

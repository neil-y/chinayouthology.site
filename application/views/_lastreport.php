
	    		<div class="grid-250 fl">
					<div class="featured cf">
						<dl>
							<dt>Featured Insights</dt>
							<?php foreach( $latestReport as $report ) {?>
							<dd><a href="/insights/<?php echo $report['id'];?>"><img style="width:150px;height:70px;" src="/uploads/report/cover/<?php echo $report['cover'];?>" alt="footer1" title="<?php echo $report['title'];?>" /><p><?php echo $report['title'];?></p></a></dd>
							<?php }?>
						</dl>
					</div>	    		
				</div>


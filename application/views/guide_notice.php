<?php
	$this->load->view("_header");
?>
<script type="text/javascript" charset="utf-8">
$(function() {
	var t1_val = 0;
	if($("#t1"))
	{
		t1_val = $("#t1").val();	
	}
	
	$(".ui-tabs").tabs(".ui-tabs-panes > div", { initialIndex: t1_val.split("_")[1] - 1 });
	$("#ui-tabs2").tabs(".ui-tabs-panes2 > div");
	$("#ui-tabs3").tabs(".ui-tabs-panes3 > div");
	$("#ui-tabs4").tabs(".ui-tabs-panes4 > div");
	$("#ui-tabs5").tabs(".ui-tabs-panes5 > div");
});

</script>

<?php
	if(isset($t1))
	{
		?>
			<input type="hidden" id="t1" value="<?php echo $t1;?>">
		<?php
	}
?>
<div class="main-wrap wrapper cf">
	<div id="container" class="gridsystem cf">
		<div class="container-wrap cf">
		<?php
			$this->load->view("_left");
		?>				
			<section class="grid-4 fr">
				<div class="subbanner">
					<img class="top_img" src="/resources/template/images/xinshouzhinan.jpg" alt="新手指南" />
				</div>

				<div class="crumbs">
	            	本页位置：<a href="/">首页</a><span>&gt;&gt;</span><a href="/item/show/guide_guide">新手指南</a><span>&gt;&gt;</span>交易须知 
	            </div>

				<div class="mod3">
					<div class="hd3 cf">
						<h2 class="fl">交易须知</h2>
					</div>
					<div class="content-wrap">
						<div class="border-gray guide-notice mt-20">
							<ul class="ui-tabs">
								<li><a href="#" <?php if(!isset($t1)) echo "class=''";?> >交易产品及规则</a></li>
								<li><a href="#">资金存取</a></li>
								<li><a href="#">现货交割</a></li>
								<li><a href="#" <?php if($t1 == 't1_4') echo "class='current'";?> >风险控制</a></li>
							</ul>
							<div class="ui-tabs-panes">
								<div class="ui-tabs-panes-wrap">
									<div class="hd5 cf">
										<ul id="ui-tabs2" class="ui-tabs2">
											<li><a href="#" <?php if(!isset($t2))echo "class=''"?>>交易细则</a></li>
											<li><a href="#">交易方式</a></li>
											<li><a href="#">交易词汇</a></li>
											<li><a href="#">清算规则</a></li>
											<li><a href="#">密码重置</a></li>
											<li><a href="#">盈亏计算</a></li>
											<li><a href="#">交易费用</a></li>
											<li><a href="#">下单方式</a></li>
										</ul>
									</div>
									<div class="ui-tabs-panes2">
										<div class="ui-tabs-panes-wrap">
											
											<ul class="news-list2">
												<li class="cf">
													<div class="pic-news">
									    				<img src="/resources/template/images/logo2.jpg" alt="民泰贵金属" />
									    			</div>
													<dl>
														<dt><h2>天津贵金属交易所是国际化运营模式的市场</h2></dt>
														<dd>天津贵金属交易所黄金现货（简称天通金）、白银现货交易方式灵活，价格全球联动，24小时交易，市场公平，信息透明，与国际上黄金、白银投资的主流模式一致，让您充分把握黄金、白银的投资良机。</dd>
													</dl>
												</li>
											</ul>
											<table class="tzjy_table">
												<tr>
													<th valign="top"><div align="left">&nbsp;</div></th><th valign="top" colspan="3"><span class="STYLE1">标准合约</span></th><th valign="top" colspan="3"><span class="STYLE1">迷你合约</span></th></tr><tr><th width="192" valign="top"><div align="left" class="STYLE2"><span style="font-size: 12px">交易品种</span></div></th><th width="134" valign="top"><p style="text-align: left"><span style="font-size: 12px"><span class="STYLE2">现货白银</span></span></p></th><th width="151" valign="top" style="text-align: left"><p style="text-align: left"><span style="font-size: 12px"><span class="STYLE2">现货铂金</span></span></p></th><th width="146" valign="top" style="text-align: left"><p style="text-align: left"><span style="font-size: 12px"><span class="STYLE2">现货钯金</span></span></p></th><th width="144" valign="top"><p style="text-align: left" class="STYLE2"><span style="font-size: 12px">现货白银1000</span></p></th><th width="144" valign="top"><p style="text-align: left" class="STYLE2"><span style="font-size: 12px">现货铂金100</span></p></th><th width="149" valign="top"><p style="text-align: left" class="STYLE2"><span style="font-size: 12px">现货钯金100</span></p></th></tr><tr><td valign="top"><div align="left" class="STYLE2"><span style="font-size: 12px;color:#792600;"><strong>报价基准 </strong></span></div></td><td valign="top" colspan="6"><span style="font-size: 12px;color:#792600;"><span class="STYLE2">以伦敦现货价格为基础，综合国内价格及人民银行人民币兑美元基准汇率</span></span></td></tr><tr><td valign="top"><div align="left" class="STYLE2"><span style="font-size: 12px;color:#792600;"><strong>交易单位</strong></span></div></td><td valign="top"><span style="font-size: 12px">15千克／手</span></td><td valign="top"><span style="font-size: 12px">1千克／手</span></td><td valign="top"><span style="font-size: 12px">1千克／手</span></td><td valign="top"><span style="font-size: 12px">1千克／手</span></td><td valign="top"><span style="font-size: 12px">100克／手</span></td><td valign="top"><span style="font-size: 12px">100克／手</span></td></tr><tr><td valign="top"><div align="left" class="STYLE2"><span style="font-size: 12px;color:#792600;"><strong>报价单位</strong></span></div></td><td valign="top"><span style="font-size: 12px"><span class="STYLE2">元／千克</span></span></td><td valign="top"><span style="font-size: 12px"><span class="STYLE2">元／克</span></span></td><td valign="top"><span style="font-size: 12px"><span class="STYLE2">元／克</span></span></td><td valign="top"><span style="font-size: 12px">元／千克</span></td><td valign="top"><span style="font-size: 12px">元／克</span></td><td valign="top"><span style="font-size: 12px">元／克</span></td></tr><tr><td valign="top"><div align="left" class="STYLE2"><span style="font-size: 12px;color:#792600;"><strong>最小变价单位 </strong></span></div></td><td valign="top"><span style="font-size: 12px"><span class="STYLE2">1元／千克</span></span></td><td valign="top"><span style="font-size: 12px"><span class="STYLE2">0.01元／克</span></span></td><td valign="top"><span style="font-size: 12px"><span class="STYLE2">0.01元／克</span></span></td><td valign="top"><span style="font-size: 12px">1元／千克</span></td><td valign="top"><span style="font-size: 12px">0.01元／克</span></td><td valign="top"><span style="font-size: 12px">0.01元／克</span></td></tr><tr><td valign="top"><div align="left" class="STYLE2"><span style="font-size: 12px;color:#792600;"><strong>合约期限</strong></span></div></td><td valign="top" colspan="6"><span style="font-size: 12px"><span class="STYLE2">连续交易</span></span></td></tr><tr><td valign="top"><div align="left" class="STYLE2"><span style="font-size: 12px;color:#792600;"><strong>交易时间 </strong></span></div></td><td valign="top" colspan="6"><span style="font-size: 12px"><span class="STYLE2">周一早8：00至周六早4：00连续交易（每日凌晨4:00-6:00结算）</span></span></td></tr><tr><td valign="top"><div align="left" class="STYLE2"><span style="font-size: 12px;color:#792600;"><strong>最低保证金 </strong></span></div></td><td valign="top" colspan="6"><span style="font-size: 12px"><span class="STYLE2">合约价值的5%</span></span></td></tr><tr><td valign="top"><div align="left" class="STYLE2"><span style="font-size: 12px;color:#792600;"><strong>报价点差</strong></span></div></td><td width="134" valign="top"><span style="font-size: 12px"><span class="STYLE2">10元/千克</span></span></td><td width="151" valign="top"><span style="font-size: 12px"><span class="STYLE2">前一日结算价的0.4%</span></span></td><td width="146" valign="top"><span style="font-size: 12px"><span class="STYLE2">前一日结算价的0.8%</span></span></td><td width="146" valign="top"><span style="font-size: 12px">10元／千克</span></td><td width="144" valign="top"><span style="font-size: 12px">前一日结算价的0.4%</span></td><td width="149" valign="top"><span style="font-size: 12px">前一日结算价的0.8%</span></td></tr><tr><td valign="top"><div align="left" class="STYLE2"><span style="font-size: 12px;color:#792600;"><strong>手续费率</strong></span></div></td><td valign="top" colspan="6"><span style="font-size: 12px"><span class="STYLE2">0.08%</span></span></td></tr><tr><td valign="top"><div align="left" class="STYLE2"><span style="font-size: 12px;color:#792600;"><strong>延期费率</strong></span></div></td><td valign="top" colspan="6"><span style="font-size: 12px"><span class="STYLE2">0.02%</span></span></td></tr><tr><td valign="top"><div align="left" class="STYLE2"><span style="font-size: 12px;color:#792600;"><strong>单笔交易限额</strong></span></div></td><td width="134" valign="top"><span style="font-size: 12px"><span class="STYLE2">50手</span></span></td><td width="151" valign="top"><span style="font-size: 12px"><span class="STYLE2">5手</span></span></td><td width="146" valign="top"><span style="font-size: 12px"><span class="STYLE2">5手</span></span></td><td width="146" valign="top"><span style="font-size: 12px">50手</span></td><td width="144" valign="top"><span style="font-size: 12px">10手</span></td><td width="149" valign="top"><span style="font-size: 12px">20手</span></td></tr><tr><td valign="top"><div align="left" class="STYLE2"><span style="font-size: 12px;color:#792600;"><strong>最大持仓限额</strong></span></div></td><td width="134" valign="top"><span style="font-size: 12px"><span class="STYLE2">300手</span></span></td><td width="151" valign="top"><span style="font-size: 12px"><span class="STYLE2">20手</span></span></td><td width="146" valign="top"><span style="font-size: 12px"><span class="STYLE2">20手</span></span></td><td width="146" valign="top"><span style="font-size: 12px">300手</span></td><td width="144" valign="top"><span style="font-size: 12px">30手</span></td><td width="149" valign="top"><span style="font-size: 12px">60手</span></td></tr><tr><td valign="top"><div align="left" class="STYLE2"><span style="font-size: 12px;color:#792600;"><strong>延期费收取方式</strong></span></div></td><td valign="top" colspan="6"><span style="font-size: 12px"><span class="STYLE2">每日收取</span></span></td></tr><tr><td valign="top"><div align="left" class="STYLE2"><span style="font-size: 12px;color:#792600;"><strong>最小交割单位</strong></span></div></td><td valign="top"><span style="font-size: 12px"><span class="STYLE2">15千克</span></span></td><td valign="top"><span style="font-size: 12px"><span class="STYLE2">1千克</span></span></td><td valign="top"><span style="font-size: 12px"><span class="STYLE2">1千克</span></span></td><td valign="top"><span style="font-size: 12px">1千克</span></td><td valign="top"><span style="font-size: 12px">1千克</span></td><td valign="top"><span style="font-size: 12px">1千克</span></td></tr><tr><td valign="top"><div align="left" class="STYLE2"><span style="font-size: 12px;color:#792600;"><strong>申报交割时间</strong></span></div></td><td valign="top" colspan="6"><span style="font-size: 12px"><span class="STYLE2">每交易日上午10点-下午16点</span></span></td></tr><tr><td valign="top"><div align="left" class="STYLE2"><span style="font-size: 12px;color:#792600;"><strong>交割地点</strong></span></div></td><td valign="top" colspan="6"><span style="font-size: 12px"><span class="STYLE2">由综合会员统一安排</span></span></td>
												</tr>
											</table>
											<br />
											<p>注：交易所有权根据市场情况做出调整</p>
											<br />
											<dl class="news-list3">
												<dt class="ac"><strong>天津贵金属交易所客户分级管理规则</strong></dt>
												<dd>1、客户期末权益不足5万元的，其建仓保证金比例按照最低18%的标准执行，仅具有迷你合约的建仓权限；</dd>
												<dd>2、客户期末权益5万元以上（包含）不足10万元的，其建仓保证金比例按照最低12%的标准执行，仅具有迷你合约的建仓权限；</dd>
												<dd>3、客户期末权益10万元以上（包含）不足20万元的，其建仓保证金比例按照最低8%的标准执行，具有所有产品合约的建仓权限；</dd>
												<dd>4、客户期末权益20万元以上（包含）的，其建仓保证金比例按照最低5%的标准执行，具有所有产品合约的建仓权限；</dd>
												<dd>5、投资者在签署完协议，办理好银行资金托管后，无入金门槛，即无论账户中是否存入资金，由会员单位提交交易所即可激活。激活后存入可以买入一手合约的资金即可交易；</dd>
											</dl>
											<br />
											<p><strong>客户分级管理具体标准:</strong></p>
											<br />
											<table class="tzjy_table">
												<tr>
													<th width="10%" valign="top"><div align="left">&nbsp;</div></th><th width="20%" valign="top">权益&lt;5万</th><th width="20%" valign="top">5万≤权益&lt;10万</th><th width="25%" valign="top">10万≤权益&lt;20万</th><th width="25%" valign="top">20万≤权益</th></tr><tr><td valign="top"><div align="left" class="STYLE2"><h5 style="font-size: 12px;color:#792600;text-align:center;"><strong>5</strong>%</h5></div></td><td valign="top">&nbsp;</td><td valign="top">&nbsp;</td><td valign="top">&nbsp;</td><td valign="top" style="font-size:12px; background:#FEF9E5; ">交易所推出的所有产品合约</td></tr><tr><td valign="top"><div align="left" class="STYLE2"><h5 style="font-size: 12px;color:#792600;text-align:center;"><strong>8</strong>%</h5></div></td><td valign="top">&nbsp;</td><td valign="top">&nbsp;</td><td valign="top" style="font-size:12px; background:#FEF9E5; ">交易所推出的所有产品合约</td><td valign="top">&nbsp;</td></tr><tr><td valign="top"><div align="left" class="STYLE2"><h5 style="font-size: 12px;color:#792600;text-align:center;"><strong>12</strong>%</h5></div></td><td valign="top">&nbsp;</td><td valign="top" style="font-size:12px; background:#FEF9E5; ">仅可操作迷你合约</td><td valign="top">&nbsp;</td><td valign="top">&nbsp;</td></tr><tr><td valign="top"><div align="left" class="STYLE2"><h5 style="font-size: 12px;color:#792600;text-align:center;"><strong>18</strong>%</h5></div></td><td valign="top" style="font-size:12px; background:#FEF9E5; ">仅可操作迷你合约</td><td valign="top">&nbsp;</td><td valign="top">&nbsp;</td><td valign="top">&nbsp;</td>
												</tr>
											</table>
											<br>
											<p>交易所有权针对上述保证金标准以及产品合约建仓权限进行调整。</p>
											<p class="mb-15">未经过休市结算的新激活客户，以激活前的客户权益确定其试用的建仓保证金比例以及合约建仓权限</p>

										</div>
										<div class="ui-tabs-panes-wrap online">
											<dl class="mt-10 mb-15">
												<dt><strong>天津贵金属交易所电子平台</strong></dt>										
												<dd>天津贵金属交易所电子平台是天津贵金属交易所主持研发的功能强大、操作简单的网上交易系统，能够提供实时行情、网上交易以及查询、报表功能，同时有与银行接口的实时转账功能，方便客户出入金。系统高效、安全、灵活，让您的投资交易得到可靠保障，充分把握市场投资机会。<a href="#">点击下载</a></dd>
											</dl>
											<dl class="mt-10">
												<dt><strong>电话人工报单</strong></dt>
												<dd>如遇网络故障或其他特殊情况，您可以拨打24小时客服电话（021-31277499）致电民泰贵金属客服中心，由专业交易员接听，为您直接下单（您的电话将被录音）。</dd>
											</dl>
											<p>电话报单直拨电话：021-31277499</p>
										</div>
										<div class="ui-tabs-panes-wrap">
											<table class="tzjy_table mt-10">
												<tr>
													<td width="15%"><strong>现货合约</strong></td><td width="85%">为立即或在将来交付实际商品，通过交易所电子交易平台签订的销售协议。</td></tr><tr><td valign="top"><strong>交易账号</strong></td><td>是按照交易所细则编制的用于客户进行贵金属交易的专用代码，也称"客户编码"、"保证金账号"，实行一户一码、专码专用原则。</td></tr><tr><td><strong>保证金</strong></td><td>为确保履行合约存放在交易账户内的、由银行第三方存管的资金。</td></tr><tr><td><strong>买入/卖出价</strong></td><td>当前可供客户买入/卖出的价格。</td></tr><tr><td><strong>建仓</strong></td><td>买入或卖出贵金属商品合约的交易行为，也称开仓。</td></tr><tr><td><strong>持仓</strong></td><td>持有贵金属商品合约的交易行为。</td></tr><tr><td><strong>平仓</strong></td><td>为了结持有的合约，而进行的反向交易。</td></tr><tr><td><strong>止损</strong></td><td>当商品价格向亏损方向运行，达到设定的数值，及时平仓出局。</td></tr><tr><td><strong>止盈</strong></td><td>当商品价格向盈利方向运行，达到预期的水平，及时获利了结。</td></tr><tr><td valign="top"><strong>点差</strong></td><td>价格最小变化的单位，通常称为"点"，天通金的点为0.01元，现货白银的点为1元。可分为报价点差（买入价与卖出价的差值）、市价点差（市价委托时，委托价格与实际成交价格的差值）、限价点差（限价委托时，委托价格与当前价格的差值）。</td></tr><tr><td valign="top"><strong>市价指令</strong></td><td>以当前价格买入或卖出贵金属商品的指令。因行情变化太快，最新当前价格可能和委托价格存在差距，导致不能成功成交。可设置合理的市价点差（0-100），保证成功成交。</td></tr><tr><td valign="top"><strong>限价指令</strong></td><td>以限定（固定）价格买入或卖出贵金属商品合约的指令。因行情波动较大，当进行限价委托指令时，委托价格不能处于报价牌提示的限价点差范围内。</td></tr><tr><td valign="top"><strong>头寸</strong></td><td>未进行平仓处理的买或卖商品订单的数量。对买进者，称多头头寸；对卖出者，称空头头寸。</td></tr><tr><td valign="top"><strong>资金流水</strong></td><td>客户交易账户的出入金和其他资金变动情况的明细。</td></tr><tr><td valign="top"><strong>结算</strong></td><td>根据交易结果和交易所有关规定，对保证金、盈亏、手续费、延期费等有关款项进行的计算、划拨。</td></tr><tr><td valign="top"><strong>结算价</strong></td><td>取交易日收市前10分种的买价和卖价的平均价为结算价，并以结算价作为计算当日盈亏以及下一交易日商品的持仓价的依据。</td></tr><tr><td valign="top"><strong>持仓价</strong></td><td>如是当日建仓，持仓价等于建仓价；如是历史持仓，持仓价等于上一交易日结算价。</td></tr><tr><td valign="top"><strong>浮动盈亏</strong></td><td>由于盘中价格变动，导致最新平仓价与持仓价相比产生的盈利或亏损。计算方法为：（最新价－持仓价）×持仓数量×合约单位×方向。</td></tr><tr><td valign="top"><strong>结算盈亏</strong></td><td>由于结算价与持仓价变动，导致最新结算价与持仓价相比产生的盈利或亏损。计算方法为：（结算价－持仓价）×持仓数量×合约单位×方向。</td></tr><tr><td valign="top"><strong>平仓盈亏</strong></td><td>是持仓被平仓导致的盈利或亏损，计算方法为：（平仓价－持仓价）×持仓数量×合约单位×方向。</td></tr><tr><td valign="top"><strong>实际盈亏</strong></td><td>是实际的盈利或亏损。计算方法为：（平仓价－建仓价）×持仓数量×合约单位×方向。</td></tr><tr><td valign="top"><strong>占用保证金</strong></td><td>建仓占用的保证金，计算方法为：∑建仓价×持仓数量×合约单位×保证金比例。</td></tr><tr><td valign="top"><strong>冻结保证金</strong></td><td>限价委托未成交时冻结的保证金，计算方法为：∑限价×委托数量×合约单位×保证金比例。</td></tr><tr><td valign="top"><strong>可用保证金</strong></td><td>当前可以用于交易的有效保证金，盘中出入金、扣除手续费、浮动盈亏都会导致可用保证金变化。</td></tr><tr><td valign="top"><strong>余额</strong></td><td>交易账户内保证金的实际金额，是所有保证金之和。</td></tr><tr><td valign="top"><strong>净值</strong></td><td>交易账户内余额加上浮动盈亏之和。</td></tr><tr><td valign="top"><strong>风险率</strong></td><td>净值与占用保证金的百分比比率，计算方法为：净值／占用保证金 ×100% 。</td>
												</tr>
											</table>
											<div style="text-align: center; margin-top: 15px; color: #792600">
												（以上盈亏计算均未含手续费和延期费）
											</div>
										</div>
										<div class="ui-tabs-panes-wrap online">
											<dl class="mt-10 mb-15">
												<dt><strong>清算规则</strong></dt>										
												<dd>交易所对延期交收交易实行集中、T+1的资金清算原则。</dd>
												<dd>"集中"是指由交易所和托管银行对会员及客户资金统一进行清算。</dd>
												<dd>"T+1"是指交易所对客户和会员每笔交易所产生的盈亏及费用在第二个工作日内进行资金清算。</dd>
												<dd>投资者须在交易所指定的银行开立资金清算账户；资金托管银行根据交易系统每日结算数据，在规定时间内进行资金清算。</dd>
												<dd>投资者可通过交易系统实时查询资金清算明细数据，如有异意，24小时内向交易所提出复核申请。</dd>
											</dl>
										</div>
										<div class="ui-tabs-panes-wrap online">
											<dl class="mt-10">
												<dt><strong>密码重置</strong></dt>										
												<dd class="mb-12">密码重置是指我公司客户因遗忘登录密码、电话交易密码或资金密码而由民泰贵金属进行重置密码的服务。</dd>
												<dd class="mb-12">密码重置业务可采取现场重置或异地办理的方式。</dd>
												<dd class="mb-12">办理密码重置业务，个人客户需提交《客户密码重置申请》、身份证原件及复印件。委托他人代办，需提交《客户密码重置申请》并携带客户本人身份证原件、复印 件、受托人身份证原件、复印件、授权委托书原件办理。机构客户需提交《客户密码重置申请》（加盖公章）、《营业执照复印件》（加盖公章）、法定代表人身份 证复印件、法定代表人授权委托书、受托人身份证原件及复印件办理。</dd>
												<dd class="mb-12">对在异地未能到达民泰贵金属现场进行密码重置的客户，应先将《客户密码重置申请》、《营业执照复印件》、客户本人身份证复印件、受托人身份证复印件、委托书等相关资料传真至我公司，原件于三个工作日内邮寄至我公司。</dd>
												<dd class="mb-12">民泰贵金属根据规定必须执行严格的核对、确认和审批流程，并由交易所审核无误后，方可对客户密码进行重置操作。</dd>
												<dd class="mb-12">密码重置后的新密码可通过现场提取或电子邮件的方式提取。</dd>
												<dd>对在异地未能到达民泰贵金属现场进行密码重置的客户，我公司对客户密码进行重置后，立即通知客户已完成密码重置，并通过电子邮件方式进行新密码发送，客户应立即登陆交易系统进行密码修改，我公司将以电话录音的方式将语音通知进行保存。</dd>
											</dl>
											<p>客服电话：021-31277498</p>
										</div>
										<div class="ui-tabs-panes-wrap">
											<ul class="news-list2">
												<li class="cf">
													<div class="pic-news">
									    				<img src="/resources/template/images/logo2.jpg" alt="民泰贵金属" />
									    			</div>
													<dl>
														<dt><h2>天津贵金属交易所是国际化运营模式的市场</h2></dt>
														<dd>天津贵金属交易所黄金现货（简称天通金）、白银现货交易方式灵活，价格全球联动，24小时交易，市场公平，信息透明，与国际上黄金、白银投资的主流模式一致，让您充分把握黄金、白银的投资良机。</dd>
														<dd>
															<br />
															<strong class="color-gold">盈亏计算公式:</strong>
															<p>盈亏值=（卖出价－买入价）×买入数量－延期费－手续费</p>
														</dd>
													</dl>
												</li>
												<li class="cf">
													<div class="pic-news">
									    				<img src="/resources/template/images/shili1.gif" alt="案例1" />
									    			</div>
													<dl>
														<dd>张先生在3月9日买入2手（2000克）黄金，并于当天卖出。买入价格为300元，卖出价格为303元，他的盈利情况为：</dd>
														<dd><strong>投入保证金：</strong>300×2000×8%=48000元</dd>
														<dd><img src="/resources/template/images/sl1.gif" alt="案例1" /></dd>
														<dd><strong>盈利率：</strong>5035.2÷48000=10.49%</dd>
													</dl>
												</li>
												<li class="cf">
													<div class="pic-news">
									    				<img src="/resources/template/images/shili2.gif" alt="案例1" />
									    			</div>
													<dl>
														<dd>李女士在3月9日买入5手（75千克）白银，并于第三天卖出。买入价格为6500元，卖出价格为6435元，她的亏损情况为：</dd>
														<dd><strong>投入保证金：</strong>75×6500×8%=39000元</dd>
														<dd><img src="/resources/template/images/sl2.gif" alt="案例1" /></dd>
														<dd><strong>盈利率：</strong>-5846.1÷39000=-14.99%</dd>
													</dl>
												</li>
											</ul>
										</div>
										<div class="ui-tabs-panes-wrap online">
											<dl class="mt-10 mb-15">
												<dt><strong>交易费用</strong></dt>										
												<dd>投资者在参与天通金交易过程中，需要支付如下费用：手续费、延期费（持仓过夜时收取）等。+1的资金清算原则。</dd>
												<dd>手续费收取标准为成交金额的万分之八；（成交金额建仓价或平仓价交易单位手数交易数量）</dd>
												<dd>延期费收取标准为成交金额的万分之二；</dd>
											</dl>
											<dl class="mt-10 mb-15">
												<dt><strong>举例说明：</strong></dt>										
												<dd class="mb-12">假如金价320元/克时建仓做多1手，当上涨至323元/克时平仓，</dd>
												<dd class="mb-12"><img src="/resources/template/images/jiaoyifeiyong.jpg" alt="jiaoyifeiyong" /></dd>
												<dd>交易软件将及时计算投资者的持仓浮动盈亏和盈亏，投资者不必亲自计算。</dd>
											</dl>
										</div>
										<div class="ui-tabs-panes-wrap online">
											<dl class="mt-10 mb-15">
												<dt><strong>下单方式</strong></dt>										
												<dd class="mb-12">交易系统的下单类型目前分为：市价单、指价单、止损和止盈单。</dd>
												<dd class="mb-12">
													<img src="/resources/template/images/xiadan1.jpg" alt="下单方式1" />
													<img src="/resources/template/images/xiadan2.jpg" alt="下单方式2" />
													<img src="/resources/template/images/xiadan3.jpg" alt="下单方式3" />
												</dd>
											</dl>
										</div>
									</div>
								</div>
								<div class="ui-tabs-panes-wrap online">
									<div class="hd5 cf">
										<ul id="ui-tabs3" class="ui-tabs2">
											<li><a href="#">资金三方存管</a></li>
											<li><a href="#">出入金注意事项</a></li>
											<li><a href="#">签约注意事项</a></li>
										</ul>
									</div>
									<div class="ui-tabs-panes3">
										<div class="ui-tabs-panes-wrap">
											
											<dl class="mt-10 mb-15">
							            		<dt><strong>银行三方存管</strong></dt>
							            		<dd>
							            			<p>银行三方存管是指天津贵金属交易所将客户贵金属账户交易资金交由银行作为独立第三方存管。天津贵金属交易所及其会员不接触客户保证金，而由存管银行负责投资者交易清算与资金交收，由存管银行负责客户资金存取，监控客户交易结算资金安全。</p>
													<p>按照天津贵金属交易所规定，投资者必须与相关协议银行办理三方存管签约。</p>
												</dd>
											</dl>
											<dl class="mt-10 mb-15">
							            		<dt><strong>三方存管的重大意义</strong></dt>
							            		<dd>
													<p>充分保障投资者资金安全</p>
													<p>三方存管从制度上避免了交易所或其会员挪用客户交易资金，由银行信用确保客户资金的兑付，客户资金的安全最大限度上得到保障。</p>
													<p>资金划转方便，存取自由</p>
													<p>客户交易资金的划转可以通过交易所电子交易平台、银行柜台或网银等多种方式完成，通过银行的多种方式进行资金存取。</p>
							            		</dd>
							            	</dl>
							            	<dl class="mt-10 mb-15">
							            		<dt><strong>协议银行</strong></dt>
							            		<dd>
													<p>目前已与天津贵金属交易所达成三方存管业务协议的银行有：</p>
													<p>
														<img style="width:100%;" src="/resources/template/images/bank3.jpg" alt="银行" />
													</p>
							            		</dd>
							            	</dl>

										</div>
										<div class="ui-tabs-panes-wrap">
											<dl class="mt-10 mb-15">
												<dt><strong>投资者出入金注意事项</strong></dt>										
												<dd>
													<p>投资者必须在完成结算银行签约后，方可进行交易资金划转。</p>
													<p>首次入金操作，只能通过银行柜台或网银的入金方式由银行三方存管的渠道进行，以确保投资者在交易所的交易账户不为空账户。</p>
													<p>投资者交易账户正式开通后，可选择交易所电子交易系统或结算银行柜台的专门业务进行交易资金的划转。如结算银行提供了可实现交易资金划转处理的网银、电话或其他服务业务，可通过结算银行的网银、电话或其他服务业务进行交易资金划转。</p>
													<p>请投资者务必注意：通过常规方式的银行汇款、转账业务从投资者账户划入交易所账户的资金不能作为交易所的交易资金，交易所的交易资金也不能通过常规方式的银行汇款、转账业务划出到投资者账户。</p>
													<p>投资者的交易资金划转操作的有效时间为：<strong>8:00-23:00各银行具体时间详见下方银行签约指南</strong></p>
													<p>
														<img usemap="#Map" style="border-bottom:1px solid #faf3e3; border-left:1px solid #faf3e3; border-right:1px solid #faf3e3;width:100%;" src="/resources/template/images/bank2.jpg" alt="银行" />
														<map name="Map">
															<area target="_blank" shape="rect" href="http://www.mintai166.com/WEB/Fanli.aspx#tabs-5" coords="25,46,173,101"> <area target="_blank" shape="rect" href="http://www.mintai166.com/WEB/Fanli.aspx#tabs-2" coords="183,43,346,100"> <area target="_blank" shape="rect" href="http://www.mintai166.com/WEB/Fanli.aspx#tabs-4" coords="353,42,513,102"> <area target="_blank" shape="rect" href="http://www.mintai166.com/WEB/Fanli.aspx#tabs-3" coords="527,44,684,97"> <area target="_blank" shape="rect" href="http://www.mintai166.com/WEB/Fanli.aspx#tabs-6" coords="15,111,177,172"> <area target="_blank" shape="rect" href="http://www.mintai166.com/WEB/Fanli.aspx#tabs-8" coords="186,114,347,168"> <area target="_blank" shape="rect" href="http://www.mintai166.com/WEB/Fanli.aspx#tabs-7" coords="355,113,517,169"> <area target="_blank" shape="rect" href="http://www.mintai166.com/WEB/Fanli.aspx#tabs-9" coords="524,113,682,166">
														</map>
													</p>
												</dd>
											</dl>
										</div>
										<div class="ui-tabs-panes-wrap">
											<dl class="mt-10 mb-15">
							            		<dt><strong>三方存管签约注意事项</strong></dt>
							            		<dd>
							            			<p>投资者在进行结算银行签约之前，必须已在民泰贵金属开户，并已设置在交易所的交易资金账户和密码；</p>
													<p>投资者在进行结算银行签约之前，必须在民泰贵金属领取相关银行签约表格和协议；</p>
													<p>投资者选择交通银行、农业银行、中信银行办理签约，必须临柜办理；</p>
													<p>投资者选择光大银行、工商银行办理签约，可选择临柜办理或网银方式办理；</p>
													<p>投资者在结算银行办理签约时，民泰贵金属客户经理将为投资者办理结算银行签约提供完善的支持服务；</p>
							            		</dd>
							            	</dl>
										</div>
									</div>								
								</div>
								<div class="ui-tabs-panes-wrap online">
									<div class="hd5 cf">
										<ul id="ui-tabs4" class="ui-tabs2">
											<li><a href="#">交收基本要素</a></li>
											<li><a href="#">交割与销售</a></li>
											<li><a href="#">实物回购</a></li>
											<li><a href="#">质量纠纷</a></li>
										</ul>
									</div>
									<div class="ui-tabs-panes4">
										<div class="ui-tabs-panes-wrap">
											
											<dl class="mt-10 mb-15">
							            		<dt><strong>交易标的</strong></dt>
							            		<dd>投资金条重量200克/条，成色不低于99.99％，符合中华人民共和国国家标准 GB/T 4134—2003的相关标准。</dd>
							            		<dd>投资银锭重量15千克/锭，成色不低于99.99％，符合中华人民共和国国家标准 GB/T 4135—2002的相关标准。</dd>
							            		<dd>每根金条、银锭上标有交易所认定的唯一编号、条锭重量、纯度标识、生产厂商标识和民泰贵金属的品牌名称。</dd>
							            	</dl>
							            	<dl class="mt-10 mb-15">
							            		<dt><strong>生产厂</strong></dt>
							            		<dd>交易所严格选择生产厂家并向合格厂家进行生产资质授权，相关信息在网站公布。</dd>
							            		<dd>唯有经交易所授权的合格生产厂才有权作为交易所指定生产厂生产交易标的金条、银锭。</dd>
							            	</dl>
							            	<dl class="mt-10 mb-15">
							            		<dt><strong>交割回购单位</strong></dt>
							            		<dd>实物黄金的交割、回购量须为1千克的整数倍，最少交割、回购量为1千克。</dd>
							            		<dd>实物白银的交割、回购量须为15千克的整数倍，最少交割、回购量为15千克。</dd>
							            	</dl>
							            	<dl class="mt-10 mb-15">
							            		<dt><strong>业务地点及营业时间</strong></dt>
							            		<dd>交割、销售和回购地点为民泰贵金属营业地址。</dd>
							            		<dd>交割、销售和回购的时间为每个交易日上午10点至下午4点。</dd>
							            	</dl>
							            	<dl class="mt-10 mb-15">
							            		<dt><strong>客户交割提货是指客户补齐资金，将多头仓位兑现为交易标的。</strong></dt>
							            		<dd>客户以多头仓位申请交割提货，需在民泰贵金属网点当场平仓并凭当场打印出的该笔平仓单据办理；</dd>
							            		<dd>民泰贵金属对非基于即时平仓而提出的交割申请可不予受理；</dd>
							            		<dd>交割价格 = 平仓价格 + 单位提货费；</dd>
							            		<dd>提货费包括加工费、储运费等，单位提货费收取标准为：黄金不高于现价的7%，白银不高于现价的20%。</dd>
							            		<dd>客户需按照交割价格和提货数量，支付足额资金。</dd>
							            	</dl>
							            	<dl class="mt-10 mb-15">
							            		<dt><strong>销售是指客户可在仓储交割地现场购买交易所交易标的。</strong></dt>
							            		<dd>购买价格 = 即时报价 + 单位提货费；</dd>
							            	</dl>
							            	<dl class="mt-10 mb-15">
							            		<dt><strong>当民泰贵金属存货不足时，最长延期交货日期按照下表执行。</strong></dt>
							            		<dd>
													<table class="tzjy_table">
														<tr>
															<th width="21%" valign="middle" align="center">种类</th><th width="43%" align="center">回购数量（G）</th><th width="36%" align="center">最大支付期限</th></tr><tr><td valign="middle" bgcolor="#f3f7f9" align="center" rowspan="3">黄金</td><td align="center">1000克≤G＜5000克</td><td align="center">10个工作日</td></tr><tr><td align="center">5000克≤G＜20000克</td><td align="center">20个工作日</td></tr><tr><td align="center">20000克≤G</td><td align="center">双方商定</td></tr><tr><td valign="middle" bgcolor="#f3f7f9" align="center" rowspan="3">白银</td><td align="center">15千克≤G＜150千克</td><td align="center">10个工作日</td></tr><tr><td align="center">150千克≤G＜1500千克</td><td align="center">20个工作日</td></tr><tr><td align="center">1500千克≤G</td><td align="center">双方商定</td>
														</tr>
													</table>
							            		</dd>
							            	</dl>

										</div>
										<div class="ui-tabs-panes-wrap">
											<dl class="mt-10 mb-15">
							            		<dt><strong>交割与销售</strong></dt>
							            		<dd>
							            			<p><strong>客户交割提货是指客户补齐资金，将多头仓位兑现为交易标的。</strong></p>
													<p>客户以多头仓位申请交割提货，需在民泰贵金属网点当场平仓并凭当场打印出的该笔平仓单据办理；</p>
													<p>民泰贵金属对非基于即时平仓而提出的交割申请可不予受理；</p>
													<p>交割价格 = 平仓价格 + 单位提货费；</p>
													<p>提货费包括加工费、储运费等，单位提货费收取标准为：黄金不高于现价的7%，白银不高于现价的20%。</p>
													<p>客户需按照交割价格和提货数量，支付足额资金。</p>
													<p><strong>销售是指客户可在仓储交割地现场购买交易所交易标的。</strong></p>
													<p>购买价格 = 即时报价 + 单位提货费；</p>
													<p>当民泰贵金属存货不足时，最长延期交货日期按照下表执行。</p>
							            		</dd>
							            	</dl>
							            	<table class="tzjy_table">
							            		<tr>
							            			<th width="21%" valign="middle" align="center">种类</th><th width="43%" align="center">回购数量（G）</th><th width="36%" align="center">最大支付期限</th></tr><tr><td valign="middle" bgcolor="#f3f7f9" align="center" rowspan="3">黄金</td><td align="center">1000克≤G＜5000克</td><td align="center">10个工作日</td></tr><tr><td align="center">5000克≤G＜20000克</td><td align="center">20个工作日</td></tr><tr><td align="center">20000克≤G</td><td align="center">双方商定</td></tr><tr><td valign="middle" bgcolor="#f3f7f9" align="center" rowspan="3">白银</td><td align="center">15千克≤G＜150千克</td><td align="center">10个工作日</td></tr><tr><td align="center">150千克≤G＜1500千克</td><td align="center">20个工作日</td></tr><tr><td align="center">1500千克≤G</td><td align="center">双方商定</td>
							            		</tr>
							            	</table>
										</div>
										<div class="ui-tabs-panes-wrap">
											<dl class="mt-10 mb-15">
							            		<dt><strong>实物回购</strong></dt>
							            		<dd>
							            			<p><strong>回购指客户向民泰贵金属交付质量合格的交易所交易标的的方式对己方持有的空头仓位进行平仓，或直接将质量合格的交易所交易标的回售給民泰贵金属。</strong></p>
													<p>民泰贵金属客户持有空头仓位申请回购，需在公司营业网点当场平仓并凭当场打印出的该笔平仓单据办理；</p>
													<p>民泰贵金属对非基于即时平仓而提出的平仓回购申请可不予受理；</p>
													<p>平仓回购价格 = 平仓价格 – 单位手续费；</p>
													<p>手续费包括检验费、储运费等，单位手续费为：黄金不高于现价的2％，白银不高于现价的5%。</p>
													<p>客户可持交易所交易标的和原始出库单，直接到交易所任意会员网点申请回购；</p>
													<p>回购价格 = 即时价格 – 手续费。</p>
													<p><strong>民泰贵金属回购，原则上需即时向客户全额支付款项；款项不足时，延期支付日按照下表执行；</strong></p>
							            		</dd>
							            	</dl>
							            	<table class="tzjy_table">
							            		<tr>
							            			<th width="21%" valign="middle" align="center">种类</th><th width="43%" align="center">回购数量（G）</th><th width="36%" align="center">最大支付期限</th></tr><tr><td valign="middle" bgcolor="#f3f7f9" align="center" rowspan="3">黄金</td><td align="center">1000克≤G＜5000克</td><td align="center">5个工作日</td></tr><tr><td align="center">5000克≤G＜20000克</td><td align="center">10个工作日</td></tr><tr><td align="center">20000克≤G</td><td align="center">双方商定</td></tr><tr><td valign="middle" bgcolor="#f3f7f9" align="center" rowspan="3">白银</td><td align="center">15千克≤G＜150千克</td><td align="center">5个工作日</td></tr><tr><td align="center">150千克≤G＜1500千克</td><td align="center">10个工作日</td></tr><tr><td align="center">1500千克≤G</td><td align="center">双方商定</td>
							            		</tr>
							            	</table>
										</div>
										<div class="ui-tabs-panes-wrap">
											<dl class="mt-10 mb-15">
							            		<dt><strong>质量纠纷</strong></dt>
							            		<dd>
							            			<p>客户提取交易标的后，如果对质量持有异议，必须在提货日后5个工作日内向原仓储交割网点书面提出，并提供质量鉴定结论或有效证明，超过此期限视为无异议。</p>
													<p>交易标的产品发生质量异议，由民泰贵金属、客户在交易所指定的具有国家级检验资质的中立质检机构范围内选择具体检测机构进行检验。</p>
													<p>经具有国家级检验资质的中立质检机构检验后，质量纠纷中的过错方应承担以下责任：</p>
													<p>（一）支付质检及相关费用；</p>
													<p>（二）承担由此发生的直接经济损失。</p>
							            		</dd>
							            	</dl>
										</div>
									</div>
								</div>
								<div class="ui-tabs-panes-wrap online">
									<div class="hd5 cf">
										<ul id="ui-tabs5" class="ui-tabs2">
											<li><a href="#">风险揭示</a></li>
											<li><a href="#">特别揭示</a></li>
											<li><a href="#">保证金制度</a></li>
											<li><a href="#">限仓制度</a></li>
											<li><a href="#">强行平仓制度</a></li>
											<li><a href="#">风险警示制度</a></li>
										</ul>
									</div>
									<div class="ui-tabs-panes5">
										<div class="ui-tabs-panes-wrap">

											<dl class="mt-10 mb-15">
							            		<dt><strong>政策风险</strong></dt>
							            		<dd>由于国家法律、法规、政策的变化，紧急措施的出台，相关监管部门监管措施的实施，交易所交易规则的修改等原因，均可能会对投资者的投资产生影响，投资者必须承担由此导致的损失。</dd>
							            	</dl>
											<dl class="mt-10 mb-15">
							            		<dt><strong>价格波动的风险</strong></dt>
							            		<dd>贵金属作为一种特殊的具有投资价值的商品，其价格受多种因素的影响（如国际经济形势、美元 汇率、相关市场走势、政治局势、原油价格等等），这些因素对贵金属价格的影响机制非常复杂，投资者在实际操作中难以全面把握，因而存在出现投资失误的可能性，如果不能有效控制风险，则可能遭受较大的损失，投资者必须独自承担由此导致的一切损失。</dd>
							            	</dl>
							            	<dl class="mt-10 mb-15">
							            		<dt><strong>技术风险</strong></dt>
							            		<dd>此业务通过电子通讯技术和互联网技术来实现。有关通讯服务及软、硬件服务由不同的供应商提 供，可能会存在品质和稳定性方面的风险；交易所及其会员不能控制电讯信号的强弱，也不能保证交易客户端的设备配置或连接的稳定性以及互联网传播和接收的实时性。故由以上通讯或网络故障导致的某些服务中断或延时可能会对投资者的投资产生影响。另外，投资者的电脑系统有可能被病毒和/或网络黑客攻击，从而使投资者的投资决策无法正确和/或及时执行。对于上述不确定因素的出现也存在着一定的风险，有可能会对投资者的投资产生影响，投资者应该充分了解并承担由此造 成的全部损失。</dd>
							            	</dl>
							            	<dl class="mt-10 mb-15">
							            		<dt><strong>交易风险</strong></dt>
							            		<dd class="mb-15">投资者需要了解交易所的贵金属现货延期交收交易业务具有低保证金和高杠杆比例的投资特点，可能导致快速的盈利或亏损。若建仓的方向与行情的波动相反，会造成较大的亏损，根据亏损的程度，投资者必须有条件满足随时追加保证金的要求，否则其持仓将会被强行平仓，投资者必须承担由此造成的全部损失。</dd>
							            		<dd class="mb-15">交易所以伦敦贵金属现货市场价格为基础，综合国内贵金属市场价格及中国人民银行人民币兑美元基准汇率，连续报出交易所贵金属现货的人民币中间指导价。该价格可能会与其他途径的报价存在微弱的差距，交易所并不能保证其交易价格与其他市场保持完全的一致性。</dd>
							            		<dd class="mb-15">投资者在交易所的交易系统内，通过网上终端所提交的市价单一经成交，即不可撤销，投资者必须接受这种方式可能带来的风险。</dd>
							            		<dd class="mb-15">投资者通过会员以电话的方式下市价单，一经会员交易部报价确认成交后，即不可撤销或撤回，投资者必须接受此种报单方式有可能带来的风险。</dd>
							            		<dd class="mb-15">交易所、会员及其工作人员不会对投资者做出获利保证，并且不会与投资者分享收益或共担风险。投资者应知晓针对贵金属现货延期交收交易业务的任何获利或者不会发生亏损的承诺均为不可能或者没有根据的。</dd>
							            		<dd class="mb-15">投资者的成交单据必须是建立在自己的自主决定之上。交易所、会员及其工作人员提供的任何关于市场的分析和信息，仅供投资者参考，同时也不构成任何要约。由此而造成的交易风险由投资者自行承担。</dd>
							            		<dd class="mb-15">在电话以及电子交易的过程中，有可能出现偶然性的明显的错误报价，交易所可能事后会对错价及错价产生的盈亏做出纠正，由此而造成的交易风险由投资者自行承担。</dd>
							            	</dl>
							            	<dl class="mt-10 mb-15">
							            		<dt><strong>不可抗力风险</strong></dt>
							            		<dd>任何因交易所不能够控制的原因，包括地震、水灾、火灾、暴动、罢工、战争、政府管制、国际或国内的禁止或限制以及停电、技术故障、电子故障等其他无法预测和防范的不可抗力事件，都有可能会对投资者的交易产生影响，投资者应该充分了解并承担由此造成的全部损失。</dd>
							            	</dl>

										</div>
										<div class="ui-tabs-panes-wrap">
											<dl class="mt-10 mb-15">
							            		<dt><strong>温馨提示</strong></dt>
							            		<dd>
							            			<p>贵金属现货延期交收交易业务具有高投机性和高风险性，不适合利用养老基金、债务资金（如银行贷款）等进行投资的投资者。</p>
													<p>贵金属现货延期交收交易业务只适合于以下同时满足以下条件的投资者：</p>
													<p>A、年满18周岁并具有完全民事行为能力的中国公民。</p>
													<p>B、能够充分理解有关于此交易的一切风险，并且具有风险承受能力的投资者。</p>
													<p>C、因投资失误而造成账户资金部分或全部损失、仍不会改变其正常生活方式的投资者。</p>
												</dd>
											</dl>
											<dl class="mt-10 mb-15">
							            		<dt><strong>特别提示</strong></dt>
												<dd>	
													<p>投资者在参与投资之前务必详尽的了解贵金属投资的基本知识和相关风险以及交易所有关的业务规则等，以依法合规地从事贵金属投资业务。</p>
													<p>天津贵金属交易所作为天津滨海新区金融创新、先行先试项目，与现有的国内其他贵金属交易市场相比，在交易模式、交易规则等方面存在着一定的差别；而且交易 所为了确保市场"公开、公平、公正"和健康稳定地发展，将采取更加严格的措施，强化市场的监管。请您务必密切的关注有关于该市场的公告、风险提醒等信息， 及时了解市场风险状况，做到理性投资，切忌盲目跟风。</p>
													<p>在交易所试运营初期阶段，投资者在开通交易之前，请配合会员开展投资者的适当性管理工作，完整、如实地提供开户所需要的信息，不得采取弄虚作假等手段规避 有关的要求，否则，交易所可以拒绝为其开通交易服务。</p>
													<p>上述风险揭示事项仅为列举性质，未能详尽的列明有关该市场贵金属交易的所有风险因素，投资者在参与该市场投资之前，还应认真的对其他可能存在的风险因素有所了解和掌握。</p>
													<p>我们诚挚的希望和建议投资者，从风险承受能力等自身实际情况出发，审慎地决定是否参与此市场的贵金属投资，合理的配置自己的金融资产。</p>
							            		</dd>
							            	</dl>
										</div>
										<div class="ui-tabs-panes-wrap">
											<dl class="mt-10 mb-15">
							            		<dt><strong>保证金制度</strong></dt>
							            		<dd>
							            			<p>交易所实行保证金制度，现货延期交易的预付最低交易保证金为成交金额的5%。</p>
													<p>交易的过程中，对于出现的下列情况之一的，交易所可以根据市场风险情况调整交易保证金的标准：</p>
													<p>（一）持仓达到一定水平时；</p>
													<p>（二）行情波动较大出现单边市时；</p>
													<p>（三）遇国家法定的节假日时；</p>
													<p>（四）交易所认为市场风险明显变化；</p>
													<p>（五）交易所认为必要的其他情况。</p>
													<p>交易所根据市场情况决定调整交易保证金的标准，应当予以公告。</p>
													<p>交易所调整交易保证金标准的，在当日结算时对该品种的所有持仓按照调整后的交易保证金标准进行结算。</p>
													<p>连 续三个交易日累计涨跌幅度超过15%时，交易所有权决定并公告是否采取单边或双边，同比例或不同比例，对部分会员或全部会员所属投资者提高交易保证金；单 边或双边，同比例或不同比例，部分会员或全部会员提高买卖价差；暂停部分会员或全部会员开新仓；限制部分会员或全部会员提取资金、限期平仓、强行平仓、停 市等措施中的一种或多种化解市场风险。</p>
													<p>交易所根据市场情况需要调整交易保证金比例的，必须通过交易所内部交易系统、网站或其他方式，予以公告。</p>
												</dd>
											</dl>
										</div>
										<div class="ui-tabs-panes-wrap">
											<dl class="mt-10 mb-15">
							            		<dt><strong>保证金制度</strong></dt>
							            		<dd>
													<p>交易所实行持仓限额制度。会员持仓限额是指交易所规定的会员对某一合约净持仓的最大数量。投资者持仓限额是指交易所规定的投资者对某一合约持仓的最大数量。</p>
													<p>交易所规定：投资者每笔交易的最大下单量为白银50手（即750千克），钯金、铂金各5手；投资者最大持仓为白银300手（即4500千克），钯金、铂金各20手。</p>
													<p>交易所有权根据市场情况进行相应调整。</p>
													<p>客户持仓达到持仓限额的，不得开新仓。</p>
													<p>交易所实行大户报告制度。交易所可以根据市场风险状况，制定并调整持仓报告标准。</p>
													<p>会员或者投资者对某一合约持仓达到交易所规定的持仓报告标准或者被交易所指定必须报告的，会员或者投资者应当于下一交易日16：30之前向交易所报告。</p>
													<p>投资者未报告的，会员应当向交易所报告。交易所有权要求会员、投资者再次报告或者补充报告。</p>
													<p>达到交易所规定报告标准或者交易所要求报告的会员，应当提供下列资料：</p>
													<p>（一）《综合会员大户持仓报告表》，内容包括会员名称、会员号、合约名称等；</p>
													<p>（二）资金来源说明；</p>
													<p>（三）其持仓量前五名投资者的名称、交易账号、持仓量、交易保证金及风险率等；</p>
													<p>（四）交易所要求提供的其他材料。</p>
													<p>达到交易所规定报告标准或者交易所要求报告的投资者，应当提供下列资料：</p>
													<p>（一）《投资者大户持仓报告表》，内容包括会员名称、会员号、投资者名称和交易账号、合约名称、现有持仓量、交易保证金及风险率等；</p>
													<p>（二）资金来源说明；</p>
													<p>（三）法人投资者的实际控制人资料；</p>
													<p>（四）交易所要求提供的其他资料。</p>
													<p>会员应当对投资者提供的资料进行审核，并保证投资者所提供资料的真实性和准确性。</p>
													<p>交易所有权对会员或者投资者提供的资料进行核查。</p>
							            		</dd>
											</dl>
										</div>
										<div class="ui-tabs-panes-wrap">
											<dl class="mt-10 mb-15">
							            		<dt><strong>强行平仓制度</strong></dt>
							            		<dd>
													<p>交易所实行强行平仓制度。投资者存在违规超仓、未按照规定及时追加保证金等违约行为或者交易所规定的其他情形的，交易所有权对投资者采取强行平仓措施。</p>
													<p>当投资者出现下列情况之一时，会员对其持仓实行强行平仓：</p>
													<p>（一）交易系统以"投资者风险率"来衡量投资者的风险情况，当投资者账户风险率小于 100％时，投资者交易保证金不足，需要追加交易保证金，否则投资者只能减少持仓数量，直至投资者账户风险率等于或者大于100%；当投资者账户风险率小 于50％时，会员将投资者剩余持仓进行全部强行平仓。</p>
													<p>（二）因违规受到交易所强行平仓处罚的。</p>
													<p>（三）根据交易所紧急措施应进行强行平仓的。</p>
													<p>（四）其他应予强行平仓情况。</p>
													<p>会员应当严格执行上述风险控制措施，交易所有权监督并在有需要时按照上述措施直接实施。</p>
													<p>相关的计算公式：</p>
													<p>投资者风险率＝投资者权益÷持仓占用交易保证金。</p>
													<p>强行平仓价格以达到强行平仓标准后所能成交的第一个报价来执行。</p>
													<p>因受到市场原因、价格原因或其他原因，导致强行平仓无法执行或执行后剩余资金无法偿付因强行平仓导致的亏损时，若亏损额超过按照风险率计算的亏损额，则亏 损由该投资者剩余资金承担，直至平仓完成；若该投资者资金不足以偿付时，由该投资者所属会员先行承担，然后由会员向该投资者追索。</p>
													<p>强行平仓的执行程序：</p>
													<p>（一）当投资者风险率达到或低于100%时，交易系统自动发出追加保证金通知书；</p>
													<p>（二）当投资者风险率达到或低于50%时，交易系统自动对投资者进行强行平仓。</p>
							            		</dd>
											</dl>
										</div>
										<div class="ui-tabs-panes-wrap">
											<dl class="mt-10 mb-15">
							            		<dt><strong>风险警示制度</strong></dt>
							            		<dd>
													<p>交易所实行风险警示制度。交易所认为必要的，可以单独或者同时采取要求会员和投资者报告情况、谈话提醒、书面警示和发布风险警示公告等措施，以警示和化解风险。</p>
													<p>出现下列异常情况之一的，交易所有权向会员或投资者提醒风险，或者要求会员或投资者报告相关情况：</p>
													<p>（一）交易价格出现明显异动；</p>
													<p>（二）会员或投资者交易异常；</p>
													<p>（三）会员或投资者持仓异常；</p>
													<p>（四）会员或投资者资金异常；</p>
													<p>（五）会员或投资者涉嫌违规违约；</p>
													<p>（六）交易所接到涉及有关会员或投资者的投诉；</p>
													<p>（七）会员涉及司法调查；</p>
													<p>（八）交易所认为必要的其他情况。</p>
							            		</dd>
											</dl>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</section><!-- /content -->

		</div>	
	</div><!-- //container -->
</div><!-- //main -->

<?php
	$this->load->view("_footer");
?>

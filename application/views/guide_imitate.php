<?php $this->load->view("_header");?>
<div class="main-wrap wrapper cf">
	<div id="container" class="gridsystem cf">
		<div class="container-wrap cf">
		<?php
			$this->load->view("_left");
		?>				
			<section class="grid-4 fr">
				<div class="subbanner">
					<img class="top_img" src="/resources/template/images/xinshouzhinan.jpg" alt="投资入门" />
				</div>

				<div class="crumbs">
	            	本页位置：<a href="/">首页</a><span>&gt;&gt;</span><a href="/item/show/guide_guide">新手指南</a><span>&gt;&gt;</span>注册模拟帐户 
	            </div>

	            <div class="online online-form mod4">
	            	<p class="txt-i2 mb-15">当下的贵金属投资火热异常，所谓贵金属投资就是俗称的炒黄金炒白银，许多投资者喜欢购买实物黄金，白银，但是这样资金利用率低。民泰贵金属模拟交易账户为天津贵金属交易所仿真交易平台，提供虚拟资金，让您熟悉贵金属电子交易平台。在民泰贵金属您只要投入实物黄金白银价值的5％资金即可拥有100%的权益。收到您的申请后，客服代表将用短信通知您登入交易平台的模拟账号和密码。</p>
	            	<p class="txt-i2 mb-15">根据交易所规定开立真实账户需要不少于20笔的模拟交易记录，因此模拟账户身份信息必须与实盘账户身份信息一致，实施一户一码制。请您如实填写真实姓名以及身份证号，这样您的模拟交易记录就会被认可，大大节省您开户需要的手续和等待的时间。联系电话请填写手机号码，方便我们系统给您发送短信。 </p>
	            	<p class="txt-i2 mb-15"><a name="reg"></a><em class="color-red">特别提示：天津贵金属交易模拟账号注册请填写二代18位身份证号。</em></p>
	            	<table class="form-table mb-15">
						<form action="/register/simulationReg" method="post" id="simReg">
						<tbody>
							<tr>
								<th width="18%"><span>*</span>您的姓名：</th>
								<td width="82%"><input type="text" class="input-txt" name="name"></td>
							</tr>
							<tr>
								<th width="14%"><span>*</span>身份证号码：</th>
								<td width="86%"><input type="text" class="input-txt" name="idcard"></td>
							</tr>
							<tr>
								<th><span>*</span>手机号码：</th>
								<td><input type="text" class="input-txt" name="phone"></td>
							</tr>
							<tr>
								<th><span>*</span>省份：</th>
								<td><select class="select" name="province" id="province_sel" onchange="selProvince(this.value)"><option value="请选择省份！">请选择省份！</option></select></td>
							</tr>
							<tr>
								<th><span>*</span>城市：</th>
								<td><select class="select" name="city" id="city_sel"><option value="请选择相应的城市！">请选择相应的城市！</option></td>
							</tr>
							<tr>
								<th width="14%"><span>*</span>区/县：</th>
								<td width="86%"><input type="text" name="area" class="input-txt"></td>
							</tr>
							<tr>
								<th width="14%"><span>*</span>QQ号码：</th>
								<td width="86%"><input type="text" class="input-txt" name="qqnum"></td>
							</tr>
							<tr>
								<th></th>
								<td>
									<input type="image" style="height:46px;width:165px;border:0" onclick="simReg();" src="/resources/template/images/btn_ok.png" />
									<p><a href="#">点击这里复制网址，推荐给QQ/MSN好友获取模拟帐户 </a>
								<?php
								if($this->session->flashdata('success'))
								{
									echo "<br/><span style='color:red;'>" . $this->session->flashdata('success') . "</span>";		
								}
							?>

									</p>
								</td>
							</tr>
						</tbody>
					</table>
					<p><em class="link-blue"><a target="_blank" href="/item/show/sd_video">点击观看交易系统视频教程</a></em></p>
 					<p class="mb-20"><em class="link-blue"><a target="_blank" href="/item/show/sd_download">点击下载交易系统以及行情软件</a></em></p>
	            	<dl>
	            		<dt><strong>服务及隐私条款：</strong></dt>
	            		<dd>
	            			<p class="mb-15">当您在本网站进行用户注册登记、参加网上或公共论坛等各种活动时，在您的同意及确认下，本网站将通过注册表格等形式要求您提供一些个人资料。这些个人资料包括： 如姓名、性别、年龄、出生日期、身份证号码（或护照号码）、电话、通信地址、住址、电子邮件地址、等情况。</p>
							<p class="mb-15">请了解，在未经您同意及确认之前，本网站不会将您为参加本网站之特定活动所提供的资料利用于其它目的。但是当政府机关依照法定程序要求本网站披露个人资料时，本网站将根据执法单位之要求或为公共安全之目的提供个人资料。在此情况下之任何披露，本网站均不承担任何责任</p>
							<p class="mb-15">我们真诚的希望我们能通过此次合作建立长期的合作关系。</p>
							<p class="mb-15">如果您同意我们的服务及隐私条款，请点击提交按钮。</p>
	            		</dd>
	            	</dl>
	            </div>

			</section><!-- /content -->

		</div>	
	</div><!-- //container -->
</div><!-- //main -->
<script type="text/javascript" charset="utf-8">

function simReg()
{
	var simReg = document.getElementById('simReg');
	simReg.submit();
}


function selProvince(pid)
{
	$.ajax({
		dataType: "json",
		url: "/area/ajaxcity/" + pid,
		success:function(data) {
			var city_sel = $("#city_sel").html();
			$.each(data, function(i, item){
				city_sel += '<option value="'+item['id'] + "-" + item['name'] +'">'+item['name']+'</option>';
			});
			$("#city_sel").html(city_sel);
		}
	});
}


$(document).ready(function(){
	$.ajax({
		dataType: "json",
		url: "/area/ajaxprovince",
		success:function(data) {
			var province_sel = $("#province_sel").html();
			$.each(data, function(i, item){
				province_sel += '<option value="'+item["id"] + "-" + item['name'] + '">'+item['name']+'</option>';
			});
			$("#province_sel").html(province_sel);
		}
	});
});

</script>

<?php $this->load->view("_footer");?>

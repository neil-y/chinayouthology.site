<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Item extends CI_Controller {

	function __construct()
	{
		parent::__construct();	
		$this->load->model("Partner_Model");
	}

	public function show($item)
	{
		$data = array();
		$pro = array(
			"pro_detail" => "产品详情",
			"pro_features" => "投资特点",
			"pro_trade" => "交易细则",
			"pro_case" => "投资案例",
			"pro_guarantee" => "投资者权益保障"
		);

		$about = array(
			"about_us" => "公司简介",
			"about_advantage" => "民泰优势",
			"about_license" => "资质证书",
			"about_news" => "媒体报道",
			"about_mcx" => "关于交易所"
		);

		$guide = array(
			"guide_guide" => "新手入门",
			"guide_variety" => "开户指南",
			"guide_notice" => "交易须知",
			"guide_imitate" => "注册模拟帐号",
		);

		$sd = array(
			"sd_download" => "软件下载"	,
			"sd_video" => "软件操作视频",
		);

		$research = array(
			"research_price" => "行情中心"
		);
		
		$app = array(
			"app_ios" => "ios版下载",
			"app_android" => "Android版下载"
		);

		$online = array(
			"online_userform" => "咨询建议",
			"online_account" => "预约开户",
			"online_variety" => "开户流程",
			"online_tutor" => "签约辅导",
			"online_faq" => "常见问题",
		);

		$mintai = array(
			"mintai_important" => "重要公告",
			"mintai_mianze" => "免责声明",
			"mintai_contact" => "联系我们",
			"mintai_secret" => "隐私保护条款"
			);

		$items = array(
			"pro" => $pro,
			"about" => $about,
			"guide" => $guide,
			"sd" => $sd,
			"online" => $online,
			"research" => $research
		);

		$item_name = array(
			"pro" => "产品介绍",
			"about" => "公司资质",
			"app" => "手机交易",
			"online" => "在线咨询",
			"guide" => "新手指南",
			"sd" => "软件下载",
			"research" => "民泰研究所",
		);

		foreach($items as $key => $value)
		{
			if(strstr($item, "_"))
			{
				list($prefix, $name) = explode("_", $item);
				if($prefix == $key)
				{
					$data['items'] = $value;
					$data['curr'] = $key;
					$data['curr_sub'] = $item;
					$data['curr_name'] = $item_name[$key];
				}

				if($item =="about_news")
					redirect("/news/media");
				if($item =="online_faq")
					redirect("/news/wt_news");
				if($item =="pro_case")
					redirect("/news/case_news");
				if($item =="mintai_important")
					redirect("/news/important_news");
				if($item =="mintai_mianze")
					redirect("/news/mintai_show/387");
				if($item =="mintai_contact")
					redirect("/news/mintai_show/388");
				if($item =="mintai_secret")
					redirect("/news/mintai_show/389");

				if($item == "guide_notice")
				{
					$data['t1'] = $this->input->get("t1");
					$data['t2'] = $this->input->get("t2");
				}


			}

		}

		if($item == "trader_trader" || $item == "robot_robot" || $item == "trader_master")
				{
					$refer = $this->input->get("refer");
					if(!empty($_SERVER['HTTP_REFERER']))
					{
						$host_refer = $_SERVER['HTTP_REFERER'];
					}
					if(!empty($refer))
					{
						$data['refer'] = $refer;
					}
					else
					{
						$data['refer'] = "";
					}

					if(!empty($host_refer))
					{
						$data['host_refer'] = $host_refer;	
					}
					else
					{
						$data['host_refer'] = "";	
					}
					
					if(!empty($refer) && !empty($host_refer))
					{
						$partner = array();
						$refer_arr = explode("_", $refer);
						$pre_refer = $refer_arr[0] ."_". $refer_arr[1] ."_". $refer_arr[2];
						
						$cur_date = date('Y-m-d');
						$find_partner = $this->Partner_Model->findbyrefer($pre_refer, $cur_date, $item);						

						if(!empty($find_partner)) 
						{
							foreach($find_partner as $value)	
							{
								if($value['refer'] == $refer)	
								{
									$partner = $value;
								}
							}
						}	

						if(!empty($partner))
						{
							$partner['count']++;
						}else{
							$partner = array(
								'pre_refer'	 => $pre_refer,
								'refer' => $refer,
								'count' => 1,
								'createtime' => $cur_date,
								'type' => $item,
								);	
						}
						$this->Partner_Model->save($partner);
					}
				}

		$this->load->view($item, $data);	
	}

}


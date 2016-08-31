<?php $page_category='contact'; //home, about, product, customer, event, jobs, contact
include( getcwd() .'/public/'. 'config.php'); 
include( DAWN_PATH . 'head.php'); 
?>




<div id="content">
    <div class="page_header clearfix">
        <div class="theme_page relative clearfix">
            <div class="page_header_left">
                <ul class="bread_crumb">
                    <li>
                        <a href="/" title="首页">首页</a></li>
                    <li class="separator">&gt;</li>
                    <li>
                        <span>联系我们</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="theme_page relative contactDiv">
        <div class="map-img page_margin_top">
            <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="/public/baidu_map.html"></iframe>
        </div>
        <div class="wpb_row vc_row-fluid  page_margin_top_section">
            <div class="vc_span6 wpb_column column_container">
			
                <div class="wpb_wrapper clearfix">
                    <div class="clearfix">
                        <h3 class="box_header">在线留言</h3></div>
						
                    <form class="contact_form" method="post" action="/public/do_contact.php" id="ser_from">
                        <fieldset style="clear:both;">
                            <label>姓名</label>
                            <div class="block">
                                <input type="text" id="fback_name" class="text_input" name="fback[name]"></div>
                            <label>邮箱</label>
                            <div class="block">
                                <input type="text" id="fback_email" class="text_input" name="fback[email]"></div>
                            <label>单位</label>
                            <div class="block">
                                <input type="text" id="fback_company" class="text_input" name="fback[company]"></div>
                            <label>主题</label>
                            <div class="block">
                                <input type="text" id="fback_theme" class="text_input" name="fback[theme]"></div>
                        </fieldset>
                        <input type="hidden" class="text_input" name="fback[type]" value="0">
                        <fieldset style="clear:both;">
                            <label>内容</label>
                            <div class="block">
                                <textarea id="fback_content" name="fback[content]" style="height: 200px;"></textarea>
                            </div>
                            <input type="hidden" value="theme_contact_form">
                            <input type="button" value="提 交" class="more mc_button contact_form_btn" id="sendbutton"></fieldset>
                    </form>
					
                </div>
               
            </div>
            <div class="vc_span6 wpb_column column_container" style="_float: right;">
                <div class="contact_right">
                    <div class="wpb_wrapper clearfix">
                        <div class="clearfix">
                            <h3 class="box_header">联系方式</h3></div>
                        <div style="padding-top: 20px;">河南普利莱生物技术有限公司
                            <br>（郑州大学产业技术创新研究院基因检测中心）</div>
                        <div style="padding-top: 25px;">技术服务热线：
                            <span class="fc-6EB92B">0371-86563661</span>
                            <br>技术服务网站：
                            <a class="fc-6EB92B" href="<?php echo $site_url;?>" target="_blank"><?php echo $site_url;?></a></div>
                        <div style="padding-top: 25px;">地址：河南省郑州市高新区长椿路大学科技园孵化一号楼922
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（450001）
                            
							<br>技术支持QQ：
                            <span class="fc-6EB92B">3416792254</span></div>
                            投诉建议邮箱：
                            <a class="fc-6EB92B" href="mailto:market@applybio.com">market@applybio.com</a></div>
                    </div>
					
					
                    <div class="wpb_wrapper clearfix page_margin_top_section">
                        <div class="clearfix">
                            <h3 class="box_header">交通方式</h3></div>
                        <div style="padding-top: 20px;">
                            <b>地铁公交</b>
                        </div>
                        <ul class="traffic-ul">
                            <li>地铁与公交：从郑州东站乘坐地铁1号线（西流湖方向）至西流湖地铁站D出口，然后做177路公交车到长椿路梧桐街站下车，路对面可见到国家大学科技园，步行5min即可到达一号楼。</li>
						</ul>
                        <div style="padding-top: 20px;">
                            <b>出租车或自驾路线</b>
                        </div>
                        <ul class="traffic-ul">
                            <li>郑州东站：～70元。
                                <br>中州大道—北三环—科学大道—长椿路</li>
							<li>郑州东站：～70元。
                                <br>陇海路快速通道—建设西路-西四环-药厂街</li>
                    </div>
					
					
					
                    <div class="wpb_wrapper clearfix" style="display: none;">
                        <div class="clearfix">
                            <h3 class="box_header">联系方式</h3></div>
                        <div style="padding-top: 20px;">上海伯豪生物技术有限公司
                            <br>（生物芯片上海国家工程研究中心研发外包子公司）</div>
                        <div style="padding-top: 25px;">技术服务热线：
                            <span class="fc-6EB92B">800-820-5086</span>、
                            <span class="fc-6EB92B">400-880-5086</span>
                            <br>技术服务网站：
                            <a href="http://www.ebioservice.com" target="_blank" class="fc-6EB92B">www.ebioservice.com</a></div>
                        <div style="padding-top: 25px;">地址：上海张江高科技园区李冰路151号
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;（201203）
                            <br>电话：
                            <span class="fc-6EB92B">+86-21-51320288</span>
                            <br>传真：
                            <span class="fc-6EB92B">+86-21-51320266</span>
                            <br>邮箱：
                            <a href="mailto:market@shbiochip.com" class="fc-6EB92B">market@shbiochip.com</a></div>
                    </div>
					

					
					
					
                </div>
            </div>
        </div>
    </div>
	
<script type="text/javascript">
$('#sendbutton').click(function() {
	$.post($('#ser_from').attr('action'), $('#ser_from').serialize(),
	function(o) {
		console.log(o);//debug
		if (o.status == 1) {
			alert(o.info);
			window.location.href = window.location.href;
		} else {
			alert(o.info);
			$(o.data).focus();
		}
	},
	'json');
});
</script>
		
    <div class="backToTop ie6png" style="display: block;" title="返回顶部">
        <a class="backToTop ie6png" id="backToTop" href="javascript:void(0);" title="返回顶部"></a>
    </div>
</div>



<?php include( getcwd() .'/public/'. 'foot.php'); ?>

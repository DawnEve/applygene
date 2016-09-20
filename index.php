<?php $page_category='home'; //home, about, product, customer, event, jobs, contact
include( getcwd() .'/public/'. 'config.php'); 
include( DAWN_PATH . 'head.php'); 
?>
   
   
   <div id="content"> 
    <div class="clearfix" id="home_slider"> 
     <!-- 代码 开始 --> 
     <div class="kuzhan"> 
      <ul class="ebioservicepic"> 
       <li style="background-image: url(./uploads/slides/ebioservice-7a1fef5943.jpg);"><a href="./product.php" target="_blank">&nbsp;</a></li> 
       <li style="background-image: url(./uploads/slides/ebioservice-3d9bf48f3b.jpg);"><a href="./product.php" target="_blank">&nbsp;</a></li> 
       <li style="background-image: url(./uploads/slides/ebioservice-5a2204adb0.jpg);"><a href="./product.php" target="_blank">&nbsp;</a></li> 

      </ul> 
      <a class="prev" href="javascript:void(0)"></a> 
      <a class="next" href="javascript:void(0)"></a> 
      <div class="numDiv"> 
       <div class="num"> 
        <ul class="clearfix"></ul> 
       </div> 
      </div> 
     </div> 
     <script type="text/javascript">
		/*鼠标移过，左右按钮显示*/
		$(".kuzhan").hover(function(){
			$(this).find(".prev,.next").fadeTo("show",0.1);
		},function(){
			$(this).find(".prev,.next").hide();
		});
		/*鼠标移过某个按钮 高亮显示*/
		$(".prev,.next").hover(function(){
			$(this).fadeTo("show",0.7);
		},function(){
			$(this).fadeTo("show",0.1);
		});
		$(".kuzhan").slide({ titCell:".num ul" , mainCell:".ebioservicepic" , effect:"fold", autoPlay:true, delayTime:1500 , autoPage:true });
		$(".kuzhan ul.ebioservicepic").css("width",'100%');
		$(".kuzhan ul.ebioservicepic li").css("width",'100%');
	</script> 
     <!-- 代码 结束 --> 
    </div> 
	
	
   
	
	
	
	
	
    <div class="content-bg home_box_2"> 
     <div class="clearfix theme_page relative home_ser div_box_enlish"> 
      <div class="top-img">
       <img src="/images/home_4.png" />
      </div> 

	  
	  
      <div class="clearfix"> 
	  
       <div class="ser_box_img "> 
        <div class="title">
         <a target="_blank" href="product.php" title="基础科研">基础科研</a>
        </div> 
        <div class="intro">
         <a target="_blank" href="product.php" title="基础科研"><img src="/uploads/news/applybio-e396ff9a73.jpg" alt="基础科研" /></a>
        </div> 
       </div> 
	   
       <div class="ser_box_img "> 
        <div class="title">
         <a target="_blank" href="product.php" title="药物研发">药物研发</a>
        </div> 
        <div class="intro">
         <a target="_blank" href="product.php" title="药物研发"><img src="/uploads/news/applybio-245d31b173.jpg" alt="药物研发" /></a>
        </div> 
       </div> 
	   
       <div class="ser_box_img "> 
        <div class="title">
         <a target="_blank" href="product.php" title="动植物、微生物研究">动植物、微生物研究</a>
        </div> 
        <div class="intro">
         <a target="_blank" href="product.php" title="动植物、微生物研究"><img src="/uploads/news/applybio-63819e18d4.jpg" alt="动植物、微生物研究" /></a>
        </div> 
       </div> 
	   
       <div class="ser_box_img "> 
        <div class="title">
         <a target="_blank" href="product.php" title="临床医学">临床医学</a>
        </div> 
        <div class="intro">
         <a target="_blank" href="product.php" title="临床医学"><img src="/uploads/news/applybio-7b787bbd77.jpg" alt="临床医学" /></a>
        </div> 
       </div> 
	   
       <div class="ser_box_img last"> 
        <div class="title">
         <a target="_blank" href="product.php" title="遗传与健康">遗传与健康</a>
        </div> 
        <div class="intro">
         <a target="_blank" href="product.php" title="遗传与健康"><img src="/uploads/news/applybio-e52ce2dd45.jpg" alt="遗传与健康" /></a>
        </div> 
       </div> 
	   
      </div> 
	  
	  
      <div class="clearfix"> 
	  
	  
	  
	  
	  
       <div class=" ser_box"> 
        <i class="ie6png hot">&nbsp;</i> 
        <div class="title">
         <a target="_blank" href="product.php#1" title="基因组层次研究服务">基因组层次研究服务</a>
        </div> 
        <div class="intro"> 
         <div class="con"> 
          <div style="height: 27px;overflow: hidden;">
           <a target="_blank" href="product.php#1" title="全外显子组捕获测序服务" class="ie6png">全外显子组捕获测序服务</a>
          </div> 
          <div style="height: 27px;overflow: hidden;">
           <a target="_blank" href="product.php#1" title="目标区域捕获测序服务" class="ie6png">目标区域捕获测序服务</a>
          </div> 
          <div style="height: 27px;overflow: hidden;">
           <a target="_blank" href="product.php#1" title="全基因组重测序服务" class="ie6png">全基因组重测序服务</a>
          </div> 
         </div> 
        </div> 
        <!--
        <div class="intro2"> 
         <div class="con img">
          <a target="_blank" href="/product/list/12.html" title="基因组层次研究服务"><img src="/uploads/product/applybio-49d7135413.jpg" alt="基因组层次研究服务" /></a>
         </div> 
         <a class="ser_more" target="_blank" href="/product/list/12.html" title="基因组层次研究服务">基因组层次研究服务</a> 
        </div> 
				<div class="intro">
					<div class="con img"><a href="/product/list/12.html" title="基因组层次研究服务"><img src="/uploads/product/applybio-49d7135413.jpg" alt="基因组层次研究服务"/></a></div>
					<a class="ser_more" href="/product/list/12.html" title="基因组层次研究服务">基因组层次研究服务</a>
				</div>
				--> 
       </div> 
	   
	   
       <div class=" ser_box"> 
        <div class="title">
         <a target="_blank" href="product.php#2" title="转录组层次研究服务">转录组层次研究服务</a>
        </div> 
        <div class="intro"> 
         <div class="con"> 
          <div style="height: 27px;overflow: hidden;">
           <a target="_blank" href="product.php#2" title="全转录组测序服务" class="ie6png">全转录组测序服务</a>
          </div> 
          <div style="height: 27px;overflow: hidden;">
           <a target="_blank" href="product.php#2" title="miRNA测序服务" class="ie6png">miRNA测序服务</a>
          </div> 
          <div style="height: 27px;overflow: hidden;">
           <a target="_blank" href="product.php#2" title="环状RNA测序服务" class="ie6png">环状RNA测序服务</a>
          </div> 

         </div> 
        </div> 
 
       </div> 
	   
	   
       <div class=" ser_box"> 
        <div class="title">
         <a target="_blank" href="product.php" title="表观遗传学研究服务">表观遗传学研究服务</a>
        </div> 
        <div class="intro"> 
         <div class="con"> 
          <div style="height: 27px;overflow: hidden;">
           <a target="_blank" href="product.php" title="DNA甲基化建库服务" class="ie6png">DNA甲基化建库服务</a>
          </div> 
          <div style="height: 27px;overflow: hidden;">
           <a target="_blank" href="product.php" title="DNA甲基化序列富集测序服务" class="ie6png">DNA甲基化序列富集测序服务</a>
          </div> 
          <div style="height: 27px;overflow: hidden;">
           <a target="_blank" href="product.php" title="全基因组甲基化测序" class="ie6png">全基因组甲基化测序</a>
          </div> 
         </div> 
        </div> 
 
       </div> 
	   
	   
       <div class=" ser_box"> 
        <i class="ie6png new">&nbsp;</i> 
        <div class="title">
         <a target="_blank" href="product.php" title="一代测序/引物合成服务">一代测序/引物合成服务</a>
        </div> 
        <div class="intro"> 
         <div class="con"> 
          <div style="height: 27px;overflow: hidden;">
           <a target="_blank" href="product.php" title="一代测序服务" class="ie6png">一代测序服务</a>
          </div> 
          <div style="height: 27px;overflow: hidden;">
           <a target="_blank" href="product.php" title="引物合成服务" class="ie6png">引物合成服务</a>
          </div> 
          <div style="height: 27px;overflow: hidden;">
           <a target="_blank" href="product.php" title="载体构建服务" class="ie6png">载体构建服务</a>
          </div>  
         </div> 
        </div> 

       </div> 
	   
	   
       <div class="last ser_box"> 
        <i class="ie6png hot">&nbsp;</i> 
        <div class="title">
         <a target="_blank" href="product.php" title="生物信息学研究服务">生物信息学研究服务</a>
        </div> 
        <div class="intro"> 
         <div class="con"> 
          <div style="height: 27px;overflow: hidden;">
           <a target="_blank" href="product.php" title="生物信息学分析服务" class="ie6png">生物信息学分析服务</a>
          </div> 

          <div style="height: 27px;overflow: hidden;">
           <a target="_blank" href="product.php" title="生物信息学分析培训班(基础)" class="ie6png">生物信息分析培训班(基础)</a>
          </div> 
          <div style="height: 27px;overflow: hidden;">
           <a target="_blank" href="product.php" title="生物信息学分析培训班(高级)" class="ie6png">生物信息分析培训班(高级)</a>
          </div> 
         </div> 
        </div> 

       </div> 
	   
	   
      </div> 
     </div> 
    </div> 
	
	
   </div>
   <!-- /Content --> 
   
   
   
<?php include( getcwd() .'/public/'. 'foot.php'); ?>
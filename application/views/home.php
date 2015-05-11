<html>    
    <!--Loading header-->
    <?php 
    require_once 'header.php';
    require_once 'inc/js.php';
    ?>
    
    <!-- **Main** -->
        <div id="main">
            <!-- **Slider Section** -->
            <section id="slider"> 
                
                <script type="text/javascript">
                    var lsjQuery = jQuery;
                </script>
                
		<script type="text/javascript"> 
		lsjQuery(document).ready(function() { 
                    if(typeof lsjQuery.fn.layerSlider == "undefined") {
                        lsShowNotice('layerslider_1','jquery');
                    } else { 
                        lsjQuery("#layerslider_1").layerSlider({
                            responsiveUnder: 1170, 
                            layersContainer: 1170, 
                            pauseOnHover: false, 
                            forceLoopNum: false, 
                            autoPlayVideos: false 
//                            skinsPath: 'http://wedesignthemes.com/themes/dt-spalab/wp-content/plugins/LayerSlider/static/skins/'
                        });
                    } 
                }); </script>
                            
                
                <div id="layerslider_1" class="ls-wp-container" style="width:100%;height:600px;max-width:1920px;margin:0 auto;margin-bottom: 0px;">
                    <div class="ls-slide" data-ls="slidedelay:10000;transition2d:4;">
                        <img src="<?php echo site_url("asserts/img/home/blank.gif") ?>" data-src="<?php echo site_url("asserts/img/home/bg3.jpg") ?>" class="ls-bg" alt="Slide background" />
                        <img class="ls-l" style="top:185px;left:427px;white-space: nowrap;" data-ls="offsetxin:50;offsetyin:100;durationin:2000;delayin:1500;easingin:easeOutBack;offsetxout:50;durationout:1000;easingout:easeInBack;parallaxlevel:1;" 
                             src="<?php echo site_url("asserts/img/home/blank.gif") ?>" data-src="<?php echo site_url("asserts/img/home/feather1.png") ?>" alt="">
                        <img class="ls-l" style="top:23px;left:356px;white-space: nowrap;" data-ls="offsetxin:100;offsetyin:-150;durationin:6000;delayin:1500;easingin:easeOutBack;offsetxout:100;durationout:1000;showuntil:7000;easingout:easeInBack;parallaxlevel:3;" 
                             src="<?php echo site_url("asserts/img/home/blank.gif") ?>" data-src="<?php echo site_url("asserts/img/home/feather2.png") ?>" alt="">
                        <p class="ls-l" style="top:200px;left:0px;font-weight: 500;font-family:'Raleway', 'Open Sans', sans-serif;font-size:40px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;durationin:2500;delayin:2000;rotateyin:90;transformoriginin:left 50% 0;offsetxout:0;rotateyout:-90;transformoriginout:left 50% 0;">Looking for a beauty website ?</p>
                        <p class="ls-l" style="top:386px;left:3px; border-radius: 3px; color: #FFFFFF; cursor: pointer; display: inline-block; line-height: 50px; outline: medium none; position: relative; text-transform: capitalize; transition: all 0.3s ease 0s; z-index: 1; background: none repeat scroll 0 0 #263944; padding: 0 20px; font-size:16px; font-weight:300;font-family:'Raleway', 'Open Sans', sans-serif;white-space: nowrap;" data-ls="offsetxin:0;durationin:400;delayin:4500;easingin:linear;rotateyin:90;transformoriginin:left 50% 0;offsetxout:0;durationout:100;showuntil:5400;easingout:linear;rotateyout:90;transformoriginout:left 50% 0;">Purchase Theme</p>
                        <p class="ls-l" style="top:273px;left:00px;font-family:'Raleway', Lato;font-size:16px;line-height:28px;color:#fff;white-space: nowrap;" data-ls="offsetxin:0;durationin:2000;delayin:3500;">Spa Lab is an Elegant, good looking Beauty Spa Website. With <br>the help of shortcodes you can create a website with <br>Feature rich presentation.</p>
                        <img class="ls-l" style="top:-84px;left:401px;white-space: nowrap;" 
                             src="<?php echo site_url("asserts/img/home/blank.gif") ?>" data-src="<?php echo site_url("asserts/img/home/woman2.png") ?>" alt="">
                        <img class="ls-l" style="top:13px;left:977px;white-space: nowrap;" data-ls="offsetxin:50;offsetyin:100;durationin:2000;delayin:2500;easingin:easeOutBack;offsetxout:50;durationout:1000;easingout:easeInBack;parallaxlevel:1;" 
                             src="<?php echo site_url("asserts/img/home/blank.gif") ?>" data-src="<?php echo site_url("asserts/img/home/feather3.png") ?>" alt="">
                        <img class="ls-l" style="top:230px;left:973px;white-space: nowrap;" data-ls="offsetxin:100;offsetyin:-150;durationin:6000;delayin:1500;easingin:easeOutBack;offsetxout:100;durationout:1000;showuntil:7000;easingout:easeInBack;parallaxlevel:3;" 
                             src="http://wedesignthemes.com/themes/dt-spalab/wp-content/plugins/LayerSlider/static/img/blank.gif" data-src="http://wedesignthemes.com/themes/spalab/wp-content/uploads/2014/06/feather4.png" alt="">
                    </div>
                    <div class="ls-slide" data-ls="slidedelay:10000;transition2d:4;">
                        <img src="http://wedesignthemes.com/themes/dt-spalab/wp-content/plugins/LayerSlider/static/img/blank.gif" data-src="http://wedesignthemes.com/themes/spalab/wp-content/uploads/2014/06/bg2.jpg" class="ls-bg" alt="Slide background" />
                        <p class="ls-l" style="top:44%;left:50%;font-weight: 300;font-family:Lato, 'Open Sans', sans-serif;font-size:30px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:50;durationin:750;easingin:easeOutBack;skewxin:-50;offsetxout:-50;durationout:600;showuntil:500;easingout:easeInBack;skewxout:50;">introducing</p>
                        <p class="ls-l" style="top:50%;left:50%;font-weight: 300;font-family:Lato, 'Open Sans', sans-serif;font-size:50px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:-100;durationin:750;delayin:250;easingin:easeOutBack;skewxin:-50;offsetxout:100;durationout:600;showuntil:500;easingout:easeInBack;skewxout:50;">SPA LAB</p>
                        <p class="ls-l" style="top:234px;left:400px;font-weight: 500;font-family:'Raleway', 'Open Sans', sans-serif;font-size:20px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;durationin:2500;delayin:3500;rotateyin:90;transformoriginin:left 50% 0;offsetxout:0;durationout:1500;showuntil:4000;rotateyout:-90;transformoriginout:left 50% 0;">Your one stop solution for a Beauty Spa Website</p>
                        <img class="ls-l" style="top:273px;left:400px;white-space: nowrap;" data-ls="delayin:2500;" src="http://wedesignthemes.com/themes/dt-spalab/wp-content/plugins/LayerSlider/static/img/blank.gif" data-src="http://wedesignthemes.com/themes/spalab/wp-content/uploads/2014/06/beauty-text1.png" alt="">
                        <p class="ls-l" style="top:323px;left:401px; border-radius: 3px; color: #FFFFFF; cursor: pointer; display: inline-block; line-height: 50px; outline: medium none; position: relative; text-transform: capitalize; transition: all 0.3s ease 0s; z-index: 1; background: none repeat scroll 0 0 #7c002b; padding: 0 20px; font-size:16px; font-weight:300;font-family:'Raleway', Open Sans;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:400;durationin:1500;delayin:4500;offsetxout:0;offsetyout:200;durationout:1000;showuntil:7000;">Explore Now</p>
                    </div>
                    <div class="ls-slide" data-ls="slidedelay:10000;transition2d:3,5;timeshift:-3000;">
                        <img src="http://wedesignthemes.com/themes/dt-spalab/wp-content/plugins/LayerSlider/static/img/blank.gif" data-src="http://wedesignthemes.com/themes/spalab/wp-content/uploads/2014/06/bg1.jpg" class="ls-bg" alt="Slide background" />
                        <h1 class="ls-l" style="top:-37px;left:304px;font-weight: 300;font-family:Lato, 'Open Sans', sans-serif;font-size:200px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;durationin:2000;delayin:1000;scalexin:0;scaleyin:0;offsetxout:0;durationout:2000;showuntil:7000;scalexout:2;scaleyout:2;">&amp;</h1>
                        <h2 class="ls-l" style="top:60px;left:0px;font-weight: 500; ;font-family:Raleway, Lato, 'Open Sans', sans-serif;font-size:40px;color:#72448d;white-space: nowrap;" data-ls="offsetxin:50;durationin:1600;rotateyin:60;transformoriginin:right 50% 0;offsetxout:-50;rotateyout:-60;transformoriginout:left 50% 0;">Spa Lab Features</h2>
                        <p class="ls-l" style="top:68px;left:419px;font-weight: 500;font-family:Lato, 'Open Sans', sans-serif;font-size:30px;color:#3c3c3c;white-space: nowrap;" data-ls="offsetxin:-50;durationin:1300;delayin:2000;rotateyin:-60;transformoriginin:left 50% 0;offsetxout:50;rotateyout:60;transformoriginout:right 50% 0;">more...</p>
                        <p class="ls-l" style="top:139px;left:3px;font-weight: 300; text-align: left; font-style:italic;font-family:'Raleway', Lato, 'Open Sans', sans-serif;font-size:16px;line-height:34px;color:#3c3c3c;white-space: nowrap;" data-ls="offsetxin:0;durationin:2000;delayin:3500;transformoriginin:0 0 0;offsetxout:0;durationout:500;rotateyout:-90;transformoriginout:right 50% 0;">
                            <span style="color: #72448d; font-weight:500;">Spa Lab</span> is an Elegant, good looking Beauty Spa Website. With the help of 
                            <span style="color: #72448d; font-weight:500;">shortcodes </span>you can <br>create a website with 
                            <span style="color: #72448d; font-weight:500;">Feature rich presentation.</span></p>
                        <img class="ls-l" style="top:0px;left:695px;z-index:5;width:480px;white-space: nowrap;" data-ls="offsetxin:0;delayin:500;offsetxout:0;offsetyout:50;" src="http://wedesignthemes.com/themes/dt-spalab/wp-content/plugins/LayerSlider/static/img/blank.gif" data-src="http://wedesignthemes.com/themes/spalab/wp-content/uploads/2014/06/woman.png" alt="">
                        <img class="ls-l" style="top:289px;left:790px;white-space: nowrap;" data-ls="offsetxin:0;durationin:300;delayin:3498;offsetxout:0;durationout:750;showuntil:1;scalexout:10;scaleyout:10;" src="http://wedesignthemes.com/themes/dt-spalab/wp-content/plugins/LayerSlider/static/img/blank.gif" data-src="http://wedesignthemes.com/themes/spalab/wp-content/uploads/layerslider/LayerSlider-5-responsive-demo-slider/slide-a-6.png" alt="">
                        <div class="ls-l" style="top:250px;left:0px;width:60px;white-space: nowrap;" data-ls="offsetxin:50;durationin:1500;delayin:4000;rotateyin:90;scalexin:3;scaleyin:3;transformoriginin:left 50% 0;offsetxout:-50;durationout:0;rotateout:90;scalexout:0.5;scaleyout:0.5;">
                            <div class="icon-list"> <i class="fa fa-shopping-cart"> </i> <h3> Woocommerce Support </h3> 
                            </div> </div><div class="ls-l" style="top:250px;left:340px;width:60px;white-space: nowrap;" data-ls="offsetxin:50;durationin:1500;delayin:4500;rotateyin:90;scalexin:3;scaleyin:3;transformoriginin:left 50% 0;offsetxout:-50;durationout:0;rotateout:90;scalexout:0.5;scaleyout:0.5;">
                                <div class="icon-list"> <i class="fa fa-pencil "> </i> <h3> Various Blog Types</h3> </div> 
                            </div>
                        <div class="ls-l" style="top:320px;left:0px;font-size:16px;white-space: nowrap;" data-ls="offsetxin:50;durationin:1500;delayin:5000;easingin:easeInQuint;rotateyin:90;transformoriginin:left 50% 0;offsetxout:-50;durationout:0;rotateout:90;scalexout:0.5;scaleyout:0.5;">
                            <div class="icon-list"> <i class="fa fa-shopping-cart"> </i> <h3> Send a Gift Option</h3> </div> </div><div class="ls-l" style="top:320px;left:340px;white-space: nowrap;" data-ls="offsetxin:50;durationin:1500;delayin:6000;rotateyin:90;transformoriginin:left 50% 0;offsetxout:-50;durationout:0;rotateout:90;scalexout:0.5;scaleyout:0.5;">
                                <div class="icon-list"> 
                                    <i class="fa fa-camera-retro"> </i> 
                                    <h3> Several Image Gallery Types</h3> 
                                </div> 
                            </div>
                        <div class="ls-l" style="top:390px;left:0px;width:60px;white-space: nowrap;" data-ls="offsetxin:50;durationin:1500;delayin:6500;rotateyin:90;scalexin:3;scaleyin:3;transformoriginin:left 50% 0;offsetxout:-50;durationout:0;rotateout:90;scalexout:0.5;scaleyout:0.5;">
                            <div class="icon-list"> <i class="fa fa-desktop"> </i> 
                                <h3> 100% Responsive</h3> 
                            </div> 
                        </div>
                        <div class="ls-l" style="top:390px;left:340px;width:60px;white-space: nowrap;" data-ls="offsetxin:50;durationin:1500;delayin:7000;rotateyin:90;scalexin:3;scaleyin:3;transformoriginin:left 50% 0;offsetxout:-50;durationout:0;rotateout:90;scalexout:0.5;scaleyout:0.5;">
                            <div class="icon-list"> <i class="fa fa-envelope-o"> </i> 
                                <h3> Types of Contact Form</h3> 
                            </div> 
                        </div>
                        <div class="ls-l" style="top:460px;left:0px;width:60px;white-space: nowrap;" data-ls="offsetxin:50;durationin:1500;delayin:7500;rotateyin:90;scalexin:3;scaleyin:3;transformoriginin:left 50% 0;offsetxout:-50;durationout:0;rotateout:90;scalexout:0.5;scaleyout:0.5;">
                            <div class="icon-list"> <i class="fa fa-plus"> </i> 
                                <h3> Tons of Shortcodes</h3> 
                            </div> 
                        </div>
                        <img class="ls-l" style="top:289px;left:790px;white-space: nowrap;" data-ls="offsetxin:0;durationin:300;delayin:3498;offsetxout:0;durationout:1000;showuntil:1;scalexout:20;scaleyout:20;" src="http://wedesignthemes.com/themes/dt-spalab/wp-content/plugins/LayerSlider/static/img/blank.gif" data-src="http://wedesignthemes.com/themes/spalab/wp-content/uploads/layerslider/LayerSlider-5-responsive-demo-slider/slide-a-6.png" alt="">
                        <div class="ls-l" style="top:460px;left:340px;width:60px;white-space: nowrap;" data-ls="offsetxin:50;durationin:1500;delayin:8000;rotateyin:90;scalexin:3;scaleyin:3;transformoriginin:left 50% 0;offsetxout:-50;durationout:0;rotateout:90;scalexout:0.5;scaleyout:0.5;">
                            <div class="icon-list"> <i class="fa fa-plus"> </i> <h3> Trendy Design</h3> 
                            </div> 
                        </div>
                    </div>
                </div>
            </section><!-- **Slider Section - End** -->             
                
        
	<!-- ** Primary Section ** -->
	<section id="primary" class="content-full-width"><!-- #post-7 -->
<div id="post-7" class="post-7 page type-page status-publish hentry">
<div class='fullwidth-section  '  style="background-repeat:no-repeat;background-position:left top;padding-top:15px;padding-bottom:30px;">  <div class="fullwidth-bg">	<div class="container"><div class='border-title'>
				  <h2>Welcome to Your Spa Lab</h2>
				  <div class='ico-border'> <i class='ico-bg flower'></i> </div>
				  <span class='tag-line'>Experience the Art of Caring</span>
				</div>
<div  class='column dt-sc-one-fourth  first'><div class='dt-sc-ico-content  type6'><div class='icon'> <span class='ico-pic'> <img src='http://wedesignthemes.com/themes/spalab/wp-content/uploads/2014/05/ico-pic1.jpg' alt='' title=''> </span> </div><h3><a href='#' target='_blank'> Spa &amp; Massage </a></h3></div></div>
<div  class='column dt-sc-one-fourth  '><div class='dt-sc-ico-content  type6'><div class='icon'> <span class='ico-pic'> <img src='http://wedesignthemes.com/themes/spalab/wp-content/uploads/2014/05/ico-pic2.jpg' alt='' title=''> </span> </div><h3><a href='#' target='_blank'> Hair &amp; Beauty </a></h3></div></div>
<div  class='column dt-sc-one-fourth  '><div class='dt-sc-ico-content  type6'><div class='icon'> <span class='ico-pic'> <img src='http://wedesignthemes.com/themes/spalab/wp-content/uploads/2014/05/ico-pic3.jpg' alt='' title=''> </span> </div><h3><a href='#' target='_blank'> Gifts &amp; Cards </a></h3></div></div>
<div  class='column dt-sc-one-fourth  '><div class='dt-sc-ico-content  type6'><div class='icon'> <span class='ico-pic'> <img src='http://wedesignthemes.com/themes/spalab/wp-content/uploads/2014/05/ico-pic5.jpg' alt='' title=''> </span> </div><h3><a href='#' target='_blank'> Accomadation </a></h3></div></div>	</div>  </div></div>
<div class='dt-sc-hr-invisible  '></div>
<div class="dt-sc-clear"></div>
<


	</section><!-- ** Primary Section End ** -->
                     </div><!-- **Main - End** -->



    <!--Loading footer-->
    <?php $this->load->view('footer'); ?>


</html>
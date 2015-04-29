<html>

    <!--Loading header-->
    <?php $this->load->view('header'); ?>

    <!-- **Main** -->
    <div id="main"><!-- **Breadcrumb** --><section class="breadcrumb-section">	<div class="container"><div class="breadcrumb">				
                    <a href="<?php echo site_url("home_controller/")?>">Home</a><span class='fa fa-angle-double-right' >  </span><h6>Services</h6></div><!-- ** breadcrumb - End --><!-- **Searchform** -->

                <form method="get" class="searchform" action="http://www.lakshisalon.lk/">
                    <input id="s-keyword" name="s" type="text" 
                           value="Enter Keyword" class="text_input"
                           onblur="if (this.value == '') {
                                       this.value = 'Enter Keyword';
                                   }"
                           onfocus="if (this.value == 'Enter Keyword') {
                                       this.value = '';
                                   }" />
                    <input type="submit"  value="" style="font-family:FontAwesome" />
                </form><!-- **Searchform - End** -->	</div></section><!-- **Breadcrumb** -->                                <!-- ** Container ** -->
        <div class="container">


            <div class='container'><h1 class='hr-title dt-page-title'><span>Services</span></h1></div>      
            <!-- **Primary Section** -->
            <section id="primary" class="content-full-width">
                <!-- #post-5 -->
                <div id="post-5" class="post-5 page type-page status-publish hentry">
                    <ul>
                        <li><a class="linksMain" href="http://lakshisalon.com/sub/bridals/brmakeup.html" target="_self">Bridals</a></li>
                        <li><a class="linksMain" href="http://lakshisalon.com/sub/facialayurvedic/herbal.html" target="_self">Facial Ayurvedic</a></li>
                        <li><a class="linksMain" href="http://lakshisalon.com/sub/faciallightning/galvanic.html" target="_self">Facial Lightning</a></li>
                        <li><a class="linksMain" href="http://lakshisalon.com/sub/facialtreatments/highfrequency.html" target="_self">Facial Treatments</a></li>
                        <li><a class="linksMain" href="http://lakshisalon.com/sub/haircuts/haircuts.html" target="_self">Hair Cuts</a></li>
                        <li><a class="linksMain" href="http://lakshisalon.com/sub/hairstyles/rebonding.html" target="_self">Hair Styles</a></li>
                        <li><a class="linksMain" href="http://lakshisalon.com/sub/hairtreatments/henna.html" target="_self">Hair Treatments</a></li>
                        <li><a class="linksMain" href="http://lakshisalon.com/sub/hairremoval/threading.html" target="_self">Hair Removal</a></li>
                        <li><a class="linksMain" href="http://lakshisalon.com/sub/manicure/handmassage.html" target="_self">Manicure</a></li>
                    </ul>
                    <div class="social-bookmark"></div><div class="social-share"></div>	
                </div><!-- #post-5 -->


            </section><!-- **Primary Section** -->


        </div><!-- **Container - End** -->
    </div><!-- **Main - End** -->



    <!--Loading footer-->
<?php $this->load->view('footer'); ?>




</html>
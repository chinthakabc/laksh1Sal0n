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


            <div class='container'><h1 class='hr-title dt-page-title'><span>Page Not Found !</h1></div>      
            <!-- **Primary Section** -->
            <section id="primary" class="content-full-width">
                <!-- #post-5 -->
                <div id="post-5" class="post-5 page type-page status-publish hentry">
                    This page is not Exists !
                    <br/>
                    <br/>
                    - Lakshi Salon Team -
                    <div class="social-bookmark"></div><div class="social-share"></div>	
                </div><!-- #post-5 -->


            </section><!-- **Primary Section** -->


        </div><!-- **Container - End** -->
    </div><!-- **Main - End** -->



    <!--Loading footer-->
<?php $this->load->view('footer'); ?>




</html>
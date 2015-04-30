<html>

    <?php $this->load->view('header'); ?>

    <!-- **Main** -->
    <div id="main"><!-- **Breadcrumb** --><section class="breadcrumb-section">	<div class="container"><div class="breadcrumb">				
                    <a href="<?php echo site_url('home/')?>">Home</a><span class='fa fa-angle-double-right' >  </span><a href="<?php echo site_url("treatments/"); ?>">Bridal</a>
                    <span class='fa fa-angle-double-right' >  </span><h6>Head Dresses</h6></div>

                <form method="get" class="searchform" action="http://wedesignthemes.com/themes/dt-spalab">
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


            <!-- **Primary Section** -->
            <section id="primary" class="content-full-width">
                <!-- **Side Navigation** -->
                <div class="side-navigation">
                    <div class="side-nav-container">
                        <ul class="side-nav">
                            <li class=''><a href="<?php echo site_url("treatments/"); ?>" title='Make Up'>Make Up</a></li>
                            <li class=''><a href="<?php echo site_url("treatments/bouquets"); ?>" title='Bouquets'>Bouquets</a></li>
                            <li class='current_page_item'><a href="<?php echo site_url("treatments/headdresses"); ?>" title='Head Dresses'>Head Dresses</a></li>
                           <li class=''><a href="<?php echo site_url("treatments/dressdesign"); ?>" title='Dress Designing'>Dress Designing</a></li>
                            <li class=''><a href="<?php echo site_url("treatments/advices"); ?>" title='Advices'>Advices</a></li>
                            
                        </ul>            
                    </div>    
                </div><!-- **Side Navigation End** -->

                <!-- **Main Content** -->
                <div class="side-navigation-content">               
                    <!-- #post-2125 -->
                    <div id="post-2125" class="post-2125 page type-page status-publish hentry">
                        <h2>Head Dresses</h2>
                        <img class="aligncenter size-full wp-image-234" src="<?php echo site_url("uploads/bridal/headdresses.jpg"); ?>" alt="image" width="680" height="452" /><br />
                        <div class="dt-sc-titled-box  " ><h6 class="dt-sc-titled-box-title">Description</h6>
                            <div class="dt-sc-titled-box-content">
                                <p> As with all our designs, headdresses can be made to match or co-ordinate with the bouquets or the flower theme & colour scheme of your 
                                    wedding. We will provide head dresses free of charge when you’re ordered bouquets</p>

                            </div><!-- #post-2125 -->


                        </div><!-- **Main Content End** --> 

                    </div>
            </section><!-- **Primary Section** -->



        </div><!-- **Container - End** -->
    </div><!-- **Main - End** -->

    <!--Loading footer-->
    <?php $this->load->view('footer'); ?>




</html>
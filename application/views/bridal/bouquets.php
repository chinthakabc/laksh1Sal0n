<html>

    <?php $this->load->view('header'); ?>

    <!-- **Main** -->
    <div id="main"><!-- **Breadcrumb** --><section class="breadcrumb-section">	<div class="container"><div class="breadcrumb">				
                    <a href="<?php echo site_url('home/')?>">Home</a><span class='fa fa-angle-double-right' >  </span><a href="<?php echo site_url("treatments/"); ?>">Bridal</a>
                    <span class='fa fa-angle-double-right' >  </span><h6>Bouquets</h6></div><!-- ** breadcrumb - End --><!-- **Searchform** -->

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
                            <li class='current_page_item'><a href="<?php echo site_url("treatments/bouquets"); ?>" title='Bouquets'>Bouquets</a></li>
                            <li class=''><a href="<?php echo site_url("treatments/headdresses"); ?>" title='Head Dresses'>Head Dresses</a></li>
                            <li class=''><a href="<?php echo site_url("treatments/dressdesign"); ?>" title='Dress Designing'>Dress Designing</a></li>
                            <li class=''><a href="<?php echo site_url("treatments/advices"); ?>" title='Advices'>Advices</a></li>
                            
                        </ul>            
                    </div>    
                </div><!-- **Side Navigation End** -->

                <!-- **Main Content** -->
                <div class="side-navigation-content">               
                    <!-- #post-2125 -->
                    <div id="post-2125" class="post-2125 page type-page status-publish hentry">
                        <h2>Bouquets</h2>
                        <img class="aligncenter size-full wp-image-234" src="<?php echo site_url("uploads/images/9.gif"); ?>" alt="image" width="750" height="497" /><br />
                        <br/>
                        
                        <div class="column dt-sc-one-half  first" height="600px"><div class="dt-sc-pr-tb-col ">	
                                <div class="dt-sc-tb-header">		
                                    <div class="dt-sc-tb-title"><h5>Fresh Flowers</h5></div>
                                    <div class="dt-sc-price"> 5000.00 <span>  rs Onwords</span> </div>
                                </div>
                                <ul class="dt-sc-tb-content">
                                    <li><b style="color: #A100A6;">Regular Price Varies With</b><br/>
                                        selection of your flowers</li>
                                    <li><b style="color: #A100A6;">Description</b><br/>
                                        <p style="text-align: justify;">We can design the perfect fresh bridal bouquets to suit your style and personality 
                                            and to fit in magically with your wedding theme. Simple to extravagant wedding flowers
                                            that are Stunningly Beautiful, Fresh and Affordable.<br/></p></li>

                                </ul>
                            </div>
                        </div>

                        <div class="column dt-sc-one-half" height="600px"><div class="dt-sc-pr-tb-col ">	
                                <div class="dt-sc-tb-header">		
                                    <div class="dt-sc-tb-title"><h5>Artificial Flowers</h5></div>
                                    <div class="dt-sc-price"> 2500.00 <span>  rs Onwords</span> </div>
                                </div>
                                <ul class="dt-sc-tb-content">
                                    <li><b style="color: #A100A6;">Regular Price Varies With</b><br/>
                                        selection of your flowers</li>
                                    <li><b style="color: #A100A6;">Description</b><br/>
                                        <p style="text-align: justify;">We offer the highest quality wedding bouquets in a variety of types 
                                            and colors to match every bride’s wedding theme.
                                            Email  me your reference picture, if you can't find what you have in mind on this website.</p></li>

                                </ul>
                            </div>
                        </div>

                        </section><!-- **Primary Section** -->



                    </div><!-- **Container - End** -->
                </div><!-- **Main - End** -->

                <!--Loading footer-->
                <?php $this->load->view('footer'); ?>




                </html>
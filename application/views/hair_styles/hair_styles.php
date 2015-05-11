<html>

    <?php $this->load->view('header'); ?>

    <!-- **Main** -->
    <div id="main"><!-- **Breadcrumb** --><section class="breadcrumb-section">	<div class="container"><div class="breadcrumb">				
                    <a href="<?php echo site_url('home/') ?>">Home</a><span class='fa fa-angle-double-right' >  </span><a href="<?php echo site_url("treatments/hair_styles/1"); ?>">Hair Styles</a>
                    <span class='fa fa-angle-double-right' >  </span><h6 id="set_header_title"></h6></div><!-- ** breadcrumb - End --><!-- **Searchform** -->

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
                            <?php foreach ($pages as $p) {
                                $curr_page = $this->uri->segment(3);
                                ?>
                            
                            <li class="<?php echo $curr_page==$p['id']?"current_page_item":"";?>"><a href="<?php echo site_url("treatments/hair_styles/".$p['id']); ?>" title="<?php echo $p['title'];?>"><?php echo $p['title'];?></a></li>
<!--                            <li class=''><a href="<?php //echo site_url("treatments/bouquets"); ?>" title='Bouquets'>Bouquets</a></li>
                            <li class=''><a href="<?php //echo site_url("treatments/headdresses"); ?>" title='Head Dresses'>Head Dresses</a></li>
                            <li class=''><a href="<?php //echo site_url("treatments/dressdesign"); ?>" title='Dress Designing'>Dress Designing</a></li>
                            <li class=''><a href="<?php //echo site_url("treatments/advices"); ?>" title='Advices'>Advices</a></li>-->
                            <?php } ?>
                        </ul>            
                    </div>    
                </div><!-- **Side Navigation End** -->

                <!-- **Main Content** -->
                <div class="side-navigation-content">               
                    <!-- #post-2125 -->

                    <?php foreach ($result as $r) {?>
                    <!-- #post-2125 -->
                    <script>$('#set_header_title').text("<?php echo $r['title'];?>");</script>
                    
                    <div id="post-2125" class="post-2125 page type-page status-publish hentry">
                        <h2><?php echo $r['title'];?></h2>
                        <img class="aligncenter size-full wp-image-234" src="<?php echo site_url("uploads/hair_styles/".$r['image_url']); ?>" alt="image" width="680" height="452" /><br />
                        
                        
                         <div class="column dt-sc-one-half  first">
                            <div class="dt-sc-titled-box" ><h6 class="dt-sc-titled-box-title">Regular Price</h6>
                                <div class="dt-sc-titled-box-content">
                                    <p style="text-align: center;"> 
                                    <h3><?php echo $r['price'];?></h3>
                                    </p>

                                </div><!-- #post-2125 -->


                            </div> 
                        </div>


                        <div class="column dt-sc-one-half ">
                            <div class="dt-sc-titled-box" ><h6 class="dt-sc-titled-box-title">Products Available</h6>
                                <div class="dt-sc-titled-box-content">
                                    <p> 
                                    <h3><?php echo $r['product'];?></h3>

                                    </p>

                                </div><!-- #post-2125 -->


                            </div> 
                        </div>
                        
                        
                        <div class="dt-sc-titled-box  " ><h6 class="dt-sc-titled-box-title">Description</h6>
                            <div class="dt-sc-titled-box-content">
                                <p style="text-align: justify;"> <?php echo $r['description'];?></p>

                            </div><!-- #post-2125 -->

                    <?php }?>
                        </div>
                        
                       

                    </div>






            </section><!-- **Primary Section** -->



        </div><!-- **Container - End** -->
    </div><!-- **Main - End** -->

    <!--Loading footer-->
    <?php $this->load->view('footer'); ?>




</html>
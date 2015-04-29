<html>

<!--Loading header-->
<?php $this->load->view('header'); ?>

<!-- **Main** -->
<div id="main"><!-- **Breadcrumb** --><section class="breadcrumb-section">	<div class="container"><div class="breadcrumb">				
                <a href="<?php echo site_url("home_controller/")?>">Home</a><span class='fa fa-angle-double-right' >  </span><h6>About Us</h6></div><!-- ** breadcrumb - End --><!-- **Searchform** -->

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


        <div class='container'><h1 class='hr-title dt-page-title'><span>About Us</span></h1></div>      
        <!-- **Primary Section** -->
        <section id="primary" class="content-full-width">
            <!-- #post-14 -->
            <div id="post-14" class="post-14 page type-page status-publish has-post-thumbnail hentry">
                <table border="0" width="330" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td class="subPGtxtGrayTopic01" align="left" valign="top">Year 2007 How It Began</td>
                        </tr>
                        <tr>
                            <td class="subPGtxtGrayText" align="left" valign="top">Mrs. Lakshi Dulanga Kadawathaarachchi started her first beauty salon, Lakshi Hair &amp; Beauty Salon at No 38 1/1, Church Road, Ratnapura on 5th November 2007.</td>
                        </tr>
                        <tr>
                            <td class="subPGtxtGrayText" align="left" valign="top"></td>
                        </tr>
                        <tr>
                            <td class="subPGtxtGrayText" align="left" valign="top">With the rapid improvement of customer base with quality of service, Lakshi recruited Ms.Nalika (a friend) as the first ever employee of the saloon.</td>
                        </tr>
                        <tr>
                            <td class="subPGtxtGrayText" align="left" valign="top"></td>
                        </tr>
                        <tr>
                            <td class="subPGtxtGrayText" align="left" valign="top">Year by year lakshi had to recruit more an more employees with the expanding customer base. And she started a branch of lakshi saloon at No 100, Main Street, Ratnapura on 24th September 2010, to cater a better service to valued customers.</td>
                        </tr>
                    </tbody>
                </table>
                <div class="social-bookmark"></div><div class="social-share"></div>	
            </div><!-- #post-14 -->


        </section><!-- **Primary Section** -->


    </div><!-- **Container - End** -->
</div><!-- **Main - End** -->


<!--Loading footer-->
<?php $this->load->view('footer'); ?>




</html>
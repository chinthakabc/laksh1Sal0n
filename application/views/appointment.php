<html>

    <?php $this->load->view('header'); ?>

    <!-- **Main** -->
    <div id="main"><!-- **Breadcrumb** --><section class="breadcrumb-section">	<div class="container"><div class="breadcrumb">				
                    <a href="<?php echo site_url("home_controller/") ?>">Home</a><span class='fa fa-angle-double-right' >  </span><h6>Appointments</h6></div><!-- ** breadcrumb - End --><!-- **Searchform** -->

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
                <!-- #post-247 -->
                <div id="post-247" class="post-247 page type-page status-publish hentry">
                    <div  class='column dt-sc-two-third  first'><h3>Appointment Form</h3>
                        <div class="wpcf7" id="wpcf7-f4088-p247-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form name="" action="/themes/dt-spalab/appointments/#wpcf7-f4088-p247-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="4088" />
                                    <input type="hidden" name="_wpcf7_version" value="4.1" />
                                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f4088-p247-o1" />
                                    <input type="hidden" name="_wpnonce" value="4200a7d38d" />
                                </div>
                                <p><span class="wpcf7-form-control-wrap department-field">
                                        <select name="department-field" class="wpcf7-form-control wpcf7-select" aria-invalid="false">
                                            <option value="Select Your Service">Select Your Service</option>
                                            <option value="Skin Care">Skin Care</option>
                                            <option value="Health &amp; Wellness">Health &amp; Wellness</option>
                                            <option value="Power of Water">Power of Water</option>
                                            <option value="Massage">Massage</option><option value="Red Rock Treatments">Red Rock Treatments</option>
                                            <option value="Body Treatments">Body Treatments</option></select>
                                    </span>
                                </p>
                                <div class="clear"> </div>
                                <div class="hr-invisible-very-small"> </div>
                                <div class="column dt-sc-one-half first">
                                    <span class="wpcf7-form-control-wrap your-fname">
                                        <input type="text" name="your-fname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your First Name (required)" />
                                    </span>
                                </div>
                                <div class="column dt-sc-one-half">
                                    <span class="wpcf7-form-control-wrap your-lname">
                                        <input type="text" name="your-lname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Last Name (required)" />
                                    </span>
                                </div>
                                <div class="clear"> </div>
                                <div class="hr-invisible-very-small"> </div>
                                <div class="column dt-sc-one-half first">
                                    <span class="wpcf7-form-control-wrap birth-date">
                                        <input type="date" name="birth-date" value="" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date" aria-required="true" aria-invalid="false" placeholder="Date of Birth (required)" />
                                    </span>
                                </div>
                                <div class="column dt-sc-one-half">
                                    <span class="wpcf7-form-control-wrap sex-field">
                                        <span class="wpcf7-form-control wpcf7-radio">
                                            <span class="wpcf7-list-item first">
                                                <input type="radio" name="sex-field" value="Male" />&nbsp;
                                                <span class="wpcf7-list-item-label">Male</span></span>
                                            <span class="wpcf7-list-item">
                                                <input type="radio" name="sex-field" value="Female" />&nbsp;
                                                <span class="wpcf7-list-item-label">Female</span></span>
                                            <span class="wpcf7-list-item last">
                                                <input type="radio" name="sex-field" value="Child" />&nbsp;
                                                <span class="wpcf7-list-item-label">Child</span></span>
                                            
                                        </span>
                                    
                                    </span>
                                </div>
                                <div class="clear"> </div>
                                <div class="hr-invisible-very-small"> </div>
                                <div class="column dt-sc-one-half first">
                                    <span class="wpcf7-form-control-wrap email-id">
                                        <input type="email" name="email-id" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your Email (required)" />
                                    </span>
                                </div>
                                <div class="column dt-sc-one-half">
                                    <span class="wpcf7-form-control-wrap phone-no">
                                        <input type="tel" name="phone-no" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Phone (required)" />
                                    </span>
                                </div>
                                <div class="clear"> </div>
                                <div class="hr-invisible-very-small"> </div>
                                <p><br>
                                    <span class="wpcf7-form-control-wrap your-message">
                                        <textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Message (required)"></textarea>
                                    </span>
                                </p>
                                <div class="clear"> </div>
                                <div class="hr-invisible-very-small"> </div>
                                <p><input type="submit" value="Book an Appointment" class="wpcf7-form-control wpcf7-submit" /></p>
                                <div class="wpcf7-response-output wpcf7-display-none"></div></form></div></div>
                    <div  class='column dt-sc-one-third  '><h3>Book an Appointment</h3>
                        <div class="dt-sc-appointment"><p class="dt-sc-contact-info"><i class='fa fa-phone'></i>Phone : <span>045 2233333
                            /045 2233332  </span></p>
                            <p class="dt-sc-contact-info"><i class='fa fa-mobile-phone'></i>Mobile : <span>0714 310 800</span></p>
                            <p class="dt-sc-contact-info"><i class='fa fa-envelope'></i>Email : <a href='mailto:lakshisalon@sltnet.lk'>lakshisalon@sltnet.lk</a></p>
                            <p class="dt-sc-contact-info"><i class='fa fa-pencil'></i>Online Form : <a href='http://www.google.com'>Fill out this form</a></p></div>
                        <div class='dt-sc-hr-invisible-small  '></div>
                        <div class="dt-sc-clear"></div>
                        
                        
                        <div class='dt-sc-hr-invisible-small  '></div>
                        <div class="dt-sc-clear"></div>
                        <h3>A Place To Love Yourself</h3>
                        <p><img class="alignnone size-full wp-image-547" src="<?php echo site_url("asserts/img/promo1.jpg") ?>" alt="image" /></div>
                    <div class="social-bookmark"></div><div class="social-share"></div>	
                </div><!-- #post-247 -->


            </section><!-- **Primary Section** -->


        </div><!-- **Container - End** -->
    </div><!-- **Main - End** -->

    <!--Loading footer-->
<?php $this->load->view('footer'); ?>




</html>
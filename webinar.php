<head>
    <?php
                include("includes/mysqli_connect.php");
                include "includes/header.php";
                $current_url = $_SERVER['REQUEST_URI'];
                if(strpos($current_url,'.php/') !== false){
                echo "<script>window.location='".$web_url."';</script>";
                        }
                meta_tags();
                session_start();
                $_SESSION = array();

        /*include("simple-php-captcha.php");
        $_SESSION['captcha'] = simple_php_captcha();*/

        $purl='http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

        ?>
    <title>Webinars - Tejas Networks</title>
    <?php css_files();?>
        <style>
        a#captcha_reload {
                padding-left: 10px;
                font-size: 24px;
        }
        .error_msg {
                color: red !important;
                /* display: block; */
        }
        #success-msg{
                font-weight: bold;
                color: #2cdc32;
        }
        .modal-content.register_Form{
                border-radius: 0px;
                padding: 20px !important;
        }
        .register_Form .close{
                cursor: pointer;
            z-index: 9999999;
            position: relative;
            right: -5px;
            bottom: 10px;
        }
        .register_Form .form-control{
                border-radius: 0px;
                box-shadow: none;
                border: 1px solid rgba(60, 122, 183, 0.5294117647058824);
        }
        .register_Form .btn{
                border-radius: 0px;
                margin-top: 10px;
        }
        .footercontact-helperror {
    color: #e52129 !important;
        }
        .news_content img
        {
                max-height: 175px;
        }
        .news_content {
            height: auto;
        }
        .read_more {
            position: static;
            bottom: 0;
        }
        @media only screen and (min-width: 992px) and (max-width: 1199px){
                .news_content img{
                        height: 140px;
                        width: auto;
                        margin: 0 auto
                }
        }
        @media only screen and (min-width: 768px) and (max-width: 991px){
                .news_content img{
                        height: 120px;
                        width: auto;
                        margin: 0 auto
                }
        }
.modal-open {
    padding-right: 0px !important;
}

.bottom_text {
    background-color: initial;
}
        </style>

</head>

<body style="padding-right:0 !important;" onload="startDownload();">
    <!-- Start Navigation -->
        <?php navigation_bar($connect);?>
    <!-- End Navigation -->

    <div class="clearfix"></div>

    <!-- Start Content -->
        <div class="container-fluid no-padding">
                <div class="resources_header">
                        <div class="container">
                                <h1>Webinars</h1>
                        </div>
                </div>
        </div>
        <section class="fiber_to_home_content">
                <div class="container">
                        <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="investor_left">
                                                <ul class="crs_pages">
                                                        <p>Categories</p>
                                                        <li><a href="content.php">Articles</a></li>
                                                        <li><a href="case-studies.php">Case Studies</a></li>
                                                        <li><a href="white-papers.php">White Papers</a></li>
                                                        <li><a href="videos.php">Videos</a></li>
                                                        <li><a href="webinar.php">Webinars</a></li>

                                                </ul>
                                        </div>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="case_whitepaper">
                                                <h2>Videos</h2>
                                                <div class="row">

                                                        
                                                                
                                                            
                                                        
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <!--h3>Case Study</h3-->
                                                                <video class="col-md-12 col-sm-12 col-xs-12" controls  controlsList="nodownload">
                                                                                          <source src="video/Tejas_5G Webinar_Video_high-quality.mp4" type="video/mp4">
                                                                                          Impact of 5G on Optical Transport
                                                                                        </video>
                                                                <div class="bottom_text">
                                                                        <div class="row">
                                                                                <div class="col-md-12 col-xs-12">
                                                                                        <p>Impact of 5G on Optical Transport</p>
                                                                                </div>

                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                </div>
                                        <div class="row">
                                                <div class="col-md-12">
                                                        <div class="news_update">
                                                                <h1>Latest News & Updates</h1>
                                                                <div class="row">

                                                                        <?php
                                                                        $select_news=mysqli_query($connect,"SELECT * FROM `news_rooms` ORDER BY `id` DESC LIMIT 3");
                                                                        $list='';
                                                                        $item='';
                                                                        $i=1;
                                                                        while($row_news=mysqli_fetch_array($select_news)){
                                                                                $news_title = $row_news["news_title"];
                                                                                $news_titles=str_replace(" ","-",$news_title);
                                                                                $news_date_time = $row_news["news_date_time"];
                                                                                $news_images = $row_news["news_images"];
                                                                                $news_description = $row_news["news_description"];
                                                                                $news_url = $row_news["news_url"];
                                                                                $limit_description=strip_tags(substr($news_description,0,495))."...";
                                                                                $news_id = $row_news["id"];
                                                                                ?>


                                                                        <div class="col-md-4 col-sm-4">
                                                                                <div class="news_content">
                                                                                        <img src="main-control/user_images/<?php echo $news_images; ?>" class="img-responsive">
                                                                                        <p class="min_hgt_100"><?php echo $news_title; ?></p>
                                                                                        <div class="read_more">
                                                                                                <a href="newsroom-details/<?php echo $news_url; ?>" class="btn" target="_blank">Read More</a>
                                                                                        </div>
                                                                                </div>
                                                                        </div>

                                                                        <?php } ?>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>

        <section class="help">
                <div class="container">
                        <div class="row">
                                <div class="col-md-4 col-sm-5 col-xs-12">
                                        <div class="how_can">
                                                <h2>How can we help you?</h2>
                                                <img src="images/help.jpg" class="img-responsive">
                                        </div>
                                </div>
                                <div class="col-md-8 col-sm-7 col-xs-12">
                                        <div class="help_form">
                                                        <form  class="form-horizontal" method="POST" id="help" >
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                                                                <label class="control-label col-xs-4 col-sm-3" for="subject">Subject *</label>
                                                                                <div class="col-xs-8 col-sm-9">
                                                                                        <input type="text" id="subject" name="subject" size="20" class="form-control subject"  required  maxlength="30">
                                                                                        <span class="error_msg" id="error_subject"></span>
                                                                                </div>
                                    </div>
                                                                        <div class="form-group">
                                                                                <label class="control-label col-xs-4 col-sm-3" for="full_name">Full Name *</label>
                                                                                <div class="col-xs-8 col-sm-9">
                                                                                        <input type="text" id="full_name" name="full_name" size="20" class="form-control full_name"  required  maxlength="30">
                                                                                        <span class="error_msg" id="full_name_error"></span>
                                                                                </div>
                                    </div>

                                    <div class="form-group">
                                                                                <label class="control-label col-xs-4 col-sm-3" for="email">E-mail *</label>
                                                                                <div class="col-xs-8 col-sm-9">
                                                                                        <input type="text" id="email" maxlength="30" name="email" size="20" class="form-control email" required>
                                                                                        <span class="error_msg" id="email_error"></span>
                                                                                </div>
                                    </div>

                                    <div class="form-group">
                                                                                <label class="control-label col-xs-4 col-sm-3" for="phone">Phone *</label>
                                                                                <div class="col-xs-8 col-sm-9">
                                                                                        <input type="text" id="phone" maxlength="15" name="phone" size="20" class="form-control phone"  minlength="10" required >
                                                                                        <span class="error_msg" id="phone_error"></span>
                                                                                </div>
                                    </div>

                                    <div class="form-group">
                                                                                <label  class="control-label col-xs-4 col-sm-3">Country *</label>
                                                                                <div class="col-xs-8 col-sm-9">
                                                                                        <select class="form-control country" id="country" name="country" title="Region" required >
                                                                                                <option value="" disabled selected hidden>Select Your Country</option>
                                                                                                <?php
                                                                                                $csql="SELECT * FROM country_list";
                                                                                                $relt=mysqli_query($connect,$csql);
                                                                                                while($row=mysqli_fetch_array($relt)){
                                                                                                        ?>
                                                                                                <option value="<?php echo $row['id']; ?>"><?php echo $row['country_name']; ?></option>
                                                                                                        <?php
                                                                                                }
                                                                                                ?>
                                                                                        </select>
                                                                                        <span class="error_msg" id="region_error"></span>
                                                                                </div>
                                    </div>

                                    <div class="form-group">
                                                                                <label class="control-label col-xs-4 col-sm-3" for="phone">Message *</label>
                                                                                <div class="col-xs-8 col-sm-9">
                                                                                        <textarea  rows="6" name="description" style=" resize: none;"  id="description" class="form-control description"  required maxlength="200"></textarea>
                                                                                        <span class="error_msg" id="description_error"></span>
                                                                                </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-xs-4 col-sm-3">Captcha *:</label>
                                        <div class="g-recaptcha col-xs-8 col-sm-9" data-callback="recaptchaCallback" data-sitekey="6LcuSIUUAAAAADtCx-u7gjz_LOj0LzAQ_XIw_jhk" >

                                        </div>
                                   </div>

                                    <div class="form-group">
                                        <label class="control-label col-xs-4 col-sm-3"></label>
                                        <div class="col-xs-8 col-sm-9">
                                                <span class="error_msg" id="captcha_error"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                                                                <div class="col-xs-offset-4 col-sm-offset-3 col-xs-8 col-sm-9 text-center">
                                                                                        <input type="hidden" name="action" value="casestudy_contact" />
                                                                                        <input type="hidden" name="page_url" value="<?php echo $purl; ?>" />
                                                                                        <input type="button" name="submit_btn" id="sub_button" value="Submit" class="btn btn-primary submit" >
                                                                                </div>
                                                                        </div>

                                                                </div>
                            </form>
                            <div class="row">
                                <div class="form-group">
                                                                        <div class="col-xs-offset-4 col-sm-offset-3 col-xs-8 col-sm-9 text-center">
                                                                                <span id="success-msg" class=""></span>
                                                                        </div>
                                                                </div>
                            </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>


        <?php
                include "includes/footer.php";
                footer();
        ?>
                <script src="https://cdn.jsdelivr.net/jquery.loadingoverlay/1.5.3/loadingoverlay.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.loadingoverlay/1.5.3/loadingoverlay_progress.min.js"></script>

        <script type="text/javascript" src="js/custom2.js"></script>
        <script src="js/downloadcasestudy.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <style>
        .error
        {
                border:1px solid red !important;
        }
        .tv-widget-chart__header-logo-link{
        display:none !important;
        }
        .min_hgt_100{min-height: 100px;}
        </style>
                <script>
                        $('.el').css({
                                'height': $('.el').height()
                        });
$('#modal-content').on('shown.bs.modal', function() {
       $("body.modal-open").removeAttr("style");
 });
                </script>
                <!-------------------------------download popup-------------------------->
    <div class="modal fade white_paper_modal" id="register-from" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content register_Form">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <div class="modal-body">
                <div class="">
                    <form method="POST" id="programBroucher_form" autocomplete="off">
                        <div class="alert alert-success text-center download_form_success" style="margin-bottom: 12px; margin-top: 10px;display: none;" id="pgmbrpuchersuccessmsg">Thank you! Please check your inbox for the brochure. </div>
                        <div class="alert alert-danger text-center download_form_success" style="margin-bottom: 12px; margin-top: 10px;display: none;" id="pgmbrpuchererrormsg"><strong>Error!</strong> Unable to send email. Contact the site administrator if problem persists!.</div>
                        <div class=" work-with-us" style="">
                            <div class="row">
                                                                <h3 class="text-center">Download White Paper</h3>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="form-group col-md-6 col-sm-12">
                                            <input type="text" name="pgmbrpucherfirstname" id="pgmbrpucherfirstname" class="form-control" placeholder="First Name*" maxlength="60">
                                            <small class="form-text text-muted footercontact-helperror" id="pgmbrpucherfirstnameerror"></small>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-12">
                                            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name*" maxlength="60"><small class="form-text text-muted footercontact-helperror" id="last_name_error"></small>
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="form-group col-md-6 col-sm-12">
                                            <input type="tel" name="phno" id="phno" class="form-control" placeholder="Phone Number*">
                                            <small class="form-text text-muted footercontact-helperror" id="phone_number_error"></small>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-12">
                                            <input type="text" name="email_add" id="email_add" class="form-control" placeholder="Email Address*" >
                                            <small class="form-text text-muted footercontact-helperror" id="emailerror"></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="form-group col-md-6 col-sm-12">
                                            <input type="text" name="organisation" id="organisation" class="form-control" placeholder="Organization*" >
                                            <small class="form-text text-muted footercontact-helperror" id="organisationerror"></small>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-12">
                                            <input type="text" name="job_title" id="job_title" class="form-control" placeholder="Job Title*">
                                            <small class="form-text text-muted footercontact-helperror" id="job_title_error"></small>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                           <select class="form-control" name="country" id="country_list">
                                                                        <option value="">Select Country*</option>
                                                <?php
                                                                                                $csql="SELECT * FROM country_list";
                                                                                                $relt=mysqli_query($connect,$csql);
                                                                                                while($row=mysqli_fetch_array($relt)){
                                                                                                        ?>
                                                                                                <option value="<?php echo $row['id']; ?>"><?php echo $row['country_name']; ?></option>
                                                                                                        <?php
                                                                                                }
                                                                                                ?>
                                         </select>
                                            <small class="form-text text-muted footercontact-helperror" id="country_error"></small>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12" style="display:none;">
                                    <div class="row">
                                        <div class="form-group col-md-12 col-sm-12">
                                            <input type="checkbox" class="checkbox-custom" name="pgmbrpuchercheckbox" id="pgmbrpuchercheckbox" checked="checked" value="1" />
                                            <p class="check">I would like to subscribe to your newsletter.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="text" name="pgmbrpuchercommenttextbox" id="pgmbrpuchercommenttextbox" value="" style="display:none;" />
                                <input type="hidden" name="pgmbrpucherhidsubmit" id="pgmbrpucherhidsubmit" class="btn btn-primary submit" value="subm[root@tejasnetworks tejasnetworks.com]# cat webinar.php
<!DOCTYPE HTML>
<html class="no-js" lang="en-us">

<head>
    <?php
                include("includes/mysqli_connect.php");
                include "includes/header.php";
                $current_url = $_SERVER['REQUEST_URI'];
                if(strpos($current_url,'.php/') !== false){
                echo "<script>window.location='".$web_url."';</script>";
                        }
                meta_tags();
                session_start();
                $_SESSION = array();

        /*include("simple-php-captcha.php");
        $_SESSION['captcha'] = simple_php_captcha();*/

        $purl='http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

        ?>
    <title>Videos - Tejas Networks</title>
    <?php css_files();?>
        <style>
        a#captcha_reload {
                padding-left: 10px;
                font-size: 24px;
        }
        .error_msg {
                color: red !important;
                /* display: block; */
        }
        #success-msg{
                font-weight: bold;
                color: #2cdc32;
        }
        .modal-content.register_Form{
                border-radius: 0px;
                padding: 20px !important;
        }
        .register_Form .close{
                cursor: pointer;
            z-index: 9999999;
            position: relative;
            right: -5px;
            bottom: 10px;
        }
        .register_Form .form-control{
                border-radius: 0px;
                box-shadow: none;
                border: 1px solid rgba(60, 122, 183, 0.5294117647058824);
        }
        .register_Form .btn{
                border-radius: 0px;
                margin-top: 10px;
        }
        .footercontact-helperror {
    color: #e52129 !important;
        }
        .news_content img
        {
                max-height: 175px;
        }
        .news_content {
            height: auto;
        }
        .read_more {
            position: static;
            bottom: 0;
        }
        @media only screen and (min-width: 992px) and (max-width: 1199px){
                .news_content img{
                        height: 140px;
                        width: auto;
                        margin: 0 auto
                }
        }
        @media only screen and (min-width: 768px) and (max-width: 991px){
                .news_content img{
                        height: 120px;
                        width: auto;
                        margin: 0 auto
                }
        }
.modal-open {
    padding-right: 0px !important;
}

.bottom_text {
    background-color: initial;
}
        </style>

</head>

<body style="padding-right:0 !important;" onload="startDownload();">
    <!-- Start Navigation -->
        <?php navigation_bar($connect);?>
    <!-- End Navigation -->

    <div class="clearfix"></div>

    <!-- Start Content -->
        <div class="container-fluid no-padding">
                <div class="resources_header">
                        <div class="container">
                                <h1>Resources</h1>
                        </div>
                </div>
        </div>
        <section class="fiber_to_home_content">
                <div class="container">
                        <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="investor_left">
                                                <ul class="crs_pages">
                                                        <p>Categories</p>
                                                        <li><a href="content.php">Articles</a></li>
                                                        <li><a href="case-studies.php">Case Studies</a></li>
                                                        <li><a href="white-papers.php">White Papers</a></li>
                                                        <li><a href="videos.php">Videos</a></li>

                                                </ul>
                                        </div>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="case_whitepaper">
                                                <h2>Videos</h2>
                                                <div class="row">

                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <!--h3>Case Study</h3-->
                                                                <video class="col-md-12 col-sm-12 col-xs-12" controls  controlsList="nodownload">
                                                                                          <source src="video/Corporate_Video_V21.mp4" type="video/mp4">
                                                                                          Company Overview
                                                                                        </video>
                                                                <div class="bottom_text">
                                                                        <div class="row">
                                                                                <div class="col-md-12 col-xs-12">
                                                                                        <p>Company Overview</p>
                                                                                </div>

                                                                        </div>
                                                                </div>
                                                        </div>
                                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <!--h3>Case Study</h3-->
                                                                <video class="col-md-12 col-sm-12 col-xs-12" controls  controlsList="nodownload">
                                                                                          <source src="video/Tejas_Final.mp4" type="video/mp4">
                                                                                          TJ1400- Ultra Converged Broadband Product
                                                                                        </video>
                                                                <div class="bottom_text">
                                                                        <div class="row">
                                                                                <div class="col-md-12 col-xs-12">
                                                                                        <p>TJ1400- Ultra Converged Broadband Product</p>
                                                                                </div>

                                                                        </div>
                                                                </div>
                                                        </div>
                                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <!--h3>Case Study</h3-->
                                                                <video class="col-md-12 col-sm-12 col-xs-12" controls  controlsList="nodownload">
                                                                                          <source src="video/TJ1600.mp4" type="video/mp4">
                                                                                          TJ1600
                                                                                        </video>
                                                                <div class="bottom_text">
                                                                        <div class="row">
                                                                                <div class="col-md-12 col-xs-12">
                                                                                        <p>TJ1600</p>
                                                                                </div>

                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <!--h3>Case Study</h3-->
                                                                <video class="col-md-12 col-sm-12 col-xs-12" controls  controlsList="nodownload">
                                                                                          <source src="video/draft6_tejas.mp4" type="video/mp4">
                                                                                          TJ1600 - Alien Wave Solution
                                                                                        </video>
                                                                <div class="bottom_text">
                                                                        <div class="row">
                                                                                <div class="col-md-12 col-xs-12">
                                                                                        <p>TJ1600 - Alien Wave Solution</p>
                                                                                </div>

                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                                <!--h3>Case Study</h3-->
                                                                <video class="col-md-12 col-sm-12 col-xs-12" controls  controlsList="nodownload">
                                                                                          <source src="video/Tejas_5G Webinar_Video_high-quality.mp4" type="video/mp4">
                                                                                          Impact of 5G on Optical Transport
                                                                                        </video>
                                                                <div class="bottom_text">
                                                                        <div class="row">
                                                                                <div class="col-md-12 col-xs-12">
                                                                                        <p>Impact of 5G on Optical Transport</p>
                                                                                </div>

                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                </div>
                                        <div class="row">
                                                <div class="col-md-12">
                                                        <div class="news_update">
                                                                <h1>Latest News & Updates</h1>
                                                                <div class="row">

                                                                        <?php
                                                                        $select_news=mysqli_query($connect,"SELECT * FROM `news_rooms` ORDER BY `id` DESC LIMIT 3");
                                                                        $list='';
                                                                        $item='';
                                                                        $i=1;
                                                                        while($row_news=mysqli_fetch_array($select_news)){
                                                                                $news_title = $row_news["news_title"];
                                                                                $news_titles=str_replace(" ","-",$news_title);
                                                                                $news_date_time = $row_news["news_date_time"];
                                                                                $news_images = $row_news["news_images"];
                                                                                $news_description = $row_news["news_description"];
                                                                                $news_url = $row_news["news_url"];
                                                                                $limit_description=strip_tags(substr($news_description,0,495))."...";
                                                                                $news_id = $row_news["id"];
                                                                                ?>


                                                                        <div class="col-md-4 col-sm-4">
                                                                                <div class="news_content">
                                                                                        <img src="main-control/user_images/<?php echo $news_images; ?>" class="img-responsive">
                                                                                        <p class="min_hgt_100"><?php echo $news_title; ?></p>
                                                                                        <div class="read_more">
                                                                                                <a href="newsroom-details/<?php echo $news_url; ?>" class="btn" target="_blank">Read More</a>
                                                                                        </div>
                                                                                </div>
                                                                        </div>

                                                                        <?php } ?>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>

        <section class="help">
                <div class="container">
                        <div class="row">
                                <div class="col-md-4 col-sm-5 col-xs-12">
                                        <div class="how_can">
                                                <h2>How can we help you?</h2>
                                                <img src="images/help.jpg" class="img-responsive">
                                        </div>
                                </div>
                                <div class="col-md-8 col-sm-7 col-xs-12">
                                        <div class="help_form">
                                                        <form  class="form-horizontal" method="POST" id="help" >
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                                                                <label class="control-label col-xs-4 col-sm-3" for="subject">Subject *</label>
                                                                                <div class="col-xs-8 col-sm-9">
                                                                                        <input type="text" id="subject" name="subject" size="20" class="form-control subject"  required  maxlength="30">
                                                                                        <span class="error_msg" id="error_subject"></span>
                                                                                </div>
                                    </div>
                                                                        <div class="form-group">
                                                                                <label class="control-label col-xs-4 col-sm-3" for="full_name">Full Name *</label>
                                                                                <div class="col-xs-8 col-sm-9">
                                                                                        <input type="text" id="full_name" name="full_name" size="20" class="form-control full_name"  required  maxlength="30">
                                                                                        <span class="error_msg" id="full_name_error"></span>
                                                                                </div>
                                    </div>

                                    <div class="form-group">
                                                                                <label class="control-label col-xs-4 col-sm-3" for="email">E-mail *</label>
                                                                                <div class="col-xs-8 col-sm-9">
                                                                                        <input type="text" id="email" maxlength="30" name="email" size="20" class="form-control email" required>
                                                                                        <span class="error_msg" id="email_error"></span>
                                                                                </div>
                                    </div>

                                    <div class="form-group">
                                                                                <label class="control-label col-xs-4 col-sm-3" for="phone">Phone *</label>
                                                                                <div class="col-xs-8 col-sm-9">
                                                                                        <input type="text" id="phone" maxlength="15" name="phone" size="20" class="form-control phone"  minlength="10" required >
                                                                                        <span class="error_msg" id="phone_error"></span>
                                                                                </div>
                                    </div>

                                    <div class="form-group">
                                                                                <label  class="control-label col-xs-4 col-sm-3">Country *</label>
                                                                                <div class="col-xs-8 col-sm-9">
                                                                                        <select class="form-control country" id="country" name="country" title="Region" required >
                                                                                                <option value="" disabled selected hidden>Select Your Country</option>
                                                                                                <?php
                                                                                                $csql="SELECT * FROM country_list";
                                                                                                $relt=mysqli_query($connect,$csql);
                                                                                                while($row=mysqli_fetch_array($relt)){
                                                                                                        ?>
                                                                                                <option value="<?php echo $row['id']; ?>"><?php echo $row['country_name']; ?></option>
                                                                                                        <?php
                                                                                                }
                                                                                                ?>
                                                                                        </select>
                                                                                        <span class="error_msg" id="region_error"></span>
                                                                                </div>
                                    </div>

                                    <div class="form-group">
                                                                                <label class="control-label col-xs-4 col-sm-3" for="phone">Message *</label>
                                                                                <div class="col-xs-8 col-sm-9">
                                                                                        <textarea  rows="6" name="description" style=" resize: none;"  id="description" class="form-control description"  required maxlength="200"></textarea>
                                                                                        <span class="error_msg" id="description_error"></span>
                                                                                </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-xs-4 col-sm-3">Captcha *:</label>
                                        <div class="g-recaptcha col-xs-8 col-sm-9" data-callback="recaptchaCallback" data-sitekey="6LcuSIUUAAAAADtCx-u7gjz_LOj0LzAQ_XIw_jhk" >

                                        </div>
                                   </div>

                                    <div class="form-group">
                                        <label class="control-label col-xs-4 col-sm-3"></label>
                                        <div class="col-xs-8 col-sm-9">
                                                <span class="error_msg" id="captcha_error"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                                                                <div class="col-xs-offset-4 col-sm-offset-3 col-xs-8 col-sm-9 text-center">
                                                                                        <input type="hidden" name="action" value="casestudy_contact" />
                                                                                        <input type="hidden" name="page_url" value="<?php echo $purl; ?>" />
                                                                                        <input type="button" name="submit_btn" id="sub_button" value="Submit" class="btn btn-primary submit" >
                                                                                </div>
                                                                        </div>

                                                                </div>
                            </form>
                            <div class="row">
                                <div class="form-group">
                                                                        <div class="col-xs-offset-4 col-sm-offset-3 col-xs-8 col-sm-9 text-center">
                                                                                <span id="success-msg" class=""></span>
                                                                        </div>
                                                                </div>
                            </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>


        <?php
                include "includes/footer.php";
                footer();
        ?>
                <script src="https://cdn.jsdelivr.net/jquery.loadingoverlay/1.5.3/loadingoverlay.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.loadingoverlay/1.5.3/loadingoverlay_progress.min.js"></script>

        <script type="text/javascript" src="js/custom2.js"></script>
        <script src="js/downloadcasestudy.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <style>
        .error
        {
                border:1px solid red !important;
        }
        .tv-widget-chart__header-logo-link{
        display:none !important;
        }
        .min_hgt_100{min-height: 100px;}
        </style>
                <script>
                        $('.el').css({
                                'height': $('.el').height()
                        });
$('#modal-content').on('shown.bs.modal', function() {
       $("body.modal-open").removeAttr("style");
 });
                </script>
                <!-------------------------------download popup-------------------------->
    <div class="modal fade white_paper_modal" id="register-from" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content register_Form">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <div class="modal-body">
                <div class="">
                    <form method="POST" id="programBroucher_form" autocomplete="off">
                        <div class="alert alert-success text-center download_form_success" style="margin-bottom: 12px; margin-top: 10px;display: none;" id="pgmbrpuchersuccessmsg">Thank you! Please check your inbox for the brochure. </div>
                        <div class="alert alert-danger text-center download_form_success" style="margin-bottom: 12px; margin-top: 10px;display: none;" id="pgmbrpuchererrormsg"><strong>Error!</strong> Unable to send email. Contact the site administrator if problem persists!.</div>
                        <div class=" work-with-us" style="">
                            <div class="row">
                                                                <h3 class="text-center">Download White Paper</h3>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="form-group col-md-6 col-sm-12">
                                            <input type="text" name="pgmbrpucherfirstname" id="pgmbrpucherfirstname" class="form-control" placeholder="First Name*" maxlength="60">
                                            <small class="form-text text-muted footercontact-helperror" id="pgmbrpucherfirstnameerror"></small>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-12">
                                            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name*" maxlength="60"><small class="form-text text-muted footercontact-helperror" id="last_name_error"></small>
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="form-group col-md-6 col-sm-12">
                                            <input type="tel" name="phno" id="phno" class="form-control" placeholder="Phone Number*">
                                            <small class="form-text text-muted footercontact-helperror" id="phone_number_error"></small>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-12">
                                            <input type="text" name="email_add" id="email_add" class="form-control" placeholder="Email Address*" >
                                            <small class="form-text text-muted footercontact-helperror" id="emailerror"></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="form-group col-md-6 col-sm-12">
                                            <input type="text" name="organisation" id="organisation" class="form-control" placeholder="Organization*" >
                                            <small class="form-text text-muted footercontact-helperror" id="organisationerror"></small>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-12">
                                            <input type="text" name="job_title" id="job_title" class="form-control" placeholder="Job Title*">
                                            <small class="form-text text-muted footercontact-helperror" id="job_title_error"></small>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                           <select class="form-control" name="country" id="country_list">
                                                                        <option value="">Select Country*</option>
                                                <?php
                                                                                                $csql="SELECT * FROM country_list";
                                                                                                $relt=mysqli_query($connect,$csql);
                                                                                                while($row=mysqli_fetch_array($relt)){
                                                                                                        ?>
                                                                                                <option value="<?php echo $row['id']; ?>"><?php echo $row['country_name']; ?></option>
                                                                                                        <?php
                                                                                                }
                                                                                                ?>
                                         </select>
                                            <small class="form-text text-muted footercontact-helperror" id="country_error"></small>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12" style="display:none;">
                                    <div class="row">
                                        <div class="form-group col-md-12 col-sm-12">
                                            <input type="checkbox" class="checkbox-custom" name="pgmbrpuchercheckbox" id="pgmbrpuchercheckbox" checked="checked" value="1" />
                                            <p class="check">I would like to subscribe to your newsletter.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="text" name="pgmbrpuchercommenttextbox" id="pgmbrpuchercommenttextbox" value="" style="display:none;" />
                                <input type="hidden" name="pgmbrpucherhidsubmit" id="pgmbrpucherhidsubmit" class="btn btn-primary submit" value="submit" />
                                <input type="hidden" name="hidcourseid" id="hidcourseid" />
                                <input type="hidden" name="hiddownloadtype" id="hiddownloadtype" />
                                <input type="button" name="pgmbrpuchersubmitbtn" id="pgmbrpuchersubmitbtn" value="Submit" class=" submit submit1">
                                <input type="button" name="" class="submit submit1" value="Cancel" onclick="cancle()" data-dismiss="modal">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="downloadsuccessmodal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content register_Form">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <div class="modal-body">
                <div class="alert alert-success text-center download_form_success" style="margin-bottom: 12px; margin-top: 10px;">Thank you! Please check your inbox for the brochure. </div>
            </div>
        </div>
    </div>
</div>
    <!-------------------------------download popup-------------------------->
    <!-- <script type="text/javascript">
        function startDownload() {
                window.location = "http://webdevelopment.southcentralus.cloudapp.azure.com/tejasnetworks-new/download.php?id=MjA3&downloadtype=Mg==";
        }
    </script> -->
        <script>
        document.addEventListener('contextmenu', event => event.preventDefault());
        </script>
        </body>
</html>
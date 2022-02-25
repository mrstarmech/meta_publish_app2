<!DOCTYPE html>
<html data-lt-installed="true">
<?php
function getParam($name, $default = "")
{
    return isset($_GET[$name]) ? $_GET[$name] : $default;
}

$domain      = getParam("domain", "adltkngs.com");
$clickPhpUrl = "//$domain/click.php";
$uclick      = getParam('uclick', false);
$offerLink   = "$clickPhpUrl?lp=1";
if ($uclick) $offerLink .= "&uclick=$uclick";
?>

<head>
    <meta charset="utf-8">
    <title>Hype Smart Watch</title>
    <meta name="description" content="Hype Smart Watch">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <meta http-equiv="content-language" content="en-us">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link rel="stylesheet" href="<?=$root_fld?>css/app.css">
    <title>&lt;!--Rize--&gt; Hype Smart Watch</title>
    <link href="<?=$root_fld?>css/css2.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=$root_fld?>css/modal.css">
    <style type="text/css">
        .form-error {
            display: none
        }

        input[type=text]:focus,
        input[type=tel]:focus,
        input[type=email]:focus,
        select:focus {
            border: 1px solid grey;
            border-bottom: 1px solid #1e90ff;
            outline: none;
        }

        span.help-block.form-error {
            display: none;
        }

        .has-error input[type=email],
        .has-error input[type=text],
        .has-error input[type=tel],
        .has-error.has-success input#phone_mask,
        .has-error select {
            border: 1px solid #ff5e45 !important;
            background-image: url('images/icon-validation-bad.png') !important;
            background-position: right center !important;
            background-repeat: no-repeat !important;
            background-size: 30px !important;
        }

        .has-success input[type=email],
        .has-success input[type=text],
        .has-success input[type=tel],
        .has-success select {
            background-image: url('images/icon-validation-good.png') !important;
            background-position: right center !important;
            background-repeat: no-repeat !important;
            background-size: 30px !important;
        }

        body.device-mobile .pac-container {
            top: 340px !important;
        }

        input::placeholder {
            color: #aaa !important;
        }

        .floating-labels {
            position: relative;
            margin-bottom: 10px;
        }

        .floating-labels input {
            position: relative !important;
            z-index: 1 !important;
            height: 25px;
            padding: 18px 0 0 10px !important;
            box-sizing: content-box !important;
            width: 95% !important;
            background: rgba(255, 255, 255, 0) !important;
        }

        .floating-labels select {
            padding: 5px 0 5px 10px;
            box-sizing: content-box;
            width: 95%;
        }

        .floating-labels input::placeholder {
            opacity: 0;
        }

        .floating-labels label {
            font-size: 15px;
            font-family: montserrat, sans-serif;
            transition: all .2s;
            cursor: text;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 10px;
            opacity: 0.6;
            font-weight: normal;
        }

        .floating-labels input:focus+label,
        .floating-labels input:not(:placeholder-shown)+label {
            font-size: 12px;
            color: #3498db;
            top: 25%;
            z-index: 2;
        }

        .floating-labels select+label {
            display: none;
        }

        @supports (-ms-ime-align:auto) {
            .floating-labels label {
                display: none;
            }

            .floating-labels input {
                height: 43px;
                padding: 0 0 0 10px !important;
            }
        }
    </style>
    <script type="text/javascript">
        function getDate(days) {
            var dayNames = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
            var monthNames = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
            var now = new Date();
            now.setDate(now.getDate() + days);
            var nowString = monthNames[now.getMonth()] + " " + now.getDate() + ", " + now.getFullYear();
            document.write(nowString);
        }
    </script>
    <link rel="stylesheet" href="<?=$root_fld?>css/app_1.css">
    <link rel="icon" href="favicon.ico" type="image/png">
    <link rel="stylesheet" href="<?=$root_fld?>css/index_merge.css">
    <link rel="stylesheet" href="<?=$root_fld?>css/animate.min.css">
    <style type="text/css">
        .mobile-button {
            position: fixed;
            bottom: 5px;
            margin: 0 auto;
            left: 5%;
            width: 90%;
            z-index: 100;
            visibility: hidden;
        }

        @media only screen and (max-width: 767px) {
            .mobile-button {
                visibility: visible !important;
            }
        }
    </style>
</head>

<body class="indextemplate index device-desktop slug-ypqbay-w1 page-index flow-watch-v1 step-1 region-us type-ss-continuity device_desktop_slug_ypqbay_w1_page_index_flow_watch_v1_step_1_region_us_type_ss_continuity vanilla-modal" index="" data-new-gr-c-s-check-loaded="14.1018.0" data-gr-ext-installed="" style="">
    <div class="loading-container">
        <div class="preloading-wrapper">
            <div class="loader2">
                <span class="block-1"></span>
                <span class="block-2"></span>
                <span class="block-3"></span>
                <span class="block-4"></span>
                <span class="block-5"></span>
                <span class="block-6"></span>
                <span class="block-7"></span>
                <span class="block-8"></span>
                <span class="block-9"></span>
                <span class="block-10"></span>
                <span class="block-11"></span>
                <span class="block-12"></span>
                <span class="block-13"></span>
                <span class="block-14"></span>
                <span class="block-15"></span>
                <span class="block-16"></span>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <header>
            <div class="container">
                <div class="header-inner">
                    <div class="logo">
                        <img src="<?=$root_fld?>images/logo.png" alt="Logo" class="no-lazy">
                    </div>
                    <div class="link-header">
                        <a href="tel:+18332084911" class="no-tracking"><i class="icon-phone"></i> (833) 208-4911</a>
                    </div>
                    <div class="navigation">
                        <a href="javascript:;" class="menu">
                            <span class="js-icon-hamburger icon-hamburger"></span>
                        </a>
                        <div class="nav clearfix">
                            <ul>
                                <li>
                                    <a href="contact-us.html" target="_blank">About Us</a>
                                </li>
                                <li>
                                    <a href="tel:+18332084911" class="no-tracking">Phone (833) 208-4911</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <section class="section-1">
                <div class="container">
                    <div class="editor top-header">
                        <div class="grid-layout ">
                            <div class="wrap-inner layt-50-50">
                                <div class="columns col-left">
                                    <div class="wrap-col">
                                        <p>
                                            <img src="<?=$root_fld?>images/logo.png" alt="logo">
                                        </p>
                                        <p>Watch and Health Monitoring All in One</p>
                                    </div>
                                </div>
                                <div class="columns col-right">
                                    <div class="wrap-col">
                                        <p><a href="tel:+18332084911">(833) 208-4911</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-2">
                <div class="container">
                    <div data-r="" class="wysiwyg-content product-banner top-banner ">
                        <h2>Check the Time and Monitor <br>Your Vitals in Style!</h2>
                        <h4>Stay in shape while staying connected on the go</h4>
                        <ul>
                            <li><img src="<?=$root_fld?>images/check.png" alt="tick-icon-01">Durable, modern design with multipurpose functionality </li>
                            <li><img src="<?=$root_fld?>images/check.png" alt="tick-icon-01">Instant notifications straight from your phone </li>
                            <li><img src="<?=$root_fld?>images/check.png" alt="tick-icon-01">Powerful, long-lasting battery</li>
                        </ul>
                        <p>Get an <span style="color: #FF0000;"><strong>Exclusive Fitness App</strong></span> with your order today!</p>
                        <p class="btn-order animate__animated animate__pulse animate__infinite"><a class="btn-primary" href="<?= $offerLink ?>" id="anchor_submit">Claim
                                <!--Rize--> Hype Smart Watch Now
                            </a>
                        </p>
                        <ol>
                            <li><img src="<?=$root_fld?>images/guarantee.png" alt=""></li>
                            <li>
                                <img class="sp-5-stars" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOAAAAAoAQMAAADdWGR7AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABJJREFUeNpjYBgFo2AUjIKBBQAEiAABQj3aLAAAAABJRU5ErkJggg=="> 100% Satisfaction Guarantee
                            </li>
                        </ol>
                    </div>
                </div>
            </section>
            <section class="section-3">
                <div class="container">
                    <div data-r="" class="wysiwyg-content line-divider ">
                        <p><strong>There is limited availability and this <span style="color: #ffd300;">Exclusive Offer</span> may be taken down at any moment!</strong></p>
                    </div>
                </div>
            </section>
            <section class="section-4">
                <div class="container">
                    <div class="guaranteed ">
                        <div class="w_outer">
                            <div class="w_inner">
                                <div class="w_item ">
                                    <div class="w_thumb">
                                        <img class="sp-guarantine" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAA6AQMAAADMV0iiAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFgw8AAAGWAAGpjhcAAAAAAElFTkSuQmCC">
                                    </div>
                                    <div class="w_content_wrap">
                                        <h4 class="w_title">High Quality</h4>
                                        <div class="w_desc">
                                            <p>The sleek design looks great <br>and functions even better <br>during your most intense <br>workouts.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w_item ">
                                    <div class="w_thumb">
                                        <img class="sp-return" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAA0AQMAAADPOpiJAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA1JREFUeNpjYBgF9AIAAWwAAQAt/KwAAAAASUVORK5CYII=">
                                    </div>
                                    <div class="w_content_wrap">
                                        <h4 class="w_title">No-Hassle Returns</h4>
                                        <div class="w_desc">
                                            <p>If you are not satisfied with <br>your new
                                                <!--Rize--> Hype Smart Watch, you <br>can return it within 14 days of <br>purchase for no charge.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w_item ">
                                    <div class="w_thumb">
                                        <img class="sp-easy" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAuAQMAAABtd7l0AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA1JREFUeNpjYBgFlAEAAUIAAT/cqQ0AAAAASUVORK5CYII=">
                                    </div>
                                    <div class="w_content_wrap">
                                        <h4 class="w_title">Fast &amp; Easy</h4>
                                        <div class="w_desc">
                                            <p>Get your watch delivered fast <br>right to your door. You’ll have <br>all the health stats you need <br>readily available on your wrist!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-5">
                <div class="container">
                    <div class="ct_image_wrap middle-banner">
                        <picture>
                            <source media="(max-width: 767px)" srcset="images/product-banner-mb.jpg" class="no-lazy">
                            <img src="<?=$root_fld?>images/product-banner.jpg" alt="" class="no-lazy">
                        </picture>
                    </div>
                </div>
            </section>
            <section class="section-6">
                <div class="container">
                    <div class="editor functional">
                        <div class="spacing">
                            <h2>Make the Most of Your Fitness Routines</h2>
                            <p>Starting a new fitness regimen can feel like a chore. Look forward to your workouts with the wearable tech that will monitor your progress and help you achieve the results you want. <br>
                                <!--Rize--> Hype Smart Watch features an IP67 rating which means it is waterproof for all kinds of situations. No matter how much you sweat, or how you choose to work out,
                                <!--Rize--> Hype Smart Watch goes where you go to support your fitness.
                            </p>
                        </div>
                        <div class="">
                            <h2>Intelligent Functions for a Health Conscious Lifestyle</h2>
                            <p>The advanced 4.1 Bluetooth technology gives you instant handsfree access to your music collection, text messaging, and more. The
                                <!--Rize--> Hype Smart Watch biometric sensors monitor everything from your heart rate and blood pressure to the quality of your sleep. Record your jogging distance, count your steps, and calculate the total amount of calories you’ve burned in seconds.
                            </p>
                        </div>
                        <div class="grid-layout spacing">
                            <div class="wrap-inner layt-50-50">
                                <div class="columns col-left">
                                    <div class="wrap-col">
                                        <ul>
                                            <li><strong>Ready to Go</strong> No batteries required. Simply plug in the
                                                <!--Rize--> Hype Smart Watch to charge using the included USB cable. <br>Enjoy up to 96 hours of normal use on a single charge.
                                            </li>
                                            <li><strong>Accessible&nbsp;</strong>No matter whether you prefer Android or Apple products,
                                                <!--Rize--> Hype Smart Watch syncs easily with all devices. The interface is streamlined and simple for anyone to use.
                                            </li>
                                            <li><strong>For Work and Play&nbsp;</strong>Business or casual,
                                                <!--Rize--> Hype Smart Watch is adaptable. Wear it for outings with friends or whenever you work. Fitness Watch is comfortable, durable, and designed for everyday use.&nbsp;
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="columns col-right">
                                    <div class="wrap-col">
                                        <p><img src="<?=$root_fld?>images/img1.jpg" alt="img1" style="display: block; margin-left: auto; margin-right: auto;"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-layout gift spacing">
                            <div class="wrap-inner layt-50-50">
                                <div class="columns col-left">
                                    <div class="wrap-col">
                                        <h2>The Perfect Gift for Anyone</h2>
                                        <h3>A Great Gift for Nieces, <br>Nephews, and Kids</h3>
                                        <p>Young people today rely on technology more so than any other generation. Fitness Watch is up to the latest standards for those who seek wireless convenience, intuitive apps, and sleek, sophisticated design.</p>
                                        <h3>Your Friends and Relatives</h3>
                                        <p>If you’re more of the “young at heart” type, you and your friends are likely looking for better ways to stay in shape.
                                            <!--Rize--> Hype Smart Watch delivers the tools you need with the fashion sense you crave.
                                        </p>
                                        <h3>Your Parents</h3>
                                        <p>With it’s bright, easy-to-read numbers and health monitoring capabilities, baby boomers, especially the fitness-minded ones, want products they can rely on for easy-to-understand information.</p>
                                    </div>
                                </div>
                                <div class="columns col-right">
                                    <div class="wrap-col">
                                        <p><img src="<?=$root_fld?>images/img2.jpg" alt="img2"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-layout design spacing">
                            <div class="wrap-inner layt-50-50">
                                <div class="columns col-left">
                                    <div class="wrap-col">
                                        <h2>Smart Design for All</h2>
                                        <p>
                                            <!--Rize--> Hype Smart Watch combines the benefits of a fitness band, <br>digital watch, and intelligent health monitor all into one.
                                        </p>
                                    </div>
                                </div>
                                <div class="columns col-right">
                                    <div class="wrap-col">
                                        <p><img class="sp-img3" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAVQAAAEcAQMAAACiV973AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAACNJREFUeNrtwTEBAAAAwqD1T20LL6AAAAAAAAAAAAAAAAC+BjDQAAFGUyL4AAAAAElFTkSuQmCC">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-7">
                <div class="container">
                    <div data-r="" class="wysiwyg-content get-tool ">
                        <h2><span>GET THE TOOL THAT <br>DOES IT ALL</span></h2>
                        <p class="btn-order animate__animated animate__pulse animate__infinite"><a href="<?= $offerLink ?>" id="anchor_submit">Claim
                                <!--Rize--> Hype Smart Watch Now
                            </a></p>
                    </div>
                </div>
            </section>
            <section class="section-8">
                <div class="container">
                    <div data-r="" class="wysiwyg-content best-reviews ">
                        <h2><span style="color: #cd0723;">WHAT PEOPLE <br>ARE SAYING</span></h2>
                        <h3>Super Cool</h3>
                        <p>“I was looking for a watch that I didn’t have to worry about, but one that did everything I needed it to do!
                            <!--Rize--> Hype Smart Watch was perfect for me. I could wear it to the office and not have to worry about taking it off when I go to the gym. Perfect.”
                        </p>
                        <p><strong>Amber K. – San Diego, CA </strong></p>
                        <p class="btn-order animate__animated animate__pulse animate__infinite"><a href="<?= $offerLink ?>" id="anchor_submit">Claim
                                <!--Rize--> Hype Smart Watch Now
                            </a></p>
                    </div>
                </div>
            </section>
            <section class="section-9">
                <div class="container">
                    <div data-r="" class="wysiwyg-content rating ">
                        <div class="score">
                            <h3>4.6</h3>
                            <p>
                                <img class="sp-45-stars" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAATAQMAAABcCzpuAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA1JREFUeNpjYBgFEAAAAQoAAfZQaDEAAAAASUVORK5CYII=">
                            </p>
                            <p>Average Rating</p>
                        </div>
                        <div class="progress-bar">
                            <p><b class="wd-89"></b><span><img class="sp-5-stars" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOAAAAAoAQMAAADdWGR7AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABJJREFUeNpjYBgFo2AUjIKBBQAEiAABQj3aLAAAAABJRU5ErkJggg==">
                                    <strong>89%</strong></span>
                            </p>
                            <p><b></b><span><img src="<?=$root_fld?>images/4-stars.png" alt="star" width="" height="">0%</span></p>
                            <p><b class="wd-11"></b><span><img src="<?=$root_fld?>images/3-stars.png" alt="star" width="" height=""><strong>11%</strong></span></p>
                            <p><b></b><span><img src="<?=$root_fld?>images/2-stars.png" alt="star" width="" height="">0%</span></p>
                            <p><b></b><span><img src="<?=$root_fld?>images/1-star.png" alt="star" width="" height="">0%</span></p>
                        </div>
                    </div>
                    <div class="list-comments ">
                        <div class="w_outer">
                            <div class="w_inner">
                                <div class="w_item ">
                                    <h3 class="w_toptext"><strong>Carl J.</strong> – Baltimore, MD</h3>
                                    <div class="w_thumb">
                                        <img src="<?=$root_fld?>images/star5.png" alt="" class="img-view">
                                    </div>
                                    <div class="w_content_wrap">
                                        <div class="w_desc">
                                            <p>My doctor told me I needed to exercise more. My daughter got me the Fitness Watch. Not only was it easy to use, but I enjoyed using it. It made getting into shape fun. I’m recommending it to all my buddies!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w_item ">
                                    <h3 class="w_toptext"><strong>Vanessa A.</strong> – Amarillo, TX</h3>
                                    <div class="w_thumb">
                                        <img src="<?=$root_fld?>images/star5.png" alt="" class="img-view">
                                    </div>
                                    <div class="w_content_wrap">
                                        <div class="w_desc">
                                            <p>It’s one thing to exercise regularly, it’s another to keep accurate tabs on your progress.
                                                <!--Rize--> Hype Smart Watch helped me improve my conditioning. I lost the weight I wanted to in no time. Dependable measurements for fast results.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-10">
                <div class="container">
                    <div data-r="" class="wysiwyg-content special-offer ">
                        <h2>Special Offer on Now!</h2>
                        <h3><span style="color: #cd0723;">Order Today for a Limited Time Discount</span></h3>
                        <p>Kickstart your new, improved lifestyle with a modern timepiece built for physical activity. Get the fitness watch that adapts to your daily needs. Quantities are limited, so be sure to order yours right away!</p>
                        <p class="btn-order animate__animated animate__pulse animate__infinite"><a href="<?= $offerLink ?>" id="anchor_submit">Claim My
                                <!--Rize--> Hype Smart Watch Now
                            </a></p>
                    </div>
                </div>
            </section>
            <section class="section-11">
                <div class="container">
                    <div data-r="" class="wysiwyg-content line-divider ">
                        <p><strong>There is limited availability and this <span style="color: #ffd300;">Exclusive Offer</span> may be taken down at any moment!</strong></p>
                    </div>
                </div>
            </section>
            <section class="section-12">
                <div class="container">
                    <div data-r="" class="wysiwyg-content product-banner bottom-banner ">
                        <h2>Check the Time and Monitor <br>Your Vitals in Style!</h2>
                        <h4>Stay in shape while staying connected on the go</h4>
                        <ul>
                            <li><img src="<?=$root_fld?>images/check.png" alt="tick-icon-01">Durable, modern design with multipurpose functionality </li>
                            <li><img src="<?=$root_fld?>images/check.png" alt="tick-icon-01">Instant notifications straight from your phone </li>
                            <li><img src="<?=$root_fld?>images/check.png" alt="tick-icon-01">Powerful, long-lasting battery</li>
                        </ul>
                        <p>Get an <span style="color: #FF0000;"><strong>Exclusive Ebook</strong></span> with your order when you purchase today!</p>
                        <p class="btn-order animate__animated animate__pulse animate__infinite"><a class="btn-primary" href="<?= $offerLink ?>" id="anchor_submit">Claim My Exclusive
                                <!--Rize--> Hype Smart Watch Discount Now
                            </a></p>
                        <ol>
                            <li><img src="<?=$root_fld?>images/guarantee.png" alt=""></li>
                            <li>
                                <img class="sp-5-stars" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOAAAAAoAQMAAADdWGR7AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABJJREFUeNpjYBgFo2AUjIKBBQAEiAABQj3aLAAAAABJRU5ErkJggg=="> 100% Satisfaction Guarantee
                            </li>
                        </ol>
                    </div>
                </div>
            </section>
            <section class="section-13" style="color: white; background-color: #2a292a;">
                <div style="position: absolute; overflow: hidden; width: 1px; height: 1px;">
                </div>
                <style type="text/css">
                    footer {
                        font-family: 'Open Sans', 'Arial', san-serif;
                        color: #8a8a8a !important;
                        font-size: 12px;
                    }

                    footer p a {
                        color: #8a8a8a;
                        font-size: 12px;
                    }

                    footer p a:hover {
                        text-decoration: underline;
                    }

                    footer p {
                        text-align: center;
                        clear: both;
                        font-size: 12px;
                        color: #8a8a8a;
                    }

                    .footerlinks {
                        padding: 20px 0;
                    }

                    .footerlinks a {
                        font-size: 12px;
                    }

                    footer {
                        padding: 20px 10px !important;
                        max-width: 900px;
                        margin: 20px auto;
                        clear: both;
                        display: block;
                        box-sizing: border-box;
                    }

                    .error-message {
                        color: #be0000;
                        max-width: 600px;
                    }

                    p.retake-link {
                        text-align: right !important;
                    }

                    div.modal-inner.soft-modal-inner p.retake-link a {
                        cursor: pointer !important;
                        text-decoration: underline !important;
                        font-size: 12px !important;
                        float: none !important;
                    }

                    .submitting-text {
                        color: black;
                        font-family: sans-serif;
                        text-transform: uppercase;
                        font-size: 18px;
                        display: block;
                        max-width: 400px;
                    }

                    .dots {
                        color: black;
                        font-size: 28px;
                    }

                    .shipping-fields {
                        margin-top: 10px !important;
                    }

                    .shipping-fields label {
                        width: 150px;
                        text-align: right;
                        padding-right: 10px;
                        display: inline-block;
                        vertical-align: top;
                    }

                    .shipping-fields .shipping-field {
                        width: 300px;
                        display: inline-block;
                        vertical-align: top;
                    }

                    .shipping-fields input,
                    .shipping-fields select {
                        width: 100%;
                        box-sizing: border-box;
                        margin: 0;
                        height: auto !important;
                    }

                    .shipping-fields input {
                        padding: 6px 5px !important;
                        text-indent: 0 !important;
                    }

                    .shipping-fields select {
                        padding: 5px 5px !important;
                    }

                    .shipping-fields button {
                        border: 0;
                        width: 100%;
                        display: block;
                        cursor: pointer;
                        position: relative;
                        outline: 0;
                        padding: 20px 15px;
                        background: #2288D0;
                        color: #fff;
                        font-size: 20px;
                    }

                    body.device-mobile .update-shipping-form .shipping-fields label {
                        text-align: left;
                    }

                    #form-submit.disabled {
                        opacity: 0.2;
                    }

                    .optout-link {
                        display: none;
                    }

                    footer p,
                    footer a {
                        color: black !important;
                    }
                </style>
                <footer>
                    <div class="footer">
                        <p class="disclaimer">The information that you provide will be handled by giveawayblessing.com, in accordance with the General Data Protection Regulation 2016/679 and other applicable privacy legislation for the accurate processing of personal data. By submitting a completed questionnaire, you agree that giveawayblessing.com may use your email address to send information and promotions concerning third party products and services and also supply your contact information and questionnaire responses to companies so that they may use them to contact you by mail, phone or email to send offers and promote services based on your preferences. By responding to a question you expressly consent for that named organization or preferred supplier to contact you on the details provided until you opt out from the named organization or preferred supplier. giveawayblessing.com is not affiliated with, sponsored by or endorsed by any of the listed products or retailers. Trademarks, service marks, logos (including, without limitation, the individual names of products and retailers) are the property of their respective owners. giveawayblessing.com receives marketing fees from advertisers including financial institutions. You should always read their terms and conditions and/or product disclosure statements.</p>
                        <p class="copyright"> © 2022
                            <!--Rize--> Hype Smart Watch — All rights reserved.
                        </p>
                        <p class="footerlinks">
                            <a href="<?= $offerLink ?>" class="modalClick">Terms &amp; Conditions</a> | <a href="<?= $offerLink ?>" class="modalClick">Privacy Policy</a> | <a href="<?= $offerLink ?>" class="modalClick">Contact Us</a>
                        </p>
                    </div>
                </footer>
                <!--<script src="/app/desktop/js/jquery.min.js"></script>-->
                <div class="modal softModal">
                    <div class="modal-inner soft-modal-inner">
                        <a data-modal-close="">×</a>
                        <div class="modal-content soft-modal-content"></div>
                    </div>
                </div>
                <div id="vmodal" style="display:none"></div>
                <div id="vmodal-submitting" style="display:none">
                    <div class="vmodal-custom-content">
                        <div>
                            <div style="margin: 20px 0; text-align: center; width: 100%;"><span style="margin: auto;" class="submitting-text">Submitting Your Information</span><span class="dots">....</span></div>
                            <div><img src="<?=$root_fld?>images/secure.png" style="width: 100%;"></div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <p id="loading-indicator" style="display:none;">Processing...</p>
    </div>
    <script type="text/javascript">
        let trackerUrl = "<?= $clickPhpUrl ?>";
    </script>
    <script type="text/javascript" src="/umg/1.1.4/ultramagic.js"></script>
</body>

</html>
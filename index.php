<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Masuma</title>
        <meta charset="UTF-8">

        <link rel="stylesheet" type="text/css" href="css/slick.css">
        <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
        <link rel="stylesheet" href="css/iftaCss2.css">
        <link rel="stylesheet" href="css/iftaSkillBar.css">
        <!--link rel="shortcut icon" type="image/png" href="favicon.png"/-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <style>
            @font-face { font-family: Plicata; src: url('GOTHIC.TTF'); } 
            h1 {
                font-family: Plicata
            }
        </style>
    </head>
    <body class="noselect">
        <div class="topbox deepred"></div>
        <div id="bannerDiv" class="banner">
            <img style="height: 100%; width:100%; opacity: 0.5; position: absolute;" src="img/bg1.jpg">
            <img id="title" src="img/title.png">
            <img  onclick="goToByScroll('skillDiv')" id="title" style="top: 50%; cursor: pointer;" src="img/downArrow.png">
        </div>
        <div class="topbox deepred"></div>

        <div id="skillDiv" class="centering title-and-name">
            <h1 class="grey">SOFTWARE SKILLS</h1>
        </div>
        <div class="row">
            <div class="skill" >
                <img src="img/psbase.png" class="skillZoom" alt="zoom">
                <img src="img/ps.png" class="skillBase" alt="base">
            </div>

            <div class="skill" >
                <img src="img/aiZoom.png" class="skillZoom" alt="zoom">
                <img src="img/aiNormal.png" class="skillBase" alt="base">
            </div>
            <div class="skill" >
                <img src="img/fl.png" class="skillZoom" alt="zoom">
                <img src="img/flbase.png" class="skillBase" alt="base">
            </div>
            <div class="skill" >
                <img src="img/idZoom.png" class="skillZoom" alt="zoom">
                <img src="img/idNormal.png" class="skillBase" alt="base">
            </div>
            <div class="skill" >
                <img src="img/dwZoom.png" class="skillZoom" alt="zoom">
                <img src="img/dwNormal.png" class="skillBase" alt="base">
            </div>
        </div>
        <div class="title-and-name">
            <h1 class="grey">EXPERTISE</h1>
        </div>
        <div style="padding-left: 13%; padding-right: 13%;">
            <div class="skillbar clearfix " data-percent="100%">
                <div class="skillbar-title" style="background: #a4e9b6;"><span>Web Template</span></div>
                <div class="skillbar-bar" style="background: #a4e9b6;"></div>
                
            </div>
            <div class="skillbar clearfix " data-percent="100%">
                <div class="skillbar-title" style="background: #fbca75;"><span>Banner & Banner Ads</span></div>
                <div class="skillbar-bar" style="background: #fbca75;"></div>
                
            </div>
            <div class="skillbar clearfix " data-percent="80%">
                <div class="skillbar-title" style="background: #fc9696;"><span>Logo & Icon</span></div>
                <div class="skillbar-bar" style="background: #fc9696;"></div>
                
            </div>
            <div class="skillbar clearfix " data-percent="100%">
                <div class="skillbar-title" style="background: #6bb1f9;"><span>Image Edit</span></div>
                <div class="skillbar-bar" style="background: #6bb1f9;"></div>
                
            </div>
            <div class="skillbar clearfix " data-percent="80%">
                <div class="skillbar-title" style="background: #e8afec;"><span>Brochure,flyer,poster,card</span></div>
                <div class="skillbar-bar" style="background: #e8afec;"></div>
                
            </div>
            <div class="skillbar clearfix " data-percent="100%">
                <div class="skillbar-title" style="background: #a2e4cf;"><span>Book cover, e-book design</span></div>
                <div class="skillbar-bar" style="background: #a2e4cf;"></div>
                
            </div>
            <div class="skillbar clearfix " data-percent="100%">
                <div class="skillbar-title" style="background: #cde17c;"><span>Magazine</span></div>
                <div class="skillbar-bar" style="background: #cde17c;"></div>
                
            </div>
            <div class="skillbar clearfix " data-percent="70%">
                <div class="skillbar-title" style="background: #d0bdfc;"><span>2D animation</span></div>
                <div class="skillbar-bar" style="background: #d0bdfc;"></div>
                
            </div>
        </div>
        <div id="portfolioDiv" class="title-and-name">
            <h1 class="grey">PORTFOLIO</h1>
        </div>
        <div class="container">
            <table class="portfolioTable">
                <tr>
                    <td>
                        <a class="logoLauncer" href="">
                            <img src="img/placeholder/logo.jpg" alt="" />
                        </a>
                        <div style="display: none;">
                            <a class="logo" href="img/logo/Misión-de-los-Lagos_1.jpg"></a>
                            <a class="logo" href="img/logo/360-hca_logo2_final-touch_3.jpg"></a>
                            <a class="logo" href="img/logo/How-to-look-on-webpage.jpg"></a>
                            <a class="logo" href="img/logo/MCO_logo.jpg"></a>
                            <a class="logo" href="img/logo/beauty-logo.jpg"></a>
                            <a class="logo" href="img/logo/Elite-Pain-Medicine_logo.png"></a>
                            <a class="logo" href="img/logo/epic-TMS_logo.jpg"></a>
                            <a class="logo" href="img/logo/goldstein-law-ltd_logo1.jpg"></a>
                            <a class="logo" href="img/logo/js-healthcare-logo_final.jpg"></a>
                            <a class="logo" href="img/logo/logo.jpg"></a>
                        </div>
                    </td>
                    <td>
                        <a class="bannerLauncer" href="">
                            <img src="img/placeholder/banner.jpg" alt="" />
                        </a>
                        <div style="display: none;">
                            <a class="banners" href="img/Web banner/mainbanner.jpg"></a>
                            
                            <a class="banners" href="img/Web banner/banner.jpg"></a>
                            <a class="banners" href="img/Web banner/banner_3.jpg"></a>
                            <a class="banners" href="img/Web banner/banner_2.jpg"></a>
                            <a class="banners" href="img/Web banner/banner_22.jpg"></a>
                            <a class="banners" href="img/Web banner/banner_4.jpg"></a>
                            <a class="banners" href="img/Web banner/banner_17.jpg"></a>
                            <a class="banners" href="img/Web banner/bpo.jpg"></a>
                            <a class="banners" href="img/Web banner/content-marketing.jpg"></a>
                            <a class="banners" href="img/Web banner/game-development.jpg"></a>
                            <a class="banners" href="img/Web banner/grameen_banner.jpg"></a>
                            <a class="banners" href="img/Web banner/graphics-and-multimedia.jpg"></a>
                            <a class="banners" href="img/Web banner/mobile-app-development.jpg"></a>
                            <a class="banners" href="img/Web banner/quality-assurance.jpg"></a>
                            <a class="banners" href="img/Web banner/seo.jpg"></a>
                            <a class="banners" href="img/Web banner/slider_2.jpg"></a>
                            <a class="banners" href="img/Web banner/slider_3.jpg"></a>
                            <a class="banners" href="img/Web banner/SMM.jpg"></a>
                            <a class="banners" href="img/Web banner/Email-Marketing.jpg"></a>
                            <a class="banners" href="img/Web banner/Robi_banner.jpg"></a>
                            <a class="banners" href="img/Web banner/Slider_banner2.jpg"></a>
                            <a class="banners" href="img/Web banner/Slider_banner3.jpg"></a>

                        </div>
                    </td>
                    <td>
                        <a class="businessCardLauncher" href="">
                            <img src="img/placeholder/businessCard.jpg" alt="" />
                        </a>
                        <div style="display: none;">
                            <a class="bussinessCard" href="img/card/BC_1.jpg"></a>
                            <a class="bussinessCard" href="img/card/BC_2.jpg"></a>
                            <a class="bussinessCard" href="img/card/BC_3.jpg"></a>
                            <a class="bussinessCard" href="img/card/Visiting-Card.jpg"></a>
                        </div>
                    </td>
                    <td>
                        <a class="calenderLauncher" href="">
                            <img src="img/placeholder/calender.jpg" alt="" />
                        </a>
                        <div style="display: none;">
                            <a class="calender" href="img/calender/zxy-calender.png"></a>
                            <a class="calender" href="img/calender/zxy-calender_1.png"></a>
                        </div>
                    </td>
                    <td>
                        <a class="mobileAdLauncher" href="">
                            <img src="img/placeholder/mobileAdx.jpg" alt="" />
                        </a>
                        <div style="display: none;">
                            <a class="mobileAd" href="img/mobileAdx/1.jpg"></a>
                            <a class="mobileAd" href="img/mobileAdx/2.jpg"></a>
                            <a class="mobileAd" href="img/mobileAdx/3.jpg"></a>
                            <a class="mobileAd" href="img/mobileAdx/4.jpg"></a>
                            <a class="mobileAd" href="img/mobileAdx/5.jpg"></a>
                            <a class="mobileAd" href="img/mobileAdx/6.jpg"></a>
                            <a class="mobileAd" href="img/mobileAdx/7.jpg"></a>
                            <a class="mobileAd" href="img/mobileAdx/8.jpg"></a>
                            <a class="mobileAd" href="img/mobileAdx/9.jpg"></a>
                        </div>
                    </td>
                    <td>
                        <a class="webTemplateLauncher" href="">
                            <img src="img/placeholder/webTemptale.jpg" alt="" />
                        </a>
                        <div style="display: none;">
                            <a class="webTemplate" href="img/webTemplate/Engineering-company_1.jpg"></a>
                            <a class="webTemplate" href="img/webTemplate/GM-Software_Homepage.jpg"></a>
                            <a class="webTemplate" href="img/webTemplate/Home page.jpg"></a>
                            <a class="webTemplate" href="img/webTemplate/Interior-design.jpg"></a>
                            <a class="webTemplate" href="img/webTemplate/MEN'S-CLUB.jpg"></a>
                            <a class="webTemplate" href="img/webTemplate/fast-loan4u.jpg"></a>
                            <a class="webTemplate" href="img/webTemplate/ivyguruacademy_home-page.jpg"></a>
                            <a class="webTemplate" href="img/webTemplate/layout1.jpg"></a>
                            <a class="webTemplate" href="img/webTemplate/layout2.jpg"></a>
                            <a class="webTemplate" href="img/webTemplate/mobile_site.jpg"></a>
                            <a class="webTemplate" href="img/webTemplate/okcash.co.uk.jpg"></a>
                            <a class="webTemplate" href="img/webTemplate/real-estate-templete.jpg"></a>
                            <a class="webTemplate" href="img/webTemplate/sample_template5.jpg"></a>
                            <a class="webTemplate" href="img/webTemplate/spark_web-design.jpg"></a>
                            <a class="webTemplate" href="img/webTemplate/takeoutcash.co.uk.jpg"></a>
                            <a class="webTemplate" href="img/webTemplate/template.jpg"></a>
                            <a class="webTemplate" href="img/webTemplate/template_02-.jpg"></a>
                            <a class="webTemplate" href="img/webTemplate/template_37.jpg"></a>
                            <a class="webTemplate" href="img/webTemplate/template_frontpage.jpg"></a>
                            <a class="webTemplate" href="img/webTemplate/web-Solution.jpg"></a>
                        </div>
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td>
                        <a class="brochureLauncher" href="">
                            <img src="img/placeholder/brochure.jpg" alt="" />
                        </a>
                        <div style="display: none;">
                            <a class="brochure" href="img/brochure/Brochure Front.jpg"></a>
                            <a class="brochure" href="img/brochure/Business_flyer.jpg"></a>
                            <a class="brochure" href="img/brochure/Education-for-all.jpg"></a>
                            <a class="brochure" href="img/brochure/Marketing Brochure.jpg"></a>
                            <a class="brochure" href="img/brochure/Menu.jpg"></a>
                            <a class="brochure" href="img/brochure/X-banner.jpg"></a>
                            <a class="brochure" href="img/brochure/brochure.jpg"></a>
                            <a class="brochure" href="img/brochure/business_brochure.jpg"></a>
                            <a class="brochure" href="img/brochure/flayer_business.jpg"></a>
                            <a class="brochure" href="img/brochure/flyer1.jpg"></a>

                        </div>
                    </td>
                    <td>
                        <a class="coverLauncher" href="">
                            <img src="img/placeholder/cover.jpg" alt="" />
                        </a>
                        <div style="display: none;">
                            <a class="cover" href="img/Cover/Bangladesh-economy-cover-2015-16.jpg"></a>
                            <a class="cover" href="img/Cover/Bangladesh-economy-cover2-2015-16.jpg"></a>
                            <a class="cover" href="img/Cover/Chamber-News_August_Cover3.jpg"></a>
                            <a class="cover" href="img/Cover/Chamber-News_Cover1-dec.jpg"></a>
                            <a class="cover" href="img/Cover/Chamber-News_Cover2-nov.jpg"></a> 
                            <a class="cover" href="img/Cover/Chamber-News_Cover_final-dec.jpg"></a>
                            <a class="cover" href="img/Cover/Cover0_QR-Nov-Dec-16.jpg"></a>
                            <a class="cover" href="img/Cover/Cover_QR-April-june16.jpg"></a>
                            <a class="cover" href="img/Cover/July-front-page1.jpg"></a>
                            <a class="cover" href="img/Cover/cover1.jpg"></a>
                            <a class="cover" href="img/Cover/cover4.jpg"></a>
                            <a class="cover" href="img/Cover/front-page2.jpg"></a>
                            <a class="cover" href="img/Cover/tax-book-cover1.jpg"></a>
                        </div>
                    </td>
                    <td>
                        <a class="bannerWithAdsLauncher" href="">
                            <img src="img/placeholder/bannerWithAds.jpg" alt="" />
                        </a>
                        <div style="display: none;">
                            <a class="bannerWithAds" href="img/bannerWithAds/Banner2.jpg"></a>
                            <a class="bannerWithAds" href="img/bannerWithAds/Banner3.jpg"></a>
                            <a class="bannerWithAds" href="img/bannerWithAds/Banner5.jpg"></a>
                            <a class="bannerWithAds" href="img/bannerWithAds/baseball-tournament.jpg"></a>
                            <a class="bannerWithAds" href="img/bannerWithAds/christmas.jpg"></a>
                            <a class="bannerWithAds" href="img/bannerWithAds/dance.jpg"></a>
                            <a class="bannerWithAds" href="img/bannerWithAds/decade-of-fame.jpg"></a>
                            <a class="bannerWithAds" href="img/bannerWithAds/racing.jpg"></a>
                            <a class="bannerWithAds" href="img/bannerWithAds/winter.jpg"></a>
                            <a class="bannerWithAds" href="img/bannerWithAds/woman's-day.jpg"></a>

                        </div>
                    </td>
                    <td>
                        <a class="designEffectLauncher" href="">
                            <img src="img/placeholder/designEffent.jpg" alt="" />
                        </a>
                        <div style="display: none;">
                            <a class="designEffect" href="img/designEffect/Banner4.jpg"></a>                        
                            <a class="designEffect" href="img/designEffect/Abstract-photo.jpg"></a>
                            <a class="designEffect" href="img/designEffect/Anti smoking copy.jpg"></a>
                            <a class="designEffect" href="img/designEffect/Beauty-grace.jpg"></a>
                            <a class="designEffect" href="img/designEffect/Fantasy-Art.jpg"></a>
                            <a class="designEffect" href="img/designEffect/Fire effect copy.jpg"></a>
                            <a class="designEffect" href="img/designEffect/Heaven.jpg"></a>
                            <a class="designEffect" href="img/designEffect/Reflection.jpg"></a>
                            <a class="designEffect" href="img/designEffect/Save money.jpg"></a>
                            <a class="designEffect" href="img/designEffect/Save the tree.jpg"></a>
                            <a class="designEffect" href="img/designEffect/guitar.jpg"></a>
                            <a class="designEffect" href="img/designEffect/image-composing.jpg"></a>
                            <a class="designEffect" href="img/designEffect/liquefy effects copy.jpg"></a>
                            <a class="designEffect" href="img/designEffect/mobile.jpg"></a>
                            <a class="designEffect" href="img/designEffect/mothers-day.jpg"></a>
                            <a class="designEffect" href="img/designEffect/water-drops.jpg"></a>
                            <a class="designEffect" href="img/designEffect/wet copy.jpg"></a>
                        </div>
                    </td>
                    <td>
                        <a class="printBannerLauncher" href="">
                            <img src="img/placeholder/printBanner.jpg" alt="" />
                        </a>
                        <div style="display: none;">
                            <a class="printBanner" href="img/printBanner/Ninth-Economic-banner.jpg"></a>
                            <a class="printBanner" href="img/printBanner/TRAINING-PROGRAM_banner.jpg"></a>
                            <a class="printBanner" href="img/printBanner/TRAINING-PROGRAM_banner2.jpg"></a>
                            <a class="printBanner" href="img/printBanner/TRAINING-PROGRAM_banner_incresing-productivity.jpg"></a>
                            <a class="printBanner" href="img/printBanner/banner_2nd-oct.jpg"></a>
                            <a class="printBanner" href="img/printBanner/banner_3rd-quarterly-luncheon-meeting.jpg"></a>
                            <a class="printBanner" href="img/printBanner/banner_annual-meeting.jpg"></a>
                            <a class="printBanner" href="img/printBanner/banner_green-industry.jpg"></a>
                        </div>
                    </td>
                    <td>
                        <a class="smBannerLauncher" href="">
                            <img src="img/placeholder/smBanner.jpg" alt="" />
                        </a>
                        <div style="display: none;">
                            <a class="smBanner" href="img/smBanner/youtube_banner_sugarman1.png"></a>
                            <a class="smBanner" href="img/smBanner/Banner_wordpress.jpg"></a>
                            <a class="smBanner" href="img/smBanner/facebook banner.jpg"></a>
                            <a class="smBanner" href="img/smBanner/facebook_banner.jpg"></a>
                            <a class="smBanner" href="img/smBanner/fb_cover.png"></a>
                            <a class="smBanner" href="img/smBanner/google plus.jpg"></a>
                            <a class="smBanner" href="img/smBanner/twitter.jpg"></a>
                            <a class="smBanner" href="img/smBanner/twitter_banner_current size.jpg"></a>
                            <a class="smBanner" href="img/smBanner/youtube_banner.jpg"></a>

                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a class="retouchLauncher" href="">
                            <img src="img/placeholder/dtp.jpg" alt="" />
                        </a>
                        <div style="display: none;">
                            <a class="retouch" href="img/retouch/Reflection.jpg"></a>
                            <a class="retouch" href="img/retouch/Shadow_making.jpg"></a>
                            <a class="retouch" href="img/retouch/backgroud_transparent.png"></a>
                            <a class="retouch" href="img/retouch/color_change_object.jpg"></a>
                            <a class="retouch" href="img/retouch/jewellary retouch (2).jpg"></a>
                            <a class="retouch" href="img/retouch/jewellary retouch.jpg"></a>
                            <a class="retouch" href="img/retouch/jewellary retouch_3.jpg"></a>
                            <a class="retouch" href="img/retouch/manipulation.jpg"></a>
                            <a class="retouch" href="img/retouch/retouch-color correction.jpg"></a>
                            <a class="retouch" href="img/retouch/retouch.jpg"></a>
                            <a class="retouch" href="img/retouch/sample.jpg"></a>
                            <a class="retouch" href="img/retouch/shadow.jpg"></a>
                        </div>
                    </td>
                    <td>
                        <a class="fbAdsLauncher" href="">
                            <img src="img/placeholder/fbads.jpg" alt="" />
                        </a>
                        <div style="display: none;">
                            <a class="fbAds" href="img/fbAd/fb_ad.png"></a>
                            <a class="fbAds" href="img/fbAd/fb_ads_entertainment.jpg"></a>
                            <a class="fbAds" href="img/fbAd/fb_ads_lifestyle.jpg"></a>
                            <a class="fbAds" href="img/fbAd/fb_ads_sports-news.jpg"></a>
                        </div>
                    </td>
                    <td>
                        <a class="adsLauncher" href="">
                            <img src="img/placeholder/ads.jpg" alt="" />
                        </a>
                        <div style="display: none;">
                            <a class="ads" href="img/adx/3.jpg"></a>
                            <a class="ads" href="img/adx/4.jpg"></a>
                            <a class="ads" href="img/adx/5.jpg"></a>
                            <a class="ads" href="img/adx/a.jpg"></a>
                            <a class="ads" href="img/adx/b.jpg"></a>
                        </div>
                    </td>
                    <td>
                        <a class="iconLauncher" href="">
                            <img src="img/placeholder/icon.jpg" alt="" />
                        </a>
                        <div style="display: none;">
                            <a class="icon" href="img/icon/500x500_sticker1.jpg"></a>
                            <a class="icon" href="img/icon/AMAR-STICKER-APP_1.png"></a>
                            <a class="icon" href="img/icon/Bubble-shooter_icon.png"></a>
                            <a class="icon" href="img/icon/sticker_dost-koi.jpg"></a>
                            <a class="icon" href="img/icon/sticker_modified.jpg"></a>
                        </div>
                    </td>
                    <td>
                        <a class="invCardLauncher" href="">
                            <img src="img/placeholder/invCard.jpg" alt="" />
                        </a>
                        <div style="display: none;">
                            <a class="invCard" href="img/invitationCard/11th-dec_card_final.jpg"></a>
                            <a class="invCard" href="img/invitationCard/18th_both.jpg"></a>
                            <a class="invCard" href="img/invitationCard/8th-august_lunch-invitation_card.jpg"></a>
                            <a class="invCard" href="img/invitationCard/Invitation-card-for-green-industry.jpg"></a>
                            <a class="invCard" href="img/invitationCard/Invitation-card-for-memorial-meeting.jpg"></a>
                            <a class="invCard" href="img/invitationCard/Invitation-card.jpg"></a>
                            <a class="invCard" href="img/invitationCard/Invitation-card_1.jpg"></a>
                            <a class="invCard" href="img/invitationCard/Invitation-card_1_back.jpg"></a>
                            <a class="invCard" href="img/invitationCard/Invitation-card_1st-oct.jpg"></a>
                            <a class="invCard" href="img/invitationCard/Invitation-card_for-dinner1.jpg"></a>
                            <a class="invCard" href="img/invitationCard/Invitation-card_for-luncheon1.jpg"></a>
                        </div>
                    </td>
                    <td>
                        <a class="textEffectLauncher" href="">
                            <img src="img/placeholder/textEffect.jpg" alt="" />
                        </a>
                        <div style="display: none;">
                            <a class="textEffect" href="img/textEffect/Banner1.jpg"></a>
                            <a class="textEffect" href="img/textEffect/Flowery-text.jpg"></a>
                            <a class="textEffect" href="img/textEffect/furry.jpg"></a>
                            <a class="textEffect" href="img/textEffect/metalic-effect.jpg"></a>
                            <a class="textEffect" href="img/textEffect/neon-light.jpg"></a>
                            <a class="textEffect" href="img/textEffect/nike.jpg"></a>
                            <a class="textEffect" href="img/textEffect/stone-effect.jpg"></a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
         <div style="padding-left: 5%; padding-right: 5%; padding-top: 2%;">
             <hr style="color: #DDD;">
             <!--div style="background: url('img/footer_divider.jpg') repeat-x; height: 2px; "></div-->
        </div>
        <div class="footer">
            <div>
                <a href="mailto:mashahorin@gmail.com" target="_top">
                    <img src="img/emailIcon.png">
                </a>
            </div>
             <div>
                <a href="https://bd.linkedin.com/in/masuma-shahorin-13609938" target="_blank">
                    <img src="img/linkedinCircle.png">
                </a>
            </div>
            <div>
                <a href="Masuma Shahorin.pdf" target="_blank">
                    <img src="img/cv.png">
                </a>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/ifta.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
        <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        <script type="text/javascript">
                $.fancybox.open($("[rel='banner']").get());
                $(document).ready(function () {
                    $(".fancybox").fancybox({
                        autoPlay: true,
                        playSpeed: 1000
                    });

                });
        </script>
    </body>
</html>

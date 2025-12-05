<?php
  include_once('../../php_header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Service - DroneLogbook - Simplifying Drone Operations</title>

    <meta name="description" content="Read the DroneLogbook Terms of Services regarding collection, use, and disclosure of your personal information.">
    <meta name="author" content="DroneLogbook">
    <link rel="shortcut icon" href="favicon.ico">

    <meta property="og:title" content="DroneLogbook Terms of Service">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.dronelogbook.ag">
    <meta property="og:image" content="https://image.ibb.co/cVGLSo/og_img.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:description" content="Read the DroneLogbook Terms of Services regarding collection, use, and disclosure of your personal information.">
    <meta property="og:site_name" content="DroneLogbook">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@dronelogbook">
    <meta name="twitter:title" content="DroneLogbook Terms of Service">
    <meta name="twitter:description" content="Read the DroneLogbook Terms of Services regarding collection, use, and disclosure of your personal information.">
    <meta name="twitter:image" content="https://image.ibb.co/cVGLSo/og_img.png">
    <meta name="twitter:url" content="https://www.dronelogbook.ag">
    <meta name="twitter:widgets:csp" content="on">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navigation.min.css">
    <link rel="stylesheet" href="css/general-style.min.css?v=20210105">
    <link rel="stylesheet" href="css/robly.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/themes/default/default.css">

    <style>
        h3 {
            font-size: 32px;
            font-weight: 500;
            width: 100%;
            margin-bottom: 10px;
        }

        .faq a {
            color: #74C338;
        }

        .faq .tos {
            font-size: 18px;
            font-weight: 300;
            max-width: 680px;
        }

        .appstore-wrapper {
            justify-content: center;
            flex-wrap: wrap;
            align-items: flex-start;
        }

        .appstore-text {
            padding-left: 40px;
            padding-right: 10px;
            padding-top: 40px;
        }

        .appstore-links {
            display: flex;
            padding-left: 20px;
            padding-right: 20px;
            align-items: flex-end;
        }

        .appstore-links-center {
            margin-top: 40px;
            margin-bottom: 40px;
        }
    </style>
</head>

<body>

    <header>
        <div class="container-fluid">
            <div class="row">
                <a href="index.html" class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                    <img class="logo" src="img-min/logo/Logo-whiteText.png" alt="DroneLogbook Logo">
                </a>
                <nav id="nav-links">
                    <a href="solutions.html" class="nav-link">Solutions</a>
                    <a href="features.html" class="nav-link">Features</a>
                    <a href="pricing.php" class="nav-link">Pricing</a>
                    <a href="partners.html" class="nav-link">Partners</a>
                    <a href="innovation.html" class="nav-link">Innovation</a>
                    <a href="faq.html" class="nav-link">FAQ </a>
                    <a href="contact.php" class="nav-link">Contact Us </a>
                    <a href="/profile/login.php" class="nav-link signIn">Sign In</a>
                </nav>
                <div onclick="toggleMobileNav(this)" class="mobile-nav-container">
                    <div class="mobile-nav"></div>
                </div>
            </div>
        </div>
        
        <div class="mobile-links">
            <nav id="mobile-nav-links">
                <a href="solutions.html" class="nav-link">Solutions</a>
                <a href="features.html" class="nav-link">Features</a>
                <a href="pricing.php" class="nav-link">Pricing</a>
                <a href="partners.html" class="nav-link">Partners</a>
                <a href="innovation.html" class="nav-link">Innovation</a>
                <a href="faq.html" class="nav-link">FAQ </a>
                <a href="contact.php" class="nav-link">Contact Us </a>
                <a href="/profile/login.php" class="nav-link btn">Sign In</a>
            </nav>
        </div>
    </header>

    <section class="laptop internal features">
        <div class="page-wrapper">
            <div class="content-container">
                <div class="column-left">
                    <h1>DroneLogbook Terms of Services</h1>
                    <h2 class="sub-header long">Your privacy is important to us. DroneLogbook-AG's Terms of Services explains how we treat your personal data. Please
                        read the Terms of Services carefully for information relating to DroneLogbook's collection, use, and disclosure
                        of your personal information.
                    </h2>
                </div>
            </div>
        </div>
        <div class="colored-bg"></div>
    </section>

    <section class="faq">
        <div class="page-wrapper">
            <div class="content-wrapper">
                <div class="row">
                    <?php include_once ("../../profile/terms-include-dronelogbookAG.php");?>
                </div>
            </div>
        </div>
    </section>

    <section class="readytouse">
        <h2 class="content-header">Interested in DroneLogbook AG?</h2>
        <div>
            <ul class="ui-buttons ui-footer">
                <li>
                    <a href="contact.php" class="ui-white">Contact Us</a>
                </li>
            </ul>
        </div>
    </section>

    <section class="appstore wedo" style="padding-top: 20px">
        <div class="page-wrapper appstore-wrapper">
            <div class="content-header">DroneLogbook Mobile Apps</div>
            <div class="divider" style="margin-bottom: 20px;"></div>

            <div class="appstore-text">
                <p class="appstore__desc">The DroneLogbook solution is based on a cloud infrastructure with secure data storage, online web application
                    accompanied by our mobile application for offline access and easy synchronization with your cloud based account.
                    In addition, the mobile app provides you with access to the latest airspace status updates, local weather and
                    solar index reading that might affect your operations.</p>
                <br />
                <p class="appstore__desc">Another Android mobile application, <b>DLBSync</b>, simplifies import of your flights from major mobile drone flight control apps natively to your DroneLogbook account. This app can sync flights into DLB Sync from your flight control apps when offline or in poor mobile coverage, then upload flights to DroneLogbook account when you have mobile or WIFI coverage.</p>
            </div>

            <div class="appstore-links">
                <div>
                    <a href="https://itunes.apple.com/fr/app/dronelogbook-companion/id1439490937?l=en&amp;mt=8" target="_blank" class="appstore__link-item appstore__link-item--itunes-lg">
                        <img src="img-min/mobileApp3.png" alt="Download on the App Store" class="appstore__img img-responsive">
                    </a>
                </div>

                <div class="appstore-links-center">
                    <a href="https://itunes.apple.com/fr/app/dronelogbook-companion/id1439490937?l=en&amp;mt=8" target="_blank" class="appstore__link-item appstore__link-item--top">
                        <img src="img-min/download-app-apple.svg" alt="Download on the App Store" class="appstore__img img-responsive" style="width: 85%;">
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=com.droneanalytics.dlbmobile" target="_blank" class="appstore__link-item">
                        <img src="img-min/download-app-android.svg" alt="Get It On Google Play" class="appstore__img img-responsive" style="width: 85%;">
                    </a>
                </div>

                <a href="https://play.google.com/store/apps/details?id=com.dlbsync" target="_blank" class="appstore__link-item appstore__link-item--itunes-lg">
                    <img src="img-min/mobileDlbsync.png" alt="Download DLBSync" class="appstore__img img-responsive">
                </a>
            </div>
        </div>
    </section>

    <footer class="footer">
        <ul class="footer-menu">
            <li class="footer-menu__item">DroneLogbook</li>
            <li class="footer-menu__item">
                <a href="terms.php" class="footer-menu__link">Terms of Service</a>
            </li>
            <li class="footer-menu__item">
                <a class="footer-menu__link" href="contact.php">Contacts</a>
            </li>
            <li class="footer-menu__item">
                <a href="http://www.twitter.com/DroneLogbook" target="_blank" class="icons__logo icons__logo--fa-twitter"></a>
            </li>
        </ul>
    </footer>

    <script src="/_static/lib/jquery-3.6.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.vide.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
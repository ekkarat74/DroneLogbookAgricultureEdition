<?php
  include_once('../../php_header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Integrations - DroneLogbook - Simplifying Drone Operations</title>

    <meta name="description" content="Log Integrations: Different levels of integration exist from the most-automatic (Auto-Sync) to manual log upload one.">
    <meta name="author" content="DroneLogbook">
    <link rel="shortcut icon" href="favicon.ico">

    <meta property="og:title" content="DroneLogbook">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.dronelogbook.com">
    <meta property="og:image" content="https://image.ibb.co/cVGLSo/og_img.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:description" content="Log Integrations: Different levels of integration exist from the most-automatic (Auto-Sync) to manual log upload one.">
    <meta property="og:site_name" content="DroneLogbook">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@dronelogbook">
    <meta name="twitter:title" content="DroneLogbook">
    <meta name="twitter:description" content="Log Integrations: Different levels of integration exist from the most-automatic (Auto-Sync) to manual log upload one.">
    <meta name="twitter:image" content="https://image.ibb.co/cVGLSo/og_img.png">
    <meta name="twitter:url" content="https://www.dronelogbook.com">
    <meta name="twitter:widgets:csp" content="on">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navigation.min.css">
    <link rel="stylesheet" href="css/general-style.min.css?v=20210105">
    <link rel="stylesheet" href="css/robly.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/themes/default/default.css">

    <style>
        /* Form Styles */
        #contactForm label {
            display: block;
            font-size: 14px;
            font-weight: 300;
        }

        #contactForm .button {
            cursor: pointer;
            width: 50%;
            display: block;
            margin: 0 auto;
            border: 1px solid transparent;
            border-radius: 30px;
            background: #000;
            color: #FFF;
            padding: 10px;
            font-size: 15px;
            text-align: center;
        }

        #contact input[type=text],
        #contact input[type=email],
        #contact input[type=tel],
        #contact input[type=url],
        #contact textarea,
        #contact select {
            font-size: 14px !important;
            margin: 0 0 10px;
        }

        #contact select {
            width: 100%;
            border: 1px solid #ccc;
            background: #FFF;
            padding: 10px;
            border-radius: 0px;
        }

        #contact #status {
            font-size: 14px !important;
            color: black !important;
            font-weight: 600;
        }

        /* Layout Styles */
        .solutions-twig {
            height: 850px;
        }

        .solutions-twig>.column-left {
            width: 44%;
            top: 150px;
            overflow: visible;
        }

        .column-left,
        .column-right {
            z-index: 200000000;
            transform: none !important;
        }

        .column-right {
            top: 150px;
            margin-right: 20px;
            color: white;
        }

        /* Fixed Media Query Syntax */
        @media only screen and (max-width: 768px) {
            .solutions-twig>.column-left {
                width: 100% !important;
            }
        }

        /* Integration Tags */
        .tagNumber {
            border-radius: 25px;
            width: 42px;
            height: 42px;
            font-size: 1.4em;
            text-align: center;
            line-height: 42px;
            color: white;
            background-color: #173d40;
            display: inline-block;
        }

        .integration-section-header {
            margin-top: 40px;
            padding-bottom: 15px;
            border-bottom: 1px solid #b0b0b0;
        }

        .integration-title {
            display: inline-block;
            margin-left: 10px;
        }

        /* Common List Item Style */
        .integration-list li {
            height: auto;
        }
        
        /* App Store Styles */
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
                    <a href="index.html" class="nav-link">Home</a>
                    <a href="features.html" class="nav-link">Features</a>
                    <a href="pricing.php" class="nav-link">Pricing</a>
                    <a href="partners.html" class="nav-link">Partners</a>
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
                <a href="index.html" class="nav-link">Home</a>
                <a href="features.html" class="nav-link">Features</a>
                <a href="pricing.php" class="nav-link">Pricing</a>
                <a href="partners.html" class="nav-link">Partners</a>
                <a href="faq.html" class="nav-link">FAQ </a>
                <a href="contact.php" class="nav-link">Contact Us </a>
                <a href="/profile/login.php" class="nav-link signIn">Sign In</a>
            </nav>
        </div>
    </header>

    <section class="laptop internal features" style="margin-bottom: 0px; padding-bottom: 0px;">
        <div class="page-wrapper">
            <div class="content-container">
                <div class="column-left">
                    <h1>Integrations Hub</h1>
                    <h2 class="sub-header long">DroneLogbook works by importing flight logs via automated or manual telemetry importation. Import flight logs to auto fill flight data, view GPS trace and play back in 3D. We support log files from all major manufacturers: DJI, Parrot, Autel, Wingcopter, FlyAbility, Wingtra, SenseFly, Yuneec...
                        <br />More than 80 log types can be imported.
                    </h2>
                </div>
            </div>
        </div>
        <div class="colored-bg"></div>
    </section>

    <section class="solution-type" style="margin-top: 40px;">
        <div class="page-wrapper">
            <div class="content-container">
                <div class="column-left" style="width: 100%;">
                    
                    <div class="content-sub-header" style="max-width: none;">
                        <div class="page-wrapper">
                            <img class="hello-feautures-img" src="../../_static/images/schema-integrations.png" alt="Integrations Schema">
                        </div>
                        <p>Different levels of integration exist from the most-automatic (Auto-Sync) to manual log upload one. This schema describes these integration levels, and below, list of all products integrated with our platform.</p>

                        <div class="integration-section-header">
                            <div class="tagNumber">1</div>
                            <h2 class="integration-title">Auto-Sync Integrations</h2>
                        </div>
                        <br />After you have authorised the following manufacturers and third-party apps, your flight logs are automatically uploaded to your account.
                        <ul class="integration-list">
                            <li>
                                <img class="hardware" src="/hp/7/img-min/drone%20hardware/AutelRobotics_Logo.jpg" style="width: 120px;" alt="Autel">
                                Autel Explorer.
                            </li>
                            <li>
                                <img class="hardware" src="/hp/7/img-min/drone%20hardware/parrott.png" style="width: 110px;" alt="Parrot">
                                Parrot FreeFly: Anafi, Anafi Thermal, Anafi USA.
                            </li>
                            <li>
                                <img class="hardware" src="/hp/7/img-min/drone%20hardware/Sensefly.png" style="width: 100px;" alt="SenseFly">
                                SenseFly eMotion: All SenseFly models compatible with eMotion.
                            </li>
                            <li>
                                <img class="hardware" src="/hp/7/img-min/drone%20hardware/yuneec.png" style="width: 100px;" alt="Yuneec">
                                Yuneec datapilot: H520.
                            </li>
                            <li>
                                <img class="hardware" src="/hp/7/img-min/drone%20hardware/watts.jpeg" style="width: 100px;" alt="Watts">
                                Watts Innovations: Prism.
                            </li>
                            <li>
                                <img class="hardware" src="/hp/7/img-min/drone%20hardware/logo-skyfish.png" style="width: 100px;" alt="SkyFish">
                                SkyFish.
                            </li>
                            <li>
                                <img class="hardware" src="/hp/7/img-min/drone%20software/DroneHarmony.png" style="width: 150px;" alt="DroneHarmony">
                                DroneHarmony: Major DJI models.
                            </li>
                            <li>
                                <img class="hardware" src="/hp/7/img-min/drone%20software/dronelink.png" style="width: 120px;" alt="DroneLink">
                                DroneLink: Major DJI models.
                            </li>
                            <li>
                                <img class="hardware" src="/hp/7/img-min/drone%20software/mapsmadeeasy.png" alt="MapsMadeEasy">
                                MapsMadeEasy: Major DJI models.
                            </li>
                            <li>
                                <img class="hardware" src="/hp/7/img-min/drone%20hardware/sky-drones.jpg" style="width: 140px;" alt="Sky-Drones">
                                Sky-Drones: Sky-Drones enabled aircrafts.
                            </li>
                            <li>
                                <img class="hardware" src="/hp/7/img-min/drone%20software/ugcs.jpeg" style="width: 130px;" alt="UgCS">
                                UgCS: UgCS enabled aircrafts.
                            </li>
                            <li>
                                <img class="hardware" src="/hp/7/img-min/drone%20software/zephyr_logo.png" style="width: 120px;" alt="Zephyr">
                                Zephyr Simulator.
                            </li>
                            <li>
                                <img class="hardware" src="/hp/7/img-min/drone%20software/Simnet.png" style="width: 120px;" alt="Simnet">
                                Simnet Simulator.
                            </li>
                        </ul>

                        <div class="integration-section-header">
                            <div class="tagNumber">2</div>
                            <h2 class="integration-title">Cloud-Sync Integrations</h2>
                        </div>
                        <br />Logs are pulled from your manufacturer cloud account to your logbook account. You need first to save your flights to the manufacturer cloud.
                        <ul class="integration-list">
                            <li>
                                <img class="hardware" src="/hp/7/img-min/drone%20hardware/DJI.jpg" style="width: 70px;" alt="DJI">
                                Compatible with DJI Mobile apps syncing flights on DJI cloud: DJI Fly, GO, GO4, Pilot, GS.
                            </li>
                            <li>
                                <img class="hardware" src="/hp/7/img-min/drone%20hardware/dronetag.svg" style="width: 155px;" alt="Dronetag">
                                Dronetag RemoteID Trackers.
                            </li>
                            <li>
                                <img class="hardware" src="/hp/7/img-min/drone%20hardware/skydio.jpg" style="width: 100px;" alt="Skydio">
                                All Skydio models sync with Skydio cloud portal.
                            </li>
                        </ul>

                        <div class="integration-section-header">
                            <div class="tagNumber">3</div>
                            <h2 class="integration-title">DLB-Sync Compatible Apps</h2>
                        </div>
                        <br />DLB Sync is our Android app that can push your device-local flight logs directly to your logbook account. If you use one of the listed below mobile drone flight control apps on your Android device, DLB-Sync can list these apps log files, stored locally, and upload them to your account.
                        <ul class="integration-list">
                            <li>
                                <img class="hardware" src="/hp/7/img-min/drone%20hardware/DJI.jpg" style="width: 70px;" alt="DJI">
                                DJI Mobile apps and tablets: DJI GO, GO4, Pilot, Fly, Crystal Tablet, DJI GS RTK Crystal Tablet, DJI AG Crystal Tablet.
                            </li>
                            <li>
                                <img class="hardware" src="/hp/7/img-min/drone%20software/Pix4D_LOGO_MAIN_1024.png" style="width: 70px;" alt="Pix4D">
                                Pix4D Capture app (DJI Logs).
                            </li>
                            <li>
                                <img class="hardware" src="/hp/7/img-min/drone%20software/dronedeploy.jpg" style="width: 70px;" alt="DroneDeploy">
                                DroneDeploy (DJI Logs).
                            </li>
                            <li>
                                <img class="hardware" src="/hp/7/img-min/drone%20hardware/AutelRobotics_Logo.jpg" style="width: 100px;" alt="Autel">
                                Autel Explorer app.
                            </li>
                        </ul>

                        <div class="integration-section-header">
                            <div class="tagNumber">4</div>
                            <h2 class="integration-title">Manual Importers</h2>
                        </div>
                        <br />We support more than 80 telemetry log files, from major manufacturers and third-party applications:<br /><br />
                        <i>Aeromapper, Airspace, APM, ArduPilot, Astra Tracker, Autel Robotics, Autoflight Logic, BBX, datCon, DJI, DJI-Ultimate-Flight, DoosanMobility, DraganFly, DroneAmplified, DroneDeploy, DroneHarmony, Esri, Flyability, FlyTrex, FPV Camera, Freefly Alta, Google Earth, GUTMA, JETI, Litchi, Lockheed Martin Indago, MapsMadeEasy, MaVinci, MikroKopter, NV-Drones, Parrot, Photodata, Picollo, PIX4D, PowerVision, PrecisionFlight, Quantum Systems, QuestUAV, Robota Eclipse, SenseFly, Sentera, Simnet, Sky-Drones, Skywatch, Team Black Sheep, TopXGun, Trimble, Ublox, UGCS, ULog, Vantage Robotics, WingCopter, Wingtra, Xiro, Yuneec,...</i>

                    </div>
                </div>
            </div>
            <div class="divider"></div>
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
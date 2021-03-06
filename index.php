<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Template One</title>
    <meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">

    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="manifest" href="manifest.json">
    <meta name="theme-color" content="#4e8ef7">

    <!-- add to homescreen for ios -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!--  <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" href="css/templateOne.css"> -->
    
    <style>
        <?php include_once('css/font-awesome.min.css');?>
        <?php include_once('css/bootstrap.min.css');?>
        <?php include_once('css/templateOne.css');?>

        @media print {
            .progress-bar-success {
                -webkit-print-color-adjust: exact; 
            }
        }

    </style>
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

</head>

<body>

    <div class="header container padding-null">
        <div class="left-element col-xs-6 l-padding-null">
            <h1 class="username"></h1>
            <p class="description"></p>
        </div>

        <div class="centered-element col-xs-2" style="display: none;">
            <img height="100" width="100" class="img-circle" src="./user_profile.jpg" />
        </div>

        <div id="contactDetailId" class="right-element col-xs-6 r-padding-null text-right"></div>
    </div>

    <div class="content container padding-null">

        <div class="left-element col-xs-6 l-padding-null">
            <h1 class="title">Work Experience</h1>
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="duration"><span>09/2018 - 02/2019</span><span class="r-float">Chandigarh</span></div>
                    <span class="position">Front End Developer</span>
                    <span class="company">Next57</span>
                    <span class="role"><b>Role -</b> Front End Developer, QA Tester</span>
                    <div class="accomplishments">
                        <span><b>PageIQ: </b> It helps your business growth by displaying social proof on your website.</span>
                        <span><b>Urbankube: </b> Urbankube’s interior designers help in creating your office and home
                            according to your taste and budget</span>
                        <span><b>Levler: </b> Levler is a customer interaction platform for local businesses, that
                            helps local businesses to smartly collect their customer reviews on various social
                            platforms and provide them with valuable actionable insights to improve upon their business
                            based on customer feedback.</span>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="duration"><span>06/2018 - 08/2018</span><span class="r-float">Mohali</span></div>
                    <span class="position">Mobile Application Developer</span>
                    <span class="company">Interworld Commnet</span>
                    <span class="role"><b>Role -</b> Client Handling, Front End Developer, QA Tester</span>
                    <div>Developed following Mobile Applications:</div>
                    <div class="accomplishments">
                        <span><b>Merchant App: </b> Managing orders of customers, accept, reject and assign orders to
                            driver to deliver.</span>
                        <span><b>Driver App: </b> Deliver assigned orders to customers and update status.</span>
                        <span><b>MyMa App: </b> The app has various functionalities from providing transport route to
                            food delivery and food order.</span>
                        <span><b>SMS Investigation (Android): </b>It is an Enterprise application for the SMS
                            Investigation Staff.</span>
                        <span><b>Archer App: </b> Create dynamic inspection form/template with various different
                            fields. Fill and submit form to generate PDF report.</span>
                        <span><b>Inspectlah App: </b> Replica of Archer App with different branding.</span>
                        <span><b>WongFong App: </b> Replica of Archer App with different branding.</span>
                        <span><b>Inspex App: </b> To perform site inspection physically and at the same time provide
                            up-to-date information about the employees housing condition.</span>
                    </div>
                </li>
                <div class="clearfix"></div>
            <br /><br /><br /><br /><br /><br />
                <li class="list-group-item">
                    <div class="duration"><span>02/2016 - 05/2018</span><span class="r-float">Mohali</span></div>
                    <span class="position">Software Developer</span>
                    <span class="company">Prologic Technologies Pvt. Ltd.</span>
                    <span class="role"><b>Role -</b> Front End Developer, Project Manager, Team Lead</span>
                    <div class="accomplishments">
                        <span class="title"><b>Accomplishments</b></span>
                        <span>Learned <custom-color>Tokbox, Framework 7 or F7, Amazon Alexa, Stripe, Sass, Ionic,
                                AngularJS</custom-color>. <br />Developed following mobile applications:</span>
                        <span><b>Tagzie</b> for selling product via Instagram.</span>
                        <span><b>IntervueLive</b> to conduct real time video interviews.</span>
                        <span><b>Talk to Santa</b> where 5 users (max.) at a time can have LIVE video chat with SANTA
                            anywhere round the world.</span>
                        <span><b>Applications</b> for various Merchant Vessels such as Ahrenkiel, Arturo Service, DS
                            Tankers, Kameleya, Rickmers</span>
                        <span><b>Caterpillar App</b> for one of the biggest heavy machinery company <b>Caterpillar Inc.</b></span>
                        <span><b>GOSH:Global Online Support Hub</b> which is designed as an alternative community
                            resource to connect patients with progressive brain diseases and their caregivers with
                            others who find themselves in a similar situation.</span>
                        <span><b>Kliggit</b> to schedule/conduct real time video chat with some pre-recorded exclusive
                            Expert.</span>
                        <span><b>Axynt</b> to improve accent, user can schedule/conduct real time video chat with PRO.</span>
                        <span><b>Birdieball</b> to record scores/points of golf games which are played in real life.</span>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="duration"><span>06/2015 - 02/2016</span><span class="r-float">Mohali</span></div>
                    <span class="position">Mobile Application Developer</span>
                    <span class="company">Sierah Enterprises</span>
                    <span class="role"><b>Role -</b> Client Handling, Designer, Front End Developer, Back End
                        Developer, QA Tester</span>
                    <div class="accomplishments">
                        <span class="title"><b>Accomplishments</b></span>
                        <span>Learned <custom-color>Phonegap/Cordova</custom-color> and developed mobile application
                            for various Automobile Dealers such as </span>
                        <span><b>Honda Dealer:</b> Innovative Honda, Kamdhenu Honda, SGBL Honda, Bhagwati Honda, Akshit
                            Honda, Platinum Honda, Sai Point Honda, Gandhi Honda, Sarvpriya Honda, Axis Honda</span>
                        <span><b>Yamaha Dealer:</b> Carlton Yamaha, Manor Yamaha, SNC Yamaha, Bikerz Yamaha</span>
                        <span><b>TVS Dealer:</b> Malhotra TVS</span>
                        <span>Developed mobile application for <b>Delhi Public School, Chhindwara</b></span>
                        <span>And also developed <b>Shopping Zone</b> mobile application.</span>
                    </div>
                </li>
            </ul>

        </div>

        <div class="right-element col-xs-6 r-padding-null">
            <h1 class="title">Skills &amp; Competences</h1>
            <div id="skillsId" class="col-xs-12 padding-null"></div>

            <div class="col-xs-12 technologies padding-null">
                <h1 class="title">Technologies</h1>
                <ul class="list-group">
                    <li id="technologiesId" class="list-group-item"></li>
                </ul>
            </div>

            <div class="col-xs-12 training padding-null">
                <h1 class="title">Training</h1>
                <ul id="trainingId" class="list-group"></ul>
            </div>

            <div class="clearfix"></div>
            <br /><br /><br /><br /><br /><br />
            <div class="col-xs-12 education padding-null">
                <h1 class="title">Education</h1>
                <ul id="educationId" class="list-group"></ul>
            </div>

            <div class="col-xs-12 personal-details padding-null">
                <h1 class="title">Personal Details</h1>
                <ul class="list-group">
                    <li id="personalDetailsId" class="list-group-item"></li>
                </ul>
            </div>

            <div class="col-xs-12 interests padding-null">
                <h1 class="title">Interests</h1>
                <ul class="list-group">
                    <li id="interestId" class="list-group-item"></li>
                </ul>
            </div>
        </div>

    </div>

    <!-- <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script> -->
    
    <script>
        <?php include_once('js/jquery.min.js');?>
        <?php include_once('js/bootstrap.min.js');?>
        <?php include_once('js/script.js');?>
    </script>

</body>

</html>
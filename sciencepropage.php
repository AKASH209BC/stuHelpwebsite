<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area," . $_SESSION['username'] . "!";
} else {
    header('Location: ..\agri\alert.html');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="Language" content="en" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>stuHelp | Science</title>
    <meta name="description" content="stuHelp is eager to help all our school students at any time and place with projects!!" />
    <meta name="keywords" content="stuHelp,science projects ,physics,chemistry,biology"/>
    <meta name="author" content="stuHelp Projects Page">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="stuHelp Projects" />
    <meta property="og:title" content="stuHelp Projects" />
    <meta property="og:description" content="stuHelp Projects. Get ready to find answers to all your questions to school projects" />
    <meta itemprop="name" content="stuHelp Project page" />
    <meta itemprop="image" content="img/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
    <link rel="shortcut icon" href="img/favicon-16x16.png" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style1.css">
    <style>
    .nav-wrapper .active{
        color: blue !important;
    }
    .card .card-content{
        min-height: 180px;
    }
    #nav_home:hover{
        color: white;
    }
    .increase_width{
        width: 160px;
    }
    @media screen and (min-width: 540px) {
        .increase_width {
            width: 190px;
        }
    }
    @media only screen and (min-width: 700px) {
        #headtext {
            vertical-align: text-bottom;
        }
        #headimage{
            width: 100px;
        }
    }
    @media only screen and (max-width: 700px) {
        #headtext {
            vertical-align: text-bottom;
        }
        #headimage{
            width: 50px;
        }
    }

    </style>

  </head>
  <body>


    <!-- navbar section-->
    <nav>
        <div class="nav-wrapper">
            <a href="../agri/index.php" class="brand-logo">
                <img src="img/logo.png" style="width: 50px; height:50px" class="responsive-img hide-on-small-only" id="headimage" >
                <span id="headtext" style="padding-left: 20px;"><strong>stuHelp</strong> Projects</span>
            </a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li class=""><a href="../agri/index.php" id="nav_home"><strong>HOME</strong></a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="../agri/index.php">Home</a></li>
            </ul>
        </div>
    </nav>
    <!-- navbar section end -->


    <!-- technical heading-->
    <div class="section #424242 grey darken-3" style="color: white;">
        <div style="padding-left: 20px;">
            <h5>SCIENCE PROJECTS</h5>
            <p>Check out the best science school projects available online </p>
        </div>
    </div>
    <!-- technical heading end -->

    <!-- Technical projects section -->
    <div id="techprojects">
    <br><br>
        <div class="container">
            <div class="row">
                <div class="col m4 s12">
                <!-- so this is the project card which is going to repeat -->
                    <a href="sow.html" style="color: black;">
                    <div class="card animated fadeIn" style="border-bottom: 10px solid red;">
                        <div class=" row imageshowincard">
                            <div class="col s6">
                                <h5>Sterilisation of Water </h5>
                            </div>
                            
                        </div>
                        <div class="card-content">
                            <p>Chemistry project focusing on the technique called sterilization of water using bleaching powder which is used to purify water and make it fit for drinking.</p>
                        </div>
                        <div class="card-action" >
                            <p class="viewproject">View Project</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col m4 s12">
                    <a href="adulteration.html" style="color: black;">
                    <div class="card" style="border-bottom: 10px solid red;">
                         <div class="row imageshowincard">
                            <div class="col s6">
                                <h5>Adulteration in Food</h5>
                            </div>
                            <!-- <div class="col s6">
                                <img class="responsive-img" src="img/cabshare.png">
                           </div> -->
                        </div>
                        <div class="card-content">
                            <p>Chemistry project dealing with the concept of adulteration in food which is addition of another substance in food which degrades its quality.</p>
                        </div>
                        <div class="card-action" >
                            <p class="viewproject">View Project</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col m4 s12">
                    <a href="rainalarm.html" style="color: black;">
                    <div class="card" style="border-bottom: 10px solid red;">
                         <div class="row imageshowincard">
                            <div class="col s6">
                                <h5>Rain Alarm</h5>
                            </div>
                          
                        </div>
                        <div class="card-content">
                            <p>Physics Project which deals with the construction of Rain Alarm.</p>
                        </div>
                        <div class="card-action">
                            <p class="viewproject">View Project</p>
                        </div>
                    </div>
                    </a>
                </div>
            </div><!-- end of first row -->
            <!-- second row starting -->
            <div class="row" style="margin-bottom: 0;">
                <div class="col m4 s12">
                <!-- so this is the project card which is going to repeat -->
                    <a href="automaticetb.html" style="color: black;">
                    <div class="card" style="border-bottom: 10px solid red;">
                        <div class=" row imageshowincard">
                            <div class="col s6">
                                <h5>Automatic Electric Train Barrier</h5>
                            </div>
                            <!-- <div class="col s6">
                                <img class="responsive-img" src="img/pravega.png">
                            </div> -->
                        </div>
                        <div class="card-content">
                            <p>Physics Project which deals with the construction of Automatic Electric Train Barrier.</p>
                        </div>
                        <div class="card-action">
                            <p class="viewproject">View Project</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col m4 s12">
                    <a href="studydrugbacteria.html" style="color: black;">
                    <div class="card" style="border-bottom: 10px solid red;">
                         <div class="row imageshowincard">
                            <div class="col s6">
                                <h5>Study of Drug resistance in Bacteria</h5>
                            </div>
                            <!-- <div class="col s6">
                                <img class="responsive-img" src="img/biomet_logo.png">
                            </div> -->
                        </div>
                        <div class="card-content">
                            <p>Biology Project studying the effect of growing drug resistance in Bacteria due to the prevalent use of Antibiotics..</p>
                        </div>
                        <div class="card-action">
                            <p class="viewproject">View Project</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col m4 s12">
                	<a href="harmfulbio.html" style="color: black;">
                    <div class="card" style="border-bottom: 10px solid red;">
                         <div class="row imageshowincard">
                            <div class="col s6">
                                <h5>Harmful effects of Mobile Radiation</h5>
                            </div> 
                            <!-- <div class="col s6">
                                <img class="responsive-img" src="img/c2c.png">
                            </div> -->
                </div>
                        <div class="card-content">
                            <p>Biology project studying the adverse effects of growing mobile phone usage among people. </p>
                        </div>
                        <div class="card-action">
                            <p class="viewproject">View Project</p>
                        </div>
                    </div>
                    </a>
                </div>
            <!-- </div>end of second row -->
            <!-- Third row starting -->
            <!-- <div class="row" style="margin-bottom: 0;">
                <div class="col m4 s12"> -->
                <!-- so this is the project card which is going to repeat -->
                    <!-- <a href="c2candroid.html" style="color: black;">
                    <div class="card" style="border-bottom: 10px solid red;">
                        <div class=" row imageshowincard">
                            <div class="col s6">
                                <h5>C2c Android App</h5>
                            </div> -->
                            <!-- <div class="col s6">
                                <img class="responsive-img" src="img/c2c.png">
                            </div> -->
                        <!-- </div>
                        <div class="card-content">
                            <p>The android app for Code2Create enabled the participants to give a quiz. The App became widely popular.</p>
                        </div>
                        <div class="card-action">
                            <p class="viewproject">View Project</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col m4 s12">
                <a href="kiracing.html" style="color: black;">
                    <div class="card" style="border-bottom: 10px solid red;">
                         <div class="row imageshowincard">
                            <div class="col s6">
                                <h5>KI racing</h5>
                            </div> -->
                            <!-- <div class="col s6">
                                <img class="responsive-img" src="img/ki.png">
                            </div> -->
                        <!-- </div>
                        <div class="card-content">
                            <p>KI Racing is a BAJA SAE team based in VIT University, Vellore. Our Technical Team build their official website.</p>
                        </div>
                        <div class="card-action">
                            <p class="viewproject">View Project</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col m4 s12">
                    <a href="jaabaz.html" style="color: black;">
                    <div class="card" style="border-bottom: 10px solid red;">
                         <div class="row imageshowincard">
                            <div class="col s6">
                                <h5>Jaabaz Website</h5>
                            </div> -->
                            <!-- <div class="col s6">
                                <img class="responsive-img" src="img/jaabaz.jpg">
                            </div> -->
                        <!-- </div>
                        <div class="card-content">
                            <p>Team Jaabaz manufactures All-Terrain vehicles represents VIT University in BAJA SAE event every year. Our Technical Team build their official website. </p>
                        </div>
                        <div class="card-action">
                            <p class="viewproject">View Project</p>
                        </div>
                    </div>
                    </a>
                </div> -->
            <!-- </div>end of Third  row -->
        <!-- </div><br><br>
    </div> -->
    <!-- Technical project section ends- -->



    <!-- Research Heading-->
    <!-- <div class="section #424242 grey darken-3" style="color: white;">
        <div style="padding-left: 20px;">
            <h5>RESEARCH PROJECTS</h5>
            <p>Under Research projects , all out Research works related to Machine learning, deep learning and other AI technologies falls.</p>
        </div>
    </div> -->
    <!-- Research heading ends -->


    <!-- <div id="techprojects"><br>
        <div class="container">
        <br>
            <div class="row" style="margin-bottom: 0;">
                <div class="col m4 s12">
                <!-- so this is the project card which is going to repeat -->
                    <!-- <a href="slackchatbot.html" style="color: black;">
                    <div class="card" style="border-bottom: 10px solid #00c853;">
                        <div class=" row imageshowincard">
                            <div class="col s6">
                                <h5>Slack Chatbot</h5>
                            </div>
                            <div class="col s6">
                                <img class="responsive-img" src="img/slack2.png">
                            </div>
                        </div>
                        <div class="card-content">
                            <p>Slack chatting bot will automatically reply to your queries about ACM.</p>
                        </div>
                        <div class="card-action" >
                            <p class="viewproject">View Project</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col m4 s12"> -->
                    <!-- <a href="gst.html" style="color: black;">
                    <div class="card" style="border-bottom: 10px solid #00c853;"> -->
                         <!-- <div class="row imageshowincard">
                            <div class="col s6">
                                <h5>GST sentimental Analysis</h5>
                            </div>
                            <div class="col s6">
                                <img class="responsive-img" src="img/gst.jpg">
                            </div>
                        </div>
                        <div class="card-content" style="">
                            <p>We will collect and analyse data from various sources and know the general opinion of people regarding GST.</p> -->
                        <!-- </div>
                        <div class="card-action" >
                            <p class="viewproject">View Project</p>
                        </div>
                    </div>
                    </a> -->
                </div>
                <div class="col m4 s12">
                    <!-- <a href="particularproject.html" style="color: black;">
                        <div class="card" style="border-bottom: 10px solid #00c853;">
                        
                             <div class="row imageshowincard">
                                <div class="col s6">
                                    <h5>Dummy Project</h5>
                                </div>
                                <div class="col s6">
                                    <img class="responsive-img" src="img/chrome.jpeg">
                                </div>
                            </div>
                            <div class="card-content" >
                                <p>This is the card template to ject</p>
                            </div>
                            <div class="card-action" style="height: 91px;">
                                <p class="viewproject"><a href="particularproject.html" style="text-transform: lowercase;">View Project</a></p>
                            </div>
                             
                        </div>
                    </a> -->
                   
                </div>
            </div><!-- end of first row -->
            
        </div><br><br><br>
    </div>
    <!-- Research project section e
    nds- -->




    
    <footer class="">
      <div class="container" >
        <div class="row" style="margin-bottom:0;">
          <div class="col m4 s6 center-align">
            <a href="../agri/index.php">
              <img src="img/logo.png" style="width: 50px; height:50px"; class="increase_width" >
            </a>
          </div>
          <div class="col m4 s6 show-on-small-only hide-on-med-and-up center-align">
            <a href="http://www.vit.ac.in/">
              <img src="img/vitlogo.png" width="160px">
            </a>
          </div>
          <div class="col m4 s12  center-align">
            <a class="github_red" href="https://github.com/ACM-VIT" ><i class="fa fa-github fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;
            <a class="fb_blue" href="https://facebook.com/ACM.VITU"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
            <div>In case of any queries write to us at </div>
            <div><a  href="mailto:stuhelp1410@gmail.com" target="_top">stuhelp1410@gmail.com</a></div>

          </div>
          <div class="col m4 hide-on-small-only center-align">
            <a href="http://www.vit.ac.in/">
              <img src="img/vitlogo.png" class="increase_width" >
            </a>
          </div>

        </div>
      </footer>
    <!-- Footer section ends -->



    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript">
            $(".button-collapse").sideNav();
            $('.card').addClass('z-depth-5','animated');
            $(function(){
                $('.card').addClass('animated','bounce');
                $('.card').addClass('fadeInRight');
            });
    </script>
  </body>
</html>

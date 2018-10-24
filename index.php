<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>stuHelp | Home</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="./css/materialize.css">
    <link rel="stylesheet" href="css/loader.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon-16x16.png" type="image/x-icon">
    <link rel="stylesheet" href="./node_modules/sal.js/dist/sal.css ">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
    <!-- Landing Section -->
    <section class="landing" id="home">
        <!-- Navigation -->
        <div class="navbar-fixed" style="height: 100px;">
            <nav id="staticNav" class="transparent z-depth-0" style="display: flex;
        height: 100px;
        position: fixed;
        top: 0px;">
                <!-- Left -->
                <div class="show-on-small hide-on-med-and-up" style="    position: absolute;            left: 0px;">
                    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="large material-icons">menu</i></a>
                </div>
                <!-- <a href="#" onclick="scroll2('home')" style="margin-top: -10px;"> -->
                <ul class="nav-left">
                    <li>
                        <img src="img/logo.png" alt="logo">
                    </li>
                    <li class="logo-text" style="margin-top: -14px;">stuHelp</li>
                </ul>
                <!-- </a> -->
                <!-- Right -->
                
                <ul class="nav-right hide-on-small-only">
                    <li style="margin-top: -14px;"><a onclick="scroll2('about')" href="#">About</a></li>
                    <li style="margin-top: -14px;"><a onclick="scroll2('predict')" href="#">Projects</a></li>
                    <li style="margin-top: -14px;"><a href="alert.html" target="blank">Log In</a></li>
                    <?php
                      if(!isset($_SESSION))
                      {
                        session_start();
                      }
                      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
       
      echo  "<li style= 'margin-top: -14px;'><a href= 'logout.php' target= 'blank'>Log Out</a></li>";
} 
  else{
      echo "<h1></h1>";
  }
  ?>
                    <li style="margin-top: -14px;"><a href="register.html" target = "blank">Sign Up</a></li>
                    <li style="margin-top: -14px;"><a onclick="scroll2('contact')" target="blank">Contact Us</a></li>
                    <!-- <li style="margin-top: -14px;"><a href="#">Admin</a></li> -->
                </ul>
            </nav>
        </div>
        <ul id="slide-out" class="sidenav" style="padding-top:50px">
            <li><a onclick="scroll2('about')" href="#">About</a></li>
            <li><a onclick="scroll2('predict')" href="#">Predict</a></li>
            <li><a href="alert.html" target="blank">Alerts</a></li>
            <!-- <li><a href="#">Admin</a></li> -->
        </ul>
        <div data-sal-duration="1200" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-bounce">
            <p>
                <?php 
                if(isset($_SESSION['loggedin']))
                {
                echo " Hello ".$_SESSION['username'];
                }
                ?>
                Get the best of school projects online at <strong>Minimum rates!</strong>
            </p>
            <a class="home-button" id="btn" href="#" onclick="scroll2('predict')">GET STARTED</a>
            <!-- <button class="home-button" id="btn">GET STARTED</button> -->
        </div>
    </section>
    <!-- About us -->
    <section class="section-margin section-ht-center1">
        <div id="about">
            <h2 data-sal-duration="1200" data-sal="fade" data-sal-delay="1100" data-sal-easing="ease-out-bounce">
                ABOUT
            </h2>

            <p align="justify" class="text" data-sal-duration="1200" data-sal="fade" data-sal-delay="1050"
                data-sal-easing="ease-out-bounce">
                Are you a school student?Are making projects becoming tedious?Is the workload of projects becoming bigger
                and bigger?Do you want some help?Don't worry!! If the answer to all these questions is a big yes you are 
                at the right place.We the stuhelp community provide all answers to the project making questions of every school 
                student.Don't worry if you don't have an idea for a project stuhelp provides ready made projects for students across
                varied domains of subjects from Computer Science,Science,Social Science and Mathematics at economical rates.If you have 
                an idea well and good you can look at your projects and get help.We at stuhelp aim to bring forward the best projects to
                students to enhance thier concepts.So why waiting explore stuHelp and get all your answers related to projects!!
            </p>
        </div>
    </section>

    <!-- Predict -->
    <section id="predict" class="target">
        <h2 data-sal-duration="1200" data-sal="fade" data-sal-delay="1100" data-sal-easing="ease-out-bounce">
            PROJECTS
            </h2>
            <div style="width:50%; min-width: 400px;" class="container">
            <div class="carousel carousel-slider center" style="height:600px;">
                    <div class="carousel-item amber white-text" href="#one!">
                        <div class="container" style="height:75%; width:100%;">
                        <img src="https://jooinn.com/images/coding-and-programming-computer-science-and-it.jpg" class="container" width=100% height=100% style="padding:10px 0px;"></img>
                        </div>
                        <a href="..\agri\computersciencepropage.php" class="text-center" style="font-size:50px; color: azure">COMPUTER SCIENCE </a>
                        </div>
                    <div class="carousel-item pink white-text" href="#two!">
                        <div class="container" style="height:75%; width:100%;">
                        <img src="data:image/jpeg;base64,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" class="container" width=100% height=100% style="padding:10px 0px;"></img>
                        </div>
                        <a href="..\agri\sciencepropage.php" class="text-center" style="font-size:50px; color: azure"!important>SCIENCE</a>
                                    
                    </div>
                    <div class="carousel-item green white-text" href="#three!">
                        <div class="container" style="height:75%; width:100%;">
                        <img src="https://odysseyonline-img.rbl.ms/simage/https%3A%2F%2Faz616578.vo.msecnd.net%2Ffiles%2F2016%2F05%2F26%2F635998320853073868467966908_XI6kwynl.jpeg/2000%2C2000/E2s73lMbYJtspwae/img.jpeg" class="container" width=100% height=100% style="padding:10px 0px;"></img>
                        </div>
                        <a href="..\agri\socialsciencepropage.php" class="text-center" style="font-size:50px; color: azure">SOCIAL SCIENCE</a>
                                      
                    </div>
                    <div class="carousel-item blue white-text" href="#four!">
                        <div class="container" style="height:75%; width:100%;">
                        <img src="http://www.shoo-in.com/resource/wp-content/uploads/sites/3/2017/05/math_166667817.jpg" class="container" width=100% height=100% style="padding:10px 0px;"></img>
                        </div>
                        <a href="..\agri\Mathematicspropage.php" class="text-center" style="font-size:50px; color: azure">MATHEMATICS</a>
                                      
                    </div>
                  </div>
                </div>
                       
            <div class="row" id="select" style="display:none;padding:20px;height: 500px;" data-sal-duration="1200" data-sal="fade"
            data-sal-delay="1100" data-sal-easing="ease-out-bounce">
            
        </div>
        <div class="row">
            
            <div id="loader" class="col s12 m8 l6 offset-m2 offset-l3" style="display: none; height: 500px;background-color: white; padding: 20px; ">
                <div class="lds-css ng-scope" style="width: 200px;height: 200px;position: relative;top: 10%;left: 50%;
                margin-left: -100px;">
                    <div class="lds-rolling">
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="result" class="row" style="height: 500px; display: none;">
            <div class="col s12 m8 l6 offset-m2 offset-l3">
                <div id="card-color" class="green" style="display:flow-root;padding: 20px">
                    <h3 style="width:100%"><b>Total Yield</b> </h3>
                    <div style="font-size:20px"><span style="width:100%" id="totalyield">123</span>kg/hectre </div>
                </div>
                <div class="grey lighten-3" style="display:flow-root;padding: 60px 0px;">
                    <div id="lowYield" class="red-text" style="display:none">
                        <h3><b>Low Yield</b></h3>
                    </div>
                    <div id="normalYield" class="green-text" style="display:none">
                        <h3><b>Normal Yield</b></h3>
                    </div>
                    <div id="highYield" class="red-text" style="display:none">
                        <h3><b>High Yield</b></h3>
                    </div>
                </div>


                <button class="home-button" style="margin-top: 30px;color:white" onclick="back()">Back</button>
            </div>
        </div>
    </section>

    <footer class="page-footer" style="background-color:#0a9ace" id="contact">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
            <h6 class="white-text">Connect:</h6>
                <br/>
              <!--<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p> -->
              <div class="social-icons">
                <a href="https://www.facebook.com/schoolprojectscorner/?modal=admin_todo_tour" style="text-decoration: none; color:white;"><i class="fa fa-facebook-f tooltipped" data-position="bottom" data-tooltip="Facebook" style="font-size:24px"></i></a>
                <a href="https://www.instagram.com/stuhelpdesk/?hl=en" style="text-decoration: none; color:white;"><i class="fa fa-instagram tooltipped" data-position="bottom" data-tooltip="Instagram"  style="font-size:24px"></i></a>
                <a href="mailto:stuhelp1410@gmail.com" style="text-decoration: none; color:white;"><i class="fa fa-envelope tooltipped" data-position="bottom" data-tooltip="Email"  style="font-size:24px"></i></a>
                <a href="https://twitter.com/stuHelp2" style="text-decoration: none; color:white;"><i class="fa fa-twitter tooltipped" data-position="bottom" data-tooltip="Twitter" style="font-size:24px"></i></a>
              </div>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">stuHelp</h5>
              <!-- <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
              </ul> -->
              <img src="img/logo.png" id="footer-logo" alt="logo" />
            </div>
          </div>
        </div>
        <!-- <div class="footer-copyright">
          <div class="container">
          © 2018 Copyright 
          <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
          </div> -->
        </div>
      </footer>
    <!-- Footer
    <div id="our-footer">
		<footer>
			<div class=" #212121 grey darken-3">
                <div>
				    <p style="color: #e2e2e2">Reach us at:</p>
					<a href="#" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Instagram" target="_blank"><img src="img\instagram.png" alt="INSTAGRAM" height=></a>        
                    <a href="#" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Facebook" target="_blank"><img src="img\facebook.png" alt="FACEBOOK" ></a>
					<a href="#" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="E-mail" target="_blank"><img src="img\email.png" alt="EMAIL"></a>
					<a href="#" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Twitter" target="_blank"><img src="img\twitter.png" alt="TWITTER"></a>
					<a href="#" target="_blank" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Phone"><img src="img\phone.png" alt="PHONE"></a>
                </div>
            </div>
		</footer>
	</div> -->
    <script src="./node_modules/sal.js/dist/sal.js"></script>
    <script>
        sal();
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/MapSelect.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEUsLnKqhV-3DzONveudaxSylYewVReYU&libraries=places&callback=initAutocomplete"
        async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
    <script src="./js/defined.js"></script>
    <!-- <script>
        import jump from "./node_modules/jump.js/dist/jump.module.js";
        var button = document.getElementById('btn');
        button.addEventListener('click', () => {
            jump(".target");
        })
    </script> -->
<script>
$('.carousel').carousel({
    fullWidth: true,
    indicators: true
  });
  setTimeout(autoplay, 2500);
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 2500);
}
      
</script>
</body>

</html>
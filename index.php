<!DOCTYPE html>
<?php session_start(); ?>
<?php require_once "class/db.php"; ?>
<?php 

?>


<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>IET HACK- BUCKET LIST</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="assets/css/custom.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

<!-- navigation-->
<?php require_once "components/nav.php"; ?>
<!-- navigation ends-->

    <!-- login modal -->
      <?php include_once "components/login.php"; ?>
    <!-- login modal ends -->


  <!-- signup modal -->
    <?php include_once "components/signup.php"; ?>
  <!-- signup modal ends -->




  <div id="index-banner" class="parallax-container" >
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">BUCKET LIST</h1>
        <div class="row center">
          <h5 class="header col s12 light">What's on your bucket list? Adventure travel, volunteerism, crazy fun, connecting with nature?<br>Complete it before u die!</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="assets/img/background1.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Speeds up the tasks</h5>

            <p class="light">WMake sure that you have a proper access of tasks all the time and you can thus focous on planning and executing.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Make connections</h5>

            <p class="light">You can ask others for help, and help others in completing their goals.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">Leads to connect with people that share the same interest as you.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Wanna buy that old classic you always desired as a kid? Add it to the bucket list and work for it</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="assets/img/background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>About Us</h4>
          <p class="light">
             <ul class="collapsible" data-collapsible="accordion">
              <li>
                <div class="collapsible-header active"><i class="material-icons">mode_edit</i>
                Make dreams into goals
                </div>
                <div class="collapsible-body">
                <p>"Someday" isn't enough, let's prioritize and set some dates. Define HOW MUCH do you want it and WHEN do you want it.<br>Not just "Before I die..."</p>
                </div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">play_for_work</i>Define your life</div>
                <div class="collapsible-body">
                <p>Time and insight shape all great things. Get new ideas and thoughts on goals and experiences from the BL-community.<br>Start definine the future you, the person you want to be!</p>
                
                </div>
              </li>
              
              <li>
                <div class="collapsible-header"><i class="material-icons">supervisor_account</i>Get support and advice</div>
                <div class="collapsible-body"><p>Getting started is the hard part. Get support and advice from friends and fellow "buckaroos".<br>Experiences are often best when shared :)</p></div>
              </li>

              <li>
                <div class="collapsible-header"><i class="material-icons">trending_up</i>Live life to the fullest</div>
                <div class="collapsible-body"><p>Most of our life goals boil down to being happy and filling life with as many joyous occasions as possible.<br>So... don't forget to have fun along the way.</p></div>
              </li>

            </ul>


          </p>
        </div>
      </div>

    </div>
  </div>




  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Wanna climb a cliff? Whats stopping you? Find others that share same area of interest.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="assets/img/background3.jpg" alt="Unsplashed background img 3"></div>
  </div>


  <!-- footer -->
  <?php require_once "components/footer.php"; ?>
  <!-- footer ends-->


  <!--  Scripts-->
  <script src="assets/js/jquery-3.1.1.min.js"></script>
  <script src="assets/js/materialize.js"></script>
  <script src="assets/js/init.js"></script>
  <script type="text/javascript">
      $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
    $('.collapsible').collapsible();


  });
  </script>

  </body>
</html>

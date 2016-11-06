

<!-- nav starts-->  
<?php 
  if(!isset($_SESSION['uid']))  //user not logged in
  {
?>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">BUCKET LIST</a>
      <!-- for desktop-->
      <ul class="right hide-on-med-and-down">
        <li><a class="waves-effect waves-light btn" href="#modal1">Login</a></li>
        <li><a class="waves-effect waves-light btn" href="#modal2">Sign up!</a></li>
      </ul>



      <!-- desktop ends-->

      <!-- for mobile -->
      <ul id="nav-mobile" class="side-nav">
        <li><a class="waves-effect waves-light btn" href="#modal1">Login</a></li>
        <li><a class="waves-effect waves-light btn" href="#modal2">Sign up!</a></li>
      </ul>

      <!-- mobile ends-->
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>



<?php }else{ ?>

<ul id="dropdown1" class="dropdown-content">
  <li><a href="#">Profile</a></li>
  <li><a href="#">Settings</a></li>
  <li class="divider"></li>
  <li><a href="components/logout.php">Logout</a></li>
</ul>
  <ul id="dropdown2" class="dropdown-content">
  <li><a href="#!">Profile</a></li>
  <li><a href="#!">Settings</a></li>
  <li class="divider"></li>
  <li><a href="components/logout.php">Logout</a></li>
</ul>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">BUCKET LIST</a>
      
      <!-- for desktop-->
      <ul class="right hide-on-med-and-down">
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="allbuckets.php">Buckets</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#" data-activates="dropdown1"><?php echo $_SESSION['username']; ?><i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
      <!-- desktop ends-->



      <!-- for mobile -->
      <ul id="nav-mobile" class="side-nav">
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="allbuckets.php">Buckets</a></li>
        <li><a class="dropdown-button" href="#" data-activates="dropdown2">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>       
      </ul>

      <!-- mobile ends-->
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <?php } ?>

  <!-- navigation ends -->
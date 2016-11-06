<!DOCTYPE html>
<?php session_start(); ?>

<?php 
if(!isset($_SESSION['uid']))
	{ 
		header('Location:index.php'); 
	} 
?>


<?php require_once "class/db.php"; ?>


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

<!-- add starts here -->
<div id="add_btn">
	<a href="#addbuck" class="tooltipped btn-floating btn-large waves-effect waves-light blue" data-position="top" data-delay="50" data-tooltip="Add a new bucket"><i class="material-icons">add</i></a>
</div>

<div id="addbuck" class="modal">
  <div class="modal-content">
    <h4>New Bucket List</h4>
    <div class="row">
      <form class="col s12" method="POST" action="process/process_addbucket.php">
        <div class="row">

          <div class="input-field col s12">
            <i class="material-icons prefix">star</i>
            <input id="icon_prefix" type="text" class="validate" name="title">
            <label for="icon_prefix">Title</label>
          </div>

          <div class="input-field col s12">
            <i class="material-icons prefix">info_outline</i>
            <input id="icon_telephone" type="text" class="validate" name="description">
            <label for="icon_telephone">Description</label>
          </div>

          <div class="input-field col s12">
            <input id="secur" type="checkbox" value="1" class="validate" name="secur">
            <label for="secur">Make list private</label>
          </div>



        </div>
         <button class="modal-action modal-close btn waves-effect waves-light right" type="submit" name="action">Create
      <i class="material-icons right">add</i>
    </button> 
      </form>
    </div>
  </div>
  
</div>


<!-- add ends here -->




<!-- navigation-->
<?php require_once "components/nav.php"; ?>
<!-- navigation ends-->


  <div id="index-banner" class="parallax-container" >
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">MY BUCKET LIST</h1>
        <div class="row center">
          <h5 class="header col s12 light">What's on your bucket list? Adventure travel, volunteerism, crazy fun, connecting with nature?</h5>
        </div>
        <div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="assets/img/bucketlist.png" alt="Unsplashed background img 1"></div>
  </div>


<h3 style="text-align:center;color: rgba(0,0,0,0.7);">&nbsp;&nbsp;The List<i class="material-icons">list</i> </h3>
<!-- content-->

   <div class="row">

      	<?php 
      		$db = new Database;
      		$db->connect();
      		$uid = $_SESSION['uid'];
      		$query = "SELECT * FROM bucket WHERE user_id='$uid' ORDER BY timestmp DESC";
      		$result = $db->makequery($query);
      		$inx=0;
      		while($row = mysqli_fetch_assoc($result))
      		{ 
		  			$cls = "cls" . $inx;
		  			$inx++;
      			?>

        <!-- single bucket -->
        <div class="grid-example col s12 m6 l4">
		  <div class="card">
		    <div class="card-image waves-effect waves-block waves-light">
		      <img class="activator center-align bkimg" src="assets/img/bucket.jpg">
		    </div>
		    <div class="card-content-das">
		      <span class="card-title activator grey-text text-darken-4"><?php echo $row['title'] ?><i class="material-icons right">more_vert</i></span>

		      <p><a href="<?php echo '#'.$cls; ?>" class="btn waves-effect waves-light">Update</a>
		      <a href="#deletebuck" class="btn waves-effect waves-light">Delete</a></p>

		    </div>
		    <div class="card-reveal">
		      <span class="card-title grey-text text-darken-4"><?php echo $row['title'] ?><i class="material-icons right">close</i></span>
		      <p><?php echo $row['description'] . "<br>" . "<a href=bucket.php?buck_id=" . $row['bucket_id'] . ">View List"."</a>";  ?></p>
		    </div>
		  </div>
		</div>

		<!--modals-->


		  <!-- Update -->
		  		<!-- pre filled form being shown so as to update and make the changes -->

		<div id="<?php echo $cls; ?>" class="modal">
		  <div class="modal-content">
		    <h4>Update Bucket<i class="material-icons right">mode_edit</i></h4>
		    <div class="row">
		      <form class="col s12" method="POST" action="process/process_updatebucket.php">
		        <div class="row">

		          <div class="input-field col s12">
		            <i class="material-icons prefix">star</i>
		            <input id="icon_prefix" type="text" class="validate" name="title" value="<?php echo $row['title']; ?>">
		            <label for="icon_prefix">Title</label>
		          </div>

		          <div class="input-field col s12">
		            <i class="material-icons prefix">info_outline</i>
		            <input id="icon_telephone" type="tel" class="validate" name="description" value="<?php echo $row['description']; ?>">
		            <label for="icon_telephone">Description</label>
		          </div>

		          <input name="buck_id" value="<?php echo $row['bucket_id']; ?>" style="display: none;">
		        </div>
		        <button class="modal-action modal-close btn waves-effect waves-light " type="submit" name="action">Done
		      <i class="material-icons right">done</i>
		    </button> 

	      	 <button class="modal-action modal-close btn waves-effect waves-light">Cancel
		      <i class="material-icons right">skip_previous</i>
		    </button> 
		      </form>
		    </div>
		  </div>
		  
		</div>



		  <!-- Delete -->

		  <div id="deletebuck" class="modal">
		    <div class="modal-content">
		      <h4>Are you sure you want to update <?php echo $row['title'] . "event"; ?>?</h4>
		    </div>

		    <div class="modal-footer">
		    <hr>
			    <a href=<?php echo 'process/process_deletebucket.php?buck_id=' . $row['bucket_id']; ?> class="modal-action modal-close btn waves-effect waves-light " >Delete
			      <i class="material-icons ">done</i>
			    </a> 

			    <button style="margin-left: 20px;" class="modal-action modal-close btn waves-effect waves-light " >Cancel
			      <i class="material-icons">skip_previous</i>
			    </button> 
		    </div>
		  </div>

	<!-- modal ends-->



		<!-- single bucket ends -->


      			<?php

      		}
      	?>




    </div>



<!-- content ends -->


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
  });
  </script>

  </body>
</html>

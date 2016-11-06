<!DOCTYPE html>
<?php session_start(); ?>

<?php 
if(!isset($_SESSION['uid']))
	{ 
		header('Location:index.php'); 
	}
if(!isset($_GET['buck_id']))
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
  <!-- font awesome -->
  <link href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
   <script src="assets/js/jquery-3.1.1.min.js"></script>

</head>
<body>




<!-- navigation-->
<?php require_once "components/nav.php"; ?>
<!-- navigation ends-->
<br><br>

  <div class="row">
    <div class="col s12 m6 offset-m1">


      <form class="col s12" class="frma" id="addtask" method="POST" action="process/process_addtask.php">

      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">airplay</i>
          <input id="icon_prefix" type="text" class="validate" name="title">
          <label for="icon_prefix">Title</label>
        </div>

        <div class="input-field col s6">
          <i class="material-icons prefix">schedule</i>
          <input id="icon_schedule" type="date" class="datepicker" name="date">
          <label for="icon_schedule">Due Date</label>
        </div>

        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <textarea  id="icon_prefix" class="materialize-textarea" name="desc"></textarea>
          <label for="icon_prefix">Description</label>
        </div>



        <input style="display: none;" type="" name="buck_id" value="<?php echo $_GET['buck_id']; ?>">

       
        <button class="btn-floating btn-large waves-effect waves-light blue right" type="submit"><i class="material-icons">add</i></button>

      </div>
    </form>

    <br clear="all"><br>
        <ul class="collapsible popout itemlist" data-collapsible="accordion">
        <?php 
        require_once "process/function.php"; 
          $db = new Database;
          $db->connect();
          $uid = $_SESSION['uid'];
          $bkid = $_GET['buck_id'];
          $query = "SELECT * FROM tasks WHERE buckid='$bkid' ORDER BY taskid DESC";
          $result = $db->makequery($query);
          $ct = 0; //to check num of completed tasks
          while($row = mysqli_fetch_assoc($result))
          {          
          if($row['status']==0)
          {
            $color_task_header = "rgba(255, 0, 0, 0.68)";
          } 
          else
          {
            $color_task_header = "green";
            $ct++;
          }
          ?>
          <li>
            <div class="collapsible-header" style="color:white;background:<?php echo $color_task_header; ?>">
            <span class="left"><i class="material-icons">label</i><?php echo $row['tasktitle']; ?></span>
            <span class="right"><i class="material-icons">query_builder</i><?php echo $row['taskdate']; ?></span>
            </div>
            <div class="collapsible-body"><p><?php echo $row['taskdescription']; ?></p></div>
            <?php 
              if($_SESSION['uid'] == ufrmbid($bkid))
              {
            ?>
            <div style="text-align: right;">
            <?php 
            if($row['status']==0) 
            {
              echo '<i class="material-icons">present_to_all</i>&nbsp;&nbsp;';
              $tid = $row['taskid'];
              $urln = 'process/process_comptask.php?buck_id='.$bkid.'&task_id='.$tid;
              echo '<a href='.$urln. '>Completed?&nbsp;&nbsp;</a>';
            }
            else
            {
              echo '<i class="material-icons">done</i>&nbsp;&nbsp;';
              echo '<a href="">Completed&nbsp;&nbsp;</a>';
            }
            ?>
              
            </div>
            <?php
              }
            else
            {
              ?>

              <style type="text/css">
              .frma, #addtask{
                display: none;
                visibility: hidden;
              }
              </style>

              <?php
              }
            
            ?>
          </li>
          <br clear="all"/>
          <?php } ?> 
      </ul>


    </div>


    <div class="col s12 m5">

      <div class="row">

          <div class="col s12 m7 offset-m3">
            <div class="card">

              <div class="card-image">
                <img src="assets/img/bucketlistbg.jpg" class="imgside center">
              </div>
              <div class="card-content crdr">
                <p>Do you have it to complete the list you made? </p>
                  <ul class="center-align">
                    <li style="border-right: 1px solid grey;">Total Goals<br>

                    <?php $rows = mysqli_num_rows($result); 
                      echo $rows;
                    ?>
                    <i class="material-icons">toc</i></li>
                    <li>Completed<br>
                    <?php echo $ct; ?>
                    <i class="material-icons">done</i></li>
                  </ul>
              </div>
            </div>
          </div>
      </div>

      <div class="row">
        <div class="col s11 offset-s1"><p class="center-align">Share My Bucket List:</p></div>
        
        <div class="col s2 offset-s3">
          <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//localhost/projects/iethack/hack/bucket.php?buck_id=<?php echo $bkid; ?>"><i class="fa fa-3x fa-facebook" aria-hidden="true"></i></a>
        </div>

        <div class="col s2 offset-s1">
         <a href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A//localhost/projects/iethack/hack/bucket.php?buck_id=5&title=Bucket%20list&summary=&source="><i class="fa fa-3x fa-linkedin" aria-hidden="true"></i></a>
          
        </div>

        <div class="col s2 offset-s1">
        <a href="https://twitter.com/home?status=http%3A//localhost/projects/iethack/hack/bucket.php?buck_id=<?php echo $bkid; ?>"><i class="fa fa-3x fa-twitter" aria-hidden="true"></i></a>
        </div>
      </div>

    <br><br>
      <div class="row">
        <div class="col s11 offset-s1"><p class="center-align">Bucket List Link:</p></div>
        <input class="col s8 offset-s2" type="text" value=<?php echo "localhost/projects/iethack/hack/bucket.php?buck_id=" . $bkid; ?> />
      </div>


    </div>


  </div>




  <!-- footer -->
  <?php require_once "components/footer.php"; ?>
  <!-- footer ends-->


  <!--  Scripts-->
 
  <script src="assets/js/materialize.js"></script>
  <script src="assets/js/init.js"></script>
  <script type="text/javascript">
      $(document).ready(function(){

    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });


    $('.collapsible').collapsible();
     $("ul.itemlist").find('li:first').addClass('active');
    $("ul.itemlist").find('li:first').find('div:first').addClass('active');
    $("ul.itemlist").find('li:first').children('div').eq(1).css('display','block');



  });

  </script>

  </body>
</html>

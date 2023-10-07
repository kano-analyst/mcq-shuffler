<?PHP 
if(session_status()== PHP_SESSION_NONE){

session_start();}
if(!isset($_SESSION['logged_in']) ){
    header('location: ../views/login.php');
}
include('../model/conn.php');
include('../include/dashboard.php');
?>
<?php
$username=$_SESSION['name'];
$testId=$_GET['testId'];
 $query= "SELECT * FROM `test` WHERE `testId`='$testId' ";
                $result=$conn->query($query);
                if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)) {
        $school=$row['school'];
          $department=$row['department'];
            $course=$row['course'];
              $code=$row['code'];
              $details=$row['details'];
                $duration=$row['duration'];
                  $date=$row['date'];
                    $instructions=$row['instructions']; 
$testId=$row['testId'];

            }
        }
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>mcqshuffler.uni.ng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../css/mystyle.css" rel="stylesheet" />
    <link type="text/css" href="../bootstrap.css" rel="stylesheet" />
   <style>
   .tr{
     padding:2px;
   }
   .question{
     margin-left:70px;
   }
   .options{
     margin-left:30px;
   }</style>
</head>
<body>
     <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row hidden-print">
                <div class="col-lg-12">
                    <h3 class="page-header" style="text-align:center;">Test View</h3>
                     </div>
            </div>
<div class="hidden-print">  
    <button style="position:center" type="button" class="btn btn-primary btn-default" data-toggle="modal" data-target="#myModal"><i class="fa fa-files-o fa-fw"></i>Add Question</button>
   <button style="position:center" type="button" class="btn btn-primary btn-default" data-toggle="modal" data-target="#paper_type"><i class="fa fa-file-text-o fa-fw"></i>Generate Paper Type</button>
  <button style="position:center" type="button" onclick="print()"class="btn btn-primary btn-default"><i class="fa fa-print fa-fw"></i>Print</button>
<?php if(isset($_GET['question_flag'])){
  echo '<p style="text-align:center;color:red";>Question Successfully added</p>';
}?>
</div>
<h2 style="text-align:center;"><img src="../images/buk-logo.jpg" height="75px" width="100px"/><?php echo $school;?></h2>
<h3 style="text-align:center;">Department of <?php echo $department;?></h3>
<h3 style="text-align:center;"><?php echo $details;?></h3>
<h5><span style="padding-left:120px;">Course Name: <?php echo $course;?></span>
<span style="padding-left:250px;">Date:<?php echo $date;?></span></h5>
<h5><span style="padding-left:120px;">Course Code: <?php echo $code;?></span>
<span style="padding-left:391px;">Duration:<?php echo $duration;?></span></h5>
<h5 style="padding-left:120px;">Instructions: <?php echo $instructions;?></h5><BR/>
<h4 style="text-align:center;">Questions</h4>
<!-- <table class="table">
<tr><td><h5>Course Code:</h5></td><td></td></tr>
 <tr><td></td></tr>
  <tr><td></td></tr>
</table> -->
<?php
 $numbering=1; 
 $query="SELECT * FROM `mcq` WHERE `testId`='$testId' ORDER BY `id` desc";
  $result=$conn->query($query);
                if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)) {
          $question=$row['question']; 
          $a=$row['a']; 
          $b=$row['b']; 
          $c=$row['c']; 
          $d=$row['d']; 
          $answer=$row['answer'];
          $id=$row['id']; 
      echo '<div class="question">';
        echo '<p>'. $numbering.': '.$question.'</p>';
          echo '<div class="options">';
         echo '<p>A) '.$a.'</p>';
          echo '<p>B) '.$b.'</p>';
           echo '<p>C) '.$c.'</p>';
            echo '<p>D) '.$d.'</p>';
       echo '<p>Answer: '.$answer.'</p>';
       echo '<button>Edit</button><a style="position:center" href="../controllers/delete_question_handler.php?id='.$id.'" class="btn btn-danger" onclick="ConfirmDelete()" >Delete</a></div>';
       echo '</div>';
         $numbering++;
       } }else {
               echo '<p style="text-align:center;">No Questions Added Yet. Click Add Question to Add a new Question</p>';
        }
      
?>
</div>
   
   </div>
   
   
   
   
   
   
   
   
   
   
   
   
   
    <!-- Modal View -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"style="text-align:center;color:rgb(100,105,255);" id="myModalLabel">Add Multipe Choice Question</h4>
      </div>
      <div class="modal-body">
    <?php echo  '<form action="../controllers/add_question_controller.php?testId='.$testId. '" method="post">';?>
  <div class="form-group">
    <label for="exampleInputEmail1">Question</label>
    <textarea  type="text" class="form-control" name="question" placeholder="Enter Your Question Here" required></textarea>
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Option A</label>
    <input type="text" class="form-control" name="option_a" placeholder="Option A" required>
  </div>
      <div class="form-group">
    <label for="exampleInputEmail1">Option B</label>
    <input type="text" class="form-control" name="option_b" placeholder="Option B" required>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Option C</label>
    <input type="text" class="form-control" name="option_c" placeholder="Option C">
  </div>
    <div class="form-group">
<label for="exampleInputEmail1">Option D</label>
<input type="text" class="form-control" name="option_d" placeholder="Option D">
</div>
<div class="form-group">
<label for="exampleInputEmail1">Choose Answer</label>
<label class="checkbox-inline">
<input type="checkbox" name="answer_a" value="a">  A
</label>
<label class="checkbox-inline">
<input type="checkbox" name="answer_b" value="b"> B
</label>
<label class="checkbox-inline">
<input type="checkbox" name="answer_c" value="c"> C
</label>
<label class="checkbox-inline">
<input type="checkbox" name="answer_d" value="d"> D
</label>
</div>
    
    
   
    <br/>
 <button type="submit"  class="btn btn-primary">Save changes</button>
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      
  
</form>
      </div>
      
    </div>
  </div>
</div>
<!--End of Modal View -->
  <!-- Modal View 2 -->
<div class="modal fade" id="paper_type" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"style="text-align:center;color:rgb(100,105,255);" id="myModalLabel">Generate Question Types</h4>
      </div>
      <div class="modal-body">
      <?php echo  '<form action="../controllers/paper_type_generator.php?testId='.$testId.'" method="post">';?>
  <div class="form-group">
    <label for="exampleInputEmail1">Number of Questions</label>
    <input  type="text" class="form-control" name="question_no" placeholder="Enter No. of Question For The Test" required>
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Number of Paper Types to Generate</label>
    <input type="text" class="form-control" name="paper_type" placeholder="Number of Paper Types to Generate" required>
  </div>
      
 <button type="submit"  class="btn btn-primary">Generate</button>
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      
  
</form>
      </div>
      
    </div>
  </div>
</div>
<!--End of Modal View -->

</body>
<script>
             function ConfirmDelete(){
               var x=confirm("Are you sure you want to delete this Question?\n  Note that it cannot be undone");
               if(x){
                 return true;
                // window.location.href= "";
               }else{
                 return false;
               }
             }
             </script>
</html>
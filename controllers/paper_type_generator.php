<?php 
if(session_status()== PHP_SESSION_NONE){

session_start();}
if(!isset($_SESSION['logged_in']) ){
    header('location: ../views/login.php');
}
include('../model/conn.php');
include('../include/dashboard.php');

$testId=$_GET['testId'];
$question_no= $_POST['question_no'];
$question_no2=$question_no;
$type=$_POST['paper_type'];
$paper_type=$type;
$me=$type;
$paper_type2=$paper_type;
$paper_type3=$paper_type2;
$paper_type4=$paper_type3;
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Paper Type Generator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.css" />
    <script src="../js/bootstrap.js"></script>
       <style>
   .tr{
     padding:2px;
   }
   .question{
     margin-left:70px;
   }
   @page{
     size:auto;
     margin: 5mm;
   }
   
   @media print{
     .page-break{display:block;page-break-after:always;}
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
                    <h3 class="page-header" style="text-align:center;">Generated Paper Types</h3>
                     </div>
<?php echo '<button style="position:center" type="submit"class="btn btn-primary btn-warning"><a  href="../views/view_test.php?testId='.$testId.'"><i class="fa fa-mail-reply-all fa-fw"></i>Back</a></button>'; ?>

   <button style="position:center" type="button" onclick="print()"class="btn btn-primary btn-default"><i class="fa fa-print fa-fw"></i>Print</button>
  </div>

<?php  $query= "SELECT * FROM `test` WHERE `testId`='$testId' ";
                $result=$conn->query($query);
                if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)) {
        $school=$row['school'];
          $department=$row['department'];
            $course=$row['course'];
            $details=$row['details'];
              $code=$row['code'];
                $duration=$row['duration'];
                  $date=$row['date'];
                    $instructions=$row['instructions']; 
                      $testId=$row['testId'];

            }
        }
        
?>
<?php
$answer_array=array(); 

while ($paper_type>0) {
switch ($paper_type) {
  case $paper_type==$paper_type4: $indicator='A'; break;
  case $paper_type3-1: $indicator='B';  break;
  case $paper_type3-2: $indicator='C';  break;
  case $paper_type3-3: $indicator='D';  break;
  case $paper_type3-4: $indicator='E';  break; 
  case $paper_type3-5: $indicator='F';  break;
  case $paper_type3-6: $indicator='G';  break;
  case $paper_type3-7: $indicator='H';  break;
  case $paper_type3-8: $indicator='I';  break;
  case $paper_type3-9: $indicator='J';  break;
  case $paper_type3-10:$indicator='K';  break;
  case $paper_type3-11: $indicator='L'; break; 
  case $paper_type3-12: $indicator='M'; break; 
  case $paper_type3-13: $indicator='N'; break; 
  case $paper_type3-14: $indicator='O'; break; 
  case $paper_type3-15: $indicator='P'; break; 
  case $paper_type3-16: $indicator='Q'; break; 
  case $paper_type3-17: $indicator='R'; break; 
  case $paper_type3-18: $indicator='S'; break; 
  case $paper_type3-19: $indicator='T'; break; 
  case $paper_type3-20: $indicator='U'; break;   
  default: $indicator=1; break;
}
echo '<div class="page-break">';
  echo '<h2 style="text-align:center;"><img src="../images/buk-logo.jpg" height="75px" width="100px"/>'.$school.'</h2>';
echo '<h3 style="text-align:center;">Department of '.$department.'</h3>';
echo'<h3 style="text-align:center;">'.$details.'</h3>';
echo '<h5><span style="padding-left:120px;">Course Name: '.$course.'</span>';
echo '<span style="padding-left:250px;">Date: '.$date.'</span></h5>';
echo'<h5><span style="padding-left:120px;">Course Code: '.$code.'</span>';
echo '<span style="padding-left:391px;">Duration: '.$duration.'</span></h5>';
echo '<span style="padding-left:120px;">Paper Type: '.$indicator.'</span></h5>';
echo '<h5 style="padding-left:120px;">Instructions: '.$instructions.'</h5><BR/>';
 $numbering=1; 
 $query="SELECT * FROM `mcq` WHERE `testId`='$testId' ORDER BY rand() LIMIT $question_no ";
  $result=$conn->query($query);
    $result2=$conn->query($query);
    
                if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)) {
          $question=$row['question']; 
          $a=$row['a']; 
          $b=$row['b']; 
          $c=$row['c']; 
          $d=$row['d']; 
          $answer=$row['answer']; 
               array_push($answer_array,$answer);
      echo '<div class="question">';
        echo '<p>'. $numbering.': '.$question.'</p>';
          echo '<div class="options">';
         echo '<p>A) '.$a.'</p>';
          echo '<p>B) '.$b.'</p>';
           echo '<p>C) '.$c.'</p>';
            echo '<p>D) '.$d.'</p>';
      
       echo '</div>';
       echo '</div>';
      
         $numbering++;
         
       } }else {
               echo '<p style="text-align:center;">No Questions Added Yet. Click Add Question to Add a new Question</p>';
        }
 $paper_type--;
 echo '</div>';
}
//print_r($answer_array);
/*
  Answer Sheet Generator
  */
 
 $new_array= array_chunk($answer_array, $question_no,true);
  //print_r($new_array);
   $numbering2=1;
 $index=0; 
 while ($paper_type2>0) {
switch ($paper_type2) {
  case $paper_type2==$paper_type4: $indicator='A'; break;
  case $paper_type3-1: $indicator='B';  break;
  case $paper_type3-2: $indicator='C';  break;
  case $paper_type3-3: $indicator='D';  break;
  case $paper_type3-4: $indicator='E';  break; 
  case $paper_type3-5: $indicator='F';  break;
  case $paper_type3-6: $indicator='G';  break;
  case $paper_type3-7: $indicator='H';  break;
  case $paper_type3-8: $indicator='I';  break;
  case $paper_type3-9: $indicator='J';  break;
  case $paper_type3-10:$indicator='K';  break;
  case $paper_type3-11: $indicator='L'; break; 
  case $paper_type3-12: $indicator='M'; break; 
  case $paper_type3-13: $indicator='N'; break; 
  case $paper_type3-14: $indicator='O'; break; 
  case $paper_type3-15: $indicator='P'; break; 
  case $paper_type3-16: $indicator='Q'; break; 
  case $paper_type3-17: $indicator='R'; break; 
  case $paper_type3-18: $indicator='S'; break; 
  case $paper_type3-19: $indicator='T'; break; 
  case $paper_type3-20: $indicator='U'; break;   
  default: $indicator=1; break;
}
echo '<div class="page-break">';
echo '<h2 style="text-align:center;"><img src="../images/buk-logo.jpg" height="75px" width="100px"/>'.$school.'</h2>';
echo '<h3 style="text-align:center;">Department of '.$department.'</h3>';
echo'<h3 style="text-align:center;"> '.$details.'</h3>';
echo '<h5><span style="padding-left:120px;">Course Name: '.$course.'</span>';
echo '<span style="padding-left:250px;">Date: '.$date.'</span></h5>';
echo'<h5><span style="padding-left:120px;">Course Code: '.$code.'</span>';
echo '<span style="padding-left:391px;">Duration: '.$duration.'</span></h5>';
echo '<span style="padding-left:120px;">Paper Type: '.$indicator.'</span></h5>';
echo '<h4 style="text-align:center;">Marking Scheme</h4><BR/>';
 $x=0;
 $question_no2=1;
 
foreach($new_array[$index] as $x => $x_value) {
  
      echo $question_no2 .": " . $x_value;
  //$answer_array=array_shift( $answer_array() );
    echo "<br>";
    $question_no2++;
     
 } //       $index++;
$index++;
 $paper_type2--; 
 echo '</div>';
} 
//$answer_array="";
?>
  </div>
  </div> <!-- End  of Page Content -->
</body>
</html>   
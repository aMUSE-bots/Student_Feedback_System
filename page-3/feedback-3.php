<?php
session_start();
// ini_set('display_errors', 1); 
// ini_set('display_startup_errors', 1); 
// error_reporting(E_ALL);
error_reporting(0);
if(!isset($_SESSION['sem'])){
    header('Location: ../index.html');
}else{


$con =mysqli_connect("localhost", "root", "", "phpform");
$sem = $_SESSION['sem'];
$dept = $_SESSION['dept'];
$query = "SELECT * FROM adminconfig5 where sem='$sem' &&  dept='$dept' ";
$query_run = mysqli_query($con, $query);
while($row=mysqli_fetch_array($query_run)){
  $sem=$row['sem'];
  $acad_year=$row['academic_year'];
  $dept=$row['dept'];
  $cc1 = $row['cc1'];
  $cc2 = $row['cc2'];
  $cc3 = $row['cc3'];
  $cc4 = $row['cc4'];
  $cc5 = $row['cc5'];
  $cc6 = $row['cc6'];
  $ct1 = $row['ct1'];
  $ct2 = $row['ct2'];
  $ct3 = $row['ct3'];
  $ct4 = $row['ct4'];
  $ct5 = $row['ct5'];
  $ct6 = $row['ct6'];
  $cs1 = $row['cs1'];
  $cs2 = $row['cs2'];
  $cs3 = $row['cs3'];
  $cs4 = $row['cs4'];
  $cs5 = $row['cs5'];
  $cs6 = $row['cs6'];
  $fac1 = $row['fac1'];
  $fac2 = $row['fac2'];
  $fac3 = $row['fac3'];
  $fac4 = $row['fac4'];
  $fac5 = $row['fac5'];
  $fac6 = $row['fac6'];
  $facs1 = $row['facs1'];
  $facs2 = $row['facs2'];
  $facs3 = $row['facs3'];
  $facs4 = $row['facs4'];
  $facs5 = $row['facs5'];
  $facs6 = $row['facs6'];
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Feedback-Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div style="overflow-x:auto;">

<div class="container">
<form  action="logic-3.php" method="POST" class="form-welcome" style="height:auto;" >
    <h1 align="center" class="form-heading">MYSORE UNIVERSITY SCHOOL OF ENGINEERING, MYSORE- 570006</h1>
    <h1 align="center" class="form-heading">Students Feedback on Faculty</h1>
    <h1 align="center" class="form-heading"><?php echo $dept; ?></h1>
    <h2>Academic-Year:<?php echo $acad_year; ?> <span class="float-right"><h2>Class: BE (<?php echo $dept; ?>)- MU21-<?php echo $sem; ?></h2></span></h2>
    <h2 align="center"><strong>( Note:</strong>&nbsp;Please Provide True & Frank opinion to help improve the system )</h2>

    <table>
        <tr>
            <th  colspan="2">Course title (faculty handling the course)➠</th>
            <!-- <th>desck</th> -->
            <th width="50px" rowspan="3" class="vertical-text"><?php echo $cs1; ?><br />(<?php echo $facs1; ?>)</th>
            <th width="50px" rowspan="3" class="vertical-text"><?php echo $cs2; ?><br />(<?php echo $facs2; ?>)</th>
            <th width="50px" rowspan="3" class="vertical-text"><?php echo $cs3; ?><br />(<?php echo $facs3; ?>)</th>
            <th width="50px" rowspan="3" class="vertical-text"><?php echo $cs4; ?><br />(<?php echo $facs4; ?>)</th>
            <th width="50px" rowspan="3" class="vertical-text"><?php echo $cs5; ?><br />(<?php echo $facs5; ?>)</th>
            <th width="50px" rowspan="3" class="vertical-text"><?php echo $cs6; ?><br />(<?php echo $facs6; ?>)</th>
        </tr>

        <tr>
            <th colspan="2">Feedback Items (⬇)</th>

        </tr>

        <tr>
            <th colspan="2">Course Organization</th>
            
        </tr>
<!-- COURSE ORGANIZATION -->
        <tr>
            <td width="50px">01</td>
            <td>Teacher's subject knowledge and preparation for every class (ability to explain the areas of confusion with live examples)</td>
            <td>
                <select name="Q11" id="Q11" required >
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q12" id="Q12" >
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q13" id="Q13">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q14" id="Q14">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q15" id="Q15">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q16" id="Q16">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
        </tr>
        <tr>
            <td width="50px">02</td>
            <td>Systematic Coverage of Syllabus and completing to students satisfaction</td>
            <td>
                <select required  name="Q21" id="Q21">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q22" id="Q22">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q23" id="Q23">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q24" id="Q24">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q25" id="Q25">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q26" id="Q26">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
        </tr>
        <tr>
            <td width="50px">03</td>
            <td>Teacher's ability to provide motivation towards subject (ability to bring conceptual clarity and thinking)</td>
            <td>
                <select required  name="Q31" id="Q31">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q32" id="Q32">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q33" id="Q33">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q34" id="Q34">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q35" id="Q35">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q36" id="Q36">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
        </tr>
<!-- Punctualityt and classroom management -->
        <tr>
            <th colspan="7">Punctuality and classroom management</th>
            
        </tr>
        <tr>
            <td width="50px">04</td>
            <td>Maintanance of Discipline in class room and overall control</td>
            <td>
                <select required  name="Q41" id="Q41">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q42" id="Q42">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q43" id="Q43">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q44" id="Q44">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q45" id="Q45">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q46" id="Q46">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
        </tr>
        <tr>
            <td width="50px">05</td>
            <td>Punctuality and regularity of teacher in coming to college and engaging the class for whole time</td>
            <td>
                <select required  name="Q51" id="Q51">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q52" id="Q52">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q53" id="Q53">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q54" id="Q54">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            
            <td>
                <select required  name="Q55" id="Q55">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q56" id="Q56">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
        </tr>
<!-- Presentation Skills -->
        <tr>
            <th colspan="7">Presentation Skills</th>
            
        </tr>
        <tr>
            <td width="50px">06</td>
            <td>Usage of chalk / white board and legibility of writing on board</td>
            <td>
                <select required  name="Q61" id="Q61">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q62" id="Q62">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q63" id="Q63">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q64" id="Q64">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q65" id="Q65">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q66" id="Q66">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
        </tr>
        <tr>
            <td width="50px">07</td>
            <td>Teacher communication in English with voice clarity and Audibility</td>
            <td>
                <select required  name="Q71" id="Q71">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q72" id="Q72">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q73" id="Q73">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q74" id="Q74">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q75" id="Q75">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q76" id="Q76">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
        </tr>
<!-- Teacher-Student Interaction -->
        <tr>
            <th colspan="7">Teacher-Student Interaction</th>
            
        </tr>
        <tr>
            <td width="50px">08</td>
            <td>Extra care towards slow learners & counselling the students</td>
            <td>
                <select required  name="Q81" id="Q81">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q82" id="Q82">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q83" id="Q83">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q84" id="Q84">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q85" id="Q85">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q86" id="Q86">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
        </tr>
        <tr>
            <td width="50px">09</td>
            <td>Providing opportunity for questions & discussions in the class room & accessbility outside the classroom to clarify doubts</td>
            <td>
                <select required  name="Q91" id="Q91">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q92" id="Q92">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q93" id="Q93">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q94" id="Q94">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q95" id="Q95">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q96" id="Q96">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
        </tr>
<!-- Evaluation of Student's Performance -->
        <tr>
            <th colspan="7">Evaluation of Student's Performance</th>
            
        </tr>
        <tr>
            <td width="50px">10</td>
            <td>Unbiased Evaluation of Sessional exams answer scripts</td>
            <td>
                <select required  name="Q101" id="Q101">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q102" id="Q102">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q103" id="Q103">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q104" id="Q104">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q105" id="Q105">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q106" id="Q106">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
        </tr>
        <tr>
            <td width="50px">11</td>
            <td>Giving assignments & exercises to make students through in the subject</td>
            <td>
                <select required  name="Q111" id="Q111">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q112" id="Q112">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q113" id="Q113">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q114" id="Q114">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q115" id="Q115">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q116" id="Q116">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
        </tr>
<!-- Attitude Towards the student -->
        <tr>
            <th colspan="7">Attitude Towards the student</th>
            
        </tr>
        <tr>
            <td width="50px">12</td>
            <td>The impartial treatment of the students by the teacher</td>
            <td>
                <select required  name="Q121" id="Q121">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q122" id="Q122">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q123" id="Q123">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q124" id="Q124">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q125" id="Q125">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
            <td>
                <select required  name="Q126" id="Q126">
                    <option value="">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
        </tr>
        <tr>
            <th colspan="7"><-- 5-Excellent &nbsp;&nbsp; 4-Very Good &nbsp;&nbsp; 3-Good &nbsp;&nbsp; 2-Satisfactory &nbsp;&nbsp; 1-Poor --> </th>
        </tr>
    </table>
<br /><br /><br />
    <table>
        <tr>
            <th>Course Code</th>
            <th colspan="2">Course Title</th>
            <th colspan="2">Faculty handled the course</th>
        </tr>
        <tr>
            <td><?php echo $cc1; ?></td>
            <td><?php echo $cs1; ?></td>
            <td><?php echo $ct1; ?></td>
            <td><?php echo $facs1; ?></td>
            <td><?php echo $fac1; ?></td>
        </tr>
        <tr>
            <td><?php echo $cc2; ?></td>
            <td><?php echo $cs2; ?></td>
            <td><?php echo $ct2; ?></td>
            <td><?php echo $facs2; ?></td>
            <td><?php echo $fac2; ?></td>
        </tr>
        <tr>
            <td><?php echo $cc3; ?></td>
            <td><?php echo $cs3; ?></td>
            <td><?php echo $ct3; ?></td>
            <td><?php echo $facs3; ?></td>
            <td><?php echo $fac3; ?></td>
        </tr>
        <tr>
            <td><?php echo $cc4; ?></td>
            <td><?php echo $cs4; ?></td>
            <td><?php echo $ct4; ?></td>
            <td><?php echo $facs4; ?></td>
            <td><?php echo $fac4; ?></td>
        </tr>
        <tr>
            <td><?php echo $cc5; ?></td>
            <td><?php echo $cs5; ?></td>
            <td><?php echo $ct5; ?></td>
            <td><?php echo $facs5; ?></td>
            <td><?php echo $fac5; ?></td>
        </tr>
        <tr>
            <td><?php echo $cc6; ?></td>
            <td><?php echo $cs6; ?></td>
            <td><?php echo $ct6; ?></td>
            <td><?php echo $facs6; ?></td>
            <td><?php echo $fac6; ?></td>
        </tr>

    </table>
<br /><br />

<p><b>Please select the domain in which you're encountering problems:</b></p>
 <input type="radio" id="html" name="fav_language" value="Academic">
 <label for="html">Academic</label><br>
 <input type="radio" id="css" name="fav_language" value="Social">
 <label for="css">Social(ragging, molesting, sexual abuse, etc)</label><br>
 <input type="radio" id="javascript" name="fav_language" value="Finance">
 <label for="javascript">Finance</label><br>
 <input type="radio" id="html" name="fav_language" value="Academic">
 <label for="html">Administrative</label><br>
 <input type="radio" id="css" name="fav_language" value="Social">
 <label for="css">Co-curriculars</label><br>
 <input type="radio" id="javascript" name="fav_language" value="Finance">
 <label for="javascript">Others</label><br>

 <textarea  style="width:100%;height:100px;padding:3px;" type="text" id="feedback" name="feedback" placeholder="Express your grief(s) here."></textarea>
<br>
<h2> <?php
// Set the new timezone
date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-y h:i:s');
echo $date;
?></h2>
<button type="reset" name="reset" class="submit-btn-back">Reset<span><button type="submit" name="submit" class="submit-btn">Submit</button></span></button>
</form>
</div>
<br /><br />
</div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>
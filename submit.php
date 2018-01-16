<!DOCTYPE html>
<html>

<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">-->

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />
<meta content="Microsoft FrontPage 12.0" name="GENERATOR" />
<meta content="FrontPage.Editor.Document" name="ProgId" />
<title>SUBMIT RIDE (5) - OXON HILL BICYCLE AND TRAIL CLUB</title>
<style type="text/css">
@import url('../css/jquery.datepick.css');
/* Or use these for a ThemeRoller theme
@import "themes16/southstreet/ui.all.css";
@import "css/ui-southstreet.datepick.css";
*/
body {
	padding: 0;
	margin: 0;
	background-color: #FFFF99;
	color: black;
	font: 12pt arial, verdana, helvetica, geneva, sans-serif;
	font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
	font-family: arial,verdana,sans-serif;
	font-size: 1em;
}

#wrapper {
	background: white; 
	width: 900px;
    margin: 0 auto;
}
#container {
	width: 96%;
	margin: auto;
}
#inlineDatepicker {
	width: 650px;
	margin: 0 auto;
	height:175px;
	text-align:center;
	border-color:black;
	border-width:thick;

	

}
#form {
	width: 800px;
	margin: 0 auto;
}

 
.error {
	color: #FF0000;
}

.auto-style1 {
	color: gray;
}

select option {
	color: black;
}
select option:first-child {
	color: grey;
}
select.empty {
	color: grey;
}
/* Hidden placeholder */
select option[disabled]:first-child {
	display: none;
}

</style>
<link href="../css/jquery.clockpick.1.2.7.css" rel="stylesheet" type="text/css" />
<link href="../css/jquery.cluetip.1.0.4.css" rel="stylesheet" type="text/css" />
<script src="../js/jquery.js" type="text/javascript"></script>
<script src="../js/jquery.datepick.js" type="text/javascript"></script>
<script src="../js/jquery.clockpick.1.2.7.js" type="text/javascript"></script>
<script src="../js/jquery.cluetip.1.0.4.js" type="text/javascript"></script>
<script src="../js/submit.js" type="text/javascript"></script>
<script src="formValidator.js" type="text/javascript"></script>
<script>
// JavaScript toggles the grey color of the control when the placeholder is selected
$("select:has(option[value=]:first-child)").on('change', function() {
  $(this).toggleClass("empty", $.inArray($(this).val(), ['', null]) >= 0);
}).trigger('change');
</script>
</head>

<body alink="#FF0000" bgcolor="#FFFF99" link="#0000FF" text="#000000" vlink="#FF0000">

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
$Day_of_Week = $Month = $Day_of_Month = $Year = "";
$Class = $Distance = $Starting_Time = $AmPm = "";
$Ride_Name = $Starting_Point = $Directions = "";
$Ride_Leader = $Phone = $Email = "";
$successMessage = "";

$Ride_Name_Error = "";



//echo "before"; echo "<br>";
//echo $_SERVER["REQUEST_METHOD"];  echo "<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	
	//echo $_POST["Day_of_Week"]; echo "<br>";
	if (empty($_POST["Day_of_Week"]))
		{ 
		$Day_of_Week_Error = "Day of Week cannot be blank";
		}
	else 
		{
		$Day_of_Week = test_input($_POST["Day_of_Week"]);
		}
		
	
	//echo $_POST["Month"]; echo "<br>";
	if (empty($_POST["Month"]))
		{ 
		$Month_Error = "Month cannot be blank";
		}
	else 
		{
		$Month = test_input($_POST["Month"]);
		}
		
	//echo $_POST["Day_of_Month"]; echo "<br>";
	if (empty($_POST["Day_of_Month"]))
		{ 
		$Day_of_Month_Error = "Day_of_Month cannot be blank";
		}
	//else 
		{
		$Day_of_Month = test_input($_POST["Day_of_Month"]);
		}
		
	//echo $_POST["Year"]; echo "<br>";
	if (empty($_POST["Year"]))
		{ 
		$Year_Error = "Year cannot be blank";
		}
	else 
		{
		$Year = test_input($_POST["Year"]);
		}
		
	
	//echo $_POST["Ride_Name"]; echo "<br>";
	if (empty($_POST["Ride_Name"]))
		{ 
		$Ride_Name_Error = "Ride Name cannot be blank";
		}
	else 
		{
		$Ride_Name = test_input($_POST["Ride_Name"]);
		}
		
	
	
	//echo $_POST["Class"]; echo "<br>";
	if (empty($_POST["Class"]))
		{ 
		$Class_Error = "Class cannot be blank";
		}
	else 
		{
		$Class = test_input($_POST["Class"]);
		}
	
	
	
	//echo $_POST["Distance"]; echo "<br>";
	if (empty($_POST["Distance"]))
		{ 
		$Distance_Error = "Distance cannot be blank";
		}
	else 
		{
		$Distance = test_input($_POST["Distance"]);
		}
	
	
	//echo $_POST["Time"]; echo "<br>";
	if (empty($_POST["Time"]))
		{ 
		$Time_Error = "Timecannot be blank";
		}
	else 
		{
		$Time= test_input($_POST["Time"]);
		}
	
	
	//echo $_POST["AM_or_PM"]; echo "<br>";
	if (empty($_POST["AM_or_PM"]))
		{ 
		$AM_or_PM_Error = "AM_or_PM cannot be blank";
		}
	else 
		{
		$AM_or_PM= test_input($_POST["AM_or_PM"]);
		}
	
	

	
	//echo $_POST["Starting_Point"];
	if (empty($_POST["Starting_Point"]))
		{ 
		//echo "blank";
		//$Starting_Point_Error = "Starting Point cannot be blank";
		}
	else 
		{
		//echo "else";
		$Starting_Point = test_input($_POST["Starting_Point"]);
		}
	
	
	//echo $_POST["Directions"];
	if (empty($_POST["Directions"]))
		{ 
		//echo "blank";
		//$Directions_Error = "Directions cannot be blank";
		}
	else 
		{
		//echo "else";
		$Directions = test_input($_POST["Directions"]);
		}
	
	
	//echo $_POST["Description"];
	if (empty($_POST["Description"]))
		{ 
		//echo "blank";
		//$Description_Error = "Ride Name cannot be blank";
		}
	else 
		{
		//echo "else";
		$Description = test_input($_POST["Description"]);
		}
		
	
	//echo $_POST["Ride_Leader"]; echo "<br>";
	if (empty($_POST["Ride_Leader"]))
		{ 
		$Ride_Leader_Error = "Ride_Leader cannot be blank";
		}
	else 
		{
		$Ride_Leader = test_input($_POST["Ride_Leader"]);
		}
	
	
	
	//echo $_POST["Phone"]; echo "<br>";
	if (empty($_POST["Ride_Leader"]))
		{ 
		$Phone_Error = "Phone cannot be blank";
		}
	else 
		{
		$Phone = test_input($_POST["Phone"]);
		}
	
	
	
	//echo $_POST["Email"]; echo "<br>";
	if (empty($_POST["Email"]))
		{ 
		$Email_Error = "Email cannot be blank";
		}
	else 
		{
		$Email = test_input($_POST["Email"]);
		}
	
  if (empty($_POST["hash"])) {
    $previousHashErr = "Hash is required";
  } else {
    $previousHash = test_input($_POST["hash"]);
    //echo "previousHash = ".$previousHash."<br><br>";
  }



//echo "SUCCESS!!! <br/>";
$monthArray=array("","Jan","Feb","March","April","May","June","July","Aug","Sept","Oct","Nov","Dec");
$keys = array_keys($monthArray,$Month);
$monthNumber = $keys[0];
$successMessage = "<font color='red'>Thank you for submitting this ride. It has been posted on the Ride Schedule.</font><br>If you would like to submit another ride, make the changes on the Ride Submission Form and click Submit again.";
$successMessage = $successMessage."<br><a href='../perl/rides.pl"."?year=".$Year."&month=".$monthNumber."#".$Day_of_Month."' "."' target='_blank'>Click here</a> to open the Ride Schedule in a new window.";
$successMessage2 = "THANK YOU FOR SUBMITTING THIS RIDE. ---------  Click \"OK\" to post the ride to the schedule. --------- If you would like to submit another ride, make the changes on the Ride Submission Form and click Submit again.";
//echo "<script>alert('$successMessage2');</script>";

$stringData = '"'.$Day_of_Week.'","'.$Month.'","'.$Day_of_Month.'","'.$Year.'","'.$Ride_Name.'","'.$Class.'","'.$Distance.'","'.$Time.'","'.$AM_or_PM.'",';
$stringData = $stringData.'"'.$Starting_Point.'","'.$Directions.'",';
$stringData = $stringData.'"'.$Description.'","'.$Ride_Leader.'","'.$Phone.'","'.$Email.'","Submit",';
$stringData = $stringData.'"'.date("l, F j, Y").'","'.date("h:i:s A")."\""."\n";

$string = $Day_of_Week.$Month.$Day_of_Month.$Year.$Ride_Name.$Class.$Starting_Point.$Directions;
$string = $string.$Descriptions.$Ride_Leader.$Phone.$Email;

//echo "string = ".$string."<br>";
$hash = hash('ripemd160', $string);
//echo "hash = ".$hash."<br><br>";
//echo "previousHash = ".$previousHash."<br><br>";



//echo $stringData;  //testing

if ($hash==$previousHash) {
   $successMessage = "<em>You only have to hit the SUBMIT Button once to post a ride</em><br>".$successMessage;
} else {
  $testString="/(^[01]?[0-9]|1[0-2]):[0-5][0-9]$/";
  if (!preg_match($testString,$Time)){
		$timeError = "ERROR bad time: "; 
		//echo "<br>".$timeError."<br>Time is ".$Time;
		$myFile = "spamFile.csv";
		$fhSpamFile = fopen($myFile, "a") or die("can't open spamFile.csv file");
		fwrite($fhSpamFile, $stringData);
		fclose($fhSpamFile);
  } else {
		$myFile = "ride_submissions_current.csv";
  		////echo "<br>Trying to open ".$myFile."<br>";
		$fhRideSubmissionFile = fopen($myFile, "a") or die("can't open ride_submissions_current.csv file");
		fwrite($fhRideSubmissionFile, $stringData);
		fclose($fhRideSubmissionFile);
  }
}

	
		
		
	}
//echo "after";

function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}

?>

<div id="wrapper">
<p align="center"><font size="+2">Oxon Hill Bicycle and Trail Club</font><br />
<font size="+1">Form for Submitting a Ride </font></p>
	<p align="center" class="auto-style1"><font size="+1">Select a date by 
	clicking on the calendar</font></p>
<div id="content">		
<div id="inlineDatepicker"></div>
	<div id="form">

		
		
		<div id="dateDiv" style="background-color: red; clear: both">
		</div>
		<div id="rideDiv" style="clear: both">
		</div>
		<div id="formDiv" style="clear: both">
			<form action="submit.php" language="JavaScript" method="POST" onsubmit="return Form_Validator(this)">
				
				
				
				<p align="left">Day of Week:
				<select id="dayOfWeek" class="dateClass" name="Day_of_Week" size="1">
				<?php 
				function setOptions($optionArray, $optionValue) 
				{
					foreach ($optionArray as $x)
  					{
  					echo "<option"; 
  					if ($x == $optionValue) {echo " selected>";} else {echo ">";}
  					echo $x; echo "</option>"; echo "<br>";
 	 				}
				}

$dayArray=array("","SAT","SUN","MON","TUE","WED","THUR","FRI");
setOptions($dayArray,$Day_of_Week);
?></select>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Month:&nbsp;
				<select id="month" class="dateClass" name="Month" size="1">
				
				<?php 

$monthArray=array("","Jan","Feb","March","April","May","June","July","Aug","Sept","Oct","Nov","Dec");
setOptions($monthArray,$Month);
?></select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Day of Month:
				<select id="dayOfMonth" class="dateClass" name="Day_of_Month" size="1">
				<?php 
$dayOfMonthArray[0]="";
for ($i=1;$i<=31;$i++) {$dayOfMonthArray[$i]=$i; echo "$dayOfMonthArray[$i]";};
setOptions($dayOfMonthArray,$Day_of_Month);
?></select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Year:
				<select id="year" class="dateClass" name="Year" style="width: 57px" type="text">
				<?php 

$years=array("","2013","2014","2015","2016","2017","2018");
setOptions($years,$Year);
?>

</select> </p>

				<p align="left">Ride Name:&nbsp;&nbsp;&nbsp;
				<input name="Ride_Name" placeholder="Name of Ride" size="80" style="width: 667px" type="text" value="<?php echo $Ride_Name;?>" />
				</p>
				<p align="left">
				<img class="tip" height="15" width="15", src="../images/questionmarksmall.jpg" title='Ride Classifications and Categories|
				<table>
				<tr><td>D    - 8 -10 mph AMS</td></tr>
				<tr><td>C    - 10-12 mph AMS</td></tr>
				<tr><td>CC   - 12-14 mph AMS</td></tr>
				<tr><td>B    - 14-16 mph AMS</td></tr>
				<tr><td>A    - 16-18 mph AMS</td></tr>
				<tr><td>AA/3 - 18-20 mph AMS</td></tr>
				<tr><td>AA/2 - 20-22 mph AMS</td></tr>
				<tr><td>AA/1 - 22-24+ mph AMS</td></tr>
				<tr><td>MTB - Mountain Biking</td></tr>
				</table>
				<p>Categories are:<ul><li>Casual</li><li>Touring</li><li>Sport</li><li>Training</li><li>Express</li></ul>
			</p>' />
				Class:
				<input name="Class" size="8" type="text" value="<?php echo $Class;?>" style="width: 167px" />&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Distance:&nbsp;&nbsp;
				<input name="Distance" size="12" style="width: 101px" type="text" value="<?php echo $Distance;?>" /> 
				miles&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;Starting Time:
				<img id="CP_clock" alt="Select Starting Time" height="20" src="../images/jquery.clockpickr.clock.gif" width="20" />&nbsp;
				<input id="Time" name="Time" size="5" type="text"  value="<?php echo $Time;?>" />
				<select id="AmPm" name="AM_or_PM" size="1" >
				<option <?php if ($AM_or_PM == "AM") {echo " selected"; };?>>AM</option>
				<option <?php if ($AM_or_PM == "PM") {echo " selected"; };?>>PM</option>
				</select></p>
				<p align="left">
				Starting Point:
				<select name="Starting_Point" class="empty" style="width: 692px" >
				<option value="" selected disabled>Select starting point with this drop-down menu</option>
				<option>---NOT IN LIST---</option>
				<?php
				
$file = fopen("https://docs.google.com/spreadsheets/d/1ZkzNy-o7eWkMUrjcmC5V7rUDHVJ7hzMClBOpsKXjuzg/pub?gid=1876334414&single=true&output=tsv", "r") or exit("Unable to open file: starting_points.txt");
//Output a line of the file until the end is reached
while(!feof($file))
  {
  list($startingPoint, $startingPointDescription)=explode("\t",fgets($file));
  $startingPointArray[$startingPoint]=$startingPointDescription;
  //echo "<b>".$startingPoint."</b><br>";
  //echo $startingPointArray[$startingPoint]."<br>";
  echo "<option";
  
  if ($startingPoint == $Starting_Point) {echo " selected>";} else {echo ">";};
  echo $startingPoint."</option>"; echo "<br>";
  }
fclose($file);
?></select> </p>
				<p align="left">
				<img class="tip" height="15" src="../images/questionmarksmall.jpg" title="Starting Point - Directions|If you did not choose a Starting Point in the previous field, please enter the Starting Point, followed by a dash, followed by the directions to the starting point." width="15" /> 
				Starting Point - Directions to Start (if not in list of starting 
				points): <br />
				<textarea name="Directions" placeholder="If your Starting Point is not in the drop down menu, then enter your Starting Point, followed by a dash, and then the Directions to your Starting Point" rows="6" style="width: 794px" ><?php echo $Directions?></textarea>
				</p>
				<p align="left">Description of Ride:<br />
				<textarea name="Description" rows="10" style="width: 794px" ><?php echo $Description;?></textarea>
				</p>
				<p align="left">
				<img class="tip" height="15" src="../images/questionmarksmall.jpg" title="Ride Leader|To list more than one ride leader, separate the names with a comma." width="15" /> 
				Ride Leader: <br />
				<input name="Ride_Leader" placeholder="To list more than one ride leader, separate the names with a comma." size="39" style="width: 794px" type="text" value="<?php echo $Ride_Leader;?>" />
				</p>
				<p align="left">
				<img class="tip" height="15" src="../images/questionmarksmall.jpg" title="Phone Number|If more than one ride leader, separate their phone numbers with commas." width="15" /> 
				Phone Number: <br />
				<input name="Phone" placeholder="If more than one ride leader, separate their phone numbers with commas" size="37" style="width: 794px" type="text" value="<?php echo $Phone;?>" />
				</p>
				<p align="left">
				<img class="tip" height="15" src="../images/questionmarksmall.jpg" title="Ride Leader E-mail|If more than one ride leader, separate their e-mail addresses with commas." width="15" /> 
				Ride Leader E-mail: <br />
				<input name="Email" placeholder="If more than one ride leader, separate their e-mail addresses with commas." size="93" style="width: 794px" type="text" value="<?php echo $Email;?>" />
				</p>
				<p align="center" style="width: 796px">
				<img class="tip" height="15" src="../images/questionmarksmall.jpg" title="Submit|Click to submit the ride. If the ride submits ok, you will get a confirmation page. Use your browser's back button to return to the form. All field infomation that you entered will still be there. You can make changes for another ride and submit again." width="15" />
				<input name="SubmitButton" type="submit" value="Submit" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<img class="tip" height="15" src="../images/questionmarksmall.jpg" title="Reset|Clicking on the Reset button will clear this form" width="15" />
				<input name="ResetButton" type="reset" value="Reset" /> </p>
				<input type="hidden" name="hash" value="<?php echo $hash;?>">
			</form>
		</div>
		<div align="center">
			<p align="center">
			<?php echo $successMessage; ?>
			<?php //echo $stringData; ?>
			</p>
		</div>
		<div align="center">
			<a href="../index.htm">Oxon Hill Bicycle &amp; Trail Club</a> <br />
		</div>
	</div>
</div>
</div>


</body>

</html>

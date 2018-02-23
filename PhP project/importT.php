<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
include 'conf.php';
//require_once "PHPExcel/Classes/PHPExcel.php";
if(isset($_POST['Import'])){

		echo $filename=$_FILES["file"]["tmp_name"];

		if($_FILES["file"]["size"]>0)
		{
			$file = fopen($filename, "r");
			while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
			{
			//It wiil insert a row to our subject table from our csv file`
				$query = "INSERT into basicinformation (`Student_ID`,`Student_Name`,`Programme`,`Batch`,`Current_Semister`,`Credit_Complete`,`Current_cGPA`,`Contact_No`,`Email`,`Status`) 
			    values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]')";

				/*"INSERT into subject (`SUBJ_CODE`, `SUBJ_DESCRIPTION`, `UNIT`, `PRE_REQUISITE`,COURSE_ID, `AY`, `SEMESTER`)
				values('$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]')";*/
				//we are using mysql_query function. it returns a resource on true else False on error
				$import_result = mysqli_query($conn, $query);
				if(! $import_result )
					{
						echo "<script type=\"text/javascript\">
						alert(\"Invalid File:Please Upload CSV File.\");
						window.location = \"indexT.php\"</script>";
					}
				}
				fclose($file);
				//throws a message if data successfully imported to mysql database from excel file
				echo "<script type=\"text/javascript\">alert(\"CSV File has been successfully Imported.\");
				window.location = \"indexT.php\"</script>";
				//close of connection
				mysql_close($conn);
			}
		}
	
?>		 
</body>
</html>
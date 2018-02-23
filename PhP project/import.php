


<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title> SUB Student Management </title>

      <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">


      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
    
           <!-- Manu  Part Start -->
     <div class="container-fluid">
          <div class="rapper">


<div class="container">

  <nav class="navbar navbar-default">
    <div class="container-fluid">
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">

        <div class="navbar-header">
            <button button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" rel="home" href="#" title="Buy Sell Rent Everyting">
                <img style="max-width:200px; margin-top: -15px;"
                     src="https://upload.wikimedia.org/wikipedia/en/3/3b/SUB-Logo-with-name.png">
            </a>
        </div>
        
        <div id="navbar" class="collapse navbar-collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="addStudents.php">Add Student</a></li>
                <li><a href="searchStudents.php">Search Students</a></li>
               <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Logout</a></li>
                      
                    </ul>
                </li>
              
            </ul>
     
    </div>

    </div>
</div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
</div>
</div>
</div>
<br>
<br>

<form method = "post" enctype="multipart/form-data">
	<input type="file" name="file">
	<input type="submit" name="sub" value="import">
</form>

<?php
include("importdata.php");
$csv = new csv();
if( isset($_POST['sub'])){
	//var_dump($_FILES['file']);
	//$csv->import($_FILES['file']['tmp_name']);
	$filename = $_FILES['file']['tmp_name'];
			$conn = new mysqli("localhost","root","", "projectfinal");
		//parent::_construct("localhost","root","", "projectfinal");
		if($conn->connect_errno){
			echo "Fail to connect to Database : ". $conn->connect_errno;
	
		}

	$file = fopen($filename, 'r');
		
		while ($row = fgetcsv($file) ) {
			/*print "<pre> ";
			print_r($row);
			print "</pre>";*/


			$value = "'". implode("','", $row) ."'";
			//echo $value;
		
			$q = "INSERT INTO basicinformation(Student_Name,Programme,Batch,Current_Semister,Credit_Complete,Contact_No,Email,Status,Student_ID) VALUES(". $value .")";
			if ($conn->query($q) ) {
				$state_csv = true;
			}
			else{
				$state_csv = false;
			print_r($conn->error);
			}
		}
		if ( $state_csv) {
			echo "Successfully Imported";
		}
		else{
			echo "Somthing went wrong";
		}
}

?>



    </body>
  </html>




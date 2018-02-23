<!DOCTYPE html>
<?php 
	include_once 'conf.php';
?>	
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title> SUB Student Management </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Import Excel File To MySql Database Using php">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="css/bootstrap-custom.css">
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
                    <a href="Login.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
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




	<!-- Navbar
    ================================================== -->

	<!--div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container"> 
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="https://hemant9807.blogspot.in/2016/09/import-excelcsv-file-to-mysql-database.html">Import Excel To Mysql Database Using PHP</a>
				
			</div>
		</div>
	</div>

	<div id="wrap"-->
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>
			<div class="span6" id="form-login">
				<form class="form-horizontal well" action="importT.php" method="post" name="upload_excel" enctype="multipart/form-data">
					<fieldset>
						<legend>Import CSV/Excel file</legend>
						<div class="control-group">
							<div class="controls from-group">
								<input type="file" name="file" id="file" class="input-large">
							</div>
						</div>
						
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
			<div class="span3 hidden-phone"></div>
		</div>
		

		<!--table class="table table-bordered">
			<thead>
				  	<tr>
				  		<th>ID</th>
				  		<th>Name</th>
				  		<th>Programme</th>
				  		<th>Batch</th>
				  		<th>Current Semester</th>
				  		<th>Credit Complete</th>
				  		<th>cGPA</th>
				  		<th>Contact No</th>
				  		<th>Email</th>
				  		<th>Status</th>
				 		
				 
				  	</tr>	
				  </thead>
			<?php
				$query = "SELECT * FROM basicinfromation";
				$result_query =mysqli_query($conn, $query);
				while( $row = mysqli_fetch_array($result_query))
				{
				?>
			
					<tr>
						<td><?php echo $row['Student_ID']; ?></td>
						<td><?php echo $row['Programme']; ?></td>
						<td><?php echo $row['Batch']; ?></td>
						<td><?php echo $row['Current_Semister']; ?></td>
						<td><?php echo $row['Credit_Complete']; ?></td>
						<td><?php echo $row['Current_cGPA']; ?></td>
						<td><?php echo $row['Contact_No']; ?></td>
						<td><?php echo $row['Email']; ?></td>
						<td><?php echo $row['Status']; ?></td>
					</tr>
				<?php
				}
			?>
		</table-->
	</div>

	</body>
</html>
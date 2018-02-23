<?php
include 'conf.php';

if (isset($_GET['Edit'])) {
    $Student_ID = $_GET['Edit'];

    #$query = "SELECT * FROM basicinformation, academicinformation , contactno,  familyinformation  WHERE Student_ID= '$Student_ID'";
   # $query = "SELECT * FROM basicinformation inner join academicinformation on basicinformation.Student_ID=academicinformation.Student_ID
    #where basicinformation.Student_ID= '$Student_ID'";

    $query = "SELECT * FROM basicinformation inner join academicinformation  on basicinformation.Student_ID=academicinformation.Student_ID
    inner join contactno  on basicinformation.Student_ID=contactno.Student_ID
    inner join familyinformation  on basicinformation.Student_ID=familyinformation.Student_ID 
    where basicinformation.Student_ID= '$Student_ID'";
    

    //print_r($query);
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            $Student_ID = $row['Student_ID'];
            $Student_Name = $row['Student_Name'];
            
            $Batch = $row['Batch'];
            
            $Current_Semister = $row['Current_Semister'];
            $Credit_Complete = $row['Credit_Complete'];
            $Current_cGPA = $row['Current_cGPA'];
            $Contact_No = $row['Contact_No'];
            $Email = $row['Email'];
            $Status = $row['Status'];
            $School_Name = $row['School_Name'];
            $SSC_Result = $row['SSC_Result'];
            
            $SSC_Passing_Year = $row['SSC_Passing_Year'];
            
            $College_Name = $row['College_Name'];
            $HSC_Result = $row['HSC_Result'];
            $HSC_Passing_Year = $row['HSC_Passing_Year'];
            $Father_Contact_No = $row['Father_Contact_No'];
            $Mother_Contact_No = $row['Mother_Contact_No'];
            $Gurdian_Contact_No = $row['Gurdian_Contact_No'];
            $Father_email_id = $row['Father_email_id'];
            $Mother_email_id = $row['Mother_email_id'];
            
            $Gurdian_email_id = $row['Gurdian_email_id'];
            
            $Father_Name = $row['Father_Name'];
            $Mother_Name = $row['Mother_Name'];
            $Gurdian_Name = $row['Gurdian_Name'];
            $Parmanent_Address = $row['Parmanent_Address'];
            $Current_Address = $row['Current_Address'];
            $Siblings = $row['Siblings'];
        }
    } else {
        echo "Wrong Student ID";
        exit;
    }
    $sql = "SELECT * FROM issue  WHERE Student_Id = '$Student_ID'";
   $search_result = mysqli_query($conn, $sql);
}
else {
  echo "No Transaction History";
}
?>









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
     <link href="css/print.css" rel="stylesheet" type="text/css" media="print">



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
<br>














<div class="container">
  <div class="row">
  <div class="col-md-7 personal-info">

        <a href="meeting.php?Edit=<?php  echo $Student_ID;?>"  class="btn btn-info btn-lg dontPrint"   role="button">Add New Meeting seassion</a>
        <a href="viewMeeting.php?Edit=<?php  echo $Student_ID;?>" class="btn btn-info btn-lg dontPrint" role="button">View Previous Meeting </a>
        <br>
        <br>

  <ul class="list-group">
   <li class="list-group-item active">Student Information </li>
    <li class="list-group-item">Student ID:  <span class="badge"> <?php echo $Student_ID; ?> </span></li>
    <li class="list-group-item">Student Name: <span class="badge"> <?php echo $Student_Name; ?> </span></li>
    <li class="list-group-item">Batch <span class="badge"> <?php echo $Batch; ?> </span></li>
    <li class="list-group-item">Current Semister <span class="badge"> <?php echo $Current_Semister; ?> </span></li>
    <li class="list-group-item">Credit Complete <span class="badge"> <?php echo $Credit_Complete; ?> </span></li>
    <li class="list-group-item">Current CGPA <span class="badge"> <?php echo $Current_cGPA; ?> </span></li>
    <li class="list-group-item">Contact No: <span class="badge"> <?php echo $Contact_No; ?> </span></li>
    <li class="list-group-item">Email: <span class="badge"><?php echo $Email; ?> </span></li>
    <li class="list-group-item">Status <span class="badge"> <?php echo $Satus; ?> </span></li>
  </ul>
    <br>
    <br>


  <ul class="list-group">
  <li class="list-group-item active">Family Information </li>
    <li class="list-group-item">Father's Name:  <span class="badge"> <?php echo $Father_Name; ?> </span></li>
    <li class="list-group-item">Mother's Name:  <span class="badge"> <?php echo $Mother_Name; ?> </span></li>
    <li class="list-group-item">Gurdian's Name:  <span class="badge"> <?php echo $Gurdian_Name; ?> </span></li>
    <li class="list-group-item">Parmanent Address  <span class="badge"> <?php echo $Parmanent_Address; ?> </span></li>
    <li class="list-group-item">Current Address  <span class="badge"> <?php echo $Current_Address; ?> </span></li>
    <li class="list-group-item">Siblings  <span class="badge"> <?php echo $Siblings; ?> </span></li>
  </ul>
  <br>
  <br>


  <ul class="list-group">
  <li class="list-group-item active">Contact Information </li>
    <li class="list-group-item">Father's Contact No: <span class="badge"> <?php echo $Father_Contact_No; ?>  </span></li>
    <li class="list-group-item">Mother's Contact No: <span class="badge"> <?php echo $Mother_Contact_No; ?>  </span></li>
    <li class="list-group-item">Gurdian's Contact No: <span class="badge"> <?php echo $Gurdian_Contact_No; ?> </span></li>
    <li class="list-group-item">Father's Email: <span class="badge"> <?php echo $Father_email_id; ?></span></li>
    <li class="list-group-item">Mother's Email: <span class="badge"> <?php echo $Mother_email_id; ?></span></li>
    <li class="list-group-item">Gurdian's Email: <span class="badge"> <?php echo $Gurdian_email_id; ?></span></li>
  </ul>
    <br>
    <br>

  <ul class="list-group">
  <li class="list-group-item active">Academic Information </li>
    <li class="list-group-item">School/Madrasah Name <span class="badge">  <?php echo $School_Name; ?> </span></li>
    <li class="list-group-item">SSC/Dakhil(GPA) <span class="badge">  <?php echo $SSC_Result; ?> </span></li>
    <li class="list-group-item">SSC/Dakhil Passing Year<span class="badge"> <?php echo $SSC_Passing_Year; ?> </span></li>
    <li class="list-group-item">College/Madrasah Name <span class="badge"> <?php echo $College_Name; ?> </span></li>
    <li class="list-group-item">HSC/Alim(GPA) <span class="badge"> <?php echo $HSC_Result; ?> </span></li>
    <li class="list-group-item">HSC/Alim Passing Year <span class="badge"> <?php echo $HSC_Passing_Year; ?> </span></li>
    <br>
    <br>
    <input type="button" value="Print This Pgae" class="btn btn-info btn-lg dontPrint"  onclick="window.print()" >
      </ul>
    
  
</div>
</div>



</div> 


<!--div class="container">
  <h2>Meeting Report </h2>
  <div class="list-group">
 
    <a href="#" class="list-group-item ">
      <h4 class="list-group-item-heading">Teacher Name</h4>
      <p class="list-group-item-text">Very low GPA. Irregular student. Call his parents to meet</p>

    </a>
    <br>
  
  
  </div>

    <div class="list-group">
 
    <a href="#" class="list-group-item ">
      <h4 class="list-group-item-heading">Teacher Name</h4>
      <p class="list-group-item-text">Very low GPA. Irregular student. Call his parents to meet</p>

    </a>
    <br>
  
  
  </div>

    <div class="list-group">
 
    <a href="#" class="list-group-item ">
      <h4 class="list-group-item-heading">Teacher Name</h4>
      <p class="list-group-item-text">Very low GPA. Irregular student. Call his parents to meet</p>

    </a>
    <br>
  
  
  </div>
</div-->




      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
    </body>
  </html>
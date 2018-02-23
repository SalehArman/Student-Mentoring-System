

<?php
include 'conf.php';
if (isset($_GET['Edit'])) 
{
    $Student_ID = $_GET['Edit'];
     $query = "SELECT * FROM basicinformation inner join academicinformation  on basicinformation.Student_ID=academicinformation.Student_ID
    inner join contactno  on basicinformation.Student_ID=contactno.Student_ID
    inner join familyinformation  on basicinformation.Student_ID=familyinformation.Student_ID 
    where basicinformation.Student_ID= '$Student_ID'";
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
            $Satus = $row['Satus'];
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
            
            $Parmanent_Address = $row['Parmanent_Address'];
            $Current_Address = $row['Current_Address'];
            $Siblings = $row['Siblings'];
        
    }
    }
     else {
        echo "0 results";
    }




/*
    if(!empty($_POST['update']))

    { 

 $sql = "UPDATE basicinformation  , academicinformation , contactno , familyinformation
                SET Student_ID='".$_POST['Student_ID']."',
                Student_Name='".$_POST['Student_Name']."',
                
                Batch='".$_POST['Batch']."',
                 
                 Current_Semister='".$_POST['Current_Semister']."',
                 Credit_Complete='".$_POST['Credit_Complete']."',
                 Current_cGPA='".$_POST['Current_cGPA']."',
                 Contact_No='".$_POST['Contact_No']."',
                 Email='".$_POST['Email']."',
                 Satus='".$_POST['Satus']."',
                  


 
                Father_Name='".$_POST['Father_Name']."',
                Mother_Name='".$_POST['Mother_Name']."',
                
                 Parmanent_Address='".$_POST['Parmanent_Address']."',
                 Current_Address='".$_POST['Current_Address']."',
                 Siblings='".$_POST['Siblings']."',
                  


  
                Father_Contact_No='".$_POST['Father_Contact_No']."',
                  Mother_Contact_No='".$_POST['Mother_Contact_No']."',
                
                Gurdian_Contact_No='".$_POST['Gurdian_Contact_No']."',
                 
                 Father_email_id='".$_POST['Father_email_id']."',
                 Mother_email_id='".$_POST['Mother_email_id']."',
                 Gurdian_email_id='".$_POST['Gurdian_email_id']."',
                     



                 School_Name='".$_POST['School_Name']."',
                SSC_Result='".$_POST['SSC_Result']."',
                
                SSC_Passing_Year='".$_POST['SSC_Passing_Year']."',
                 
                 College_Name='".$_POST['College_Name']."',
                 HSC_Result='".$_POST['HSC_Result']."',
                                  where basicinformation.Student_ID= $Student_ID";
                  
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
*/
    if(!empty($_POST['update']))

    { 

//var_dump($_POST);die;
  $sql = "UPDATE academicinformation 
                SET  School_Name='".$_POST['School_Name']."',
                SSC_Result='".$_POST['SSC_Result']."',
                
                SSC_Passing_Year='".$_POST['SSC_Passing_Year']."',
                 
                 College_Name='".$_POST['College_Name']."',
                 HSC_Result='".$_POST['HSC_Result']."'WHERE Student_ID= '$Student_ID'";

                //echo $sql;die;
     

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }



  $sql1 = "UPDATE basicinformation 
                SET Student_ID='".$_POST['Student_ID']."',
                Student_Name='".$_POST['Student_Name']."',
                
                Batch='".$_POST['Batch']."',
                 
                 Current_Semister='".$_POST['Current_Semister']."',
                 Credit_Complete='".$_POST['Credit_Complete']."',
                 Current_cGPA='".$_POST['Current_cGPA']."',
                 Contact_No='".$_POST['Contact_No']."',
                 Email='".$_POST['Email']."',
                 Satus='".$_POST['Satus']."'WHERE Student_ID= '$Student_ID'";



    if (mysqli_query($conn, $sql1)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }






  $sql2 = "UPDATE contactno 
                SET  Father_Contact_No='".$_POST['Father_Contact_No']."',
                  Mother_Contact_No='".$_POST['Mother_Contact_No']."',
                
                Gurdian_Contact_No='".$_POST['Gurdian_Contact_No']."',
                 
                 Father_email_id='".$_POST['Father_email_id']."',
                 Mother_email_id='".$_POST['Mother_email_id']."',
                 Gurdian_email_id='".$_POST['Gurdian_email_id']."'WHERE Student_ID= '$Student_ID'";



    if (mysqli_query($conn, $sql2)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }





  $sql3 = "UPDATE familyinformation 
                SET  Father_Name='".$_POST['Father_Name']."',
                Mother_Name='".$_POST['Mother_Name']."',
                
                 Parmanent_Address='".$_POST['Parmanent_Address']."',
                 Current_Address='".$_POST['Current_Address']."',
                 Siblings='".$_POST['Siblings']."'WHERE Student_ID= '$Student_ID'";



    if (mysqli_query($conn, $sql3)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }









}
}
 else {
    die("faied username");
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


 <div class="container">


            <div class="row">


                <!-- edit form column -->
                <div class="col-md-9 personal-info">

                    <h3>Edit Student Information </h3>

                    <form class="form-horizontal" role="form" action="" method="post">

                        <div class="form-group">
                            <label class="col-lg-3 control-label"> Student ID: </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $Student_ID; ?>" type="text" name="Student_ID" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label"> Student Name: </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $Student_Name; ?>" type="text" name="Student_Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label"> Batch: </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $Batch; ?>" type="text" name="Batch">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-3 control-label"> Current Semister: </label>
                            <div class="col-md-8">
                                <input class="form-control" value="<?php echo $Current_Semister; ?>" type="Number" name="Current_Semister">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Credit Completed: </label>
                            <div class="col-md-8">
                                <input class="form-control" value="<?php echo $Credit_Complete; ?>" type="Number" name="Credit_Complete">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label"> Current cGPA: </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $Current_cGPA; ?>" type="Number" name="Current_cGPA">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label"> Contact No: </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $Contact_No; ?>" type="Number" name="Contact_No">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label"> Email: </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $Email; ?>" type="text" name="Email">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-lg-3 control-label"> Status:</label>
                            <div class="col-lg-8">


                                <select id="select" class="form-control" name="Satus" value="<?php echo $Satus; ?>" >
            <option value="0" <?php if($Satus == 0){echo 'selected';}  ?>  >    Active    </option>
            <option value="1" <?php if($Satus == 1){echo 'selected';}  ?> >    Inactive    </option>
                                </select>

                            </div>
                        </div>
                     

                        <div class="form-group">
                            <label class="col-lg-3 control-label"> Father's Name: </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $Father_Name; ?>" type="text" name="Father_Name">
                            </div>
                            </div>


                            <div class="form-group">
                            <label class="col-lg-3 control-label"> Mother's Name: </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $Mother_Name; ?>" type="text" name="Mother_Name">
                            </div>
                            </div>

                           

                            <div class="form-group">
                            <label class="col-lg-3 control-label"> Permanent Address: </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $Parmanent_Address; ?>" type="text" name="Parmanent_Address">
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="col-lg-3 control-label"> Current Address: </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $Current_Address; ?>" type="text" name="Current_Address">
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="col-lg-3 control-label"> Father's Contact No: </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $Father_Contact_No; ?>" type="Number" name="Father_Contact_No">
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="col-lg-3 control-label"> Mother's Contact No: </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $Mother_Contact_No; ?>" type="Number" name="Mother_Contact_No">
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="col-lg-3 control-label"> Gurdian's Contact No: </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $Gurdian_Contact_No; ?>" type="Number" name="Gurdian_Contact_No">
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="col-lg-3 control-label"> Father's Email: </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $Father_email_id; ?>" type="text" name="Father_email_id">
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="col-lg-3 control-label"> Mother's Email: </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $Mother_email_id; ?>" type="text" name="Mother_email_id">
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="col-lg-3 control-label"> Gurdian's Email: </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $Gurdian_email_id ?>" type="text" name="Gurdian_email_id">
                            </div>
                            </div>



                            <div class="form-group">
                            <label class="col-lg-3 control-label"> Siblings: </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $Siblings; ?>" type="Number" name="Siblings">
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="col-lg-3 control-label"> School/Madrasah Name: </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $School_Name; ?>" type="text" name="School_Name">
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="col-lg-3 control-label"> SSC/Dakhil(GPA): </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $SSC_Result; ?>" type="text" name="SSC_Result">
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="col-lg-3 control-label"> SSC/dakhil Passing Year: </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $SSC_Passing_Year; ?>" type="Number" name="SSC_Passing_Year">
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="col-lg-3 control-label"> College/Madrasah Name: </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $College_Name; ?>" type="test" name="College_Name">
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="col-lg-3 control-label"> HSC/Alim(GPA): </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $HSC_Result; ?>" type="text" name="HSC_Result">
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="col-lg-3 control-label"> HSC/Alim Passing Year: </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $HSC_Passing_Year; ?>" type="Number" name="HSC_Passing_Year">
                            </div>
                            </div>





                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8">
                        <input class="btn btn-primary" value="Save Changes" name="update" type="submit">
                                <span></span>
                                <input class="btn btn-default" value="Cancel" type="reset">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>  








      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
    </body>
  </html>
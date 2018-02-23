  <?php 

    include_once 'conf.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $Student_Name = $_POST['Student_Name'];
        $Student_Name = $_POST['Student_Name']; 
        $Father_Name = $_POST['Father_Name'];
        $Mother_Name = $_POST['Mother_Name'];
        $Gurdian_Name = $_POST['Gurdian_Name'];
        $Parmanent_Address = $_POST['Parmanent_Address'];
        $Current_Address = $_POST['Current_Address'];
        $Email = $_POST['Email'];
        $Contact_No = $_POST['Contact_No'];
        $Father_Contact_No = $_POST['Father_Contact_No'];
        $Mother_Contact_No = $_POST['Mother_Contact_No'];
        $Gurdian_Contact_No = $_POST['Gurdian_Contact_No']; 
        $Father_email_id = $_POST['Father_email_id'];
        $Mother_email_id = $_POST['Mother_email_id'];  
        $Gurdian_email_id = $_POST['Gurdian_email_id'];
        $Siblings = $_POST['Siblings'];
        $School_Name = $_POST['School_Name'];
        $SSC_Result = $_POST['SSC_Result'];
        $SSC_Passing_Year = $_POST['SSC_Passing_Year'];
        $College_Name = $_POST['College_Name'];
        $HSC_Result = $_POST['HSC_Result'];
        $HSC_Passing_Year = $_POST['HSC_Passing_Year']; 



       
        
        
        //if(empty($name)){
        

         //elseif ($memberPassword!= $confirmMemberPassword) {
           # code...
         //}
        
        
            $query  = "INSERT INTO basicinformation  (Student_ID, Student_Name, Contact_No, Email) VALUES ('$Student_ID','$Student_Name','$Contact_No' , '$Email')";

                       if (mysqli_query($conn, $query))
           {
              echo '<div class="alert alert-success">
  <strong>Success!</strong> Notice Uploaded Successfully.
</div>';

           }

           else

            echo '<div class="alert alert-denger">
  <strong>Failed!</strong>Database Not Found.
</div>';





        $query1  = "INSERT INTO familyinformation (Student_ID,Father_Name,Mother_Name,Gurdian_Name,Parmanent_Address, Current_Address, Siblings, catagory, status1) VALUES ('$Student_ID','$Father_Name','$Mother_Name','$Gurdian_Name' , '$Parmanent_Address','$Current_Address','$Siblings')";

                       if (mysqli_query($conn, $query1))
           {
              echo '<div class="alert alert-success">
  <strong>Success!</strong> Notice Uploaded Successfully.
</div>';

           }

           else

            echo '<div class="alert alert-denger">
  <strong>Failed!</strong>Database Not Found.
</div>';




        $query2  = "INSERT INTO contactno (Student_ID, Father_Contact_No, Mother_Contact_No, Gurdian_Contact_No, Father_email_id, Mother_email_id, Gurdian_email_id) VALUES ('$Student_ID','$Father_Contact_No','$Mother_Contact_No' , '$Gurdian_Contact_No',  '$Father_email_id', '$Mother_email_id', '$Gurdian_email_id')";

                       if (mysqli_query($conn, $query2))
           {
              echo '<div class="alert alert-success">
  <strong>Success!</strong> Notice Uploaded Successfully.
</div>';

           }

           else

            echo '<div class="alert alert-denger">
  <strong>Failed!</strong>Database Not Found.
</div>';





         $query3  = "INSERT INTO academicinformation (Student_ID, School_Name, SSC_Result, SSC_Passing_Year, College_Name, HSC_Result, HSC_Passing_Year) VALUES ('$Student_ID','$School_Name','$SSC_Result' , '$SSC_Passing_Year',  '$College_Name', '$HSC_Result', '$HSC_Passing_Year')";

                       if (mysqli_query($conn, $query3))
           {
              echo '<div class="alert alert-success">
  <strong>Success!</strong> Notice Uploaded Successfully.
</div>';

           }

           else

            echo '<div class="alert alert-denger">
  <strong>Failed!</strong>Database Not Found.
</div>';
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
    <div class="col-md-8">
      <section>
      <li class="list-group-item active">Add Student's Information</li>
      
            <form class="form-horizontal" method="post" name="signup" id="signup" enctype="multipart/form-data" ><br>     

        <div>
        <div class="form-group">
          <label class="control-label col-sm-3">Student Name: <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <input type="text" class="form-control" name="Student_name" id="Student_name" placeholder="Enter The Full Name" value="">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Father's Name: <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <input type="text" class="form-control" name="Father_name" id="Father_name" placeholder="Enter Full Name" value="">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Mother's Name: <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <input type="text" class="form-control" name="Mother_name" id="Mother_name" placeholder="Enter Full Name" value="">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Gurdian's Name: <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <input type="text" class="form-control" name="Gurdian_Name" id="Gurdian_Name" placeholder="Enter Full Name" value="">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Permanent Address: <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <input type="text" class="form-control" name="Parmanent_Address" id="Parmanent_Address" placeholder="Enter The Address" value="">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Current Address: <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <input type="text" class="form-control" name="Current_Address" id="Current_Addresss" placeholder="Enter The Address" value="">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3">Date of Birth: <span class="text-danger">*</span></label>
          <div class="col-xs-8">
            <div class="form-inline">
              <div class="form-group">
                <select name="dd" class="form-control">
                  <option value="">Date</option>
                  <option value="1" >1 </option><option value="2" >2 </option><option value="3" >3 </option><option value="4" >4 </option><option value="5" >5 </option><option value="6" >6 </option><option value="7" >7 </option><option value="8" >8 </option><option value="9" >9 </option><option value="10" >10 </option><option value="11" >11 </option><option value="12" >12 </option><option value="13" >13 </option><option value="14" >14 </option><option value="15" >15 </option><option value="16" >16 </option><option value="17" >17 </option><option value="18" >18 </option><option value="19" >19 </option><option value="20" >20 </option><option value="21" >21 </option><option value="22" >22 </option><option value="23" >23 </option><option value="24" >24 </option><option value="25" >25 </option><option value="26" >26 </option><option value="27" >27 </option><option value="28" >28 </option><option value="29" >29 </option><option value="30" >30 </option><option value="31" >31 </option>                </select>
              </div>
              <div class="form-group">
                <select name="mm" class="form-control">
                  <option value="">Month</option>
                  <option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>                </select>
              </div>
              <div class="form-group" >
                <select name="yyyy" class="form-control">
                  <option value="0">Year</option>
                  <option value="1955" >1955 </option><option value="1956" >1956 </option><option value="1957" >1957 </option><option value="1958" >1958 </option><option value="1959" >1959 </option><option value="1960" >1960 </option><option value="1961" >1961 </option><option value="1962" >1962 </option><option value="1963" >1963 </option><option value="1964" >1964 </option><option value="1965" >1965 </option><option value="1966" >1966 </option><option value="1967" >1967 </option><option value="1968" >1968 </option><option value="1969" >1969 </option><option value="1970" >1970 </option><option value="1971" >1971 </option><option value="1972" >1972 </option><option value="1973" >1973 </option><option value="1974" >1974 </option><option value="1975" >1975 </option><option value="1976" >1976 </option><option value="1977" >1977 </option><option value="1978" >1978 </option><option value="1979" >1979 </option><option value="1980" >1980 </option><option value="1981" >1981 </option><option value="1982" >1982 </option><option value="1983" >1983 </option><option value="1984" >1984 </option><option value="1985" >1985 </option><option value="1986" >1986 </option><option value="1987" >1987 </option><option value="1988" >1988 </option><option value="1989" >1989 </option><option value="1990" >1990 </option><option value="1991" >1991 </option><option value="1992" >1992 </option><option value="1993" >1993 </option><option value="1994" >1994 </option><option value="1995" >1995 </option><option value="1996" >1996 </option><option value="1997" >1997 </option><option value="1998" >1998 </option><option value="1999" >1999 </option><option value="2000" >2000 </option><option value="2001" >2001 </option><option value="2002" >2002 </option><option value="2003" >2003 </option><option value="2004" >2004 </option><option value="2005" >2005 </option><option value="2006" >2006 </option>                </select>
              </div>
            </div>
          </div>
        </div>


        <div class="form-group">
          <label class="control-label col-sm-3">Gender: <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
          <label>
            <input name="gender" type="radio" value="Male" checked >
            Male </label>
          <label>
            <input name="gender" type="radio" value="Female" checked >
            Female </label>
          </div>
        </div>

        <div>
        <div class="form-group">
          <label class="control-label col-sm-3">Email ID: <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <input type="text" class="form-control" name="Email_ID" id="Email_ID" placeholder="Enter The Email ID" value="">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3">Contact No.: <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
            <input type="text" class="form-control" name="Contact_No" id="Contact_No" placeholder="Enter Primary contact no." value="">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3">Father's Contact No.: <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
            <input type="text" class="form-control" name="Father_Contact_No" id="Father_Contact_No" placeholder="Enter The contact no." value="">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3">Mother's Contact No.: <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
            <input type="text" class="form-control" name="Mother_Contact_No" id="Mother_Contact_No" placeholder="Enter The contact no." value="">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3">Gurdian's Contact No.: <span class="text-danger">*</span></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
            <input type="text" class="form-control" name="Gurdian_Contact_No" id="Gurdian_Contact_No" placeholder="Enter The contact no." value="">
            </div>
          </div>
        </div>

        <div>
        <div class="form-group">
          <label class="control-label col-sm-3">Father's Email ID: <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <input type="text" class="form-control" name="Father_Email_ID" id="Father_Email_ID" placeholder="Enter The Email ID" value="">
          </div>
        </div>

        <div>
        <div class="form-group">
          <label class="control-label col-sm-3">Mother's Email ID: <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <input type="text" class="form-control" name="Mother_Email_ID" id="Mother_Email_ID" placeholder="Enter The Email ID" value="">
          </div>
        </div>

        <div>
        <div class="form-group">
          <label class="control-label col-sm-3">Gurdian's Email ID: <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <input type="text" class="form-control" name="Gurdian_Email_ID" id="Gurdian_Email_ID" placeholder="Enter The Email ID" value="">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-3">Siblings: <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <input type="text" class="form-control" name="Siblings" id="Siblings" placeholder=" " value="">
          </div>
        </div>


        <div class="form-group">
          <label class="control-label col-sm-3">School/Madrasah Name:<span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <input type="text" class="form-control" name="School_Name" id="School_Name" placeholder="Enter The School/Madrasah Name " value="">
          </div>
        </div>


        <div class="form-group">
          <label class="control-label col-sm-3">SSC/Dakhil(GPA):<span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <input type="text" class="form-control" name="SSC_Result" id="SSC_Result" placeholder=" Enter The Result" value="">
          </div>
        </div>


        <div class="form-group">
          <label class="control-label col-sm-3">SSC/Dakhil Passing Year:<span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <input type="text" class="form-control" name="SSC_Passing_Year" id="SSC_Passing_Year" placeholder=" Enter The Year" value="">
          </div>
        </div>


        <div class="form-group">
          <label class="control-label col-sm-3">College/Madrasah Name:<span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <input type="text" class="form-control" name="College_Name" id="College_Name" placeholder="Enter The College/Madrasah Name " value="">
          </div>
        </div>


        <div class="form-group">
          <label class="control-label col-sm-3">HSC/Alim(GPA):<span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <input type="text" class="form-control" name="HSC_Result" id="HSC_Result" placeholder="Enter The Result " value="">
          </div>
        </div>


        <div class="form-group">
          <label class="control-label col-sm-3">HSC/Alim Passing Year: <span class="text-danger">*</span></label>
          <div class="col-md-8 col-sm-9">
            <input type="text" class="form-control" name="HSC_Passing_Year" id="HSC_Passing_Year" placeholder="Enter The Year " value="">
          </div>
        </div>



        <!--
        <div class="form-group">
          <label class="control-label col-sm-3">Profile Photo <br>
          <small>(optional)</small></label>
          <div class="col-md-5 col-sm-8">
            <div class="input-group"> <span class="input-group-addon" id="file_upload"><i class="glyphicon glyphicon-upload"></i></span>
              <input type="file" name="file_nm" id="file_nm" class="form-control upload" placeholder="" aria-describedby="file_upload">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Security Code </label>
          <div class="col-md-5 col-sm-8">
            <div >
                
                <input type="text" name="captcha" id="captcha" class="form-control label-warning"  />                
              </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-offset-3 col-md-8 col-sm-9"><span class="text-muted"><span class="label label-danger">Note:-</span> By clicking Sign Up, you agree to our <a href="#">Terms</a> and that you have read our <a href="#">Policy</a>, including our <a href="#">Cookie Use</a>.</span> </div>
        </div>
        -->
        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-10">
            <input name="Submit" type="submit" value="Save" class="btn btn-primary" class="col-xs-offset-3 col-xs-10">
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

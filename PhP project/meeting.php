


<?php 
    include_once 'conf.php';
   

   if (isset($_GET['Edit'])) {
    $Student_ID = $_GET['Edit'];




    if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $headline = $_POST['headline'];
    $msg      = $_POST['msg'];

    $currentDate= date("Y-m-d") ;

     if(empty($headline)||empty($msg)){
            print "Please fill all these field";
        }
        else{
            $query  = "INSERT INTO meetings (Question, Answer, Date , Student_ID ) VALUES ('$headline','$msg','$currentDate','$Student_ID')";
          }

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

   
    
    
      
       

       
      




    }
  }

          else

            echo '<div class="alert alert-denger">
  <strong>Failed!</strong>Database Not Found.
</div>';

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


 <div class="col-lg-6">
<h3> Meeting </h3>
<form class="form-horizontal" role="form" action="" method="post">
           <div class="form-group">
           
            <!--label class="col-lg-3 control-label"> Teacher Name</label>
            <div class="col-lg-8">
              <input class="form-control" value="" type="text" name="headline" placeholder="Title">
            </div>
          </div-->
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Question</label>
            <div class="col-lg-8">
              <textarea class="form-control" id="exampleTextarea" rows="3"  name="headline" placeholder="Enter the Message"></textarea>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Answer</label>
            <div class="col-lg-8">
              <textarea class="form-control" id="exampleTextarea" rows="3"  name="msg" placeholder="Enter the Message"></textarea>
            </div>
          </div>

           <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input class="btn btn-primary" value="ADD" name="search" type="submit">
              <span></span>
              <input class="btn btn-default" value="Cancel" type="reset">
            </div>
          </div>
</form>
      </div>







      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
    </body>
  </html>
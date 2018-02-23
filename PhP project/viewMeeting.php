


   <?php
   include 'conf.php';

if (isset($_GET['Edit'])) {
    $Student_ID = $_GET['Edit'];


  $query = "SELECT * FROM meetings  WHERE Student_ID ='$Student_ID'";
  //  WHERE uploadDate= ( SELECT MAX(uploadDate) from notice ) ";
  $result = mysqli_query($conn, $query);

}
else {
  echo "Wrong ID";
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






  <!-- Manu  Part END -->



<div class="container">
  <h2>Mentoring </h2>
  <div class="list-group"><a style="display: none;">
  <?php
                        $date = false;
                         while($row =mysqli_fetch_array($result)): 
                          $printAnchor = false;
                          if ($date == false || $date != $row['Date'])  { $date = $row['Date']; $printAnchor = true; }
                          ?>
                      
    <?php if ($printAnchor) { ?></a><a href="#" class="list-group-item "><?php } ?>
    <?php if ($printAnchor) { ?><h4 class="list-group-item-heading"><?php echo $row['Date'];?></h4><?php } ?> 
      <?php if (!$printAnchor) { ?><hr/><?php } ?>
      <p class="list-group-item-text"><?php echo "Question: " . $row['Question']." <br> ". "Answer: " . $row['Answer'];?></p>
    <?php  

        
           endwhile;?>
    </a>

        <input type="button" value="Print This Pgae" class="btn btn-info btn-lg dontPrint"  onclick="window.print()" >
  
  </div>

</div>





 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
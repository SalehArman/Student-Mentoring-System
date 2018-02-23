<?php
  include 'conf.php';
  ?>

<?php
  if (isset($_POST['search'])) {

    
    $data=$_POST['data'];
    $option = $_POST['option'];
   // $type = $_POST['type'];
    //echo "$member $option";
    switch ($option) {
      case '0':

              $query = "SELECT * FROM `basicinformation` 
          WHERE Student_Name LIKE '%".$data."%' ";
          #SELECT * FROM `memberinfo` WHERE name = '' OR memberId = 4
           $search_result = mysqli_query($conn, $query);
        # code...
        break;

        case '1': 
        # code...
                  $query = "SELECT * FROM `basicinformation` 
          WHERE Student_ID LIKE '%".$data."%' ";
          #SELECT * FROM `memberinfo` WHERE name = '' OR memberId = 4
           $search_result = mysqli_query($conn, $query);

          
          break;


      case '2':
                     $query = "SELECT * FROM `basicinformation` 
          WHERE  Programme LIKE '%".$data."%' ";
          #SELECT * FROM `memberinfo` WHERE name = '' OR memberId = 4
           $search_result = mysqli_query($conn, $query);

          
          break;


      case '3':
                     $query = "SELECT * FROM `basicinformation` 
          WHERE Batch LIKE '%".$data."%' ";
          #SELECT * FROM `memberinfo` WHERE name = '' OR memberId = 4
           $search_result = mysqli_query($conn, $query);

          
          break;

      default:
         
        break;
    }
    


  }
else
{
   $query = "SELECT * FROM basicinformation";
   $search_result = mysqli_query($conn, $query);
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


















    <div class="container-fluid loginmain">

      <div class="container">
  <div class="row">
    <div class="col-md-5">
    <h3 class="form-signin-heading">Search Student Information</h3>

    <form class="form-horizontal" role="form" action="" method="post">
          <div class="form-group">

            <label class="col-lg-7 control-label"> Search Key: </label>
            <div class="col-lg-5">
              <input class="form-control" value="" type="text" name="data">
            </div>
          </div>

       


                           


                                   <div class="form-group" >
                                  <label class="col-lg-7 control-label"> Filter By: </label>
                                  <div class="col-lg-5">
                             
                             <select class="form-control" name="option" >
                                <option value="0" >   Name    </option>
                                <option value="1">    ID   </option>
                                <option value="2">    Programme    </option>
                                <option value="3">    Batch      </option>
                                

          </select>

                                        </div>
                                        </div>
                                      
                    

          <div class="form-group">
            <label class="col-md-7 control-label"></label>
            <div class="col-md-5">
              <input class="btn btn-primary" value="Search" type="submit" name="search">
              
            </div>
          </div>
        </form>
    <!--
            <div class="input-group" id="adv-search" >
                <input type="text" class="form-control" placeholder="Search for Member" name="member" />
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <form class="form-horizontal" role="form" method="POST">
                                  <div class="form-group">
                                    <label for="filter">Filter by</label>
                                    <select class="form-control" name="Type">
                                        <option value="0" selected>Student</option>
                                        <option value="1">Teacher</option>
                                        
                                        
                                    </select>
                                  </div>
                             <div class="form-group" name="option">
                             <input type="radio"  value="name" > Name  <br>
                             <input type="radio"  value="number" > Contact No <br>
                             <input type="radio"  value="email" checked> Email <br>
                                        </div>
                                       
                    <input type="submit" value=" Search Your Members "
                    name="search">
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div> -->
          </div>
        </div>
  </div>
</div>







<div class="container-fluid2">
      <div class="row">
      <label class="col-md-1 control-label"> </label>
          <div class="col-md-10">
              <div class="panel panel-default">
            <!-- Default panel contents -->
                    <table class="table table-striped">
                        
              <tr> 
                            <th> ID </th>
                            <th> Name </th>
                            <th> Programme </th>
                            <th> Batch</th>
                            <th> Contact Number  </th> 
                            <th> Status </th>
                            <th> Details </th>
                            <th> Update</th>
                          
                         </tr>
                         
                        <?php
                        if (isset($_POST['search'])) 
                         while($row =mysqli_fetch_array($search_result)): ?>
                         
                        

                          
           <tr>
                <td><?php echo $row['Student_ID'];?></td>
                <td><?php echo $row['Student_Name'];?></td>
                <td><?php echo $row['Programme'];?></td>
                <td><?php echo $row['Batch'];?></td>
                
                <!--
                <td><?php if($row['catagory']=='0')
                 {
                  echo "Student";
                 }
                 else
                 {
                  echo "Teacher";
                 }
                ?></td>
                -->
                <td><?php echo $row['Contact_No'];?></td>
                <td><?php if($row['Status']=='0')
                 {
                  echo "In Active";
                 }
                 else
                 {
                  echo "Active";
                 }
                ?></td>
                <td><a href="studentDetails.php?Edit=<?php echo $row['Student_ID'];?> ">View</a> </td>
                <td><a href="edit.php?Edit=<?php echo $row['Student_ID'];?> ">Edit</a> </td>
      
            </tr>

            



          <?php  

        
           endwhile;?>

         
                        

            
           
                         
                    </table>
                </div>
          </div>
        </div>
    </div>






      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
    </body>
  </html>
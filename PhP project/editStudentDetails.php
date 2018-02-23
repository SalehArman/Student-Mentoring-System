<?php 

    session_start();

    if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
   ?>

<?php
include 'conf.php';
if (isset($_GET['Edit'])) {
    $id = $_GET['Edit'];
    $query = "SELECT * FROM memberinfo WHERE memberId= '$id'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
            $email = $row['email'];
            
            $memberPassword = $row['memberPassword'];
            
            $address = $row['address'];
            $nid = $row['nid'];
            $number = $row['number'];
            $catagory = $row['catagory'];
            $status = $row['status1'];
            $note = $row['note'];
        }
    } else {
        echo "0 results";
    }


    if(!empty($_POST['update']))

    { 

  $sql = "UPDATE memberinfo 
                SET name='".$_POST['name']."',
                email='".$_POST['email']."',
                
                memberPassword='".$_POST['memberPassword']."',
                 
                 address='".$_POST['address']."',
                 nid='".$_POST['nid']."',
                 number='".$_POST['number']."',
                  note='".$_POST['note']."',
                 catagory='".$_POST['catagory']."',
                 status1='".$_POST['status']."'WHERE memberId= $id";
                  
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
} else {
    die("faied username");
}
?>

<?php
include 'header.php' ;
?>


  <!-- Manu  Part END -->





        <div class="container">


            <div class="row">


                <!-- edit form column -->
                <div class="col-md-9 personal-info">

                    <h3>Edit Memeber For Library </h3>

                    <form class="form-horizontal" role="form" action="" method="post">

                        <div class="form-group">
                            <label class="col-lg-3 control-label"> Name: </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $name; ?>" type="text" name="name" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label"> Email: </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $email; ?>" type="text" name="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label"> Comfirm Email: </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $email; ?>" type="text" name="confirmEmail">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-3 control-label"> Password: </label>
                            <div class="col-md-8">
                                <input class="form-control" value="<?php echo $memberPassword; ?>" type="password" name="memberPassword">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Confirm password: </label>
                            <div class="col-md-8">
                                <input class="form-control" value="<?php echo $memberPassword; ?>" type="password" name="confirmMemberPassword">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label"> Address: </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $address; ?>" type="text" name="address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label"> NID: </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $nid; ?>" type="text" name="nid">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label"> Contact Number: </label>
                            <div class="col-lg-8">
                                <input class="form-control" value="<?php echo $number; ?>" type="Number" name="number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label"> Catagory: </label>
                            <div class="col-lg-8">


                                <select id="select" name="catagory" " class="form-control" value="<?php echo $catagory; ?>">
                                        <option value="0">    Student    </option>
                                    <option value="1">    Teacher    </option>
                                </select>

                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-lg-3 control-label"> Status:</label>
                            <div class="col-lg-8">


                                <select id="select" class="form-control" name="status" value="<?php echo $status; ?>" >
            <option value="0" <?php if($status == 0){echo 'selected';}  ?>  >    Active    </option>
            <option value="1" <?php if($status == 1){echo 'selected';}  ?> >    Inactive    </option>
                                </select>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label"> Note: </label>
                            <div class="col-lg-8">
                                <input class="form-control input-lg" value="<?php echo $note; ?>" type="text" name="note" >
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
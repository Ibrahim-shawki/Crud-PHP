<?php require_once '../../config.php' ?>
<?php require_once BLA.'inc/header.php' ?>
<?php require_once BL.'functions/validate.php'?>


<?php 
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        if(checkEmpty($name) && checkLess($name,3))
        {

            $sql = "INSERT INTO services (`serv_name`) VALUES ('$name') ";
            $success_message = db_insert($sql);
            header( "refresh:2;url=".BURLA."services/add.php");

        }
        else 
        {
            $error_message = "Please Fill All Filds";
            header( "refresh:3;url=".BURLA."services/add.php");
        }
        
        require BL.'functions/messages.php';
    }
    ?>




<div class="col-sm-6 offset-sm-3 border p-3 mt-4">
        <h3 class="text-center p-3 bg-primary text-white">Add New Service</h3>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label >Name Of Service</label>
                <input type="text" name="name" class="form-control" >
            </div>
            
            <button type="submit" name="submit" class="btn btn-success mt-3">Save</button>
        </form>
       
    </div>


<?php require BLA.'inc/footer.php';  ?>
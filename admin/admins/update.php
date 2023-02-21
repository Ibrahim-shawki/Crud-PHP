<?php require '../../config.php';  ?>

<?php require BLA.'inc/header.php';  ?>
<?php require BL.'functions/validate.php';  ?>

<?php 
    if(isset($_POST['submit']))
    {
        $admin_id = $_POST['admin_id'];
        $name = $_POST['name'];
        $admin_id = $_POST['admin_id'];
        
        if(checkEmpty($name) && checkLess($name,3))
        {
            $row = getRow('admins','admin_id',$admin_id);

            if($row)
            {
                $sql = "UPDATE admins SET `admin_name`='$name' WHERE `admin_id`='$admin_id' ";
                $success_message = db_update($sql);
                
                header( "refresh:2;url=".BURLA."admins");
            }
            else
            {
                $error_message = "Please Type Correct Data";
            }

        }
        else 
        {
            $error_message = "Please Fill All Filds";
        }
        
        require BL.'functions/messages.php';
    }
    ?>




<?php require BLA.'inc/footer.php';  ?>






<?php require '../../config.php';  ?>

<?php require BLA.'inc/header.php';  ?>
<?php require BL.'functions/validate.php';  ?>

<?php 
    if(isset($_POST['submit']))
    {
        $serv_id = $_POST['serv_id'];
        $name = $_POST['name'];
        $serv_id = $_POST['serv_id'];
        
        if(checkEmpty($name) && checkLess($name,3))
        {
            $row = getRow('services','serv_id',$serv_id);

            if($row)
            {
                $sql = "UPDATE services SET `serv_name`='$name' WHERE `serv_id`='$serv_id' ";
                $success_message = db_update($sql);
                header( "refresh:2;url=".BURLA."services");
              
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






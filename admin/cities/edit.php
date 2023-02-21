<?php require_once '../../config.php' ?>
<?php require_once BLA.'inc/header.php' ?>


<?php 

if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $row = getRow('cities','city_id',$_GET['id']);
    if($row)
    {

        $city_id = $row['city_id'];

    }
    else{
        header('location:'.BURLA);

    }
}else{
    header('location:'.BURLA);
}

?>

<?php 
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $city_id = $_POST['city_id'];
        
        if(checkEmpty($name) && checkLess($name,3))
        {
            $row = getRow('cities','city_id',$city_id);

            if($row)
            {
                $sql = "UPDATE cities SET `city_name`='$name' WHERE `city_id`='$city_id' ";
                $success_message = db_update($sql);
                header( "refresh:2;url=".BURLA."cities");
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


<div class="container d-flex p-5 ">
    
    
<div class="col-sm-6 offset-sm-3 border p-3">
    <?php require BL.'functions/messages.php'; ?>
        <h3 class="text-center p-3 bg-primary text-white">Add New City</h3>
        <form method="post" action="<?php echo BURLA.'cities/update.php'; ?>">
            <div class="form-group">
                <label >Name Of City</label>
                <input type="text" name="name" class="form-control" value="<?php echo $row['city_name'];?>" >
                <input type="hidden" name="city_id" value="<?php echo $city_id; ?>" class="form-control" ></div>
                
            
            <button type="submit" name="submit" class="btn btn-success mt-2">Save</button>
        </form>
       
    </div>

</div>





<?php require_once BLA. 'inc/footer.php' ?>
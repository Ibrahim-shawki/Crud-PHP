<?php require '../../config.php';  ?>

<?php require BLA.'inc/header.php';  ?>
<?php require BL.'functions/validate.php';  ?>


<?php 

if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $row = getRow('admins','admin_id',$_GET['id']);
    if($row)
    {

        $admin_id = $row['admin_id'];

    }
    else{
        header('location:'.BURLA);

    }
}else{
    header('location:'.BURLA);
    
}

?>



    <div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Edit Admins</h3>
        <form method="post" action="<?php echo BURLA.'admins/update.php'; ?>" >
            <div class="form-group">
                <label >Name Of Admins</label>
                <input type="text" name="name" value="<?php echo $row['admin_name']; ?>" class="form-control" >
                <input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>" class="form-control" >
            </div>
            
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>
       
    </div>


<?php require BLA.'inc/footer.php';  ?>




   

<?php require '../../config.php';  ?>
<?php require BLA.'inc/header.php';  ?>


<div class="col-sm-12">
        <h3 class="text-center p-3 bg-primary text-white">View All admins</h3>
        <table class="table table-dark table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
       
                </tr>
            </thead>
            <tbody>
                <?php $data = getRows('admins');  $x=1; ?>
                <?php foreach($data as $row){   ?>
                <tr class="text-center">
                    <td scope="row"><?php echo $x; ?></td>
                    <td class="text-center"> <?php echo $row['admin_name'] ?>  </td>
                    
                    <td class="text-center">
                        <a href="<?php echo BURLA.'admins/edit.php?id='.$row['admin_id']; ?>" class="btn btn-info">Edit</a>
                        <a href="#" class="btn btn-danger delete" data-field="admin_id" data-id="<?php echo $row['admin_id']; ?>" data-table="admins" >Delete</a>
                    </td>
                </tr>
                <?php $x++; } ?>
               
            </tbody>
        </table>
    </div>


<?php require BLA.'inc/footer.php';  ?>
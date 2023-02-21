<!-- Bootstrap && javascript -->

<script src="<?= ASSETS?>/js/bootstrap.bundle.js" ></script>
<script src="<?= ASSETS?>/js/jquery-3.6.3.min.js" ></script>
<script>

        $(".delete").click(function()
        {

          var item_id = $(this).attr("data-id");
          var table = $(this).attr("data-table");
          var field = $(this).attr("data-field");

            $.ajax({
              type:'GET',
              url:"<?php echo BURLA.'inc/delete.php'; ?>",
              data:{item_id:item_id,table:table,field:field},
              dataType:"JSON",
              success:function(data)
              {
                  // console.log(data.message);
                  if(data.message == "success")
                  {
                    alert("Deleted Success");
                  }
                  else 
                  {
                    // alert("Error");
                  }
                  
              }
            })

        });
    </script>
</body>
</html>
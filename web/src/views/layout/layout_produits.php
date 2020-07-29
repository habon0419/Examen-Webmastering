
<div class="container">
    
</div>
<div class="col-md-6">
<?php

 if(isset($arr_data['errors'])){?>
          <div class="alert alert-danger " role="alert" >
        <ul>
            <?php
            foreach ($arr_data['errors'] as  $error) {
              echo  "<li>$error</li>";
            }
            ?>
         </ul>

          </div>
          <?php
          }?>


</div>

<?php
    echo $content_for_layout;
?>



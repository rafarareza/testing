<?php if(Session::has('flash_message')): ?>
<div class="alert alert-success alert-dismissable" style="position: fixed; width: 80%; top: 90px; right: 2%">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo e(Session::get('flash_message')); ?>

                  </div>
<?php endif; ?><?php /**PATH D:\xampp\htdocs\corporate_dashboard\resources\views/_partial/flash_message.blade.php ENDPATH**/ ?>
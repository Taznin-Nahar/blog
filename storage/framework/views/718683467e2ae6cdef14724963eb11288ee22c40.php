 
<?php $__env->startSection('admin_main_content'); ?> 




<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN BASIC PORTLET-->
        <div class="widget orange">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i> Advanced Table</h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                <table class="table table-striped table-bordered table-advance table-hover">
                    <thead>
                        <tr>
                            <th><i class="icon-bullhorn"></i> Blog ID</th>
                            <th class="hidden-phone"><i class="icon-question-sign"></i>Blog Title</th>
        
                            <th><i class=" icon-edit"></i> Status</th>
                            <th><i class=" icon-edit"></i> Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                //         echo "<pre>";
                // print_r($all_category_info);
                // exit();
                        ?>

                        <?php $__currentLoopData = $all_blog_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vBlog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><a href="#"><?php echo e($vBlog->category_id); ?></a></td>
                            <td class="hidden-phone"><?php echo e($vBlog->blog_title); ?></td>
                            <td>
                                <?php
                                    if($vBlog->publication_status==1) {
                                ?>
                                 
                                <span class="label label-success label-mini">Publish</span>

                                <?php
                                    }
                                    else{
                                 ?>
                                <span class="label label-important label-mini">Unpublish</span>
                               
                               <?php } ?>

                            </td>
                            <td>
                                <?php
                                    if ($vBlog->publication_status==1) {
                                   
                                ?>

                                    <a style="color:#ffffff" class="btn btn-success" href="<?php echo e(URL::to('/unpublished-blog/'.$vBlog->blog_id)); ?>"><i class="icon-thumbs-down"></i></a>
                                <?php
                                    }
                                    else{

                                ?>
                                <a class="btn btn-primary" href="<?php echo e(URL::to('/published-blog/'.$vBlog->blog_id)); ?>"><i class="icon-thumbs-up"></i></a>
                                <?php
                                    }
                                ?>

                                <a class="btn btn-primary" href="<?php echo e(URL::to('/edit-blog/'.$vBlog->blog_id)); ?>"><i class="icon-pencil "></i></a>
                                <a class="btn btn-danger" href="<?php echo e(URL::to('/delete-blog/'.$vBlog->blog_id)); ?>" onclick="return checkDelete()"><i class="icon-trash "></i></a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END BASIC PORTLET-->
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\taznin_blog\taznin_blog\resources\views/admin/page/manage_blog.blade.php */ ?>
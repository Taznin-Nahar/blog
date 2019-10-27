<?php $__env->startSection('main_content'); ?>


  <div class="templatemo_post_wrapper">
  <div class="templatemo_post">
      <div class="post_title"><?php echo e($blog_info->blog_title); ?></div>
      <div class="post_info">
         Posted by <?php echo e($blog_info->author_name); ?>,<?php echo e($blog_info->created_at); ?><a href="#">Player.</a>
      </div>
      <div class="post_body">
          <img src="<?php echo e(asset('public/post_image/'.$blog_info->blog_image)); ?>" alt="free css template" border="1" style="width:500px;height:80%;" />
        <p><?php echo e($blog_info->blog_long_description); ?></p>
    </div>
<div class="post_comment">
         <a href="#">No Comment</a>
      </div>
  </div>
  </div> <!-- End of a post-->
  
   

            <?php $__env->stopSection(); ?>
       
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\taznin_blog\taznin_blog\resources\views/pages/blog_details.blade.php */ ?>
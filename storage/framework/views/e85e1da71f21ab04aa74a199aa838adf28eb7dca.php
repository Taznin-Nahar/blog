<?php $__env->startSection('main_content'); ?>

<?php $__currentLoopData = $published_blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v_blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="templatemo_post_wrapper">
  <div class="templatemo_post">
      <div class="post_title" ><a href="<?php echo e(URL::to('/blog-details/'.$v_blog->blog_id)); ?>"><?php echo e($v_blog->blog_title); ?></a></div>
      <div class="post_info">
         Posted by <?php echo e($v_blog->author_name); ?>,<?php echo e($v_blog->created_at); ?><a href="#">Player.</a>
      </div>
      <div class="post_body">
          <img src="<?php echo e(asset('public/post_image/'.$v_blog->blog_image)); ?>" alt="free css template" border="1" style="width:500px;height:80%;" />
        <p><?php echo e($v_blog->blog_short_description); ?></p>
    </div>
<div class="post_comment">
         <a href="#">No Comment</a>
      </div>
  </div>
  </div> <!-- End of a post-->
  
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

            <?php $__env->stopSection(); ?>
       
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* G:\xampp\htdocs\taznin_blog\taznin_blog\resources\views/pages/master.blade.php */ ?>
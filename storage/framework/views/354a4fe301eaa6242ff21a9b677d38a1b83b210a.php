 
<?php $__env->startSection('admin_main_content'); ?>  

<div class="container-fluid">

  <!-- Page Heading -->
  <div class="">
    <div class="col-lg-12">

      <ol class="breadcrumb">
        <li class="active">
          <i class="fa fa-dashboard"></i> Add Blog
        </li>
      </ol>
    </div>
  </div>
  <!-- /.row -->

  <div>
    <div class="col-lg-6 col-lg-offset-3">
      <h3 align="centre" style="color:red">
        <?php

        $message=Session::get('message');
        if (isset($message)) {
          echo $message;
          Session::put('message','');  
        }


        ?>
      </h3>

      <form action="<?php echo e(URL::to('/save-blog')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="container">

          <div>
            <div class="col-md-6">
              <h1>Add Blog</h1>
            </div>
          </div>



          <div style="float:left">

            <div class="col-md-6">

             <div class="form-group">
               <label for="productname" class="loginFormElement" for="posttitle">Post Title:</label>
               <input class="form-control" id="posttitle" type="text" name="post_title" required>
             </div>

             <div class="form-group">
               <label for="productname" class="loginFormElement" for="categoryname">Category Name:</label>
               <select class="form-control" id="categoryid" type="text" name="category_id" required>
                <?php $__currentLoopData = $published_blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vBlog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

               <option value="<?php echo e($vBlog->category_id); ?>"><?php echo e($vBlog->category_name); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </select>
             </div>

            
            <div class="form-group">
              <label class="loginformelement" for="categorydescription" >Post Image</label>
              <input type="file" id="postimage" name="blog_image" required>
            </div>

            <div class="form-group">
              <label class="loginformelement" for="categorydescription" >Short Description</label>
              <textarea  name="blog_short_description" id="rich TextBody" required></textarea>
            </div>

             <div class="form-group">
              <label class="loginformelement" for="categorydescription" >Long Description</label>
              <textarea  name="blog_long_description" id="rich TextBody1" required></textarea>
            </div>

           <!--  <div class="form-group">
               <label for="productname" class="loginFormElement" for="categoryname">Author Name:</label>
               <input class="form-control" id="authorname" type="text" name="author_name" required>
               <option></option>
             </div>
 -->
            <div class="form-group">
              <label class="loginformelement" for="publicationstatus" >Publication Status</label>
              <select class="form-control" id="publicationstatus"  type="text" name="publication_status" required>
                <option></option>
              <option value="1">Published</option>
              <option value="0">Unpublished</option>
              </select>
            </div>

            <button type="submit" id="loginSubmit" class="btn btn-success loginFormElement">Save</button>
            <button type="submit" id="Submit" class="btn btn-success loginFormElement">Cancel</button>

          </div>
        </form>

      </div>

    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* G:\xampp\htdocs\taznin_blog\taznin_blog\resources\views/admin/page/add_blog.blade.php */ ?>
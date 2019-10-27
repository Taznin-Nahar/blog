 
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
          Session::put('message');  
        }


        ?>
      </h3>

      <form action="<?php echo e(URL::to('/update-blog')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="container">

         <!--  <div>
            <div class="col-md-6">
              <h1>Add Category</h1>
            </div>
          </div>
 -->


          <div style="float:left">

            <div class="col-md-6">

             <div class="form-group">
               <label for="productname" class="loginFormElement" for="categoryname">Blog Title</label>
               <input class="form-control" id="blogtitle" type="text" name="blog_title" value="<?php echo e($blog_info->blog_title); ?>" required>
               <input class="form-control" id="blogid" type="hidden" name="blog_id" value="<?php echo e($blog_info->blog_id); ?>">
             </div>

             <div class="form-group">
               <label for="productname" class="loginFormElement" for="categoryname">Category Name:</label>
               <select class="form-control" id="categoryid" type="text" name="category_id" required>
                <?php

                  $selected_cat=DB::table('category')->where('category_id',$blog_info->category_id)
                  ->first();


                ?>

                <option value="<?php echo e($selected_cat->category_id); ?>"><?php echo e($selected_cat->category_name); ?></option>
                <?php

                  $not_selected_cat=DB::table('category')->where('category_id','!=',$blog_info->category_id)
                  ->get();

                ?>
                <?php $__currentLoopData = $not_selected_cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vNot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($vNot->category_id); ?>"><?php echo e($vNot->category_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </select>
              </div>  


              <input type="hidden" id="postimage" name="old_blog_image" value="<?php echo e($blog_info->blog_image); ?>">
              <div class="form-group">
              <label class="loginformelement" for="categorydescription" >Post Image</label>
              <input type="file" id="postimage" name="blog_image">
              
              <span>
                <img src="<?php echo e(asset('public/post_image/'.$blog_info->blog_image)); ?>" width="50" height="50">
              </span>
            </div>

            
            <div class="form-group">
              <label class="loginformelement" for="blodescription" >Blog Short Description</label>
              <textarea id="categorydescription" name="blog_short_description" required><?php echo e($blog_info->blog_short_description); ?></textarea>

            </div>

             <div class="form-group">
              <label class="loginformelement" for="blogdescription" >Blog Long Description</label>
              <textarea id="categorydescription" name="blog_long_description" required><?php echo e($blog_info->blog_long_description); ?></textarea>

            </div>



            <!-- <div class="form-group">
              <label class="loginformelement" for="publicationstatus" >Publication Status</label>
              <select class="form-control" id="publicationstatus"  type="text" name="category_publish" value="<?php echo e($blog_info->publication_status); ?>">
                <option></option>
              <option value="1">Published</option>
              <option value="0">Unpublished</option>
              </select>
            </div> -->

            <button type="submit" id="loginSubmit" class="btn btn-success loginFormElement">Update</button>
            <button type="submit" id="Submit" class="btn btn-success loginFormElement">Cancel</button>

          </div>
        </form>

      </div>

    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\taznin_blog\taznin_blog\resources\views/admin/page/edit_blog.blade.php */ ?>
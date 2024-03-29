 
<?php $__env->startSection('admin_main_content'); ?>  

<div class="container-fluid">

  <!-- Page Heading -->
  <div class="">
    <div class="col-lg-12">

      <ol class="breadcrumb">
        <li class="active">
          <i class="fa fa-dashboard"></i> Add Category
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

      <form action="<?php echo e(URL::to('/update-category')); ?>" method="post">
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
               <label for="productname" class="loginFormElement" for="categoryname">Category Name:</label>
               <input class="form-control" id="categoryname" type="text" name="category_name" value="<?php echo e($category_info->category_name); ?>" required>
               <input class="form-control" id="categoryid" type="hidden" name="category_id" value="<?php echo e($category_info->category_id); ?>">
             </div>

            
            <div class="form-group">
              <label class="loginformelement" for="categorydescription" >Category Description</label>
              <textarea id="categorydescription" name="category_description" required><?php echo e($category_info->category_description); ?></textarea>

            </div>

            <!-- <div class="form-group">
              <label class="loginformelement" for="publicationstatus" >Publication Status</label>
              <select class="form-control" id="publicationstatus"  type="text" name="category_publish">
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
<?php /* G:\xampp\htdocs\taznin_blog\taznin_blog\resources\views/admin/page/edit_category.blade.php */ ?>
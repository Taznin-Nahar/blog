<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use DB;
use file;
session_start();

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authCheck();
        $admin_home= view('admin.page.admin_home');
        return view('admin.admin_master')
                    ->with('admin_main_content',$admin_home);
    }

    public function addCategory(){

        $this->authCheck();
        $add_category_page= view('admin.page.add_category');
        return view('admin.admin_master')
                    ->with('admin_main_content',$add_category_page);
    }

    public function saveCategory(Request $request){
        $data=array();
        
        $data['category_name']=$request->category_name;
        $data['category_description']=$request->category_description;
        $data['publication_status']=$request->category_publish;
        // echo "<pre>";
        //  print_r($data);
        // exit();

         DB::table('category')->insert($data);
         Session::put('message',"Category Saved successfully!!");
         return Redirect::to('/add-category');    

    }

    public function addBlog(){
         $published_blog=DB::table('category')
            // ->where('publication_status',1)
            ->get();

        $add_blog_page=view('admin.page.add_blog')
                        ->with('published_blog',$published_blog);
        return view('admin.admin_master')
                    ->with('admin_main_content',$add_blog_page);

    }

     public function saveBlog(Request $request){
        $data=array();
        
        $data['blog_title']=$request->post_title;
        $data['category_id']=$request->category_id;
        $data['blog_short_description']=$request->blog_short_description;
        $data['blog_long_description']=$request->blog_long_description;
        // $data['blog_image']='';
        $data['author_name']=Session::get('admin_name');
        $data['publication_status']=$request->publication_status;
        // echo "<pre>";
        //  print_r($data);
        //  print_r($_FILES);
        // exit();

        $image = $request->file('blog_image');
            if ($image) {
                $file_size = $image->getClientSize();
                $name = str_random(20);
                $extension = $image->getClientOriginalExtension();
                $image_name = $name . '.' . $extension;
                $upload_path = 'public/post_image/';
                //-------- Check image format ----------//
                if ($extension == 'JPG' || $extension == 'jpg' || $extension == 'png' || $extension == 'PNG' || $extension == 'JPEG' || $extension == 'jpeg') {
                    //------ Check file size --------//
                    if ($file_size < 51200000) {
                        $success = $image->move($upload_path, $image_name);
                        $data['blog_image'] = $image_name;
                        $result = DB::table('blog')->insert($data);
                    } else {
                        return Redirect::to('add-blog')->with('message', 'Maximum file size is 5MB');
                    }
                } else {
                    return Redirect::to('add-blog')->with('message', 'File type not supported...!');
                }
            } else {
                $result = DB::table('blog')->insert($data);
            }

            if ($result) {
                return Redirect::to('add-blog')->with('message', ' Added Successfully!!');
            } else {
                return Redirect::to('add-blog')->with('message', 'There is a error Saving Data!!');
            }

         // DB::table('blog')->insert($data);
         // Session::put('message',"Blog Saved successfully!!");
         // return Redirect::to('/add-blog');    

    }


    public function manageBlog(){
          $this->authCheck();
       $all_blog = DB::table('blog')->get();
                // echo "<pre>";
                // print_r($all_category);
                // exit();
        $manage_blog=view('admin.page.manage_blog')
                    ->with('all_blog_info',$all_blog);

        return view('admin.admin_master')
                    ->with('manage_blog',$manage_blog);

    }

    public function unpublishedBlog($blog_id){
          DB::table('blog')
            ->where('blog_id', $blog_id)
            ->update(['publication_status' => 0]);
            return Redirect::to('/manage-blog');
    }

    public function publishedBlog($blog_id){
        DB::table('blog')
            ->where('blog_id', $blog_id)
            ->update(['publication_status' => 1]);
            return Redirect::to('/manage-blog');

    }

    public function editBlog($blog_id){

        $blog_info=DB::table('blog')
            ->where('blog_id', $blog_id)
            ->first();


         $published_category=DB::table('category')
                            ->get();

          $edit_blog=view('admin.page.edit_blog')
                           ->with('blog_info',$blog_info)
                           ->with('published_category',$published_category) ;

         return view('admin.admin_master')
                    ->with('manage_blog',$edit_blog);
    }


    public function updateBlog(Request $request){

        $data=array();
        $data['blog_title']= $request->blog_title;
        $data['category_id']= $request->category_id;
        $data['blog_short_description']= $request->blog_short_description;
        $data['blog_long_description']= $request->blog_long_description;
        $blog_id=$request->blog_id;
        // echo "<pre>";
        // print_r($data);
        // exit();
        $image = $request->file('blog_image');
            if ($image) {
                $file_size = $image->getClientSize();
                $name = str_random(20);
                $extension = $image->getClientOriginalExtension();
                $image_name = $name . '.' . $extension;
                $upload_path = 'public/post_image/';
                //-------- Check image format ----------//
                if ($extension == 'JPG' || $extension == 'jpg' || $extension == 'png' || $extension == 'PNG' || $extension == 'JPEG' || $extension == 'jpeg') {
                    //------ Check file size --------//
                    if ($file_size < 51200000) {
                        $success = $image->move($upload_path, $image_name);
                        if ($request->old_blog_image) {
                            //$old_image_path = $request->old_blog_image;
                            //unlink('public/products/' . $old_blog_image);
          unlink('public/post_image/' . $request->old_blog_image);
                        }
                        $data['blog_image'] = $image_name;
//                        echo "<pre>";
//            print_r($data);
//            exit();
                        $result = DB::table('blog')->where('blog_id', $request->blog_id)->update($data);
                    } else {
                        return Redirect::to('edit-blog/'.$request->blog_id)->with('message', 'Maximum file size is 5MB');
                    }
                } else {
                    return Redirect::to('edit-blog/'.$request->blog_id)->with('message', 'File type not supported...!');
                }
            } else {

                $data['blog_image'] = $request->old_blog_image;
                $result = DB::table('blog')->where('blog_id', $request->blog_id)->update($data);
//                $result = DB::table('tbl_products')->where('product_id', $request->product_id)->first();
//                                echo "<pre>";
//            print_r($result);
//            exit();
            }
            //------------- End Image Upload Section -------------- //

if ($result) {
                return Redirect::to('edit-blog/'.$request->blog_id)->with('message', ' Added Successfully!!');
            } else {
                return Redirect::to('edit-blog/'.$request->blog_id)->with('message', 'There is a error Saving Data!!');
            }

         // DB::table('blog')
         //    ->where('blog_id', $blog_id)
         //    ->update($data);

         //     return Redirect::to('/manage-blog');



    }


    public function deleteBlog($blog_id){

        // echo "<pre>";
        // print_r($category_id);
        // exit();
        DB::table('blog')
            ->where('blog_id', $blog_id)
            ->delete();
            return Redirect::to('/manage-blog');
    }


    public function logout(){
        Session::put('admin_name','');
        Session::put('admin_id','');
        Session::put('message',"You are successfully logout!");
        return Redirect::to('/admin');

    }

    public function authCheck(){
        $admin_id=Session::get('admin_id');

        if ($admin_id) {
            return;
        }else{

            return Redirect::to('/admin')->send();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function manageCategory(){

       $this->authCheck();
       $all_category = DB::table('category')->get();
                // echo "<pre>";
                // print_r($all_category);
                // exit();
        $manage_category=view('admin.page.manage_category')
                    ->with('all_category_info',$all_category);

        return view('admin.admin_master')
                    ->with('manage_category',$manage_category);
                    

    }


    public function unpublishedCategory($category_id){

        // echo "<pre>";
        // print_r($category_id);
        // exit();
        DB::table('category')
            ->where('category_id', $category_id)
            ->update(['publication_status' => 0]);
            return Redirect::to('/manage-category');
    }

    public function publishedCategory($category_id){

        // echo "<pre>";
        // print_r($category_id);
        // exit();
        DB::table('category')
            ->where('category_id', $category_id)
            ->update(['publication_status' => 1]);
            return Redirect::to('/manage-category');
    }

    public function deleteCategory($category_id){

        // echo "<pre>";
        // print_r($category_id);
        // exit();
        DB::table('category')
            ->where('category_id', $category_id)
            ->delete();
            return Redirect::to('/manage-category');
    }

    public function editCategory($category_id){

        // echo "<pre>";
        // print_r($category_id);
        // exit();
       $category_info=DB::table('category')
            ->where('category_id', $category_id)
            ->first();
          $edit_category=view('admin.page.edit_category')
                           ->with('category_info',$category_info) ;  
         return view('admin.admin_master')
                    ->with('manage_category',$edit_category);
    }

    public function updateCategory(Request $request){

        $data=array();
        $data['category_name']= $request->category_name;
        $data['category_description']= $request->category_description;
        $category_id=$request->category_id;
        // echo "<pre>";
        // print_r($category_id);
        // exit();

         DB::table('category')
            ->where('category_id', $category_id)
            ->update($data);

             return Redirect::to('/manage-category');



    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

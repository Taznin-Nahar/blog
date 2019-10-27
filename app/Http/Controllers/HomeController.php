<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        /*
        $published_blog=DB::table('blog')
                        ->where('publication_status',1)
                        ->orderBy('blog_id','desc')
                        ->skip(2)
                        ->take(4)
                        ->get();
        */
        $published_blog = DB::table('blog')
        ->where('publication_status',1)
        ->orderBy('blog_id','desc')
        ->paginate(2);

        $master=view('pages.master')
                ->with('published_blog',$published_blog);
         return view('home')
                    ->with('main_content',$master);
        // return view('home');
    }

    public function blogDetails($blog_id){
         $blog_info=DB::table('blog')
                        ->where('blog_id',$blog_id)
                        ->first();


        $data['hit_counter']=$blog_info->hit_counter+1;
        DB::table('blog')
            ->where('blog_id',$blog_id)
            ->update($data);


        $blog_details=view('pages.blog_details')
                ->with('blog_info',$blog_info);
         return view('home')
                    ->with('main_content',$blog_details);


    }


    public function categoryBlog($category_id){

        $published_blog=DB::table('blog')
                        ->where('publication_status',1)
                        ->where('category_id',$category_id)
                        ->orderBy('blog_id','desc')
                        ->get();

        $master=view('pages.master')
                ->with('published_blog',$published_blog);
         return view('home')
                    ->with('main_content',$master);
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

    public function contact(){
      $contact=view('pages.contact');
         return view('home')
                    ->with('main_content',$contact);  
    }


    

}

<?php

namespace App\Http\Controllers;

use App\Blogs;
use App\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blogs::all();
        $category = Category::all();
        return view('blog.list', compact('blogs', 'category'));
    }

    public function create()
    {
        $category = Category::all();
        return view('blog.create', compact('category'));
    }

    public function store(Request $request)
    {
        $blogs = new Blogs();
        $blogs->title = $request->title;
        $blogs->content = $request->input('content');
        $blogs->category_id = $request->category_id;
        if($request->file('images')){
            $file = $request->file('images');
            $filename = $file->getClientOriginalName('images');
            $file->move('images',$filename);
            $blogs->images = $filename;
        }
        $blogs->save();
        return redirect()->route('blog.index');
    }

    public function edit($id)
    {
        $category = Category::all();
        $blogs = Blogs::find($id);
        return view('blog.edit', compact('blogs', 'category'));
    }

//     public function update(Request $request,$id){
//        $blogs = Blogs::find($id);
//        $blogs->title = $request->title;
//        $blogs->
//     }
}

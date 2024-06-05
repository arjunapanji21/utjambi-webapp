<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show_all_post()
    {
        $props = [
            'title' => 'Posts',
            'posts' => Post::orderBy('date', 'desc')->paginate(10),
        ];
        // dd($props['posts'][0]->category->name);
        return view('admin.post.show_all_post', $props);
    }

    public function create_new_post()
    {
        $props = [
            'title' => 'New Post',
            'categories' => PostCategory::orderBy('name', 'asc')->get(),
        ];
        return view('admin.post.create_new_post', $props);
    }

    public function post_to_draft(Request $request)
    {
        $data = $request->all();
        $data['author_id'] = auth()->user()->id;
        $data['status'] = "draft";
        // $data['featuredImage'] = base64_encode($request->file('featuredImage'));
        Post::create($data);
        return response()->json([
            'status' => 200,
            'msg' => 'Post has been saved to draft.',
        ]);
    }

    public function post_to_publish(Request $request)
    {
        $data = $request->all();
        $data['author_id'] = auth()->user()->id;
        $data['status'] = "publish";
        // $data['featuredImage'] = base64_encode($request->file('featuredImage'));
        Post::create($data);
        return response()->json([
            'status' => 200,
            'msg' => 'Post has been saved to publish.',
        ]);
    }

    public function show_post_detail($category, $slug){
        $post_category_id = PostCategory::where('name', 'like', $category)->get()->first()->id;
        $post = Post::where('post_category_id', $post_category_id);
        $related = $post->get();
        $post = $post->where('slug', $slug)->get()->first();
        $post->views = $post->views += 1;
        $post->save();
        $props = [
            'title' => $post->title,
            'post' => $post,
            'related' => $related
        ];
        return view('homepage.show_post_detail', $props);   
    }

    public function show_all_category()
    {
        $categories = PostCategory::orderBy('created_at', 'asc')->paginate(10);
        $props = [
            'title' => 'Categories',
            'categories' => $categories,
        ];
        return view('admin.post.show_all_category', $props);
    }

    public function add_new_category(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
        ]);
        PostCategory::create($data);
        return back()->with('success', 'A new category has been added to database.');
    }

    public function update_category(Request $request, $id)
    {
        $request->all();
        return back()->with('success', 'Category updated successfully.');
    }
}

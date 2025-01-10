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
            'posts' => Post::orderBy('date', 'desc')->get(),
        ];
        // dd($props['posts'][0]->category->name);
        return view('admin.post.post_index', $props);
    }

    public function create_new_post()
    {
        $props = [
            'title' => 'New Post',
            'categories' => PostCategory::orderBy('name', 'asc')->get(),
        ];
        return view('admin.post.post_create', $props);
    }

    public function edit_post($id)
    {
        $props = [
            'title' => 'Edit Post',
            'categories' => PostCategory::orderBy('name', 'asc')->get(),
            'post' => Post::find($id),
        ];
        return view('admin.post.post_edit', $props);
    }

    public function save_new_post(Request $request)
    {
        $data = $request->all();
        $data['author_id'] = auth()->user()->id;
        // $data['featuredImage'] = base64_encode($request->file('featuredImage'));
        // $data['views'] = rand(500, 2500);
        $post = new Post;
        $post->title = $data['title'];
        $post->content = $data['content'];
        $post->slug = $data['slug'];
        $post->excerpt = $data['excerpt'];
        $post->post_category_id = $data['post_category_id'];
        $post->tags = $data['tags'];
        $post->status = $data['status'];
        $post->author_id = $data['author_id'];
        $post->date = $data['date'];
        $post->save();
        // return response()->json([
        //     'status' => 200,
        //     'message' => 'A new post has been saved to database!',
        //     'redirect_url' => route('admin.post.all'),
        // ]);
        return redirect()->route('admin.post.all')->with('success', 'A new post has been saved to database!');
    }

    public function update_post($id, Request $request)
    {
        $data = $request->all();
        $post = Post::find($id);
        $post->title = $data['title'];
        $post->content = $data['content'];
        $post->slug = $data['slug'];
        $post->excerpt = $data['excerpt'];
        $post->post_category_id = $data['post_category_id'];
        $post->tags = $data['tags'];
        $post->status = $data['status'];
        $post->date = $data['date'];
        $post->save();
        // return response()->json([
        //     'status' => 200,
        //     'msg' => 'Post updated successfully.',
        // ]);
        return redirect()->route('admin.post.all')->with('success', 'Post updated successfully!');
    }

    public function delete_post($id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('admin.post.all')->with('success', 'Post deleted successfully.');

    }

    public function show_post_detail($category, $slug){
        app('App\Http\Controllers\HomepageController')->visitor();
        $post_category_id = PostCategory::where('name', 'like', $category)->get()->first()->id;
        $post = Post::where('post_category_id', $post_category_id);
        $related = $post->where('status', 'publish')->inRandomOrder()->limit(4)->get();
        $post = $post->where('slug', $slug)->get()->first();
        $post->views = $post->views += 1;
        $post->save();
        $props = [
            'title' => $post->title,
            'post' => $post,
            'related' => $related
        ];
        return view('homepage.single_post', $props);   
    }

    public function show_all_category()
    {
        $categories = PostCategory::orderBy('created_at', 'asc')->paginate(10);
        $props = [
            'title' => 'Categories',
            'categories' => $categories,
        ];
        return view('admin.post.category_show', $props);
    }

    public function add_new_category(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $category = new PostCategory;
        $category->name = $request['name'];
        $category->save();
        return back()->with('success', 'A new category has been added to database.');
    }

    public function update_category(Request $request, $id)
    {
        $category = PostCategory::find($id);
        $category->name = $request['name'];
        $category->save();
        return back()->with('success', 'Category updated successfully.');
    }

    public function delete_category($id)
    {
        $category = PostCategory::find($id);
        if(count($category->posts) > 0){
            return back()->with('alert', 'Cannot delete this category, it has one or more posts!');
        }
        $category->delete();
        return back()->with('success', 'Category deleted successfully.');
    }
}

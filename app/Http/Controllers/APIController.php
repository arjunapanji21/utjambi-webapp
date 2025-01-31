<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function get_post(Request $request){

        if($request->has('slug')){
            $post = Post::select('id', 'title', 'slug', 'date', 'content', 'tags', 'views')->where('status', 'publish')->orderBy('date', 'desc');
            $post->where('slug', $request['slug']);
            return response()->json([
                'status' => 200,
                'message' => 'success',
                'data' => $post->get(),
            ]);
        }

        if($request->has('post_category_id')){
            $post = Post::select('id', 'title', 'slug', 'date', 'excerpt', 'content', 'tags', 'views')->where('status', 'publish')->orderBy('date', 'desc');
            $post->where('post_category_id', $request['post_category_id']);
            return response()->json([
                'status' => 200,
                'message' => 'success',
                'data' => $post->get(),
            ]);
        }

        if($request->has('random')){
            $post = Post::select('id', 'title', 'slug', 'date', 'views')->where('status', 'publish')->orderBy('date', 'desc');
            $post->inRandomOrder()->take($request['random']);
            return response()->json([
                'status' => 200,
                'message' => 'success',
                'data' => $post->get(),
            ]);
        }
        
        if($request->has('limit')){
            $post = Post::select('id', 'title', 'slug', 'date', 'excerpt', 'content', 'tags', 'views')->where('status', 'publish')->orderBy('date', 'desc');
            $post->limit($request['limit']);
            return response()->json([
                'status' => 200,
                'message' => 'success',
                'data' => $post->get(),
            ]);
        }

        if($request->has('paginate')){
            $post = Post::select('id', 'title', 'slug', 'date', 'excerpt', 'content', 'tags', 'views')->where('status', 'publish')->orderBy('date', 'desc');
            return response()->json([
                'status' => 200,
                'message' => 'success',
                'data' => $post->paginate($request['paginate']),
            ]);
        }

        if($request->has('all')){
            $post = Post::select('id', 'title', 'slug', 'date', 'views')->where('status', 'publish')->orderBy('date', 'desc');
            return response()->json([
                'status' => 200,
                'message' => 'success',
                'data' => $post->get(),
            ]);
        }

        return response()->json([
            'status' => 404,
            'message' => 'parameter undefined',
            'data' => [],
        ]);
    }

    public function get_slug(){
        $post = Post::where('status', 'publish')->orderBy('date', 'desc')->get();

        $slug = [];

        foreach($post as $p){
            array_push($slug, $p->slug);
        }

        return response()->json([
            'status' => 200,
            'message' => 'success',
            'data' => $slug,
        ]);
    }
}

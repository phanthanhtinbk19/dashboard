<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\Post;
use App\Models\Category;
use App\Models\Kind;
use App\Models\Image;

class PostController extends Controller
{
    public function savePostAdmin(Request $request)
    {
        try {
            $post = new Post();
            $post->title = $request->title;
            $post->desc = $request->desc;
            $post->category_id = $request->category_id;
            $post->kind_id = $request->kind_id;
            $post->price = $request->price;
            $post->area = $request->area;
            $post->address = $request->address;
            $post->save();
            $post_id = $post->id; // this give us the last inserted record id
            return response()->json(['status' => 'success', 'post_id' => $post_id]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'exception', 'msg' => $e->getMessage()]);
        }

      
    }
    public function storeMultipleImage1(Request $request)
    {
        try {
            $imageArr = [];
            foreach ($request->file('file') as $file) {
                $postid = $request->postid;
                $post_image = new Post();
                $name = time() . rand(1, 100) . '.' . $file->extension();
                $file->move(public_path('/uploads/images'), $name);
                $imageArr[] = $name;
            }
            $imageArrToStr = implode(',', $imageArr);
            $post_image->where('id', $postid)->update(['images' => $imageArrToStr]);
            return response()->json(['status' => 'success', 'imgdata' => $original_name, 'postid' => $postid]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function addPostAdmin()
    {
        try {
            $kinds = Kind::all();
            $cates = Category::all();

            return view('pages.admin.post.add-post', compact('kinds', 'cates'));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function allPostAdmin()
    {
        $posts = Post::all();
        $cates = Category::all();
        $kinds = Kind::all();
        return view('pages.admin.post.all-post', compact('posts', 'cates', 'kinds'));
    }

    //user

    public function addPost()
    {
        try {
            $kinds = Kind::all();
            $cates = Category::all();
            return view('pages.user.post', compact('kinds', 'cates'));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function listPost()
    {
        return view('pages.user.post-management');
    }

    // public function savePost(Request $request)
    // {
    //     try {
    //         $post = new Post();
    //         $post->title = $request->title;
    //         $post->desc = $request->desc;
    //         $post->category_id = $request->category_id;
    //         $post->kind_id = $request->kind_id;
    //         $post->price = $request->price;
    //         $post->area = $request->area;
    //         $post->address = $request->address;
    //         $post->save();
    //         $post_id = $post->id; // this give us the last inserted record id
    //     } catch (\Exception $e) {
    //         return response()->json(['status' => 'exception', 'msg' => $e->getMessage()]);
    //     }

    //     return response()->json(['status' => 'success', 'post_id' => $post_id]);
    // }
  
    public function detailPost($post_id)
    {
        $post = Post::find($post_id);

        $all_post = DB::table('posts')
            ->whereNotIn('id', [$post_id])
            ->get();
        $kinds = DB::table('kinds')->get();
        return view('pages.user.detail-post', compact('all_post', 'post', 'kinds'));
    }

    public function deletePost($post_id)
    {
        try {
            $post = Post::where('id', $post_id)->delete();
            toastr()->success('Data has been deleted successfully!', 'Congrats');
            return redirect()->back();
        } catch (\Throwable $th) {
            toastr()->error('Oops! Something went wrong!', 'Oops!');
        }
    }
}
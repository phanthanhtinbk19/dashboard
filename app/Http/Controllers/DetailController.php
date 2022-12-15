<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail(Request $request)
    {
        $post_id = $request->post_id;
        $post = DB::table('posts')
            ->where('id', $post_id)
            ->get();
        $all_post = DB::table('posts')
            ->whereNotIn('id', [$post_id])
            ->get();
        $kinds = DB::table('kinds')->get();
        return view('pages.admin.detail', compact('all_post', 'post', 'kinds'));
    }
}
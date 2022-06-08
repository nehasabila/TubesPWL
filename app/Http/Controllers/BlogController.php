<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Komentar;
use App\Models\Kategori;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        //
        $post = Post::join('kategoris','posts.id_kategori','=','kategoris.id')->join('users','posts.id_user','=','users.id')->select('posts.id','posts.judul','posts.deskripsi','posts.tgl_post','posts.foto','kategoris.kategori','users.name');
        //query search early
        //dd(request('search'));
        //$post = post::latest();

        // if(request('search')){
        //     $post->where('judul','like','%'.request('search').'%')
        //          ->OrWhere('deskripsi','like','%'.request('search').'%');
        // }
        //end early
        return view('website.bloghome', [                   //untuk pagination, jadi ini diizinkan 2 data yg bisa tampil perhalaman
            'post' => $post->filter(request(['search']))->paginate(2)//sebelum->get()
        ]);
    }

    public function singlepost($id)
    {
        $post = Post::join('kategoris','posts.id_kategori','=','kategoris.id')->join('users','posts.id_user','=','users.id')->select('posts.id','posts.judul','posts.deskripsi','posts.tgl_post','posts.foto','kategoris.kategori','users.name')->where('posts.id', $id)->get();

        return view('website.singlepost', [
            'post' => $post
        ]);
        //
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
}

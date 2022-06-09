<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //read postingan di halaman blog
    public function index()
    {

        $id = auth()->user()->id;
        $post = Post::join('kategoris','posts.id_kategori','=','kategoris.id')->join('users','posts.id_user','=','users.id')->select('users.id','posts.id','posts.id_user','posts.judul','posts.slug','posts.deskripsi','posts.tgl_post','kategoris.kategori','users.name')->where('posts.id_user', $id);//->get();

        return view('user.post', [
            'post' => $post->filter(request(['search']))->paginate(3)//paginationnya
        ]);
        //
    }
    public function allpost()
    {
        
        $post = Post::join('kategoris','posts.id_kategori','=','kategoris.id')->join('users','posts.id_user','=','users.id')->select('users.id','posts.id','posts.id_user','posts.judul','posts.slug','posts.deskripsi','posts.tgl_post','kategoris.kategori','users.name');//->get();

        return view('user.post', [
            'post' => $post->filter(request(['search']))->paginate(3)//paginationnya
        ]);
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createpost()
    {
        $post = Kategori::all();
        return view('user.createpost', [
            'post'=>$post
        ]);
        //
    }

    public function updatepost(Post $postData)
    {
        $post = Kategori::all();
        return view('user.updatepost', [
            'post'=>$post,
            'postData' => $postData
        ]);
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
        $request->validate([

            'id_user' => 'required',
            'id_kategori' => 'required',
            'judul'=>'required',
            'slug'=>'required',
            'deskripsi'=>'required',
            'foto' => 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:20487',
            'tgl_post' => 'required',
        
        ]);

         //mengambil data file yang diupload
         $file           = $request->file('foto');
         //mengambil nama file
         $nama_file      = $file->getClientOriginalName();
 
         //memindahkan file ke folder tujuan
         $file->move('posts_image',$file->getClientOriginalName());

        // if($request->hasFile('foto')){
        //     $filenameWithExt = $request->file('foto')->getClientOriginalName();
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     $extension = $request->file('foto')->getClientOriginalExtension();
        //     $filenameSimpan = $filename.'_'.time().'.'.$extension;
        //     $path = $request->file('foto')->storeAs('public/posts_image', $filenameSimpan);

        // }else{
        //     $filenameSimpan = 'noimage.jpg';
        //     // tidak ada file yang diupload
        // }


        Post::create([
            'id_user'=>$request->id_user,
            'id_kategori'=>$request->id_kategori,
            'judul'=>$request->judul,
            'slug'=>$request->slug,
            'deskripsi'=>$request->deskripsi,
            'foto'=>$nama_file, 
            'tgl_post'=>$request->tgl_post,
        
        ]);
        //
        //dd($request->all());
        return redirect('/user/post')->with('success', 'Data Berhasil ditambahkan');

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
        $request->validate([

            'id_user' => 'required',
            'id_kategori' => 'required',
            'judul'=>'required',
            'slug'=>'required',
            'deskripsi'=>'required',
            'foto' => 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:20487',
            'tgl_post' => 'required',
        
        ]);
            $nama_file = "";
         //mengambil data file yang diupload
         $file           = $request->file('foto');
         if(isset($file)) {
            //mengambil nama file
            $nama_file      = $file->getClientOriginalName();
            //memindahkan file ke folder tujuan
            $file->move('posts_image',$file->getClientOriginalName());
         }

        // if($request->hasFile('foto')){
        //     $filenameWithExt = $request->file('foto')->getClientOriginalName();
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     $extension = $request->file('foto')->getClientOriginalExtension();
        //     $filenameSimpan = $filename.'_'.time().'.'.$extension;
        //     $path = $request->file('foto')->storeAs('public/posts_image', $filenameSimpan);

        // }else{
        //     $filenameSimpan = 'noimage.jpg';
        //     // tidak ada file yang diupload
        // }


        Post::where('id', $id)->update([
            'id_user'=>$request->id_user,
            'id_kategori'=>$request->id_kategori,
            'judul'=>$request->judul,
            'slug'=>$request->slug,
            'deskripsi'=>$request->deskripsi,
            'foto'=>$nama_file, 
            'tgl_post'=>$request->tgl_post,
        
        ]);
        //
        //dd($request->all());
        return redirect('/user/post')->with('success', 'Data Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::where('id', $id)->delete();
        return redirect('/user/post')->with('success', 'Data Berhasil dihapus');
    }
}

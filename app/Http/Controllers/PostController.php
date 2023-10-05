<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //query get all data post
        $post = Post::orderBy('id','ASC')->get();

        

        return view('post.index',compact('post'));
    }

    public function create()
    {
    return view('post.create');
    }

    public function store(Request $request)
    {
        // validasi kolom
        $request->validate([
            'noak'=> 'required',
            'nama'=> 'required',
            'pangkat'=> 'required',
            'kelas'=> 'required',
            'ton'=> 'required',
            'tanggal'=> 'required',
            'sanksi'=> 'required',
            'mulai'=> 'required',
            'selesai'=> 'required'
        ]);

        // insert ke table post
        Post::create([
            'noak'=> $request->noak,
            'nama'=> $request->nama,
            'pangkat'=> $request->pangkat,
            'kelas'=> $request->kelas,
            'ton'=> $request->ton,
            'tanggal'=> $request->tanggal,
            'pelanggaran'=> $request->pelanggaran,
            'sanksi'=> $request->sanksi,
            'mulai'=> $request->mulai,
            'selesai'=> $request->selesai
        ]);

        return redirect()->route('post.index');
    }
}

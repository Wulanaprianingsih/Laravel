<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class PostController extends Controller
{
    Function create(Request $request){
    	$buku = new Buku;
    	$buku->judul = $request->judul;
    	$buku->penerbit = $request->penerbit;
    	$buku->pengarang= $request->pengarang;
    	$buku->tahun_terbit = $request->tahun_terbit;
    	$buku->save();
    	return redirect('/');
    }


    Function update(Request $request, i$id){
    	$buku = Buku::find($id);
    	$buku->judul = $request->judul;
    	$buku->penerbit = $request->penerbit;
    	$buku->pengarang = $request->pengarang;
    	$buku->tahun_terbit = $request->tahun_terbit;
    	$buku->save();
    	return redirect('/');
    }
}

@extends('layout')
@section('title')
Tambah
@endsection
@section('content')
<form method="post" action="/creates">
	{{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Judul</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Judul" name="judul">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Penerbit</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Penerbit" name="penerbit">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Pengarang</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Pengarang" name="pengarang">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Tahun Terbit</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Tahun terbit" name="tahun_terbit">
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
@extends('adminlte::page')
@section('title','user')
@section('content_header')
<h5>TAMBAH DATA PROJEK</h5>
@stop
@section('content')
<form action="{{route('projek.store')}}" method="post">
@csrf
@method('POST')
<div class="form-group">
    <label for="tglprojek">Tanggal Projek</label>
    <input type="date" class="form-control" name="tglprojek" id="tglprojek">
</div>
<div class="form-group">
    <label for="nmprojek">Nama Projek</label>
    <input type="text" name="nmprojek" id="nmprojek" class="form-control">
</div>
<div class="form-group">
    <label for="nmclient">Nama Client</label>
    <input type="text" name="nmclient" id="nmclient" class="form-control">
</div>
<div class="form-group">
    <label for="alamat client">alamat client</label>
    <input type="text" name="alamatclient" id="alamatclient" class="form-control">
</div>
<button type="submit" class="btn btn-primary">Simpan</button>
</form>
@stop
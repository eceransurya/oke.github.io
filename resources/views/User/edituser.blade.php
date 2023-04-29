@extends('adminlte::page')
@section('title','User')
@section('content_header')
<h5>edit data user</h5>
@stop
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{route('User.update', $dtedit->id)}}" method="GET">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$dtedit->name}}" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="email">E-Mail</label>
            <input type="email" class="form-control" id="email" name="username" value="{{$dtedit->email}}" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Simpan Edit</button>
        </form>
    </div>
</div>
@stop
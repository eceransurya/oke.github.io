@extends('adminlte::page')
@section('title','User')
@section('content_header')
<h1>list data user</h1>
@stop
@section('content')
    Data user yg telah registrasi akan muncul disini
    <div class="card">
        <div class="card-body">
            <table id="tbuser" class="table table-striped table-borded dt-responsive nowarp" style="width: :100%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tanggal_projek</th>
                        <th>Nama_projek</th>
                        <th>Nama_client</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dtprojek as $ds )
                        <tr>
                            <td>{{$ds->id}}</td>
                            <td>{{$ds->tglprojek}}</td>
                            <td>{{$ds->nmprojek}}</td>
                            <td>{{$ds->nmclient}}</td>
                            <td>
                                <a href="{{route('User.edit', $ds->id)}}" class="btn btn-sm btn-success">
                                    <i class="fas fa-user-edit"></i> </br>
                                    Edit
                                </a>
                                <a href="#" onclick="event.preventDefault();
                                    document.getElementById('delete-form{{$ds->id}}').submit();" class="btn btn-sm btn-danger">
                                    <i class="fas fa-user-slash"></i> </br>
                                    Hapus
                                </a>
                                <form id="delete-form{{$ds->id}}" action="{{route('User.destroy',$ds->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            DATA USER PASIF
        </div>
        <div class="card-body">
            <table id="tbuserpasif" class="table table-striped table-borded dt-responsive nowarp" style="width: 100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tanggal_projek</th>
                    <th>Nama_projek</th>
                    <th>Nama_client</th>
                </tr>
            </thead>
            <body>
                @foreach ($dtprojekpasif as $ds)
                <tr>
                    <td>{{$ds->id}}</td>
                    <td>{{$ds->tglprojek}}</td>
                    <td>{{$ds->nmprojek}}</td>
                    <td>{{$ds->nmclient}}</td>
                    <td>
                        <a href="#" onclick="event.preventDefault();document.getElementById('restore-form{{$ds->id}}').submit();" class="btn-sm btn-danger">
                            <i class="fas fa-trash-restore">
                            restore
                        </i></br>    
                        </a>
                        <form id="restore-form{{$ds->id}}" action="{{route('restore')}}" method="POST">
                            @csrf
                            @method('POST')
                            <input type="hidden" name="id" value="{{$ds->id}}">
                        </form>
                    </td>
                </tr>
                @endforeach
            </body>
            </table>
        </div>
    </div>
@stop
@section('js')
{{-- <script>
    $(document).ready(function(){
        $('#tbuser').DataTable();
        $('#tbuserpasif').DataTable();
    });
    @if (Session::has('pesan'))
        Swal.fire({
            position:'top-end',
            icon:'success',
            title:'konfirmasi',
            text:"{{Session::get('pesan')}}",
        })
    @endif
</script> --}}
@stop

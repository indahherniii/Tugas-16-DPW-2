@extends('template.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Edit Data User
                    </div>
                    <div class="card-body">
                        <form action="{{url('admin/user', $user->id)}}" method="post">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" name="nama" id="" class="form-control" value="{{$user->nama}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Username</label>
                                <input type="text" name="username" id="" class="form-control" value="{{$user->username}}">
                            </div>  
                            <div class="form-group">
                                <label for="" class="control-label">Email</label>
                                <input type="email" name="email" id="" class="form-control" value="{{$user->email}}">
                            </div>  
                            <div class="form-group">
                                <label for="" class="control-label">Password</label>
                                <input type="password" name="password" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">No HP</label>
                                <input type="text" name="no_handphone" id="" class="form-control">
                            </div>
                            <button class="btn btn-dark float-right"><i class="fa fa-save"> Simpan</i></button>
                        </form>
                    </div>
                </div>  
            </div>
        </div>   
    </div>

@endsection
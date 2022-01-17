@extends('template.base')

@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ url('public', $produk->foto) }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        Ubah Data Produk
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/produk', $produk->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" name="nama" id="" class="form-control" value="{{ $produk->nama }}">
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Foto</label>
                                        <input type="file" name="foto" accept=".jpg" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Harga</label>
                                        <input type="text" name="harga" id="" class="form-control"
                                            value="{{ $produk->harga }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Berat</label>
                                        <input type="text" name="berat" id="" class="form-control"
                                            value="{{ $produk->berat }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Stok</label>
                                        <input type="text" name="stok" id="" class="form-control"
                                            value="{{ $produk->stok }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control">{{ $produk->deskripsi }}</textarea>
                            </div>
                            <button class="btn btn-dark float-right"><i class="fa fa-save"> Simpan</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

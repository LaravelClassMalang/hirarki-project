@extends('layouts.app')

@section('page-title')
  <h1>
    <i class="fa fa-user"></i> Mahasiswa
  </h1>
@endsection

@section('breadcrumb')
  <li><a href="#">Dashboard</a></li>
  <li class="active">Mahasiswa</li>
@endsection

@section('content')
  <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="x_panel">
                        <div class="x_title">
                          <h3>Daftar Mahasiswa
                           
                            <a href="{{-- {{ route('mahasiswa.create') }} --}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah
                            </a>
                            <div class="clearfix"></div>
                          </h3>
                        </div>
                        <div class="x_content">
                            <div class="table-responsive">
                                <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Telepon</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($mahasiswa as $data)
                                        <tr>
                                            <td></td>
                                            <td>{{ $data->nim }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->alamat }}</td>
                                            <td>{{ $data->telp }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td class="text-center">
                                                <a href="{{-- {{ route('products.edit', ['id' => $product->id]) }} --}}" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                                                <a onclick="return confirm('Delete this data ?')" href="{{-- {{ route('products.delete', ['id' => $product->id]) }} --}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="clearfix"></div>
                                <div class="text-center">
                                  {{ $mahasiswa->appends(request()->all())->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
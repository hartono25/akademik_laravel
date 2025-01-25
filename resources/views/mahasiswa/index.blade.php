@extends('template.page_template')

@section('page-content')
    <div class="card">
        <div class="card-header">
            <h5>Data Mahasiswa</h5>
        </div>
        <div class="card-body">
            <a href="{{ url('/mahasiswa/add') }}" class="btn btn-sm btn-success">
                <i class="fa fa-plus"></i>
                Add New Data
            </a>

            <table class="table table-striped table-bordered table-hover mt-3">
                <thead class="bg-primary text-white text-center">
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No. Telp</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $dt)
                  <tr>
                    <td scope="col">{{ $loop->iteration }}</td>
                    <td scope="col">{{ $dt->nim }}</td>
                    <td scope="col">{{ $dt->nama_lengkap }}</td>
                    <td scope="col">{{ $dt->alamat }}</td>
                    <td scope="col">{{ $dt->notelpon }}</td>
                    <td scope="col">{{ $dt->jenkel }}</td>
                    <td scope="col">{{ $dt->agama }}</td>
                    <td scope="col">
                        <button class="btn btn-sm btn-info">
                            <i class="fa fa-edit"></i>
                            Edit
                        </button>
                        
                        <button class="btn btn-sm btn-danger">
                            <i class="fa fa-trash"></i>
                            Delete
                        </button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              
        </div>
    </div>
@endsection
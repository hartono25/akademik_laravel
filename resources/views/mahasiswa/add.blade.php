@extends('template.page_template')

@section('page-content')
    <div class="card">
        <div class="card-header">
            <h5>Add Data</h5>
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('/mahasiswa') }}">
                @csrf
                {{-- NIM --}}
                <div class="form-group row">
                  <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                  <div class="col-sm-10">
                    <input type="text"  class="form-control" id="nim" name="nim">
                  </div>
                </div>
                {{-- Nama Lengkap --}}
                <div class="form-group row">
                  <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                  <div class="col-sm-10">
                    <input type="text"  class="form-control" id="nama_lengkap" name="nama_lengkap">
                  </div>
                </div>
                {{-- Alamat --}}
                <div class="form-group row">
                  <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="10"></textarea>
                  </div>
                </div>
                {{-- No Telp --}}
                <div class="form-group row">
                    <label for="notelpon" class="col-sm-2 col-form-label">No. Telp</label>
                    <div class="col-sm-10">
                      <input type="text"  class="form-control" id="notelpon" name="notelpon">
                    </div>
                  </div>
                  {{-- Jenis Kelamin --}}
                <div class="form-group row">
                    <label for="notelpon" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                         <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <input type="radio" name="jenkel" id="jk1" value="L">
                              </div>
                            </div>
                            <input type="text" class="form-control" value="Laki-Laki" readonly>
                          </div>
                         
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <input type="radio" name="jenkel" id="jk2" value="P">
                              </div>
                            </div>
                            <input type="text" class="form-control" value="Perempuan" readonly>
                          </div>
                    </div>
                  </div>

                {{-- Agama --}}
                <div class="form-group row">
                    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-10">
                      <input type="text"  class="form-control" id="agama" name="agama">
                    </div>
                  </div>
                
                  <hr>
                  <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-success">
                        <i class="fa fa-save"></i>
                        Simpan Data
                    </button>
                  </div>
              </form>
        </div>
    </div>
@endsection
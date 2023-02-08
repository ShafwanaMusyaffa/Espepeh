@extends('layouts.admin')

@section('content')
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <a href="../input/crud-siswa.html"> <button type="submit" class="btn btn-primary">Tambah Data</button> </a>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama Siswa</th>
                          <th>NISN</th>
                          <th>Kelas</th>
                          <th>Jenis Kelamin</th>
                          <th>No Telp</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>Rehan</td>
                          <td>0012345</td>
                          <td>XII RPL 2</td>
                          <td>Laki - Laki</td>
                          <td>081234567890</td>
                          <td><a href="#" class="btn btn-primary mr-1">Edit</a><a href="#" class="btn btn-danger">Delete</a></td>

                      </tr>
                  </tbody>
                  
              </table>
          </div>
      </div>
  </div>
@endsection
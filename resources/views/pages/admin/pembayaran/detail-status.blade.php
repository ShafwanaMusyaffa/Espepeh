@extends('layouts.admin')

@section('content')
  <div class="d-flex justify-content-between">
      <div class="col-xl-3 col-md-6 mb-4" >
          <div class="card border-left-success shadow h-100 py-2"  style="width: 600px;">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <h5 class="font-weight-bold">Info siswa : </h5>
                          <div class="d-flex">
                              <p>Nama siswa : </p> 
                              <p class="ml-1  font-weight-bold">Rehan</p>
                          </div>
                          <div class="d-flex">
                              <p>NISN : </p>
                              <p class="ml-1  font-weight-bold">008812</p>
                          </div>
                          <div class="d-flex">
                              <p>Kelas :</p>
                              <p class="ml-1 font-weight-bold">XII RPL 4</p>
                          </div>
                      </div>
                      
                  </div>
              </div>
          </div>
      </div>
      <div class="card shadow mb-4" style="width: 400px;">
          <div class="card-header py-3">
              <a href="../input/crud-siswa.html"> <button type="submit" class="btn btn-primary">Pilih tahun</button> </a>
              <a href="../input/table-statusbayar.html"> <button type="submit" class="btn btn-danger">Back to the list</button> </a>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table border">
                      <tbody>
                        <tr>
                          <th>2020</th>
                        </tr>
                        <tr>
                          <th>2021</th>
                        </tr>
                        <tr>
                          <th >2022</th>
                        </tr>
                      </tbody>
                    </table>
              </div>
          </div>
      </div>
  </div>
  <div class="col-xl-3 col-md-6 mb-4" >
      <div class="card border-left-danger shadow h-100 py-2"  style="width: 600px;">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <h5 class="font-weight-bold">Pemberitahuan</h5>
                      <p>Garis biru pada list tahun menandakan tahun aktif / tahun sekarang</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
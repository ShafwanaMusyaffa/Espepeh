@extends('layouts.admin')

@section('content')
<div class="row">
  <!-- card siswa -->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <h4 class="font-weight-bold text-primary text-uppercase mb-1">
                          3</h4>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Siswa</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- card kelas -->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <h4 class="font-weight-bold text-success text-uppercase mb-1">
                          3</h4>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Kelas</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!--card petugas -->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <h4 class="font-weight-bold text-success text-uppercase mb-1">
                          2</h4>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Petugas</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- card admin-->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <h4 class="font-weight-bold text-warning text-uppercase mb-1">
                          1</h4>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Admin</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>

</div>
@endsection
@extends('layouts.admin')

@section('content')
                        <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
                            <button type="submit" class="btn btn-primary">Tambah Data</button>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th style="width: 150px;">Nama Siswa</th>
                                            <th style="width: 50px;">Kelas</th>
                                            <th>NISN</th>
                                            <th>Tanggal Bayar</th>
                                            <th>Nama Petugas</th>
                                            <th>Untuk Bulan</th>
                                            <th>Untuk Tahun</th>
                                            <th>Nominal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Rehan</td>
                                            <td>XII RPL 4</td>
                                            <td>012345</td>
                                            <td>27/01/2022</td>
                                            <td>Asep</td>
                                            <td>Februari</td>
                                            <td>2022</td>
                                            <td >Rp.750.000</td>
                                            <td>
                                                <span class="btn btn-danger">
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> 
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>

@endsection

 @extends('layouts.admin')

 @section('content')
                     <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
                            <a href="../input/crud-kelas.html">
                                <button type="submit" class="btn btn-primary">Tambah Data</button>
                            </a>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kelas</th>
                                            <th>Kompetensi Keahlian</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>X RPL</td>
                                            <td>Rekayasa Perangkat Lunak</td>
                                            <td><a href="#" class="btn btn-primary mr-1">Edit</a><a href="#" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                   </tbody>
                                   
                                </table>
                            </div>
                        </div>
                    </div>

 @endsection
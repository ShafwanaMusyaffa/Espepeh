 @extends('layouts.admin')

 @section('content')
                         <div class="card shadow mb-4">
                        <!-- <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div> -->
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
                                            <th>Detail</th>
                                        </tr>
                                    </thead>
                                    
                                    <tr>
                                        <td>1</td>
                                        <td>Rehan </td>
                                        <td>00123456</td>
                                        <td>XII RPL 4</td>
                                        <td>Laki - Laki</td>
                                        <td>
                                            <a href="../input/crud-pembayaran.html" class="btn btn-primary">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                                                </span>
                                                <span>Bayar</span>
                                            </a>
                                        </td>
                                        
                                    </tr>
                                    
                                </table>
                            </div>
                        </div>
                    </div>

 @endsection
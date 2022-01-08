@extends('_master')

@section('title-content')
    Master Kamar
@endsection

@section('css-content')
            <!-- Data Table CSS -->
            <link href="{{ asset('vendors/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
        
            {{-- Daterange --}}
            <link href="{{ asset('vendors/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />

            <link href="{{ asset('dist/css/bootstrap-clockpicker.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<!-- Container -->
<div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
    <!-- Row -->
     <div class="row">
         <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Data Kamar</h5>
                            <p class="mb-25">Data kamar Rumah Sakit Semen Gresik.</p>
                            {{-- <a href="{{ url('room/tambah') }}" type="button" class="btn btn-primary btn-wth-icon btn-sm">Tambah Kamar</a> --}}
            </section>
                <section class="hk-sec-wrapper">
                        <div class="row">
                            <div class="col-sm">
                                <div class="table-wrap">
                                    <table id="datable_1" class="table table-hover w-100 display pb-30">
                                        <thead>
                                            <tr>
                                                <th style="width:20px">No</th>
                                                <th style="width:70px">ID Kamar</th>
                                                <th>Nama Kamar</th>
                                                <th>Kapasitas</th>
                                                <th>Group Kamar</th>
                                                <th style="width:100px"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($room as $u)
                                                <tr>
                                                    <td>{{ $no }}</td>
                                                    <td>{{ $u->id_kamar }}</td>
                                                    <td>{{ $u->nama_kamar }}</td>
                                                    <td>{{ $u->kapasitas }}</td>
                                                    <td>{{ $u->group_kamar }}</td>
                                                    <td>
                                                        {{-- <a href="{{ url('/room/edit') }}/{{ $u->id_kamar }}" type="button" class="btn btn-warning btn-wth-icon btn-sm">Edit</a>
                                                        <a href="{{ url('/room/delete') }}/{{ $u->id_kamar }}" type="button" class="btn btn-danger btn-wth-icon btn-sm">Delete</a> --}}

                                                        <a href="#" type="button" class="btn btn-warning btn-wth-icon btn-sm">Edit</a>
                                                        <a href="#" type="button" class="btn btn-danger btn-wth-icon btn-sm">Delete</a>
                                                    </td>
                                                </tr>
                                                @php
                                                    $no++;
                                                @endphp
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>ID Kamar</th>
                                                <th>Nama Kamar</th>
                                                <th>Kapasitas</th>
                                                <th>Group Kamar</th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    
                </section>
         </div>
     </div>
</div>

{{-- Dialog Batal --}}
<div class="modal fade" id="BatalDialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLarge01" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Apakah Anda Yakin Membatalkan?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6" id="batalkan">
                        {{-- <button type="button" class="btn btn-warning btn-wth-icon btn-md btn-block">Batalkan</button> --}}
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-light btn-wth-icon btn-md btn-block" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

{{-- Dialog Hapus --}}
<div class="modal fade" id="HapusDialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLarge01" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Apakah Anda Yakin Menghapus?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6" id="hapuskan">
                        <button type="button" class="btn btn-danger btn-wth-icon btn-md btn-block">Batalkan</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-light btn-wth-icon btn-md btn-block" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Dialog Edit --}}
<div class="modal fade" id="EditDialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLarge01" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('rekap-update') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Kamar</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nk" name="nk" value="" readonly>
                            <input type="text" class="form-control" id="idres" name="idres" value=""  hidden>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Pasien</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="nama" name="nama" value="" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Penanggung</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="png" name="png" value="" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Tanggal Masuk</label>
                        <div class="col-sm-5">
                            <input type="date" class="form-control" id="tgm" name="tgm" value="" >
                        </div>
                        <div class="col-sm-4">
                            <input class="form-control clockpicker" type="text" id="jmm" name="jmm" data-autoclose="true" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Tanggal Keluar</label>
                        <div class="col-sm-5">
                            <input type="date" class="form-control" id="tgk" name="tgk" value="" >
                        </div>
                        <div class="col-sm-4">
                            <input class="form-control clockpicker" type="text" id="jmk" name="jmk" data-autoclose="true"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

@section('js-content')
       <!-- Data Table JavaScript -->
       <script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
       <script src="{{ asset('vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
       <script src="{{ asset('vendors/datatables.net-dt/js/dataTables.dataTables.min.js') }}"></script>
       <script src="{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
       <script src="{{ asset('vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
       <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
       <script src="{{ asset('vendors/jszip/dist/jszip.min.js') }}"></script>
       <script src="{{ asset('vendors/pdfmake/build/pdfmake.min.js') }}"></script>
       <script src="{{ asset('vendors/pdfmake/build/vfs_fonts.js') }}"></script>
       <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
       <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
       <script src="{{ asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
       <script src="{{ asset('dist/js/dataTables-data.js') }}"></script>
   
       {{-- Daterange --}}
       <script src="{{ asset('vendors/moment/min/moment.min.js')}}"></script>
       <script src="{{ asset('vendors/daterangepicker/daterangepicker.js')}}"></script>
       <script src="{{ asset('dist/js/daterangepicker-data.js')}}"></script>

       <script src="{{ asset('dist/css/bootstrap-clockpicker.js')}}"></script>

       
@endsection

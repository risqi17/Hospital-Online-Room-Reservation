@extends('_master')

@section('title-content')
    Pasien Keluar
@endsection

@section('css-content')
        <!-- Data Table CSS -->
        <link href="{{ asset('vendors/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    
        {{-- Daterange --}}
        <link href="{{ asset('vendors/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<!-- Container -->
<div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
    <!-- Row -->
     <div class="row">
         <div class="col-xl-12">
            @foreach ($kamar as $kmr)
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Input Pasien Keluar : {{ $kmr->nama_kamar }}</h5>
                            <p class="mb-25">Pastikan data pasien yang dimasukkan benar.</p>
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <table id="tbJadwal" class="table table-hover w-100 display pb-30">
                                <thead>
                                    <tr>
                                        <th>Nama Pasien</th>
                                        <th>Penanggung</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Kamar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($book as $bk)
                                        <tr>
                                            <td>{{ $bk->nama_pasien }}</td>
                                            <td>{{ $bk->penanggungjawab }}</td>
                                            <td>{{ $bk->tgl_masuk }}</td>
                                            <td>{{ $bk->no_kamar }}</td>
                                            <td><button type="button" class="btn btn-primary btn-wth-icon btn-sm" data-toggle="modal" id="keluar" data-target="#KeluarForm" data-kmr="{{ $kmr->nama_kamar }}" data-nokmr="{{ $bk->no_kamar }}" data-id="{{ $bk->id_reservasi }}" data-nama="{{ $bk->nama_pasien }}" data-png="{{ $bk->penanggungjawab }}">
                                                <span class="icon-label"><span class="feather-icon"><i data-feather="arrow-right"></i></span> </span><span class="btn-text">Keluar</span>
                                            </button></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            @endforeach
         </div>
     </div>
</div>

<!-- Modal Keluar-->
<div class="modal fade" id="KeluarForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pasien Keluar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/pasien-keluar') }}/{{ $cate }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleDropdownFormEmail1">Nama Kamar</label>
                        <input type="text" class="form-control" id="nk" name="kamar" readonly>
                        <input type="text" class="form-control" id="idres" name="id_res" hidden>
                    </div>
                    <div class="form-group">
                        <label for="exampleDropdownFormPassword1">Nama Pasien</label>
                        <input type="text" class="form-control" id="kelusr" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleDropdownFormPassword1">Penanggung </label>
                        <input type="text" class="form-control" id="kelpng" name="penanggung">
                    </div>
                    <div class="form-group">
                        <label for="exampleDropdownFormPassword1">Bilik </label>
                        <input type="text" class="form-control" id="bilik" name="bilik" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleDropdownFormPassword1">Keterangan Keluar</label>
                        {{-- <input type="text" class="form-control" id="ketkel" name="keterangan"> --}}
                        <select class="form-control custom-select" id="ketkel" name="keterangan">
                            <option value="KRS / Keluar Rawat Inap">KRS / Keluar Rawat Inap </option>
                            <option value="Meninggal">Meninggal </option>
                            <option value="Rujuk">Rujuk </option>
                            <option value="Pindah Kamar / Ruang">Pindah Kamar / Ruang</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Simpan</button>
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

       <script>
           $('#tbJadwal').DataTable();

           $(document).on("click", "#keluar" , function() {

                var id = $(this).data('id');
                var nama_kamar = $(this).data('kmr');
                var no_kamar = $(this).data('nokmr');
                var nama = $(this).data('nama');
                var png = $(this).data('png');

                console.log(id);
                $(".modal-body #idres").val(id);
                $(".modal-body #nk").val(nama_kamar);
                $(".modal-body #bilik").val(no_kamar);
                $(".modal-body #kelusr").val(nama);
                $(".modal-body #kelpng").val(png);

           });
       </script>
@endsection

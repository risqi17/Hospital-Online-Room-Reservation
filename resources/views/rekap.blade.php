@extends('_master')

@section('title-content')
    Rekap Data
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
                <h5 class="hk-sec-title">Data Pasien</h5>
                            <p class="mb-25">Data rekapan yang ditampilkan pertama kali adalah data keseluruhan.</p>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="exampleDropdownFormPassword1">Jenis Pasien</label>
                                <select class="form-control custom-select" name="jenis" id="jenis">
                                        <option value="">Semua</option>
                                        <option value="Terisi">Pasien Masuk Rawat Inap</option>
                                        <option value="keluar">Pasien Keluar Rawat Inap</option>
                                        <option value="Meninggal">Pasien Meninggal</option>
                                        <option value="Rujuk">Pasien Rujuk</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="exampleDropdownFormPassword1">Tanggal</label>
                                <input type="date" class="form-control" id="tgl"  >
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="exampleDropdownFormPassword1">Cari</label>
                                <button type="button" class="btn btn-primary btn-wth-icon btn-lg form-control" data-toggle="modal" id="cari" >
                                    <span class="icon-label"><span class="feather-icon"><i data-feather="search"></i></span> </span><span class="btn-text">Cari</span>
                                </button>
                            </div>
                            
                        </div>
                    </div>
                
            </section>
                <section class="hk-sec-wrapper">
                        <div class="row">
                            <div class="col-sm">
                                <div class="table-wrap">
                                    <table id="tbJadwal" class="table table-hover w-100 display pb-30">
                                        <thead>
                                            <tr>
                                                <th>Nama Pasien</th>
                                                <th>Penanggung</th>
                                                <th>Nama Kamar</th>
                                                <th>Bilik</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Tanggal Keluar</th>
                                                <th>Keterangan</th>
                                                <th>Status</th>
                                                <th>Status Kamar</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($user as $u)
                                                <tr>
                                                    <td>{{ $u->name }}</td>
                                                    <td>{{ $u->email }}</td>
                                                    <td>{{ $u->username }}</td>
                                                    <td>{{ $u->password }}</td>
                                                    <td>{{ $u->level }}</td>
                                                    <td>
                                                    <button type="button" class="btn btn-info btn-wth-icon btn-sm" data-toggle="modal" id="edit" data-target="#editUser" data-id="{{ $u->user_id }}" data-nama="{{ $u->name }}" data-email="{{ $u->email }}" data-username="{{ $u->username }}" data-level="{{ $u->level }}" >
                                                        <span class="icon-label"><span class="feather-icon"><i data-feather="edit-2"></i></span> </span><span class="btn-text">Edit</span>
                                                    </button>
                                                <a href="{{ url('/delete-user') }}/{{ $u->user_id }}" class="btn btn-danger btn-wth-icon btn-sm" >
                                                        <span class="icon-label"><span class="feather-icon"><i data-feather="trash"></i></span> </span><span class="btn-text">Hapus</span>
                                                    </a>
                                                    </td>
                                                </tr>
                                            @endforeach --}}
                                        </tbody>
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

       <script>
           renderTable();
           renderTanggal();
            function renderTable(){
                t = $('#tbJadwal').DataTable();
                t.clear().draw(false);
                        $.ajax({
                            url: '/get-seluruh',
                            type: 'get',
                            dataType: 'json',
                            success: function(response){
                                if(response['data'] != null){
                                    var len = response['data'].length;
                                    console.log(len);
                                    console.log(response);

                                    for(var i=0; i<len; i++){
                                        var id_res = response['data'][i].id_reservasi;
                                        var nama = response['data'][i].nama_pasien;
                                        var penanggung = response['data'][i].penanggungjawab;
                                        var tgm = response['data'][i].tgl_masuk;
                                        var tgk = response['data'][i].tgl_keluar;
                                        var kamar = response['data'][i].nama_kamar;
                                        var bilik = response['data'][i].no_kamar;
                                        var keterangan = response['data'][i].keterangan;
                                        var status_booking = response['data'][i].status_booking;
                                        var status_kamar = response['data'][i].status_kamar;

                                        if (tgm != null) {
                                            var resa = tgm.split(" ");
                                            var resaa = resa[0].split("-");
                                            var tgl_masuk = resaa[2]+"-"+resaa[1]+"-"+resaa[0]+" "+resa[1];
                                        } else {
                                            var tgl_masuk = " ";
                                        }
                                        console.log("tgm : "+tgl_masuk);
                                        if (tgk != null) {
                                            var resb = tgk.split(" ");
                                            var resbb = resb[0].split("-");
                                            var tgl_keluar = resbb[2]+"-"+resbb[1]+"-"+resbb[0]+" "+resb[1];
                                        } else {
                                            var tgl_keluar = " ";
                                        }
                                        console.log("tgk : "+tgl_keluar);

                                        if(status_kamar == "keluar"){
                                            t.row.add([
                                                '<td>'+ nama +'</td>',
                                                '<td>'+ penanggung +'</td>',
                                                '<td>'+ kamar +'</td>',
                                                '<td>'+ bilik +'</td>',
                                                '<td>'+ tgl_masuk +'</td>',
                                                '<td>'+ tgl_keluar +'</td>',
                                                '<td>'+ keterangan +'</td>',
                                                '<td>'+ status_booking +'</td>',
                                                '<td>'+ status_kamar +'</td>',
                                                '<td><button type="button" class="btn btn-warning btn-wth-icon btn-sm" id="batald" data-toggle="modal" data-id="'+ id_res +'" data-target="#BatalDialog">Batal Keluar</button>&nbsp;&nbsp;<button type="button" class="btn btn-primary btn-wth-icon btn-sm" id="editd" data-toggle="modal" data-id="'+ id_res +'" data-target="#EditDialog">Edit Data</button></td>'
                                            ]).draw(false);
                                        } else {
                                            t.row.add([
                                                '<td>'+ nama +'</td>',
                                                '<td>'+ penanggung +'</td>',
                                                '<td>'+ kamar +'</td>',
                                                '<td>'+ bilik +'</td>',
                                                '<td>'+ tgl_masuk +'</td>',
                                                '<td>'+ tgl_keluar +'</td>',
                                                '<td>'+ keterangan +'</td>',
                                                '<td>'+ status_booking +'</td>',
                                                '<td>'+ status_kamar +'</td>',
                                                '<td><button type="button" class="btn btn-danger btn-wth-icon btn-sm" id="hapusd" data-toggle="modal" data-id="'+ id_res +'" data-target="#HapusDialog">Hapus</button>&nbsp;&nbsp;<button type="button" class="btn btn-primary btn-wth-icon btn-sm" id="editd" data-toggle="modal" data-id="'+ id_res +'" data-target="#EditDialog">Edit Data</button></td>'
                                            ]).draw(false);
                                        }
                                        
                                    }
                                }
                            }
                        });
            }
            function renderTanggal(){
                var today = new Date();
                // today.setDate(today.getDate() + 1);
                console.log('Ini tanggalnya '+today.getMonth());
                var tomorrow = (today.getMonth()+1) +'/'+today.getDate()+'/'+today.getFullYear();
                console.log(tomorrow);
                
                document.getElementById('tgl').setAttribute('value',tomorrow);
            }
            $(document).on("click", "#cari" , function() {
                t = $('#tbJadwal').DataTable();
                var ket = $('#jenis').val();
                var tgl = $('#tgl').val();

                console.log("Jenis : "+ket);
                console.log("Tanggal : "+tgl);

                if(ket == '' && tgl == ''){
                    renderTable();
                    console.log("IF KOSONG");
                } else if(ket != '' && tgl == '') {
                    console.log("TGL KOSONG");

                    if (ket == 'keluar') {
                        t.clear().draw(false);
                        $.ajax({
                            url: '/get-seluruh-ket-kel/'+ket,
                            type: 'get',
                            dataType: 'json',
                            success: function(response){
                                if(response['data'] != null){
                                    var len = response['data'].length;
                                    console.log(len);
                                    console.log(response);

                                    for(var i=0; i<len; i++){
                                        var id_res = response['data'][i].id_reservasi;
                                        var nama = response['data'][i].nama_pasien;
                                        var penanggung = response['data'][i].penanggungjawab;
                                        var tgm = response['data'][i].tgl_masuk;
                                        var tgk = response['data'][i].tgl_keluar;
                                        var kamar = response['data'][i].nama_kamar;
                                        var bilik = response['data'][i].no_kamar;
                                        var keterangan = response['data'][i].keterangan;
                                        var status_booking = response['data'][i].status_booking;
                                        var status_kamar = response['data'][i].status_kamar;

                                        if (tgm != null) {
                                            var resa = tgm.split(" ");
                                            var resaa = resa[0].split("-");
                                            var tgl_masuk = resaa[2]+"-"+resaa[1]+"-"+resaa[0]+" "+resa[1];
                                        } else {
                                            var tgl_masuk = " ";
                                        }
                                        
                                        if (tgk != null) {
                                            var resb = tgk.split(" ");
                                            var resbb = resb[0].split("-");
                                            var tgl_keluar = resbb[2]+"-"+resbb[1]+"-"+resbb[0]+" "+resb[1];
                                        } else {
                                            var tgl_keluar = " ";
                                        }

                                        if(status_kamar == "keluar"){
                                            t.row.add([
                                                '<td>'+ nama +'</td>',
                                                '<td>'+ penanggung +'</td>',
                                                '<td>'+ kamar +'</td>',
                                                '<td>'+ bilik +'</td>',
                                                '<td>'+ tgl_masuk +'</td>',
                                                '<td>'+ tgl_keluar +'</td>',
                                                '<td>'+ keterangan +'</td>',
                                                '<td>'+ status_booking +'</td>',
                                                '<td>'+ status_kamar +'</td>',
                                                '<td><button type="button" class="btn btn-warning btn-wth-icon btn-sm" id="batald" data-toggle="modal" data-id="'+ id_res +'" data-target="#BatalDialog">Batal Keluar</button>&nbsp;&nbsp;<button type="button" class="btn btn-primary btn-wth-icon btn-sm" id="editd" data-toggle="modal" data-id="'+ id_res +'" data-target="#EditDialog">Edit Data</button></td>'
                                            ]).draw(false);
                                        } else {
                                            t.row.add([
                                                '<td>'+ nama +'</td>',
                                                '<td>'+ penanggung +'</td>',
                                                '<td>'+ kamar +'</td>',
                                                '<td>'+ bilik +'</td>',
                                                '<td>'+ tgl_masuk +'</td>',
                                                '<td>'+ tgl_keluar +'</td>',
                                                '<td>'+ keterangan +'</td>',
                                                '<td>'+ status_booking +'</td>',
                                                '<td>'+ status_kamar +'</td>',
                                                '<td><button type="button" class="btn btn-danger btn-wth-icon btn-sm" id="hapusd" data-toggle="modal" data-id="'+ id_res +'" data-target="#HapusDialog">Hapus</button>&nbsp;&nbsp;<button type="button" class="btn btn-primary btn-wth-icon btn-sm" id="editd" data-toggle="modal" data-id="'+ id_res +'" data-target="#EditDialog">Edit Data</button></td>'
                                            ]).draw(false);
                                        }
                                    }
                                }
                            }
                        });
                    } else {
                        t.clear().draw(false);
                        $.ajax({
                            url: '/get-seluruh-ket/'+ket,
                            type: 'get',
                            dataType: 'json',
                            success: function(response){
                                if(response['data'] != null){
                                    var len = response['data'].length;
                                    console.log(len);
                                    console.log(response);

                                    for(var i=0; i<len; i++){
                                        var id_res = response['data'][i].id_reservasi;
                                        var nama = response['data'][i].nama_pasien;
                                        var penanggung = response['data'][i].penanggungjawab;
                                        var tgm = response['data'][i].tgl_masuk;
                                        var tgk = response['data'][i].tgl_keluar;
                                        var kamar = response['data'][i].nama_kamar;
                                        var bilik = response['data'][i].no_kamar;
                                        var keterangan = response['data'][i].keterangan;
                                        var status_booking = response['data'][i].status_booking;
                                        var status_kamar = response['data'][i].status_kamar;

                                        if (tgm != null) {
                                            var resa = tgm.split(" ");
                                            var resaa = resa[0].split("-");
                                            var tgl_masuk = resaa[2]+"-"+resaa[1]+"-"+resaa[0]+" "+resa[1];
                                        } else {
                                            var tgl_masuk = " ";
                                        }
                                        
                                        if (tgk != null) {
                                            var resb = tgk.split(" ");
                                            var resbb = resb[0].split("-");
                                            var tgl_keluar = resbb[2]+"-"+resbb[1]+"-"+resbb[0]+" "+resb[1];
                                        } else {
                                            var tgl_keluar = " ";
                                        }

                                        if(status_kamar == "keluar"){
                                            t.row.add([
                                                '<td>'+ nama +'</td>',
                                                '<td>'+ penanggung +'</td>',
                                                '<td>'+ kamar +'</td>',
                                                '<td>'+ bilik +'</td>',
                                                '<td>'+ tgl_masuk +'</td>',
                                                '<td>'+ tgl_keluar +'</td>',
                                                '<td>'+ keterangan +'</td>',
                                                '<td>'+ status_booking +'</td>',
                                                '<td>'+ status_kamar +'</td>',
                                                '<td><button type="button" class="btn btn-warning btn-wth-icon btn-sm" id="batald" data-toggle="modal" data-id="'+ id_res +'" data-target="#BatalDialog">Batal Keluar</button>&nbsp;&nbsp;<button type="button" class="btn btn-primary btn-wth-icon btn-sm" id="editd" data-toggle="modal" data-id="'+ id_res +'" data-target="#EditDialog">Edit Data</button></td>'
                                            ]).draw(false);
                                        } else {
                                            t.row.add([
                                                '<td>'+ nama +'</td>',
                                                '<td>'+ penanggung +'</td>',
                                                '<td>'+ kamar +'</td>',
                                                '<td>'+ bilik +'</td>',
                                                '<td>'+ tgl_masuk +'</td>',
                                                '<td>'+ tgl_keluar +'</td>',
                                                '<td>'+ keterangan +'</td>',
                                                '<td>'+ status_booking +'</td>',
                                                '<td>'+ status_kamar +'</td>',
                                                '<td><button type="button" class="btn btn-danger btn-wth-icon btn-sm" id="hapusd" data-toggle="modal" data-id="'+ id_res +'" data-target="#HapusDialog">Hapus</button>&nbsp;&nbsp;<button type="button" class="btn btn-primary btn-wth-icon btn-sm" id="editd" data-toggle="modal" data-id="'+ id_res +'" data-target="#EditDialog">Edit Data</button></td>'
                                            ]).draw(false);
                                        }
                                    }
                                }
                            }
                        });
                    }


                    
                } else if(ket == '' && tgl != ''){
                    console.log("KET KOSONG");
                    t.clear().draw(false);
                        $.ajax({
                            url: '/get-seluruh-tgl/'+tgl,
                            type: 'get',
                            dataType: 'json',
                            success: function(response){
                                if(response['data'] != null){
                                    var len = response['data'].length;
                                    console.log(len);
                                    console.log(response);

                                    for(var i=0; i<len; i++){
                                        var id_res = response['data'][i].id_reservasi;
                                        var nama = response['data'][i].nama_pasien;
                                        var penanggung = response['data'][i].penanggungjawab;
                                        var tgm = response['data'][i].tgl_masuk;
                                        var tgk = response['data'][i].tgl_keluar;
                                        var kamar = response['data'][i].nama_kamar;
                                        var bilik = response['data'][i].no_kamar;
                                        var keterangan = response['data'][i].keterangan;
                                        var status_booking = response['data'][i].status_booking;
                                        var status_kamar = response['data'][i].status_kamar;

                                        if (tgm != null) {
                                            var resa = tgm.split(" ");
                                            var resaa = resa[0].split("-");
                                            var tgl_masuk = resaa[2]+"-"+resaa[1]+"-"+resaa[0]+" "+resa[1];
                                        } else {
                                            var tgl_masuk = " ";
                                        }
                                        
                                        if (tgk != null) {
                                            var resb = tgk.split(" ");
                                            var resbb = resb[0].split("-");
                                            var tgl_keluar = resbb[2]+"-"+resbb[1]+"-"+resbb[0]+" "+resb[1];
                                        } else {
                                            var tgl_keluar = " ";
                                        }

                                        if(status_kamar == "keluar"){
                                            t.row.add([
                                                '<td>'+ nama +'</td>',
                                                '<td>'+ penanggung +'</td>',
                                                '<td>'+ kamar +'</td>',
                                                '<td>'+ bilik +'</td>',
                                                '<td>'+ tgl_masuk +'</td>',
                                                '<td>'+ tgl_keluar +'</td>',
                                                '<td>'+ keterangan +'</td>',
                                                '<td>'+ status_booking +'</td>',
                                                '<td>'+ status_kamar +'</td>',
                                                '<td><button type="button" class="btn btn-warning btn-wth-icon btn-sm" id="batald" data-toggle="modal" data-id="'+ id_res +'" data-target="#BatalDialog">Batal Keluar</button>&nbsp;&nbsp;<button type="button" class="btn btn-primary btn-wth-icon btn-sm" id="editd" data-toggle="modal" data-id="'+ id_res +'" data-target="#EditDialog">Edit Data</button></td>'
                                            ]).draw(false);
                                        } else {
                                            t.row.add([
                                                '<td>'+ nama +'</td>',
                                                '<td>'+ penanggung +'</td>',
                                                '<td>'+ kamar +'</td>',
                                                '<td>'+ bilik +'</td>',
                                                '<td>'+ tgl_masuk +'</td>',
                                                '<td>'+ tgl_keluar +'</td>',
                                                '<td>'+ keterangan +'</td>',
                                                '<td>'+ status_booking +'</td>',
                                                '<td>'+ status_kamar +'</td>',
                                                '<td><button type="button" class="btn btn-danger btn-wth-icon btn-sm" id="hapusd" data-toggle="modal" data-id="'+ id_res +'" data-target="#HapusDialog">Hapus</button>&nbsp;&nbsp;<button type="button" class="btn btn-primary btn-wth-icon btn-sm" id="editd" data-toggle="modal" data-id="'+ id_res +'" data-target="#EditDialog">Edit Data</button></td>'
                                            ]).draw(false);
                                        }
                                    }
                                }
                            }
                        });
                } else {
                    console.log("TERISI");
                    if (ket == 'keluar') {
                        t.clear().draw(false);
                        $.ajax({
                            url: '/get-seluruh-kt-kel/'+ket+'/'+tgl,
                            type: 'get',
                            dataType: 'json',
                            success: function(response){
                                if(response['data'] != null){
                                    var len = response['data'].length;
                                    console.log(len);
                                    console.log(response);

                                    for(var i=0; i<len; i++){
                                        var id_res = response['data'][i].id_reservasi;
                                        var nama = response['data'][i].nama_pasien;
                                        var penanggung = response['data'][i].penanggungjawab;
                                        var tgm = response['data'][i].tgl_masuk;
                                        var tgk = response['data'][i].tgl_keluar;
                                        var kamar = response['data'][i].nama_kamar;
                                        var bilik = response['data'][i].no_kamar;
                                        var keterangan = response['data'][i].keterangan;
                                        var status_booking = response['data'][i].status_booking;
                                        var status_kamar = response['data'][i].status_kamar;

                                        if (tgm != null) {
                                            var resa = tgm.split(" ");
                                            var resaa = resa[0].split("-");
                                            var tgl_masuk = resaa[2]+"-"+resaa[1]+"-"+resaa[0]+" "+resa[1];
                                        } else {
                                            var tgl_masuk = " ";
                                        }
                                        
                                        if (tgk != null) {
                                            var resb = tgk.split(" ");
                                            var resbb = resb[0].split("-");
                                            var tgl_keluar = resbb[2]+"-"+resbb[1]+"-"+resbb[0]+" "+resb[1];
                                        } else {
                                            var tgl_keluar = " ";
                                        }

                                        if(status_kamar == "keluar"){
                                            t.row.add([
                                                '<td>'+ nama +'</td>',
                                                '<td>'+ penanggung +'</td>',
                                                '<td>'+ kamar +'</td>',
                                                '<td>'+ bilik +'</td>',
                                                '<td>'+ tgl_masuk +'</td>',
                                                '<td>'+ tgl_keluar +'</td>',
                                                '<td>'+ keterangan +'</td>',
                                                '<td>'+ status_booking +'</td>',
                                                '<td>'+ status_kamar +'</td>',
                                                '<td><button type="button" class="btn btn-warning btn-wth-icon btn-sm" id="batald" data-toggle="modal" data-id="'+ id_res +'" data-target="#BatalDialog">Batal Keluar</button>&nbsp;&nbsp;<button type="button" class="btn btn-primary btn-wth-icon btn-sm" id="editd" data-toggle="modal" data-id="'+ id_res +'" data-target="#EditDialog">Edit Data</button></td>'
                                            ]).draw(false);
                                        } else {
                                            t.row.add([
                                                '<td>'+ nama +'</td>',
                                                '<td>'+ penanggung +'</td>',
                                                '<td>'+ kamar +'</td>',
                                                '<td>'+ bilik +'</td>',
                                                '<td>'+ tgl_masuk +'</td>',
                                                '<td>'+ tgl_keluar +'</td>',
                                                '<td>'+ keterangan +'</td>',
                                                '<td>'+ status_booking +'</td>',
                                                '<td>'+ status_kamar +'</td>',
                                                '<td><button type="button" class="btn btn-danger btn-wth-icon btn-sm" id="hapusd" data-toggle="modal" data-id="'+ id_res +'" data-target="#HapusDialog">Hapus</button>&nbsp;&nbsp;<button type="button" class="btn btn-primary btn-wth-icon btn-sm" id="editd" data-toggle="modal" data-id="'+ id_res +'" data-target="#EditDialog">Edit Data</button></td>'
                                            ]).draw(false);
                                        }
                                    }
                                }
                            }
                        });
                    } else {
                        t.clear().draw(false);
                        $.ajax({
                            url: '/get-seluruh-kt/'+ket+'/'+tgl,
                            type: 'get',
                            dataType: 'json',
                            success: function(response){
                                if(response['data'] != null){
                                    var len = response['data'].length;
                                    console.log(len);
                                    console.log(response);

                                    for(var i=0; i<len; i++){
                                        var id_res = response['data'][i].id_reservasi;
                                        var nama = response['data'][i].nama_pasien;
                                        var penanggung = response['data'][i].penanggungjawab;
                                        var tgm = response['data'][i].tgl_masuk;
                                        var tgk = response['data'][i].tgl_keluar;
                                        var kamar = response['data'][i].nama_kamar;
                                        var bilik = response['data'][i].no_kamar;
                                        var keterangan = response['data'][i].keterangan;
                                        var status_booking = response['data'][i].status_booking;
                                        var status_kamar = response['data'][i].status_kamar;

                                        if (tgm != null) {
                                            var resa = tgm.split(" ");
                                            var resaa = resa[0].split("-");
                                            var tgl_masuk = resaa[2]+"-"+resaa[1]+"-"+resaa[0]+" "+resa[1];
                                        } else {
                                            var tgl_masuk = " ";
                                        }
                                        
                                        if (tgk != null) {
                                            var resb = tgk.split(" ");
                                            var resbb = resb[0].split("-");
                                            var tgl_keluar = resbb[2]+"-"+resbb[1]+"-"+resbb[0]+" "+resb[1];
                                        } else {
                                            var tgl_keluar = " ";
                                        }

                                        if(status_kamar == "keluar"){
                                            t.row.add([
                                                '<td>'+ nama +'</td>',
                                                '<td>'+ penanggung +'</td>',
                                                '<td>'+ kamar +'</td>',
                                                '<td>'+ bilik +'</td>',
                                                '<td>'+ tgl_masuk +'</td>',
                                                '<td>'+ tgl_keluar +'</td>',
                                                '<td>'+ keterangan +'</td>',
                                                '<td>'+ status_booking +'</td>',
                                                '<td>'+ status_kamar +'</td>',
                                                '<td><button type="button" class="btn btn-warning btn-wth-icon btn-sm" id="batald" data-toggle="modal" data-id="'+ id_res +'" data-target="#BatalDialog">Batal Keluar</button>&nbsp;&nbsp;<button type="button" class="btn btn-primary btn-wth-icon btn-sm" id="editd" data-toggle="modal" data-id="'+ id_res +'" data-target="#EditDialog">Edit Data</button></td>'
                                            ]).draw(false);
                                        } else {
                                            t.row.add([
                                                '<td>'+ nama +'</td>',
                                                '<td>'+ penanggung +'</td>',
                                                '<td>'+ kamar +'</td>',
                                                '<td>'+ bilik +'</td>',
                                                '<td>'+ tgl_masuk +'</td>',
                                                '<td>'+ tgl_keluar +'</td>',
                                                '<td>'+ keterangan +'</td>',
                                                '<td>'+ status_booking +'</td>',
                                                '<td>'+ status_kamar +'</td>',
                                                '<td><button type="button" class="btn btn-danger btn-wth-icon btn-sm" id="hapusd" data-toggle="modal" data-id="'+ id_res +'" data-target="#HapusDialog">Hapus</button>&nbsp;&nbsp;<button type="button" class="btn btn-primary btn-wth-icon btn-sm" id="editd" data-toggle="modal" data-id="'+ id_res +'" data-target="#EditDialog">Edit Data</button></td>'
                                            ]).draw(false);
                                        }
                                    }
                                }
                            }
                        });
                    }
                    
                }
                
            });

            $(document).on("click", "#batald" , function() {
                var idres = $(this).data('id');
                console.log("Batal ? "+idres);
                $("#batalkan").html(" ");
                var error = "<button type='button' id='CancelConfirm' class='btn btn-warning btn-wth-icon btn-md btn-block' data-id='"+ idres +"'>Batalkan</button>";
                $("#batalkan").html(error);
            });

            $(document).on("click", "#CancelConfirm" , function() {
                var idres = $(this).data('id');
                console.log("Batal Confirm ? "+idres);
                
                $.ajax({
                    url: '/batal-keluar/'+idres,
                    type: 'get',
                    dataType: 'json',
                    success: function(response){
                        
                    }
                });
                $('#BatalDialog').modal('hide');
                        renderTable();
                        renderTanggal();
               
            });

            $(document).on("click", "#hapusd" , function() {
                var idres = $(this).data('id');
                console.log("Hapus ? "+idres);
                $("#hapuskan").html(" ");
                var error = "<button type='button' id='HapusConfirm' class='btn btn-danger btn-wth-icon btn-md btn-block' data-id='"+ idres +"'>Hapus</button>";
                $("#hapuskan").html(error);
            });

           

            $(document).on("click", "#HapusConfirm" , function() {
                var idres = $(this).data('id');
                console.log("Hapus Confirm ? "+idres);

                $.ajax({
                    url: '/hapus/'+idres,
                    type: 'get',
                    dataType: 'json',
                    success: function(response){
                        
                    }
                });
                $('#HapusDialog').modal('hide');
                        renderTable();
                        renderTanggal();
                
            });

            $(document).on("click", "#editd" , function() {
                var idres = $(this).data('id');
                console.log("Edit ? "+idres);
                $('#nk').val(' ');
                $('#idres').val(' ');
                $('#nama').val(' ');
                $('#png').val(' ');
                $('#tgm').val(' ');
                $('#tgk').val(' ');
                $('#jmm').val(' ');
                $('#jmk').val(' ');

                $.ajax({
                            url: '/get-reservasi/'+idres,
                            type: 'get',
                            dataType: 'json',
                            success: function(response){
                                $('#nk').val(response['data'][0].nama_kamar);
                                $('#idres').val(response['data'][0].id_reservasi);
                                $('#png').val(response['data'][0].penanggungjawab);
                                $('#nama').val(response['data'][0].nama_pasien);
                                $('#tgm').val(response['data'][0].tgl_masuk);
                                $('#tgk').val(response['data'][0].tgl_keluar);

                                $('#jmm').val(response['data'][0].jmm);
                                $('#jmk').val(response['data'][0].jmk);
                                console.log(response['data'][0].jmm);
                            }
                });
            });
            
            $('.clockpicker').clockpicker();
       </script>
@endsection

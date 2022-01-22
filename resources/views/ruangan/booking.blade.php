@extends('_master')

@section('title-content')
    Booking Kamar
@endsection

@section('css-content')
        <!-- Data Table CSS -->
        <link href="{{ asset('vendors/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    
        {{-- Daterange --}}
        <link href="{{ asset('vendors/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />

            <!-- Toggles CSS -->
        {{-- <link href="{{ asset('vendors/jquery-toggles/css/toggles.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('vendors/jquery-toggles/css/themes/toggles-light.css') }}" rel="stylesheet" type="text/css"> --}}
@endsection

@section('content')

<!-- Container -->
<div class="container-fluid mt-xl-50 mt-sm-30 mt-15">

    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="toggle-right"></i></span></span>Input Pemesanan Kamar</h4>
    </div>
    <!-- Row -->
     <div class="row">
         <div class="col-xl-12">
            @foreach ($kamar as $kmr)
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Input Pemesanan Kamar : {{ $kmr->nama_kamar }}</h5>
                            <p class="mb-25">Pastikan tanggal yang dimasukkan tersedia dan tidak telah dipesan pasien lain. Untuk mengeceknya bisa dilihat di <strong>Lihat Jadwal</strong  ></p>
                <div class="row">
                    <div class="col-sm">
                        <form action="{{ url('/booking') }}/{{ $cate }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Kamar</label>
                                <div class="col-sm-4">
                                    
                                    <input type="text" class="form-control" id="nk" name="kamar" value="{{ $kmr->nama_kamar }}" readonly>
                                    <input type="text" class="form-control" id="idkamar" name="id_kamar" value="{{ $kmr->id_kamar }}"  hidden>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Pasien</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="bookusr" name="nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Kamar 1 / Utama</label>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio1" name="utama" class="custom-control-input" value="1">
                                                <label class="custom-control-label" for="customRadio1">Kamar 1 / Utama</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio2" name="utama" class="custom-control-input" value="0" checked>
                                                <label class="custom-control-label" for="customRadio2">Kamar Umum</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Pesan</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" name="daterange" id="tgl_pemesanan"/>
                                    <div id="error"></div>
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-info" id="btnLihatJadwal" data-name="ICU" data-toggle="modal" data-id="{{ $kmr->id_kamar }}" data-target="#dataReservasi">Lihat Jadwal</button>
                                </div>
                            </div>
                            @if ($kmr->kapasitas > 1)
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nomor Bilik</label>
                                    <div class="col-sm-5">
                                        <select class="form-control custom-select" name="bilik" id="bilik">
                                            @for ($i = 0; $i < $kmr->kapasitas; $i++) 
                                                <option value="{{ $i+1 }}">{{ $i+1 }}</option>  
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            @else 
                                <input type="text" class="form-control"  name="bilik" value="1" hidden>
                            @endif
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Penanggung</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="bookpng" name="penanggung">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-sm-10">
                                    
                                    <button type="submit" id="submitBooking" class="btn btn-primary">Buat Pesanan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            @endforeach
         </div>
     </div>
</div>


{{-- tabel reservasi --}}
<div class="modal fade" id="dataReservasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLarge01" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data Pemesan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <table id="tbJadwal" class="table table-hover w-100 display pb-30">
                                <thead>
                                    <tr>
                                        <th>Nama Pasien</th>
                                        <th>Penanggung</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Tanggal Keluar</th>
                                        <th>Kamar</th>
                                        <th>Kamar Utama</th>
                                        <th>Bilik</th>
                                        <th>Batal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

    {{-- <script src="{{ asset('vendors/jquery-toggles/toggles.min.js') }}"></script> --}}


    <script>
        renderTanggal();
        function renderTanggal(){
                var today = new Date();
                today.setDate(today.getDate() + 1);
                console.log('Ini tanggalnya '+today.getMonth());

                var tomorrow = (today.getMonth()+1) +'/'+today.getDate()+'/'+today.getFullYear();
                console.log(tomorrow);
                today.setDate(today.getDate() + 1);
                var nextTomorrow = (today.getMonth()+1) +'/'+today.getDate()+'/'+today.getFullYear();
                console.log(nextTomorrow);

                dr = tomorrow+' - '+nextTomorrow;

                document.getElementById('tgl_pemesanan').setAttribute('value',dr);
        }
        $(document).on("change", "#tgl_pemesanan" , function() {

                        
            var id = $('#idkamar').val();
            var kmr = $('#bilik').val();

            console.log(id);
            console.log('berubah');

            var date = $('#tgl_pemesanan').val();
            console.log('tgl pemesanan : '+ date);
            var res = date.split(" - ");
            var startRes = res[0].split("/");
            var start = new Date(startRes[2]+"-"+startRes[0]+"-"+startRes[1]+" 00:00:00");
            console.log('start : '+start);
            var endRes = res[1].split("/");
            var end = new Date(endRes[2]+"-"+endRes[0]+"-"+endRes[1]+" 00:00:00");
            console.log('end : '+end);

            var stoday = new Date();
            var today = new Date(stoday.getFullYear() +'-'+ (stoday.getMonth()+1) +'-'+stoday.getDate());
            console.log("TODAY : "+today);

            if(start <= today){
                var error = "<p style='color: red; '>Tanggal tidak valid!.</p>";
                document.getElementById('submitBooking').setAttribute('disabled','disabled');
                // document.getElementById('keluar').removeAttribute('disabled','disabled');
                console.log('tgl masuk kurang');
                $("#error").html(error);
                return;
            } else {

                $.ajax({
                url: '/check-booked/'+id+'/'+kmr,
                type: 'get',
                dataType: 'json',
                success: function(response){
                    if(response['data'] != null){
                                var len = response['data'].length;
                                console.log(len);
                                console.log(response);

                                for(var i=0; i<len; i++){
                                    var tgl_masuk = new Date(response['data'][i].tgl_masuk);
                                    var tgl_keluar = new Date(response['data'][i].tgl_keluar);
                                    

                                    console.log('tgl Lama 1 : '+tgl_masuk);
                                    console.log('tgl START 1 : '+start);
                                    console.log('tgl Lama 2 : '+tgl_keluar);
                                    console.log('tgl END 2 : '+end);

                                    if((start >= tgl_masuk) && (start <= tgl_keluar || start == tgl_keluar)){
                                        var error = "<p style='color: red; '>Tanggal telah dipesan!.</p>";
                                        document.getElementById('submitBooking').setAttribute('disabled','disabled');
                                        // document.getElementById('keluar').removeAttribute('disabled','disabled');
                                        console.log('tgl masuk diantara');
                                        $("#error").html(error);
                                        return;
                                    } else if ((end >= tgl_masuk) && (end <= tgl_keluar)){
                                        var error = "<p style='color: red; '>Tanggal telah dipesan!.</p>";
                                        document.getElementById('submitBooking').setAttribute('disabled','disabled');
                                        // document.getElementById('keluar').removeAttribute('disabled','disabled');
                                        console.log('tgl keluar diantara');
                                        $("#error").html(error);
                                        return;
                                    } else if((start <= tgl_masuk) && (end >= tgl_keluar)){
                                        var error = "<p style='color: red; '>Tanggal telah dipesan!.</p>";
                                        document.getElementById('submitBooking').setAttribute('disabled','disabled');
                                        // document.getElementById('keluar').removeAttribute('disabled','disabled');
                                        console.log('tgl lama diantara');
                                        $("#error").html(error);
                                        return;
                                    }
                                }
                            }

                }

            });

                document.getElementById('submitBooking').removeAttribute('disabled','disabled');
                $("#error").html(" ");
                return;
            }
        });

        $(document).on("change", "#bilik" , function() {

                                        
                var id = $('#idkamar').val();
                var kmr = $('#bilik').val();

                console.log(id);
                console.log('berubah');

                var date = $('#tgl_pemesanan').val();
                console.log('tgl pemesanan : '+ date);
                var res = date.split(" - ");
                var startRes = res[0].split("/");
                var start = new Date(startRes[2]+"-"+startRes[0]+"-"+startRes[1]+" 00:00:00");
                console.log('start : '+start);
                var endRes = res[1].split("/");
                var end = new Date(endRes[2]+"-"+endRes[0]+"-"+endRes[1]+" 00:00:00");
                console.log('end : '+end);

                var stoday = new Date();
                var today = new Date(stoday.getFullYear() +'-'+ (stoday.getMonth()+1) +'-'+stoday.getDate());
                console.log("TODAY : "+today);

                if(start <= today){
                    var error = "<p style='color: red; '>Tanggal tidak valid!.</p>";
                    document.getElementById('submitBooking').setAttribute('disabled','disabled');
                    // document.getElementById('keluar').removeAttribute('disabled','disabled');
                    console.log('tgl masuk kurang');
                    $("#error").html(error);
                    return;
                } else {

                    $.ajax({
                    url: '/check-booked/'+id+'/'+kmr,
                    type: 'get',
                    dataType: 'json',
                    success: function(response){
                        if(response['data'] != null){
                                    var len = response['data'].length;
                                    console.log(len);
                                    console.log(response);

                                    for(var i=0; i<len; i++){
                                        var tgl_masuk = new Date(response['data'][i].tgl_masuk);
                                        var tgl_keluar = new Date(response['data'][i].tgl_keluar);
                                        

                                        console.log('tgl Lama 1 : '+tgl_masuk);
                                        console.log('tgl START 1 : '+start);
                                        console.log('tgl Lama 2 : '+tgl_keluar);
                                        console.log('tgl END 2 : '+end);

                                        if((start >= tgl_masuk) && (start <= tgl_keluar || start == tgl_keluar)){
                                            var error = "<p style='color: red; '>Tanggal telah dipesan!.</p>";
                                            document.getElementById('submitBooking').setAttribute('disabled','disabled');
                                            // document.getElementById('keluar').removeAttribute('disabled','disabled');
                                            console.log('tgl masuk diantara');
                                            $("#error").html(error);
                                            return;
                                        } else if ((end >= tgl_masuk) && (end <= tgl_keluar)){
                                            var error = "<p style='color: red; '>Tanggal telah dipesan!.</p>";
                                            document.getElementById('submitBooking').setAttribute('disabled','disabled');
                                            // document.getElementById('keluar').removeAttribute('disabled','disabled');
                                            console.log('tgl keluar diantara');
                                            $("#error").html(error);
                                            return;
                                        } else if((start <= tgl_masuk) && (end >= tgl_keluar)){
                                            var error = "<p style='color: red; '>Tanggal telah dipesan!.</p>";
                                            document.getElementById('submitBooking').setAttribute('disabled','disabled');
                                            // document.getElementById('keluar').removeAttribute('disabled','disabled');
                                            console.log('tgl lama diantara');
                                            $("#error").html(error);
                                            return;
                                        }
                                    }
                                }

                    }

                });

                    document.getElementById('submitBooking').removeAttribute('disabled','disabled');
                    $("#error").html(" ");
                    return;
                }
        });

        $(document).on("click", "#btnLihatJadwal" , function() {

            var idkmr = $(this).data('id');
            console.log('dari btn jadwal = '+idkmr);
            var cate = "{{ $cate }}";
            // var descriptionValue = $(this).data('name');

            // console.log(descriptionValue);
            // $(".modal-body #idkamar").val(nameValue);
            // $(".modal-body #nk").val(descriptionValue);
            t = $('#tbJadwal').DataTable();
            t.clear().draw(false);

                    $.ajax({
                        url: '/check-booked-id/'+idkmr,
                        type: 'get',
                        dataType: 'json',
                        success: function(response){
                            if(response['data'] != null){
                                var len = response['data'].length;
                                console.log(len);
                                console.log(response);

                                for(var i=0; i<len; i++){
                                    var nama = response['data'][i].nama_pasien;
                                    var penanggung = response['data'][i].penanggungjawab;
                                    var tgl_masuk = response['data'][i].tgl_masuk;
                                    var tgl_keluar = response['data'][i].tgl_keluar;
                                    var kamar = response['data'][i].nama_kamar;
                                    var bilik = response['data'][i].no_kamar;
                                    var utama = response['data'][i].utama;
                                    var id_res = response['data'][i].id_reservasi;

                                    var isUtama = 'Invalid';
                                    if (utama == true) {
                                        isUtama = 'Ya';
                                    } else {
                                        isUtama = 'Tidak';
                                    }
                                    console.log("test : "+utama);

                                    t.row.add([
                                        '<td>'+ nama +'</td>',
                                        '<td>'+ penanggung +'</td>',
                                        '<td>'+ tgl_masuk +'</td>',
                                        '<td>'+ tgl_keluar +'</td>',
                                        '<td>'+ kamar +'</td>',
                                        '<td>'+ isUtama +'</td>',
                                        '<td>'+ bilik +'</td>',
                                        '<td><a href="{{ url("/reservasi-batal") }}/'+ id_res +'/'+ cate +'" class="btn btn-danger btn-wth-icon btn-sm"><span class="icon-label"><span class="feather-icon"><i data-feather="plus"></i></span> </span><span class="btn-text">Batal</span></a></td>'
                                    ]).draw(false);
                                }

                            }
                        }
                    });
        });
    </script>
@endsection

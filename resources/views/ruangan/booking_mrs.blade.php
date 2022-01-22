@extends('_master')

@section('title-content')
    Pasien MRS
@endsection

@section('css-content')
    
@endsection

@section('content')

<!-- Container -->
<div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="toggle-right"></i></span></span>Input Pemesanan Kamar Pasien Rawat Inap (MRS)</h4>
    </div>
    
    <!-- Row -->
     <div class="row">
         <div class="col-xl-12">
             @foreach ($kamar as $kmr)

            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Input Pasien Rawat Inap Kamar : {{ $kmr->nama_kamar }}</h5>
                            <p class="mb-25">Pastikan data yang anda masukkan sudah benar. </p>
                <div class="row">
                    <div class="col-sm">
                        <form action="{{ url('/reservation-mrs') }}/{{ $cate }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Kamar</label>
                                <div class="col-sm-4">
                                    
                                    <input type="text" class="form-control" id="nk" name="kamar" value="{{ $kmr->nama_kamar }}" readonly>
                                    <input type="text" class="form-control" id="idkamar" name="id_kamar" value="{{ $kmr->id_kamar }}" hidden>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Pasien</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="bookusr" name="nama" required>
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
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Penanggung</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="bookpng" name="penanggung" required>
                                </div>
                            </div>

                            @if ($kmr->kapasitas > 1)
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nomor Bilik</label>
                                    <div class="col-sm-5">
                                        <select class="form-control custom-select" name="bilik">
                                            @for ($i = 0; $i < $kmr->kapasitas; $i++)
                                                
                                                    @if ($arr[$i] == 1)
                                                        <option value="{{ $i+1 }}" disabled style="background-color: grey">{{ $i+1 }}</option>
                                                    @else
                                                        <option value="{{ $i+1 }}">{{ $i+1 }}</option>     
                                                    @endif
                                                
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            @else 
                                <input type="text" class="form-control"  name="bilik" value="1" hidden>
                            @endif
                            <div class="form-group row mb-0">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Buat Pesanan</button>
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


@endsection

@section('js-content')
   
@endsection

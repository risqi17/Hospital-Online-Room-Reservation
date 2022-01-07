@extends('_master')

@section('title-content')
    Master Kamar
@endsection

@section('css-content')
    
@endsection

@section('content')

<!-- Container -->
<div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="toggle-right"></i></span></span>Input Kamar Di Rumah Sakit Semen Gresik</h4>
    </div>
    
    <!-- Row -->
     <div class="row">
         <div class="col-xl-12">
             

            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Input Kamar Baru: </h5>
                            <p class="mb-25">Pastikan data yang anda masukkan sudah benar. </p>
                <div class="row">
                    <div class="col-sm">
                        <form action="{{ url('/room/create') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Kamar</label>
                                <div class="col-sm-4">
                                    
                                    <input type="text" class="form-control" name="nama_kamar" value="">
                                    
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Kapasitas</label>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control" name="kapasitas">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Group Kamar</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control"  name="group_kamar">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
         </div>
     </div>
</div>


@endsection

@section('js-content')
   
@endsection

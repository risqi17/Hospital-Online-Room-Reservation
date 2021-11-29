@extends('_master')

@section('title-content')
    Fasilitas Kelas 2 Paviliun
@endsection

@section('css-content')
    
@endsection

@section('content')

<!-- Container -->
<div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
    <!-- Title -->
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="image"></i></span></span>Fasilitas Kelas 2 Paviliun</h4>
    </div>
    <!-- /Title -->
    <!-- Row -->
     <div class="row">
         <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Ruangan Kelas 2 Paviliun</h5>
                <p class="mb-25">Berikut ditampilkan dari fasilitas ruangan Kelas 2 Paviliun Rumah Sakit Semen Gresik</p>
                <div class="row">
                    <div class="col-sm-12 mt-15">
                        <img src="{{ asset('dist/img/fasilitas/KELAS2PAVILIUN.png') }}" class="img-fluid" alt="img">
                    </div>
                    
                </div>
            </section>
         </div>
     </div>
</div>


@endsection

@section('js-content')
   
@endsection

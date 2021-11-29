@extends('_master')

@section('title-content')
    Fasilitas VVIP
@endsection

@section('css-content')
    
@endsection

@section('content')

<!-- Container -->
<div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
    <!-- Title -->
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="image"></i></span></span>Fasilitas VVIP</h4>
    </div>
    <!-- /Title -->
    <!-- Row -->
     <div class="row">
         <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Ruangan VVIP</h5>
                <p class="mb-25">Berikut ditampilkan dari fasilitas ruangan VVIP Rumah Sakit Semen Gresik</p>
                <div class="row">
                    <div class="col-sm-12 mt-15">
                        <img src="{{ asset('dist/img/fasilitas/VVIP.png') }}" class="img-fluid" alt="img">
                    </div>
                    
                </div>
            </section>
         </div>
     </div>
</div>


@endsection

@section('js-content')
   
@endsection

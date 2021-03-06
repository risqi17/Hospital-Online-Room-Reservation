@extends('_master')

@section('title-content')
    Paviliun 3
@endsection

@section('css-content')
    
@endsection

@section('content')

<!-- Container -->
<div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
    <!-- Row -->
     <div class="row">
         <div class="col-xl-12">
            <div class="hk-row">

                <div class="col-lg-5">

                </div>
                <div class="col-lg-2 mb-30">
            @foreach ($kamar52 as $k52)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal52">
                @if ($k52->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">GAHARU 301</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">GAHARU 301</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi52 as $i52)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i52->kapasitas }}</h5>
                                
                                @if ($i52->kapasitas == 1)
                                    @if ($i52->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i52->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i52->booked }} dari {{ $i52->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
            </div>
            <div class="hk-row">

                <div class="col-lg-2">

                </div>
                <div class="col-lg-2 mb-30">
                    @foreach ($kamar53 as $k53)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal53">
                        @if ($k53->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">MAHONI 302</div>
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">MAHONI 302</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi53 as $i53)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i53->kapasitas }}</h5>
                                        
                                        @if ($i53->kapasitas == 1)
                                            @if ($i53->booked == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <p class="card-text text-white">Ruangan Penuh</p>
                                                
                                            @endif
                                        @else
                                            @if ($i53->booked == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                               
                                            @else
                                                <p class="card-text text-white">Terisi {{ $i53->booked }} dari {{ $i53->kapasitas }}</p>
                                                
                                            @endif
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            </a>
                    @endforeach
                        </div>
                
                <div class="col-lg-4">

                </div>
                <div class="col-lg-2 mb-30">
            @foreach ($kamar54 as $k54)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal54">
                @if ($k54->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">MAHONI 303</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">MAHONI 303</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi54 as $i54)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i54->kapasitas }}</h5>
                                
                                @if ($i54->kapasitas == 1)
                                    @if ($i54->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i54->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i54->booked }} dari {{ $i54->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
            </div>
            <div class="hk-row">
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar55 as $k55)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal55">
                @if ($k55->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">ALBASIA 305</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">ALBASIA 305</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi55 as $i55)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i55->kapasitas }}</h5>
                                
                                @if ($i55->kapasitas == 1)
                                    @if ($i55->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i55->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i55->booked }} dari {{ $i55->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2">

                </div>
                <div class="col-lg-2 mb-30">
            @foreach ($kamar56 as $k56)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal56">
                @if ($k56->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">ALBASIA 306</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">ALBASIA 306</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi56 as $i56)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i56->kapasitas }}</h5>
                                
                                @if ($i56->kapasitas == 1)
                                    @if ($i56->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i56->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i56->booked }} dari {{ $i56->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar57 as $k57)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal57">
                @if ($k57->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">ALBASIA 308</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">ALBASIA 308</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi57 as $i57)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i57->kapasitas }}</h5>
                                
                                @if ($i57->kapasitas == 1)
                                    @if ($i57->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i57->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i57->booked }} dari {{ $i57->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2">

                </div>
                <div class="col-lg-2 mb-30">
            @foreach ($kamar58 as $k58)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal58">
                @if ($k58->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">ALBASIA 309</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">ALBASIA 309</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi58 as $i58)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i58->kapasitas }}</h5>
                                
                                @if ($i58->kapasitas == 1)
                                    @if ($i58->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i58->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i58->booked }} dari {{ $i58->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>


            </div>
            <div class="hk-row">

                <div class="col-lg-1">

                </div>
                <div class="col-lg-2 mb-30">
            @foreach ($kamar59 as $k59)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal59">
                @if ($k59->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">PINUS 304-1</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">PINUS 304-1</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi59 as $i59)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i59->kapasitas }}</h5>
                                
                                @if ($i59->kapasitas == 1)
                                    @if ($i59->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i59->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i59->booked }} dari {{ $i59->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar60 as $k60)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal60">
                @if ($k60->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">PINUS 304-2</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">PINUS 304-2</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi60 as $i60)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i60->kapasitas }}</h5>
                                
                                @if ($i60->kapasitas == 1)
                                    @if ($i60->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i60->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i60->booked }} dari {{ $i60->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2">

                </div>
                <div class="col-lg-2 mb-30">
            @foreach ($kamar61 as $k61)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal61">
                @if ($k61->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">AKASIA 307-1</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AKASIA 307-1</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi61 as $i61)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i61->kapasitas }}</h5>
                                
                                @if ($i61->kapasitas == 1)
                                    @if ($i61->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i61->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i61->booked }} dari {{ $i61->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar62 as $k62)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal62">
                @if ($k62->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">AKASIA 307-2</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AKASIA 307-2</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi62 as $i62)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i62->kapasitas }}</h5>
                                
                                @if ($i62->kapasitas == 1)
                                    @if ($i62->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i62->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i62->booked }} dari {{ $i62->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
            
            </div>
         </div>
     </div>
</div>

{{-- Modal Pilihan --}}
<div class="modal fade" id="ChoiceModal52" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi52 as $i52)
                    @if ($i52->booked == $i52->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/52/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/52/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi52 as $i52)
                    @if ($i52->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/52/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi52 as $i52)
                    @if ($i52->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/52/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Pasien Keluar Rawat Inap
                        </a>
                    @endif
                @endforeach
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>

{{-- Modal Pilihan --}}
<div class="modal fade" id="ChoiceModal53" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi53 as $i53)
                    @if ($i53->booked == $i53->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/53/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/53/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi53 as $i53)
                @if ($i53->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/53/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi53 as $i53)
                    @if ($i53->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/53/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Pasien Keluar Rawat Inap
                        </a>
                    @endif
                @endforeach
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>

{{-- Modal Pilihan --}}
<div class="modal fade" id="ChoiceModal54" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi54 as $i54)
                    @if ($i54->booked == $i54->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/54/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/54/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi54 as $i54)
                    @if ($i54->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/54/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi54 as $i54)
                    @if ($i54->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/54/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Pasien Keluar Rawat Inap
                        </a>
                    @endif
                @endforeach
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>

{{-- Modal Pilihan --}}
<div class="modal fade" id="ChoiceModal55" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi55 as $i55)
                    @if ($i55->booked == $i55->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/55/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/55/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi55 as $i55)
                    @if ($i55->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/55/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi55 as $i55)
                    @if ($i55->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/55/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Pasien Keluar Rawat Inap
                        </a>
                    @endif
                @endforeach
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>

{{-- Modal Pilihan --}}
<div class="modal fade" id="ChoiceModal56" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi56 as $i56)
                    @if ($i56->booked == $i56->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/56/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/56/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi56 as $i56)
                    @if ($i56->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/56/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi56 as $i56)
                    @if ($i56->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/56/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Pasien Keluar Rawat Inap
                        </a>
                    @endif
                @endforeach
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>

{{-- Modal Pilihan --}}
<div class="modal fade" id="ChoiceModal57" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi57 as $i57)
                    @if ($i57->booked == $i57->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/57/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/57/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi57 as $i57)
                    @if ($i57->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/57/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi57 as $i57)
                    @if ($i57->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/57/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Pasien Keluar Rawat Inap
                        </a>
                    @endif
                @endforeach
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>

{{-- Modal Pilihan --}}
<div class="modal fade" id="ChoiceModal58" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi58 as $i58)
                    @if ($i58->booked == $i58->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/58/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/58/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi58 as $i58)
                    @if ($i58->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/58/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi58 as $i58)
                    @if ($i58->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/58/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Pasien Keluar Rawat Inap
                        </a>
                    @endif
                @endforeach
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>

{{-- Modal Pilihan --}}
<div class="modal fade" id="ChoiceModal59" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi59 as $i59)
                    @if ($i59->booked == $i59->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/59/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/59/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi59 as $i59)
                    @if ($i59->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/59/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi59 as $i59)
                    @if ($i59->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/59/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Pasien Keluar Rawat Inap
                        </a>
                    @endif
                @endforeach
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>

{{-- Modal Pilihan --}}
<div class="modal fade" id="ChoiceModal60" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi60 as $i60)
                    @if ($i60->booked == $i60->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/60/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/60/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi60 as $i60)
                    @if ($i60->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/60/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi60 as $i60)
                    @if ($i60->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/60/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Pasien Keluar Rawat Inap
                        </a>
                    @endif
                @endforeach
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>

{{-- Modal Pilihan --}}
<div class="modal fade" id="ChoiceModal61" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi61 as $i61)
                    @if ($i61->booked == $i61->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/61/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/61/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi61 as $i61)
                    @if ($i61->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/61/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi61 as $i61)
                    @if ($i61->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/61/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Pasien Keluar Rawat Inap
                        </a>
                    @endif
                @endforeach
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>

{{-- Modal Pilihan --}}
<div class="modal fade" id="ChoiceModal62" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi62 as $i62)
                    @if ($i62->booked == $i62->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/62/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/62/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi62 as $i62)
                    @if ($i62->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/62/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi62 as $i62)
                    @if ($i62->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/62/paviliun3') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Pasien Keluar Rawat Inap
                        </a>
                    @endif
                @endforeach
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>




@endsection

@section('js-content')
   
@endsection

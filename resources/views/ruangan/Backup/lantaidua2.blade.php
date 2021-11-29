@extends('_master')

@section('title-content')
    Lantai 2 (Ruang Bedah Anak 2)
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

                <div class="col-lg-2 mb-30">
            @foreach ($kamar110 as $k110)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal110">
                @if ($k110->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">SERUNI 213-1</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 213-1</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi110 as $i110)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i110->kapasitas }}</h5>
                                
                                @if ($i110->kapasitas == 1)
                                    @if ($i110->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i110->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i110->booked }} dari {{ $i110->kapasitas }}</p>
                                        
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
            @foreach ($kamar111 as $k111)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal111">
                @if ($k111->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">KOSONG</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">KOSONG</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi111 as $i111)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i111->kapasitas }}</h5>
                                
                                @if ($i111->kapasitas == 1)
                                    @if ($i111->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i111->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i111->booked }} dari {{ $i111->kapasitas }}</p>
                                        
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
            @foreach ($kamar112 as $k112)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal112">
                @if ($k112->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">TANJUNG 212-1</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">TANJUNG 212-1</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi112 as $i112)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i112->kapasitas }}</h5>
                                
                                @if ($i112->kapasitas == 1)
                                    @if ($i112->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i112->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i112->booked }} dari {{ $i112->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar113 as $k113)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal113">
                @if ($k113->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">TANJUNG 212-2</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">TANJUNG 212-2</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi113 as $i113)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i113->kapasitas }}</h5>
                                
                                @if ($i113->kapasitas == 1)
                                    @if ($i113->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i113->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i113->booked }} dari {{ $i113->kapasitas }}</p>
                                        
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
            @foreach ($kamar114 as $k114)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal114">
                @if ($k114->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">SERUNI 213-2</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 213-2</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi114 as $i114)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i114->kapasitas }}</h5>
                                
                                @if ($i114->kapasitas == 1)
                                    @if ($i114->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i114->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i114->booked }} dari {{ $i114->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar115 as $k115)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal115">
                @if ($k115->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">SERUNI 213-3</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 213-3</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi115 as $i115)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i115->kapasitas }}</h5>
                                
                                @if ($i115->kapasitas == 1)
                                    @if ($i115->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i115->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i115->booked }} dari {{ $i115->kapasitas }}</p>
                                        
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
            @foreach ($kamar116 as $k116)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal116">
                @if ($k116->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">TANJUNG 212-3</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">TANJUNG 212-3</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi116 as $i116)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i116->kapasitas }}</h5>
                                
                                @if ($i116->kapasitas == 1)
                                    @if ($i116->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i116->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i116->booked }} dari {{ $i116->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar117 as $k117)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal117">
                @if ($k117->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">TANJUNG 212-4</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">TANJUNG 212-4</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi117 as $i117)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i117->kapasitas }}</h5>
                                
                                @if ($i117->kapasitas == 1)
                                    @if ($i117->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i117->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i117->booked }} dari {{ $i117->kapasitas }}</p>
                                        
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
            @foreach ($kamar118 as $k118)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal118">
                @if ($k118->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">SERUNI 213-4</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 213-4</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi118 as $i118)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i118->kapasitas }}</h5>
                                
                                @if ($i118->kapasitas == 1)
                                    @if ($i118->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i118->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i118->booked }} dari {{ $i118->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar119 as $k119)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal119">
                @if ($k119->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">SERUNI 213-5</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 213-5</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi119 as $i119)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i119->kapasitas }}</h5>
                                
                                @if ($i119->kapasitas == 1)
                                    @if ($i119->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i119->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i119->booked }} dari {{ $i119->kapasitas }}</p>
                                        
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
            @foreach ($kamar120 as $k120)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal120">
                @if ($k120->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">TANJUNG 212-5</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">TANJUNG 212-5</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi120 as $i120)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i120->kapasitas }}</h5>
                                
                                @if ($i120->kapasitas == 1)
                                    @if ($i120->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i120->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i120->booked }} dari {{ $i120->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar121 as $k121)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal121">
                @if ($k121->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">TANJUNG 212-6</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">TANJUNG 212-6</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi121 as $i121)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i121->kapasitas }}</h5>
                                
                                @if ($i121->kapasitas == 1)
                                    @if ($i121->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i121->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i121->booked }} dari {{ $i121->kapasitas }}</p>
                                        
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
<div class="modal fade" id="ChoiceModal110" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi110 as $i110)
                    @if ($i110->booked == $i110->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/110/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/110/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi110 as $i110)
                @if ($i110->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/110/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi110 as $i110)
                    @if ($i110->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/110/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal111" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi111 as $i111)
                    @if ($i111->booked == $i111->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/111/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/111/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi111 as $i111)
                @if ($i111->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/111/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi111 as $i111)
                    @if ($i111->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/111/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal112" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi112 as $i112)
                    @if ($i112->booked == $i112->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/112/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/112/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi112 as $i112)
                @if ($i112->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/112/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi112 as $i112)
                    @if ($i112->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/112/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal113" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi113 as $i113)
                    @if ($i113->booked == $i113->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/113/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/113/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi113 as $i113)
                @if ($i113->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/113/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi113 as $i113)
                    @if ($i113->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/113/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal114" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi114 as $i114)
                    @if ($i114->booked == $i114->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/114/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/114/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi114 as $i114)
                @if ($i114->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/114/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi114 as $i114)
                    @if ($i114->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/114/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal115" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi115 as $i115)
                    @if ($i115->booked == $i115->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/115/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/115/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi115 as $i115)
                @if ($i115->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/115/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi115 as $i115)
                    @if ($i115->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/115/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal116" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi116 as $i116)
                    @if ($i116->booked == $i116->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/116/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/116/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi116 as $i116)
                @if ($i116->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/116/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi116 as $i116)
                    @if ($i116->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/116/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal117" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi117 as $i117)
                    @if ($i117->booked == $i117->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/117/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/117/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi117 as $i117)
                @if ($i117->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/117/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi117 as $i117)
                    @if ($i117->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/117/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal118" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi118 as $i118)
                    @if ($i118->booked == $i118->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/118/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/118/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi118 as $i118)
                @if ($i118->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/118/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi118 as $i118)
                    @if ($i118->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/118/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal119" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi119 as $i119)
                    @if ($i119->booked == $i119->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/119/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/119/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi119 as $i119)
                @if ($i119->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/119/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi119 as $i119)
                    @if ($i119->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/119/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal120" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi120 as $i120)
                    @if ($i120->booked == $i120->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/120/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/120/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi120 as $i120)
                @if ($i120->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/120/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi120 as $i120)
                    @if ($i120->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/120/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal121" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi121 as $i121)
                    @if ($i121->booked == $i121->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/121/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/121/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi121 as $i121)
                @if ($i121->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/121/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi121 as $i121)
                    @if ($i121->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/121/lantai2rba2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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

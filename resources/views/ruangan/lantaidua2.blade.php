@extends('_master')

@section('title-content')
    Lantai 2 (Ruang Bedah Anak 2)
@endsection

@section('css-content')
    
@endsection

@section('content')

<!-- Container -->
<div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
    <div class="hk-row">


        <div class="col-lg-3 col-sm-6">
            <div class="card card-sm">
                <div class="card-body">
                    <span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Jumlah Kamar</span>
                    <div class="d-flex align-items-center justify-content-between position-relative">
                        <div>
                           <span class="d-block display-5 font-weight-400 text-dark"><span class="counter-anim">
                               @foreach ($jml_kamar as $jk)
                                   {{ $jk->hasil }}  
                               @endforeach
                               </span> Kamar</span>
                        </div>
                        {{-- <div class="position-absolute r-0">
                            <span id="pie_chart_1" class="d-flex easy-pie-chart" data-percent="86">
                                <span class="percent head-font">86</span>
                            </span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="card card-sm">
                <div class="card-body">
                    <span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Pasien Dirawat</span>
                    <div class="d-flex align-items-center justify-content-between position-relative">
                        <div>
                            <span class="d-block">
                                <span class="display-5 font-weight-400 text-dark"><span class="counter-anim">@foreach ($dirawat as $dr)
                                   {{ $dr->hasil }}  
                               @endforeach</span> Pasien</span>
                            </span>
                        </div>
                        {{-- <div class="position-absolute r-0">
                            <span id="pie_chart_2" class="d-flex easy-pie-chart" data-percent="75">
                                <span class="percent head-font">75</span>
                            </span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-sm">
                <div class="card-body">
                    <span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Pasien Booking</span>
                    <div class="d-flex align-items-end justify-content-between">
                        <div>
                            <span class="d-block">
                                <span class="display-5 font-weight-400 text-dark"><span class="counter-anim">
                                    @foreach ($booking as $bk)
                                   {{ $bk->hasil }}  
                               @endforeach</span> Pasien</span>
                                
                            </span>
                        </div>
                        {{-- <div>
                            <span class="text-success font-12 font-weight-600">+5%</span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-sm">
                <div class="card-body">
                    <span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Pasien Keluar</span>
                    <div class="d-flex align-items-end justify-content-between">
                        <div>
                            <span class="d-block">
                                <span class="display-5 font-weight-400 text-dark"><span class="counter-anim">
                                    @foreach ($keluar as $kl)
                                   {{ $kl->hasil }}  
                               @endforeach</span> Pasien</span>
                            </span>
                        </div>
                        {{-- <div>
                            <span class="text-danger font-12 font-weight-600">-12%</span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                @elseif ($bk110> 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">SERUNI 213-1</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 213-1</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi110 as $i110)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i110->kapasitas }}</h5>
                                
                                @if ($i110->kapasitas == 1)
                                    @if ($i110->booked == 0 && $i110->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn110 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i110->booked == 0 && $i110->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn110 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-6">

                </div>

                <div class="col-lg-2 mb-30">
            @foreach ($kamar112 as $k112)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal112">
                @if ($k112->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">TANJUNG 212-1</div>
                @elseif ($bk112> 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">TANJUNG 212-1</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">TANJUNG 212-1</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi112 as $i112)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i112->kapasitas }}</h5>
                                
                                @if ($i112->kapasitas == 1)
                                    @if ($i112->booked == 0 && $i112->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn112 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i112->booked == 0 && $i112->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn112 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
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
                @elseif ($bk113> 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">TANJUNG 212-2</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">TANJUNG 212-2</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi113 as $i113)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i113->kapasitas }}</h5>
                                
                                @if ($i113->kapasitas == 1)
                                    @if ($i113->booked == 0 && $i113->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn113 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i113->booked == 0 && $i113->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn113 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
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
                @elseif ($bk114> 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">SERUNI 213-2</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 213-2</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi114 as $i114)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i114->kapasitas }}</h5>
                                
                                @if ($i114->kapasitas == 1)
                                    @if ($i114->booked == 0 && $i114->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn114 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i114->booked == 0 && $i114->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn114 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>

        <div class="col-lg-2 mb-30">
            @foreach ($kamar118 as $k118)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal118">
                @if ($k118->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">SERUNI 213-4</div>
                @elseif ($bk118> 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">SERUNI 213-4</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 213-4</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi118 as $i118)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i118->kapasitas }}</h5>
                                
                                @if ($i118->kapasitas == 1)
                                    @if ($i118->booked == 0 && $i118->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn118 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i118->booked == 0 && $i118->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn118 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
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
                @elseif ($bk116> 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">TANJUNG 212-3</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">TANJUNG 212-3</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi116 as $i116)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i116->kapasitas }}</h5>
                                
                                @if ($i116->kapasitas == 1)
                                    @if ($i116->booked == 0 && $i116->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn116 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i116->booked == 0 && $i116->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn116 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
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
                @elseif ($bk117> 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">TANJUNG 212-4</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">TANJUNG 212-4</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi117 as $i117)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i117->kapasitas }}</h5>
                                
                                @if ($i117->kapasitas == 1)
                                    @if ($i117->booked == 0 && $i117->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn117 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i117->booked == 0 && $i117->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn117 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
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
            @foreach ($kamar115 as $k115)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal115">
                @if ($k115->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">SERUNI 213-3</div>
                @elseif ($bk115> 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">SERUNI 213-3</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 213-3</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi115 as $i115)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i115->kapasitas }}</h5>
                                
                                @if ($i115->kapasitas == 1)
                                    @if ($i115->booked == 0 && $i115->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn115 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i115->booked == 0 && $i115->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn115 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
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
                @elseif ($bk119> 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">SERUNI 213-5</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 213-5</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi119 as $i119)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i119->kapasitas }}</h5>
                                
                                @if ($i119->kapasitas == 1)
                                    @if ($i119->booked == 0 && $i119->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn119 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i119->booked == 0 && $i119->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn119 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
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
                @elseif ($bk120> 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">TANJUNG 212-5</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">TANJUNG 212-5</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi120 as $i120)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i120->kapasitas }}</h5>
                                
                                @if ($i120->kapasitas == 1)
                                    @if ($i120->booked == 0 && $i120->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn120 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i120->booked == 0 && $i120->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn120 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
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
                @elseif ($bk121> 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">TANJUNG 212-6</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">TANJUNG 212-6</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi121 as $i121)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i121->kapasitas }}</h5>
                                
                                @if ($i121->kapasitas == 1)
                                    @if ($i121->booked == 0 && $i121->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn121 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i121->booked == 0 && $i121->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn121 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
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

@extends('_master')

@section('title-content')
    Lantai 3 (Obgyn)
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
            @foreach ($kamar122 as $k122)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal122">
                @if ($k122->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">ALAMANDA 304</div>
                @elseif ($bk122> 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">ALAMANDA 304</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">ALAMANDA 304</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi122 as $i122)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i122->kapasitas }}</h5>
                                
                                @if ($i122->kapasitas == 1)
                                    @if ($i122->booked == 0 && $i122->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn122 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i122->booked == 0 && $i122->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn122 as $p)
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
                
                <div class="col-lg-3">

                </div>
                <div class="col-lg-2 mb-30">
            @foreach ($kamar123 as $k123)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal123">
                @if ($k123->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">TERATAI 302</div>
                @elseif ($bk123> 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">TERATAI 302</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">TERATAI 302</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi123 as $i123)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i123->kapasitas }}</h5>
                                
                                @if ($i123->kapasitas == 1)
                                    @if ($i123->booked == 0 && $i123->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn123 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i123->booked == 0 && $i123->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn123 as $p)
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

                <div class="col-lg-8">

                </div>
                <div class="col-lg-2 mb-30">
            @foreach ($kamar124 as $k124)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal124">
                @if ($k124->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">AZALEA 306-1</div>
                @elseif ($bk124> 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 306-1</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AZALEA 306-1</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi124 as $i124)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i124->kapasitas }}</h5>
                                
                                @if ($i124->kapasitas == 1)
                                    @if ($i124->booked == 0 && $i124->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn124 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i124->booked == 0 && $i124->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn124 as $p)
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
            @foreach ($kamar125 as $k125)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal125">
                @if ($k125->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">AZALEA 306-2</div>
                @elseif ($bk125> 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 306-2</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AZALEA 306-2</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi125 as $i125)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i125->kapasitas }}</h5>
                                
                                @if ($i125->kapasitas == 1)
                                    @if ($i125->booked == 0 && $i125->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn125 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i125->booked == 0 && $i125->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn125 as $p)
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
            @foreach ($kamar126 as $k126)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal126">
                @if ($k126->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">AZALEA 309-1</div>
                @elseif ($bk126> 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 309-1</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AZALEA 309-1</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi126 as $i126)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i126->kapasitas }}</h5>
                                
                                @if ($i126->kapasitas == 1)
                                    @if ($i126->booked == 0 && $i126->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn126 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i126->booked == 0 && $i126->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn126 as $p)
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
            @foreach ($kamar127 as $k127)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal127">
                @if ($k127->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">AZALEA 306-1</div>
                @elseif ($bk127> 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 306-1</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AZALEA 306-1</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi127 as $i127)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i127->kapasitas }}</h5>
                                
                                @if ($i127->kapasitas == 1)
                                    @if ($i127->booked == 0 && $i127->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn127 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i127->booked == 0 && $i127->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn127 as $p)
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
            @foreach ($kamar128 as $k128)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal128">
                @if ($k128->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">AZALEA 306-2</div>
                @elseif ($bk128> 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 306-2</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AZALEA 306-2</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi128 as $i128)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i128->kapasitas }}</h5>
                                
                                @if ($i128->kapasitas == 1)
                                    @if ($i128->booked == 0 && $i128->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn128 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i128->booked == 0 && $i128->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn128 as $p)
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
            @foreach ($kamar129 as $k129)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal129">
                @if ($k129->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">AZALEA 309-2</div>
                @elseif ($bk129> 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 309-2</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AZALEA 309-2</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi129 as $i129)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i129->kapasitas }}</h5>
                                
                                @if ($i129->kapasitas == 1)
                                    @if ($i129->booked == 0 && $i129->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn129 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i129->booked == 0 && $i129->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn129 as $p)
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
            @foreach ($kamar130 as $k130)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal130">
                @if ($k130->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">SERUNI 310-1</div>
                @elseif ($bk130> 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">SERUNI 310-1</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 310-1</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi130 as $i130)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i130->kapasitas }}</h5>
                                
                                @if ($i130->kapasitas == 1)
                                    @if ($i130->booked == 0 && $i130->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn130 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i130->booked == 0 && $i130->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn130 as $p)
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
            @foreach ($kamar131 as $k131)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal131">
                @if ($k131->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">SERUNI 310-2</div>
                @elseif ($bk131> 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">SERUNI 310-2</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 310-2</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi131 as $i131)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i131->kapasitas }}</h5>
                                
                                @if ($i131->kapasitas == 1)
                                    @if ($i131->booked == 0 && $i131->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn131 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i131->booked == 0 && $i131->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn131 as $p)
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
            @foreach ($kamar132 as $k132)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal132">
                @if ($k132->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">SERUNI 310-3</div>
                @elseif ($bk132> 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">SERUNI 310-3</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 310-3</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi132 as $i132)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i132->kapasitas }}</h5>
                                
                                @if ($i132->kapasitas == 1)
                                    @if ($i132->booked == 0 && $i132->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn132 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i132->booked == 0 && $i132->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn132 as $p)
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

                <div class="col-lg-4">

                </div>
                <div class="col-lg-2 mb-30">
            @foreach ($kamar133 as $k133)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal133">
                @if ($k133->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">SERUNI 310-4</div>
                @elseif ($bk133> 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">SERUNI 310-4</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 310-4</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi133 as $i133)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i133->kapasitas }}</h5>
                                
                                @if ($i133->kapasitas == 1)
                                    @if ($i133->booked == 0 && $i133->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn133 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i133->booked == 0 && $i133->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn133 as $p)
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
            @foreach ($kamar134 as $k134)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal134">
                @if ($k134->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">SERUNI 310-5</div>
                @elseif ($bk134> 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">SERUNI 310-5</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 310-5</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi134 as $i134)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i134->kapasitas }}</h5>
                                
                                @if ($i134->kapasitas == 1)
                                    @if ($i134->booked == 0 && $i134->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn134 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i134->booked == 0 && $i134->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn134 as $p)
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
            @foreach ($kamar135 as $k135)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal135">
                @if ($k135->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">SERUNI 310-6</div>
                @elseif ($bk135> 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">SERUNI 310-6</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 310-6</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi135 as $i135)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i135->kapasitas }}</h5>
                                
                                @if ($i135->kapasitas == 1)
                                    @if ($i135->booked == 0 && $i135->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn135 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i135->booked == 0 && $i135->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn135 as $p)
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
            @foreach ($kamar136 as $k136)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal136">
                @if ($k136->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">SERUNI 310-7</div>
                @elseif ($bk136> 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">SERUNI 310-7</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 310-7</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi136 as $i136)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i136->kapasitas }}</h5>
                                
                                @if ($i136->kapasitas == 1)
                                    @if ($i136->booked == 0 && $i136->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn136 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i136->booked == 0 && $i136->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn136 as $p)
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
<div class="modal fade" id="ChoiceModal122" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi122 as $i122)
                    @if ($i122->booked == $i122->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/122/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/122/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi122 as $i122)
                @if ($i122->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/122/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi122 as $i122)
                    @if ($i122->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/122/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal123" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi123 as $i123)
                    @if ($i123->booked == $i123->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/123/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/123/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi123 as $i123)
                @if ($i123->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/123/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi123 as $i123)
                    @if ($i123->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/123/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal124" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi124 as $i124)
                    @if ($i124->booked == $i124->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/124/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/124/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi124 as $i124)
                @if ($i124->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/124/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi124 as $i124)
                    @if ($i124->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/124/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal125" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi125 as $i125)
                    @if ($i125->booked == $i125->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/125/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/125/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi125 as $i125)
                @if ($i125->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/125/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi125 as $i125)
                    @if ($i125->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/125/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal126" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi126 as $i126)
                    @if ($i126->booked == $i126->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/126/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/126/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi126 as $i126)
                @if ($i126->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/126/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi126 as $i126)
                    @if ($i126->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/126/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal127" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi127 as $i127)
                    @if ($i127->booked == $i127->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/127/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/127/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi127 as $i127)
                @if ($i127->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/127/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi127 as $i127)
                    @if ($i127->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/127/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal128" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi128 as $i128)
                    @if ($i128->booked == $i128->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/128/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/128/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi128 as $i128)
                @if ($i128->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/128/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi128 as $i128)
                    @if ($i128->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/128/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal129" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi129 as $i129)
                    @if ($i129->booked == $i129->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/129/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/129/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi129 as $i129)
                @if ($i129->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/129/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi129 as $i129)
                    @if ($i129->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/129/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal130" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi130 as $i130)
                    @if ($i130->booked == $i130->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/130/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/130/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi130 as $i130)
                @if ($i130->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/130/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi130 as $i130)
                    @if ($i130->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/130/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal131" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi131 as $i131)
                    @if ($i131->booked == $i131->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/131/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/131/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi131 as $i131)
                @if ($i131->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/131/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi131 as $i131)
                    @if ($i131->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/131/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal132" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi132 as $i132)
                    @if ($i132->booked == $i132->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/132/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/132/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi132 as $i132)
                @if ($i132->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/132/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi132 as $i132)
                    @if ($i132->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/132/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal133" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi133 as $i133)
                    @if ($i133->booked == $i133->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/133/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/133/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi133 as $i133)
                @if ($i133->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/133/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi133 as $i133)
                    @if ($i133->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/133/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal134" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi134 as $i134)
                    @if ($i134->booked == $i134->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/134/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/134/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi134 as $i134)
                @if ($i134->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/134/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi134 as $i134)
                    @if ($i134->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/134/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal135" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi135 as $i135)
                    @if ($i135->booked == $i135->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/135/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/135/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi135 as $i135)
                @if ($i135->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/135/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi135 as $i135)
                    @if ($i135->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/135/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal136" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi136 as $i136)
                    @if ($i136->booked == $i136->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/136/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/136/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi136 as $i136)
                @if ($i136->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/136/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi136 as $i136)
                    @if ($i136->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/136/lantai3obg') }}" class="btn btn-outline-primary btn-lg btn-block" >
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

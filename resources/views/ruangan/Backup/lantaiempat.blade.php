@extends('_master')

@section('title-content')
    Lantai 4 (Penyakit Dalam Wanita)
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
            @foreach ($kamar154 as $k154)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal154">
                @if ($k154->hasil > 0)
                    <div id="icu1" class="card bg-info">
                    <div class="card-header text-white">KEMUNING 401</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">KEMUNING 401</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi154 as $i154)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i154->kapasitas }}</h5>
                                
                                @if ($i154->kapasitas == 1)
                                    @if ($i154->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i154->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i154->booked }} dari {{ $i154->kapasitas }}</p>
                                        
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
            @foreach ($kamar155 as $k155)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal155">
                @if ($k155->hasil > 0)
                    <div id="icu1" class="card bg-info">
                    <div class="card-header text-white">ALAMANDA 105</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">ALAMANDA 105</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi155 as $i155)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i155->kapasitas }}</h5>
                                
                                @if ($i155->kapasitas == 1)
                                    @if ($i155->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i155->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i155->booked }} dari {{ $i155->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar156 as $k156)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal156">
                @if ($k156->hasil > 0)
                    <div id="icu1" class="card bg-info">
                    <div class="card-header text-white">ALAMANDA 103</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">ALAMANDA 103</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi156 as $i156)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i156->kapasitas }}</h5>
                                
                                @if ($i156->kapasitas == 1)
                                    @if ($i156->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i156->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i156->booked }} dari {{ $i156->kapasitas }}</p>
                                        
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
            @foreach ($kamar157 as $k157)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal157">
                @if ($k157->hasil > 0)
                    <div id="icu1" class="card bg-info">
                    <div class="card-header text-white">ALAMANDA 402</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">ALAMANDA 402</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi157 as $i157)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i157->kapasitas }}</h5>
                                
                                @if ($i157->kapasitas == 1)
                                    @if ($i157->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i157->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i157->booked }} dari {{ $i157->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar158 as $k158)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal158">
                @if ($k158->hasil > 0)
                    <div id="icu1" class="card bg-info">
                    <div class="card-header text-white">ALAMANDA 404</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">ALAMANDA 404</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi158 as $i158)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i158->kapasitas }}</h5>
                                
                                @if ($i158->kapasitas == 1)
                                    @if ($i158->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i158->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i158->booked }} dari {{ $i158->kapasitas }}</p>
                                        
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
            @foreach ($kamar159 as $k159)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal159">
                @if ($k159->hasil > 0)
                    <div id="icu1" class="card bg-info">
                    <div class="card-header text-white">AZALEA 407-1</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AZALEA 407-1</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi159 as $i159)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i159->kapasitas }}</h5>
                                
                                @if ($i159->kapasitas == 1)
                                    @if ($i159->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i159->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i159->booked }} dari {{ $i159->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar160 as $k160)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal160">
                @if ($k160->hasil > 0)
                    <div id="icu1" class="card bg-info">
                    <div class="card-header text-white">AZALEA 407-2</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AZALEA 407-2</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi160 as $i160)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i160->kapasitas }}</h5>
                                
                                @if ($i160->kapasitas == 1)
                                    @if ($i160->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i160->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i160->booked }} dari {{ $i160->kapasitas }}</p>
                                        
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
            @foreach ($kamar161 as $k161)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal161">
                @if ($k161->hasil > 0)
                    <div id="icu1" class="card bg-info">
                    <div class="card-header text-white">AZALEA 406-1</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AZALEA 406-1</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi161 as $i161)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i161->kapasitas }}</h5>
                                
                                @if ($i161->kapasitas == 1)
                                    @if ($i161->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i161->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i161->booked }} dari {{ $i161->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar162 as $k162)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal162">
                @if ($k162->hasil > 0)
                    <div id="icu1" class="card bg-info">
                    <div class="card-header text-white">AZALEA 406-2</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AZALEA 406-2</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi162 as $i162)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i162->kapasitas }}</h5>
                                
                                @if ($i162->kapasitas == 1)
                                    @if ($i162->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i162->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i162->booked }} dari {{ $i162->kapasitas }}</p>
                                        
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
            @foreach ($kamar163 as $k163)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal163">
                @if ($k163->hasil > 0)
                    <div id="icu1" class="card bg-info">
                    <div class="card-header text-white">AZALEA 409-1</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AZALEA 409-1</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi163 as $i163)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i163->kapasitas }}</h5>
                                
                                @if ($i163->kapasitas == 1)
                                    @if ($i163->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i163->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i163->booked }} dari {{ $i163->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar164 as $k164)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal164">
                @if ($k164->hasil > 0)
                    <div id="icu1" class="card bg-info">
                    <div class="card-header text-white">AZALEA 409-2</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AZALEA 409-2</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi164 as $i164)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i164->kapasitas }}</h5>
                                
                                @if ($i164->kapasitas == 1)
                                    @if ($i164->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i164->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i164->booked }} dari {{ $i164->kapasitas }}</p>
                                        
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
            @foreach ($kamar165 as $k165)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal165">
                @if ($k165->hasil > 0)
                    <div id="icu1" class="card bg-info">
                    <div class="card-header text-white">AZALEA 408-1</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AZALEA 408-1</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi165 as $i165)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i165->kapasitas }}</h5>
                                
                                @if ($i165->kapasitas == 1)
                                    @if ($i165->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i165->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i165->booked }} dari {{ $i165->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar166 as $k166)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal166">
                @if ($k166->hasil > 0)
                    <div id="icu1" class="card bg-info">
                    <div class="card-header text-white">AZALEA 408-2</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AZALEA 408-2</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi166 as $i166)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i166->kapasitas }}</h5>
                                
                                @if ($i166->kapasitas == 1)
                                    @if ($i166->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i166->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i166->booked }} dari {{ $i166->kapasitas }}</p>
                                        
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
                    @foreach ($kamar167 as $k167)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal167">
                        @if ($k167->hasil > 0)
                            <div id="icu1" class="card bg-info">
                            <div class="card-header text-white">SERUNI 411-1</div>
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">SERUNI 411-1</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi167 as $i167)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i167->kapasitas }}</h5>
                                        
                                        @if ($i167->kapasitas == 1)
                                            @if ($i167->booked == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <p class="card-text text-white">Ruangan Penuh</p>
                                                
                                            @endif
                                        @else
                                            @if ($i167->booked == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                                
                                            @else
                                                <p class="card-text text-white">Terisi {{ $i167->booked }} dari {{ $i167->kapasitas }}</p>
                                                
                                            @endif
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            </a>
                    @endforeach
                        </div>
                
                        <div class="col-lg-2 mb-30">
                    @foreach ($kamar168 as $k168)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal168">
                        @if ($k168->hasil > 0)
                            <div id="icu1" class="card bg-info">
                            <div class="card-header text-white">SERUNI 411-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">SERUNI 411-2</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi168 as $i168)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i168->kapasitas }}</h5>
                                        
                                        @if ($i168->kapasitas == 1)
                                            @if ($i168->booked == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <p class="card-text text-white">Ruangan Penuh</p>
                                                
                                            @endif
                                        @else
                                            @if ($i168->booked == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                                
                                            @else
                                                <p class="card-text text-white">Terisi {{ $i168->booked }} dari {{ $i168->kapasitas }}</p>
                                                
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
            @foreach ($kamar169 as $k169)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal169">
                @if ($k169->hasil > 0)
                    <div id="icu1" class="card bg-info">
                    <div class="card-header text-white">TANJUNG 410-1</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">TANJUNG 410-1</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi169 as $i169)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i169->kapasitas }}</h5>
                                
                                @if ($i169->kapasitas == 1)
                                    @if ($i169->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i169->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i169->booked }} dari {{ $i169->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar170 as $k170)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal170">
                @if ($k170->hasil > 0)
                    <div id="icu1" class="card bg-info">
                    <div class="card-header text-white">TANJUNG 410-2</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">TANJUNG 410-2</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi170 as $i170)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i170->kapasitas }}</h5>
                                
                                @if ($i170->kapasitas == 1)
                                    @if ($i170->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i170->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i170->booked }} dari {{ $i170->kapasitas }}</p>
                                        
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
            @foreach ($kamar171 as $k171)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal171">
                @if ($k171->hasil > 0)
                    <div id="icu1" class="card bg-info">
                    <div class="card-header text-white">SERUNI 411-3</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 411-3</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi171 as $i171)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i171->kapasitas }}</h5>
                                
                                @if ($i171->kapasitas == 1)
                                    @if ($i171->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i171->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i171->booked }} dari {{ $i171->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar172 as $k172)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal172">
                @if ($k172->hasil > 0)
                    <div id="icu1" class="card bg-info">
                    <div class="card-header text-white">SERUNI 411-4</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 411-4</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi172 as $i172)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i172->kapasitas }}</h5>
                                
                                @if ($i172->kapasitas == 1)
                                    @if ($i172->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i172->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i172->booked }} dari {{ $i172->kapasitas }}</p>
                                        
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
            @foreach ($kamar173 as $k173)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal173">
                @if ($k173->hasil > 0)
                    <div id="icu1" class="card bg-info">
                    <div class="card-header text-white">TANJUNG 410-3</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">TANJUNG 410-3</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi173 as $i173)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i173->kapasitas }}</h5>
                                
                                @if ($i173->kapasitas == 1)
                                    @if ($i173->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i173->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i173->booked }} dari {{ $i173->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar174 as $k174)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal174">
                @if ($k174->hasil > 0)
                    <div id="icu1" class="card bg-info">
                    <div class="card-header text-white">TANJUNG 410-4</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">TANJUNG 410-4</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi174 as $i174)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i174->kapasitas }}</h5>
                                
                                @if ($i174->kapasitas == 1)
                                    @if ($i174->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i174->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i174->booked }} dari {{ $i174->kapasitas }}</p>
                                        
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
<div class="modal fade" id="ChoiceModal154" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi154 as $i154)
                    @if ($i154->booked == $i154->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/154/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/154/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi154 as $i154)
                @if ($i154->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/154/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi154 as $i154)
                    @if ($i154->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/154/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal155" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi155 as $i155)
                    @if ($i155->booked == $i155->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/155/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/155/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi155 as $i155)
                @if ($i155->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/155/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi155 as $i155)
                    @if ($i155->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/155/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal156" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi156 as $i156)
                    @if ($i156->booked == $i156->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/156/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/156/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi156 as $i156)
                @if ($i156->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/156/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi156 as $i156)
                    @if ($i156->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/156/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal157" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi157 as $i157)
                    @if ($i157->booked == $i157->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/157/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/157/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi157 as $i157)
                @if ($i157->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/157/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi157 as $i157)
                    @if ($i157->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/157/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal158" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi158 as $i158)
                    @if ($i158->booked == $i158->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/158/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/158/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi158 as $i158)
                @if ($i158->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/158/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi158 as $i158)
                    @if ($i158->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/158/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal159" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi159 as $i159)
                    @if ($i159->booked == $i159->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/159/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/159/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi159 as $i159)
                @if ($i159->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/159/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi159 as $i159)
                    @if ($i159->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/159/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal160" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi160 as $i160)
                    @if ($i160->booked == $i160->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/160/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/160/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi160 as $i160)
                @if ($i160->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/160/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi160 as $i160)
                    @if ($i160->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/160/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal161" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi161 as $i161)
                    @if ($i161->booked == $i161->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/161/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/161/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi161 as $i161)
                @if ($i161->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/161/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi161 as $i161)
                    @if ($i161->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/161/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal162" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi162 as $i162)
                    @if ($i162->booked == $i162->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/162/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/162/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi162 as $i162)
                @if ($i162->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/162/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi162 as $i162)
                    @if ($i162->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/162/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal163" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi163 as $i163)
                    @if ($i163->booked == $i163->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/163/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/163/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi163 as $i163)
                @if ($i163->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/163/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi163 as $i163)
                    @if ($i163->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/163/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal164" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi164 as $i164)
                    @if ($i164->booked == $i164->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/164/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/164/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi164 as $i164)
                @if ($i164->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/164/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi164 as $i164)
                    @if ($i164->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/164/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal165" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi165 as $i165)
                    @if ($i165->booked == $i165->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/165/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/165/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi165 as $i165)
                @if ($i165->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/165/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi165 as $i165)
                    @if ($i165->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/165/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal166" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi166 as $i166)
                    @if ($i166->booked == $i166->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/166/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/166/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi166 as $i166)
                @if ($i166->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/166/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi166 as $i166)
                    @if ($i166->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/166/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal167" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi167 as $i167)
                    @if ($i167->booked == $i167->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/167/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/167/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi167 as $i167)
                @if ($i167->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/167/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi167 as $i167)
                    @if ($i167->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/167/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal168" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi168 as $i168)
                    @if ($i168->booked == $i168->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/168/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/168/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi168 as $i168)
                @if ($i168->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/168/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi168 as $i168)
                    @if ($i168->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/168/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal169" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi169 as $i169)
                    @if ($i169->booked == $i169->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/169/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/169/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi169 as $i169)
                @if ($i169->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/169/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi169 as $i169)
                    @if ($i169->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/169/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal170" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi170 as $i170)
                    @if ($i170->booked == $i170->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/170/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/170/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi170 as $i170)
                @if ($i170->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/170/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi170 as $i170)
                    @if ($i170->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/170/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal171" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi171 as $i171)
                    @if ($i171->booked == $i171->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/171/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/171/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi171 as $i171)
                @if ($i171->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/171/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi171 as $i171)
                    @if ($i171->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/171/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal172" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi172 as $i172)
                    @if ($i172->booked == $i172->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/172/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/172/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi172 as $i172)
                @if ($i172->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/172/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi172 as $i172)
                    @if ($i172->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/172/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal173" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi173 as $i173)
                    @if ($i173->booked == $i173->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/173/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/173/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi173 as $i173)
                @if ($i173->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/173/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi173 as $i173)
                    @if ($i173->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/173/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal174" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi174 as $i174)
                    @if ($i174->booked == $i174->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/174/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/174/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi174 as $i174)
                @if ($i174->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/174/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi174 as $i174)
                    @if ($i174->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/174/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" >
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

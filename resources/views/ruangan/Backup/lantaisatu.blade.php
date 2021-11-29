@extends('_master')

@section('title-content')
    Lantai 1 (Penyakit Dalam Pria)
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
            @foreach ($kamar63 as $k63)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal63">
                @if ($k63->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">KEMUNING 101</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">KEMUNING 101</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi63 as $i63)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i63->kapasitas }}</h5>
                                
                                @if ($i63->kapasitas == 1)
                                    @if ($i63->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i63->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i63->booked }} dari {{ $i63->kapasitas }}</p>
                                        
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
            @foreach ($kamar64 as $k64)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal64">
                @if ($k64->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">ALAMANDA 105</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">ALAMANDA 105</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi64 as $i64)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i64->kapasitas }}</h5>
                                
                                @if ($i64->kapasitas == 1)
                                    @if ($i64->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i64->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i64->booked }} dari {{ $i64->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar65 as $k65)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal65">
                @if ($k65->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">ALAMANDA 103</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">ALAMANDA 103</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi65 as $i65)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i65->kapasitas }}</h5>
                                
                                @if ($i65->kapasitas == 1)
                                    @if ($i65->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i65->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i65->booked }} dari {{ $i65->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-1">

                </div>
                <div class="col-lg-2 mb-30">
            @foreach ($kamar66 as $k66)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal66">
                @if ($k66->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">ALAMANDA 102</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">ALAMANDA 102</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi66 as $i66)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i66->kapasitas }}</h5>
                                
                                @if ($i66->kapasitas == 1)
                                    @if ($i66->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i66->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i66->booked }} dari {{ $i66->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-1">

                </div>
                <div class="col-lg-2 mb-30">
            @foreach ($kamar67 as $k67)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal67">
                @if ($k67->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">AZALEA 104-1</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AZALEA 104-1</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi67 as $i67)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i67->kapasitas }}</h5>
                                
                                @if ($i67->kapasitas == 1)
                                    @if ($i67->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i67->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i67->booked }} dari {{ $i67->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
               
                <div class="col-lg-2 mb-30">
            @foreach ($kamar68 as $k68)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal68">
                @if ($k68->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">AZALEA 104-2</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AZALEA 104-2</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi68 as $i68)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i68->kapasitas }}</h5>
                                
                                @if ($i68->kapasitas == 1)
                                    @if ($i68->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i68->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i68->booked }} dari {{ $i68->kapasitas }}</p>
                                        
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
            @foreach ($kamar69 as $k69)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal69">
                @if ($k69->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">AZALEA 107-1</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AZALEA 107-1</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi69 as $i69)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i69->kapasitas }}</h5>
                                
                                @if ($i69->kapasitas == 1)
                                    @if ($i69->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i69->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i69->booked }} dari {{ $i69->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar70 as $k70)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal70">
                @if ($k70->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">AZALEA 107-2</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AZALEA 107-2</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi70 as $i70)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i70->kapasitas }}</h5>
                                
                                @if ($i70->kapasitas == 1)
                                    @if ($i70->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i70->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i70->booked }} dari {{ $i70->kapasitas }}</p>
                                        
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
            @foreach ($kamar71 as $k71)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal71">
                @if ($k71->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">AZALEA 106-1</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AZALEA 106-1</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi71 as $i71)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i71->kapasitas }}</h5>
                                
                                @if ($i71->kapasitas == 1)
                                    @if ($i71->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i71->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i71->booked }} dari {{ $i71->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar72 as $k72)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal72">
                @if ($k72->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">AZALEA 106-2</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AZALEA 106-2</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi72 as $i72)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i72->kapasitas }}</h5>
                                
                                @if ($i72->kapasitas == 1)
                                    @if ($i72->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i72->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i72->booked }} dari {{ $i72->kapasitas }}</p>
                                        
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
            @foreach ($kamar73 as $k73)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal73">
                @if ($k73->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">AZALEA 109-1</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AZALEA 109-1</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi73 as $i73)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i73->kapasitas }}</h5>
                                
                                @if ($i73->kapasitas == 1)
                                    @if ($i73->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i73->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i73->booked }} dari {{ $i73->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                        </div>
                        </a>
                @endforeach
                    </div>
                
                    <div class="col-lg-2 mb-30">
                @foreach ($kamar74 as $k74)
                        <a href="#" data-toggle="modal" data-target="#ChoiceModal74">
                    @if ($k74->hasil > 0)
                        <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">AZALEA 109-2</div>
                    @else
                        <div id="icu1" class="card bg-light">
                        <div class="card-header ">AZALEA 109-2</div>
                    @endif
                            
                            <div class="card-body">
                                @foreach ($isi74 as $i74)
                                    <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i74->kapasitas }}</h5>
                                    
                                    @if ($i74->kapasitas == 1)
                                        @if ($i74->booked == 0)
                                            <p class="card-text">Ruangan Tersedia</p>
                                        @else
                                            <p class="card-text text-white">Ruangan Penuh</p>
                                            
                                        @endif
                                    @else
                                        @if ($i74->booked == 0)
                                            <p class="card-text">Ruangan Tersedia</p>
                                            
                                        @else
                                            <p class="card-text text-white">Terisi {{ $i74->booked }} dari {{ $i74->kapasitas }}</p>
                                            
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
            @foreach ($kamar75 as $k75)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal75">
                @if ($k75->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">AZALEA 108-1</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AZALEA 108-1</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi75 as $i75)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i75->kapasitas }}</h5>
                                
                                @if ($i75->kapasitas == 1)
                                    @if ($i75->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i75->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i75->booked }} dari {{ $i75->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>

                <div class="col-lg-2 mb-30">
            @foreach ($kamar76 as $k76)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal76">
                @if ($k76->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">AZALEA 108-2</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AZALEA 108-2</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi76 as $i76)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i76->kapasitas }}</h5>
                                
                                @if ($i76->kapasitas == 1)
                                    @if ($i76->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i76->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i76->booked }} dari {{ $i76->kapasitas }}</p>
                                        
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
            @foreach ($kamar77 as $k77)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal77">
                @if ($k77->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">SERUNI 111-1</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 111-1</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi77 as $i77)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i77->kapasitas }}</h5>
                                
                                @if ($i77->kapasitas == 1)
                                    @if ($i77->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i77->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i77->booked }} dari {{ $i77->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar78 as $k78)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal78">
                @if ($k78->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">SERUNI 111-2</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 111-2</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi78 as $i78)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i78->kapasitas }}</h5>
                                
                                @if ($i78->kapasitas == 1)
                                    @if ($i78->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i78->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i78->booked }} dari {{ $i78->kapasitas }}</p>
                                        
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
            @foreach ($kamar79 as $k79)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal79">
                @if ($k79->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">TANJUNG 110-1</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">TANJUNG 110-1</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi79 as $i79)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i79->kapasitas }}</h5>
                                
                                @if ($i79->kapasitas == 1)
                                    @if ($i79->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i79->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i79->booked }} dari {{ $i79->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar80 as $k80)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal80">
                @if ($k80->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">TANJUNG 110-2</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">TANJUNG 110-2</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi80 as $i80)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i80->kapasitas }}</h5>
                                
                                @if ($i80->kapasitas == 1)
                                    @if ($i80->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i80->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i80->booked }} dari {{ $i80->kapasitas }}</p>
                                        
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
            @foreach ($kamar81 as $k81)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal81">
                @if ($k81->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">SERUNI 111-3</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 111-3</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi81 as $i81)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i81->kapasitas }}</h5>
                                
                                @if ($i81->kapasitas == 1)
                                    @if ($i81->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i81->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i81->booked }} dari {{ $i81->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar82 as $k82)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal82">
                @if ($k82->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">SERUNI 111-4</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 111-4</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi82 as $i82)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i82->kapasitas }}</h5>
                                
                                @if ($i82->kapasitas == 1)
                                    @if ($i82->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i82->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i82->booked }} dari {{ $i82->kapasitas }}</p>
                                        
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
            @foreach ($kamar83 as $k83)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal83">
                @if ($k83->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">TANJUNG 110-3</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">TANJUNG 110-3</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi83 as $i83)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i83->kapasitas }}</h5>
                                
                                @if ($i83->kapasitas == 1)
                                    @if ($i83->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i83->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i83->booked }} dari {{ $i83->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar84 as $k84)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal84">
                @if ($k84->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">TANJUNG 110</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">TANJUNG 110</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi84 as $i84)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i84->kapasitas }}</h5>
                                
                                @if ($i84->kapasitas == 1)
                                    @if ($i84->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i84->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i84->booked }} dari {{ $i84->kapasitas }}</p>
                                        
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
<div class="modal fade" id="ChoiceModal63" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi63 as $i63)
                        @if ($i63->booked == $i63->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/63/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi63 as $i63)
                    @if ($i63->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/63/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                    @foreach ($isi63 as $i63)
                        @if ($i63->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/63/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal64" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi64 as $i64)
                        @if ($i64->booked == $i64->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/64/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi64 as $i64)
                    @if ($i64->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/64/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                    @endforeach
                    @foreach ($isi64 as $i64)
                        @if ($i64->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/64/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal65" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi65 as $i65)
                        @if ($i65->booked == $i65->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/65/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi65 as $i65)
                    @if ($i65->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/65/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                    @endforeach
                    @foreach ($isi65 as $i65)
                        @if ($i65->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/65/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal66" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi66 as $i66)
                        @if ($i66->booked == $i66->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/66/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi66 as $i66)
                    @if ($i66->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/66/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                    @endforeach
                    @foreach ($isi66 as $i66)
                        @if ($i66->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/66/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal67" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi67 as $i67)
                        @if ($i67->booked == $i67->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/67/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi67 as $i67)
                    @if ($i67->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/67/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                    @endforeach
                    @foreach ($isi67 as $i67)
                        @if ($i67->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/67/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal68" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi68 as $i68)
                        @if ($i68->booked == $i68->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/68/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi68 as $i68)
                    @if ($i68->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/68/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                    @endforeach
                    @foreach ($isi68 as $i68)
                        @if ($i68->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/68/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal69" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi69 as $i69)
                        @if ($i69->booked == $i69->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/69/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi69 as $i69)
                    @if ($i69->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/69/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                    @endforeach
                    @foreach ($isi69 as $i69)
                        @if ($i69->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/69/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal70" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi70 as $i70)
                        @if ($i70->booked == $i70->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/70/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi70 as $i70)
                    @if ($i70->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/70/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                    @endforeach
                    @foreach ($isi70 as $i70)
                        @if ($i70->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/70/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal71" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi71 as $i71)
                        @if ($i71->booked == $i71->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/71/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi71 as $i71)
                    @if ($i71->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/71/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                    @endforeach
                    @foreach ($isi71 as $i71)
                        @if ($i71->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/71/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal72" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi72 as $i72)
                        @if ($i72->booked == $i72->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/72/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi72 as $i72)
                    @if ($i72->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/72/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                    @endforeach
                    @foreach ($isi72 as $i72)
                        @if ($i72->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/72/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal73" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi73 as $i73)
                        @if ($i73->booked == $i73->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/73/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi73 as $i73)
                    @if ($i73->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/73/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                    @endforeach
                    @foreach ($isi73 as $i73)
                        @if ($i73->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/73/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal74" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi74 as $i74)
                        @if ($i74->booked == $i74->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/74/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi74 as $i74)
                    @if ($i74->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/74/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                    @endforeach
                    @foreach ($isi74 as $i74)
                        @if ($i74->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/74/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal75" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi75 as $i75)
                        @if ($i75->booked == $i75->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/75/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi75 as $i75)
                    @if ($i75->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/75/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                    @endforeach
                    @foreach ($isi75 as $i75)
                        @if ($i75->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/75/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal76" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi76 as $i76)
                        @if ($i76->booked == $i76->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/76/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi76 as $i76)
                    @if ($i76->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/76/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                    @endforeach
                    @foreach ($isi76 as $i76)
                        @if ($i76->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/76/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal77" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi77 as $i77)
                        @if ($i77->booked == $i77->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/77/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi77 as $i77)
                    @if ($i77->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/77/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                    @endforeach
                    @foreach ($isi77 as $i77)
                        @if ($i77->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/77/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal78" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi78 as $i78)
                        @if ($i78->booked == $i78->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/78/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi78 as $i78)
                    @if ($i78->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/78/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                    @endforeach
                    @foreach ($isi78 as $i78)
                        @if ($i78->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/78/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal79" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi79 as $i79)
                        @if ($i79->booked == $i79->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/79/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi79 as $i79)
                    @if ($i79->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/79/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                    @endforeach
                    @foreach ($isi79 as $i79)
                        @if ($i79->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/7/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal80" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi80 as $i80)
                        @if ($i80->booked == $i80->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/80/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi80 as $i80)
                    @if ($i80->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/80/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                    @endforeach
                    @foreach ($isi80 as $i80)
                        @if ($i80->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/80/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal81" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi81 as $i81)
                        @if ($i81->booked == $i81->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/81/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi81 as $i81)
                    @if ($i81->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/81/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                    @endforeach
                    @foreach ($isi81 as $i81)
                        @if ($i81->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/81/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal82" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi82 as $i82)
                        @if ($i82->booked == $i82->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/82/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi82 as $i82)
                    @if ($i82->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/82/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                    @endforeach
                    @foreach ($isi82 as $i82)
                        @if ($i82->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/82/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal83" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi83 as $i83)
                        @if ($i83->booked == $i83->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/83/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi83 as $i83)
                    @if ($i83->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/83/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                    @endforeach
                    @foreach ($isi83 as $i83)
                        @if ($i83->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/83/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal84" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi84 as $i84)
                        @if ($i84->booked == $i84->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/84/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi84 as $i84)
                    @if ($i84->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/84/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                    @endforeach
                    @foreach ($isi84 as $i84)
                        @if ($i84->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/84/lantai1pdp') }}" class="btn btn-outline-primary btn-lg btn-block" >
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

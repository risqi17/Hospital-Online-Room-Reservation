@extends('_master')

@section('title-content')
    Paviliun 1
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
            @foreach ($kamar7 as $k7)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal7">
                @if ($k7->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">CENDANA 101</div>
                @elseif ($bk7 > 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">CENDANA 101</div>
               
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">CENDANA 101</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi7 as $i7)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i7->kapasitas }}</h5>
                                
                                @if ($i7->kapasitas == 1)
                                    @if ($i7->booked == 0 && $i7->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn7 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i7->booked == 0 && $i7->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn7 as $p)
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
            @foreach ($kamar8 as $k8)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal8">
                @if ($k8->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">JATI EMAS 102</div> 
                @elseif ($bk8 > 0)
                    <div id="icu1" class="card bg-warning">
                    <div class="card-header text-white">JATI EMAS 102</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">JATI EMAS 102</div> 
                @endif
                    
                        <div class="card-body">
                            @foreach ($isi8 as $i8)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i8->kapasitas }}</h5>   
                            
                                @if ($i8->kapasitas == 1)
                                    @if ($i8->booked == 0 && $i8->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn8 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i8->booked == 0 && $i8->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn8 as $p)
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
            @foreach ($kamar9 as $k9)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal9">
                @if ($k9->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">JATI EMAS 103</div> 
                @elseif ($bk9 > 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">JATI EMAS 103</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">JATI EMAS 103</div> 
                @endif
                        <div class="card-body">
                            @foreach ($isi9 as $i9)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i>{{ $i9->kapasitas }}</h5>
                                
                                @if ($i9->kapasitas == 1)
                                    @if ($i9->booked == 0 && $i9->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn9 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i9->booked == 0 && $i9->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn9 as $p)
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
                    @foreach ($kamar10 as $k10)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal10">
                        @if ($k10->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">JATI EMAS 104</div>
                        @elseif ($bk10 > 0)
                            <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">JATI EMAS 104</div>
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">JATI EMAS 104</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi10 as $i10)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i10->kapasitas }}</h5>
                                        
                                        @if ($i10->kapasitas == 1)
                                            @if ($i10->booked == 0 && $i10->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <ul>
                                                    @foreach ($pn10 as $p)
                                                        <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @else
                                            @if ($i10->booked == 0 && $i10->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                            <ul>
                                                @foreach ($pn10 as $p)
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
                    @foreach ($kamar11 as $k11)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal11">
                        @if ($k11->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">JATI EMAS 105</div>
                        @elseif ($bk11 > 0)
                            <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">JATI EMAS 105</div>
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">JATI EMAS 105</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi11 as $i11)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i11->kapasitas }}</h5>
                                        
                                        @if ($i11->kapasitas == 1)
                                            @if ($i11->booked == 0 && $i11->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <ul>
                                                    @foreach ($pn11 as $p)
                                                        <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @else
                                            @if ($i11->booked == 0 && $i11->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                            <ul>
                                                @foreach ($pn11 as $p)
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
                    @foreach ($kamar12 as $k12)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal12">
                        @if ($k12->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">JATI EMAS 106</div>
                        @elseif ($bk12 > 0)
                            <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">JATI EMAS 106</div>
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">JATI EMAS 106</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi12 as $i12)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i12->kapasitas }}</h5>
                                        
                                        @if ($i12->kapasitas == 1)
                                            @if ($i12->booked == 0 && $i12->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <ul>
                                                    @foreach ($pn12 as $p)
                                                        <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @else
                                            @if ($i12->booked == 0 && $i12->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                            <ul>
                                                @foreach ($pn12 as $p)
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
                    @foreach ($kamar13 as $k13)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal13">
                        @if ($k13->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">JATI EMAS 107</div>
                        @elseif ($bk13 > 0)
                            <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">JATI EMAS 107</div>
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">JATI EMAS 107</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi13 as $i13)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i13->kapasitas }}</h5>
                                        
                                        @if ($i13->kapasitas == 1)
                                            @if ($i13->booked == 0 && $i13->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <ul>
                                                    @foreach ($pn13 as $p)
                                                        <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @else
                                            @if ($i13->booked == 0 && $i13->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                            <ul>
                                                @foreach ($pn13 as $p)
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

                <div class="col-lg-1">

                </div>
       

                <div class="col-lg-2 mb-30">
                    @foreach ($kamar14 as $k14)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal14">
                        @if ($k14->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">FLAMBOYAN 108</div>
                        @elseif ($bk14 > 0)
                            <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">FLAMBOYAN 108</div>
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">FLAMBOYAN 108</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi14 as $i14)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i14->kapasitas }}</h5>
                                        
                                        @if ($i14->kapasitas == 1)
                                            @if ($i14->booked == 0 && $i14->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <ul>
                                                    @foreach ($pn14 as $p)
                                                        <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @else
                                            @if ($i14->booked == 0 && $i14->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                            <ul>
                                                @foreach ($pn14 as $p)
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
                    @foreach ($kamar15 as $k15)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal15">
                        @if ($k15->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">FLAMBOYAN 109</div>
                        @elseif ($bk15 > 0)
                            <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">FLAMBOYAN 109</div>
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">FLAMBOYAN 109</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi15 as $i15)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i15->kapasitas }}</h5>
                                        
                                        @if ($i15->kapasitas == 1)
                                            @if ($i15->booked == 0 && $i15->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <ul>
                                                    @foreach ($pn15 as $p)
                                                        <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @else
                                            @if ($i15->booked == 0 && $i15->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                            <ul>
                                                @foreach ($pn15 as $p)
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
                    @foreach ($kamar16 as $k16)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal16">
                        @if ($k16->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">FLAMBOYAN 110</div>
                        @elseif ($bk16 > 0)
                            <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">FLAMBOYAN 110</div>
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">FLAMBOYAN 110</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi16 as $i16)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i16->kapasitas }}</h5>
                                        
                                        @if ($i16->kapasitas == 1)
                                            @if ($i16->booked == 0 && $i16->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <ul>
                                                    @foreach ($pn16 as $p)
                                                        <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @else
                                            @if ($i16->booked == 0 && $i16->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                            <ul>
                                                @foreach ($pn16 as $p)
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
                    @foreach ($kamar17 as $k17)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal17">
                        @if ($k17->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">FLAMBOYAN 111</div>
                        @elseif ($bk17 > 0)
                            <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">FLAMBOYAN 111</div>
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">FLAMBOYAN 111</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi17 as $i17)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i17->kapasitas }}</h5>
                                        
                                        @if ($i17->kapasitas == 1)
                                            @if ($i17->booked == 0 && $i17->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <ul>
                                                    @foreach ($pn17 as $p)
                                                        <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @else
                                            @if ($i17->booked == 0 && $i17->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                            <ul>
                                                @foreach ($pn17 as $p)
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
                    @foreach ($kamar18 as $k18)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal18">
                        @if ($k18->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">FLAMBOYAN 112</div>
                        @elseif ($bk18 > 0)
                            <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">FLAMBOYAN 112</div>
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">FLAMBOYAN 112</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi18 as $i18)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i18->kapasitas }}</h5>
                                        
                                        @if ($i18->kapasitas == 1)
                                            @if ($i18->booked == 0 && $i18->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <ul>
                                                    @foreach ($pn18 as $p)
                                                        <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @else
                                            @if ($i18->booked == 0 && $i18->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                            <ul>
                                                @foreach ($pn18 as $p)
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
                <div class="col-lg-2">

                </div>
         

                <div class="col-lg-2 mb-30">
                    @foreach ($kamar19 as $k19)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal19">
                        @if ($k19->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">FLAMBOYAN 113</div>
                        @elseif ($bk19 > 0)
                            <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">FLAMBOYAN 113</div>
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">FLAMBOYAN 113</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi19 as $i19)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i19->kapasitas }}</h5>
                                        
                                        @if ($i19->kapasitas == 1)
                                            @if ($i19->booked == 0 && $i19->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <ul>
                                                    @foreach ($pn19 as $p)
                                                        <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @else
                                            @if ($i19->booked == 0 && $i19->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                            <ul>
                                                @foreach ($pn19 as $p)
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
                    @foreach ($kamar20 as $k20)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal20">
                        @if ($k20->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">FLAMBOYAN 114</div>
                        @elseif ($bk20 > 0)
                            <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">FLAMBOYAN 114</div>
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">FLAMBOYAN 114</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi20 as $i20)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i20->kapasitas }}</h5>
                                        
                                        @if ($i20->kapasitas == 1)
                                            @if ($i20->booked == 0 && $i20->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <ul>
                                                    @foreach ($pn20 as $p)
                                                        <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @else
                                            @if ($i20->booked == 0 && $i20->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                            <ul>
                                                @foreach ($pn20 as $p)
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
                    @foreach ($kamar21 as $k21)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal21">
                        @if ($k21->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">FLAMBOYAN 115</div>
                        @elseif ($bk21 > 0)
                            <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">FLAMBOYAN 115</div>
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">FLAMBOYAN 115</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi21 as $i21)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i21->kapasitas }}</h5>
                                        
                                        @if ($i21->kapasitas == 1)
                                            @if ($i21->booked == 0 && $i21->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <ul>
                                                    @foreach ($pn21 as $p)
                                                        <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @else
                                            @if ($i21->booked == 0 && $i21->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                            <ul>
                                                @foreach ($pn21 as $p)
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
                    @foreach ($kamar22 as $k22)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal22">
                        @if ($k22->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">FLAMBOYAN 116</div>
                        @elseif ($bk22 > 0)
                            <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">FLAMBOYAN 116</div>
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">FLAMBOYAN 116</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi22 as $i22)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i22->kapasitas }}</h5>
                                        
                                        @if ($i22->kapasitas == 1)
                                            @if ($i22->booked == 0 && $i22->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <ul>
                                                    @foreach ($pn22 as $p)
                                                        <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @else
                                            @if ($i22->booked == 0 && $i22->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                            <ul>
                                                @foreach ($pn22 as $p)
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
                <div class="col-lg-2">

                </div>
               

                <div class="col-lg-2 mb-30">
                    @foreach ($kamar23 as $k23)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal23">
                        @if ($k23->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">FLAMBOYAN 117</div>
                        @elseif ($bk23 > 0)
                            <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">FLAMBOYAN 117</div>
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">FLAMBOYAN 117</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi23 as $i23)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i23->kapasitas }}</h5>
                                        
                                        @if ($i23->kapasitas == 1)
                                            @if ($i23->booked == 0 && $i23->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <ul>
                                                    @foreach ($pn23 as $p)
                                                        <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @else
                                            @if ($i23->booked == 0 && $i23->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                            <ul>
                                                @foreach ($pn23 as $p)
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
                    @foreach ($kamar24 as $k24)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal24">
                        @if ($k24->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">FLAMBOYAN 118</div>
                        @elseif ($bk24 > 0)
                            <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">FLAMBOYAN 118</div>
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">FLAMBOYAN 118</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi24 as $i24)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i24->kapasitas }}</h5>
                                        
                                        @if ($i24->kapasitas == 1)
                                            @if ($i24->booked == 0 && $i24->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <ul>
                                                    @foreach ($pn24 as $p)
                                                        <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @else
                                            @if ($i24->booked == 0 && $i24->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                            <ul>
                                                @foreach ($pn24 as $p)
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
                    @foreach ($kamar25 as $k25)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal25">
                        @if ($k25->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">FLAMBOYAN 119</div>
                        @elseif ($bk25 > 0)
                            <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">FLAMBOYAN 119</div>
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">FLAMBOYAN 119</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi25 as $i25)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i25->kapasitas }}</h5>
                                        
                                        @if ($i25->kapasitas == 1)
                                            @if ($i25->booked == 0 && $i25->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <ul>
                                                    @foreach ($pn25 as $p)
                                                        <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @else
                                            @if ($i25->booked == 0 && $i25->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                            <ul>
                                                @foreach ($pn25 as $p)
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
                    @foreach ($kamar26 as $k26)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal26">
                        @if ($k26->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">FLAMBOYAN 120</div>
                        @elseif ($bk26 > 0)
                            <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">FLAMBOYAN 120</div>
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">FLAMBOYAN 120</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi26 as $i26)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i26->kapasitas }}</h5>
                                        
                                        @if ($i26->kapasitas == 1)
                                            @if ($i26->booked == 0 && $i26->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <ul>
                                                    @foreach ($pn26 as $p)
                                                        <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @else
                                            @if ($i26->booked == 0 && $i26->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                            <ul>
                                                @foreach ($pn26 as $p)
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
<div class="modal fade" id="ChoiceModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi7 as $i7)
                    @if ($i7->booked == $i7->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/7/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/7/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                {{-- Ini yang perlu ditambahkan --}}
                @foreach ($isi7 as $i7)
                    @if ($i7->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/7/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                {{-- Sampai Sini --}}
                @foreach ($isi7 as $i7)
                    @if ($i7->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/7/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi8 as $i8)
                    @if ($i8->booked == $i8->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/8/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                {{-- Ini yang perlu ditambahkan --}}
                @foreach ($isi8 as $i8)
                    @if ($i8->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/8/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                {{-- Sampai Sini --}}
               
                @foreach ($isi8 as $i8)
                    @if ($i8->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/8/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi9 as $i9)
                    @if ($i9->booked == $i9->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/9/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                {{-- Ini yang perlu ditambahkan --}}
                @foreach ($isi9 as $i9)
                    @if ($i9->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/9/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                {{-- Sampai Sini --}}
              
                @foreach ($isi9 as $i9)
                    @if ($i9->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/9/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi10 as $i10)
                @if ($i10->booked == $i10->kapasitas)
                    <form action="">
                        <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                    </form>
                @else
                    <a href="{{ url('/booking-mrs/10/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block">
                        Entry Pasien Masuk Rawat Inap
                    </a>
                @endif
            @endforeach
            {{-- Ini yang perlu ditambahkan --}}
            @foreach ($isi10 as $i10)
            @if ($i10->booked > 0)
                <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                    Entry Pasien Reservasi
                </button>
            @else
                <a href="{{ url('/booking-page/10/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
                    Entry Pasien Reservasi
                </a>
            @endif
        @endforeach
        {{-- Sampai Sini --}}
      
            @foreach ($isi10 as $i10)
                @if ($i10->booked == 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Pasien Keluar Rawat Inap
                    </button>
                @else
                     <a href="{{ url('/booking-keluar/10/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi11 as $i11)
                    @if ($i11->booked == $i11->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/11/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                {{-- Ini yang perlu ditambahkan --}}
                @foreach ($isi11 as $i11)
                    @if ($i11->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/11/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                {{-- Sampai Sini --}}
        
                @foreach ($isi11 as $i11)
                    @if ($i11->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/11/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi12 as $i12)
                    @if ($i12->booked == $i12->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/12/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                {{-- Ini yang perlu ditambahkan --}}
                @foreach ($isi12 as $i12)
                    @if ($i12->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/12/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                {{-- Sampai Sini --}}
             
                @foreach ($isi12 as $i12)
                    @if ($i12->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/12/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi13 as $i13)
                    @if ($i13->booked == $i13->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/13/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                {{-- Ini yang perlu ditambahkan --}}
                @foreach ($isi13 as $i13)
                    @if ($i13->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/13/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                {{-- Sampai Sini --}}
            
                @foreach ($isi13 as $i13)
                    @if ($i13->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/13/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal14" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi14 as $i14)
                    @if ($i14->booked == $i14->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/14/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                {{-- Ini yang perlu ditambahkan --}}
                @foreach ($isi14 as $i14)
                    @if ($i14->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/14/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                {{-- Sampai Sini --}}
            
                @foreach ($isi14 as $i14)
                    @if ($i14->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                    <a href="{{ url('/booking-keluar/14/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal15" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi15 as $i15)
                    @if ($i15->booked == $i15->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/15/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                {{-- Ini yang perlu ditambahkan --}}
                @foreach ($isi15 as $i15)
                    @if ($i15->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/15/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                {{-- Sampai Sini --}}
              
                @foreach ($isi15 as $i15)
                    @if ($i15->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                    <a href="{{ url('/booking-keluar/15/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal16" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi16 as $i16)
                    @if ($i16->booked == $i16->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/16/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                {{-- Ini yang perlu ditambahkan --}}
                @foreach ($isi16 as $i16)
                    @if ($i16->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/16/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                {{-- Sampai Sini --}}
         
                @foreach ($isi16 as $i16)
                    @if ($i16->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                    <a href="{{ url('/booking-keluar/16/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal17" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi17 as $i17)
                    @if ($i17->booked == $i17->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/17/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                {{-- Ini yang perlu ditambahkan --}}
                @foreach ($isi17 as $i17)
                    @if ($i17->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/17/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi17 as $i17)
                    @if ($i17->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                    <a href="{{ url('/booking-keluar/17/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal18" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi18 as $i18)
                    @if ($i18->booked == $i18->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/18/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                {{-- Ini yang perlu ditambahkan --}}
                @foreach ($isi18 as $i18)
                    @if ($i18->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/18/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                {{-- Sampai Sini --}}
         
                @foreach ($isi18 as $i18)
                    @if ($i18->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                    <a href="{{ url('/booking-keluar/18/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal19" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi19 as $i19)
                    @if ($i19->booked == $i19->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/19/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                {{-- Ini yang perlu ditambahkan --}}
                @foreach ($isi19 as $i19)
                    @if ($i19->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/19/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                {{-- Sampai Sini --}}
              
                @foreach ($isi19 as $i19)
                    @if ($i19->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                    <a href="{{ url('/booking-keluar/19/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal20" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi20 as $i20)
                    @if ($i20->booked == $i20->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/20/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                {{-- Ini yang perlu ditambahkan --}}
                @foreach ($isi20 as $i20)
                    @if ($i20->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/20/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                {{-- Sampai Sini --}}
            
                @foreach ($isi20 as $i20)
                    @if ($i20->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                    <a href="{{ url('/booking-keluar/20/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal21" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi21 as $i21)
                    @if ($i21->booked == $i21->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/21/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                {{-- Ini yang perlu ditambahkan --}}
                @foreach ($isi21 as $i21)
                    @if ($i21->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/21/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                {{-- Sampai Sini --}}
             
                @foreach ($isi21 as $i21)
                    @if ($i21->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                    <a href="{{ url('/booking-keluar/21/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal22" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi22 as $i22)
                    @if ($i22->booked == $i22->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/22/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                {{-- Ini yang perlu ditambahkan --}}
                @foreach ($isi22 as $i22)
                    @if ($i22->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/22/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                {{-- Sampai Sini --}}
              
                @foreach ($isi22 as $i22)
                    @if ($i22->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                    <a href="{{ url('/booking-keluar/22/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal23" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi23 as $i23)
                    @if ($i23->booked == $i23->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/23/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                {{-- Ini yang perlu ditambahkan --}}
                @foreach ($isi23 as $i23)
                    @if ($i23->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/23/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                {{-- Sampai Sini --}}
              
                @foreach ($isi23 as $i23)
                    @if ($i23->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                    <a href="{{ url('/booking-keluar/23/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal24" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi24 as $i24)
                    @if ($i24->booked == $i24->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/24/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                {{-- Ini yang perlu ditambahkan --}}
                @foreach ($isi24 as $i24)
                    @if ($i24->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/24/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                {{-- Sampai Sini --}}
             
                @foreach ($isi24 as $i24)
                    @if ($i24->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                    <a href="{{ url('/booking-keluar/24/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal25" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi25 as $i25)
                    @if ($i25->booked == $i25->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/25/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                {{-- Ini yang perlu ditambahkan --}}
                @foreach ($isi25 as $i25)
                    @if ($i25->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/25/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                {{-- Sampai Sini --}}
              
                @foreach ($isi25 as $i25)
                    @if ($i25->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                    <a href="{{ url('/booking-keluar/25/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal26" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi26 as $i26)
                    @if ($i26->booked == $i26->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/26/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                {{-- Ini yang perlu ditambahkan --}}
                @foreach ($isi26 as $i26)
                    @if ($i26->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/26/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                {{-- Sampai Sini --}}
                
                @foreach ($isi26 as $i26)
                    @if ($i26->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                    <a href="{{ url('/booking-keluar/26/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" >
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

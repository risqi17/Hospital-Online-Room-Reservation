@extends('_master')

@section('title-content')
    Paviliun 2
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
            @foreach ($kamar27 as $k27)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal27">
                @if ($k27->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">CENDRAWASIH 201</div>
                @elseif ($bk27 > 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">CENDRAWASIH 201</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">CENDRAWASIH 201</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi27 as $i27)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i27->kapasitas }}</h5>
                                
                                @if ($i27->kapasitas == 1)
                                    @if ($i27->booked == 0 && $i27->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn27 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i27->booked == 0 && $i27->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn27 as $p)
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
            @foreach ($kamar28 as $k28)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal28">
                @if ($k28->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">MURAI 202</div>
                @elseif ($bk28 > 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">MURAI 202</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">MURAI 202</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi28 as $i28)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i28->kapasitas }}</h5>
                                
                                @if ($i28->kapasitas == 1)
                                    @if ($i28->booked == 0 && $i28->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn28 as $p)
                                                <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i28->booked == 0 && $i28->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                    <ul>
                                        @foreach ($pn28 as $p)
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
            @foreach ($kamar29 as $k29)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal29">
                @if ($k29->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">MURAI 203</div>
                @elseif ($bk29 > 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">MURAI 203</div> 
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">MURAI 203</div> 
                @endif
                        <div class="card-body">
                            @foreach ($isi29 as $i29)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>{{ $i29->kapasitas }}</h5>
                            
                            @if ($i29->kapasitas == 1)
                                @if ($i29->booked == 0 && $i29->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn29 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i29->booked == 0 && $i29->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                <ul>
                                    @foreach ($pn29 as $p)
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
            @foreach ($kamar30 as $k30)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal30">
                @if ($k30->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">MURAI 204</div> 
                @elseif ($bk30 > 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">MURAI 204</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">MURAI 204</div> 
                @endif
                        <div class="card-body">
                            @foreach ($isi30 as $i30)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>{{ $i30->kapasitas }}</h5>
                            
                            @if ($i30->kapasitas == 1)
                                @if ($i30->booked == 0 && $i30->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn30 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i30->booked == 0 && $i30->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                <ul>
                                    @foreach ($pn30 as $p)
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
            @foreach ($kamar31 as $k31)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal31">
                @if ($k31->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">MURAI 205</div> 
                @elseif ($bk31 > 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">MURAI 205</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">MURAI 205</div> 
                @endif
                        <div class="card-body">
                            @foreach ($isi31 as $i31)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>{{ $i31->kapasitas }}</h5>
                            
                            @if ($i31->kapasitas == 1)
                                @if ($i31->booked == 0 && $i31->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn31 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i31->booked == 0 && $i31->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                <ul>
                                    @foreach ($pn31 as $p)
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
            @foreach ($kamar32 as $k32)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal32">
                @if ($k32->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">MURAI 206</div>
                @elseif ($bk32 > 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">MURAI 206</div> 
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">MURAI 206</div> 
                @endif
                        <div class="card-body">
                            @foreach ($isi32 as $i32)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>{{ $i32->kapasitas }}</h5>
                            
                            @if ($i32->kapasitas == 1)
                                @if ($i32->booked == 0 && $i32->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn32 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i32->booked == 0 && $i32->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                <ul>
                                    @foreach ($pn32 as $p)
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
            @foreach ($kamar33 as $k33)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal33">
                @if ($k33->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">MURAI 207</div> 
                @elseif ($bk33 > 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">MURAI 207</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">MURAI 207</div> 
                @endif
                        <div class="card-body">
                            @foreach ($isi33 as $i33)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>{{ $i33->kapasitas }}</h5>
                            
                            @if ($i33->kapasitas == 1)
                                @if ($i33->booked == 0 && $i33->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn33 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i33->booked == 0 && $i33->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                <ul>
                                    @foreach ($pn33 as $p)
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
                    @foreach ($kamar178 as $k178)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal178">
                        @if ($k178->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">PARKIT 208-1</div>
                        @elseif ($bk178 > 0)
                            <div id="icu1" class="card bg-warning">
                                    <div class="card-header text-white">PARKIT 208-1</div>
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">PARKIT 208-1</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi178 as $i178)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i178->kapasitas }}</h5>
                                        
                                        @if ($i178->kapasitas == 1)
                                            @if ($i178->booked == 0 && $i178->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <ul>
                                                    @foreach ($pn178 as $p)
                                                        <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @else
                                            @if ($i178->booked == 0 && $i178->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                            <ul>
                                                @foreach ($pn178 as $p)
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
            @foreach ($kamar34 as $k34)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal34">
                @if ($k34->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">KENARI 208</div>
                @elseif ($bk34 > 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">KENARI 208</div> 
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">KENARI 208</div> 
                @endif
                        <div class="card-body">
                            @foreach ($isi34 as $i34)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>{{ $i34->kapasitas }}</h5>
                            
                            @if ($i34->kapasitas == 1)
                                @if ($i34->booked == 0 && $i34->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn34 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i34->booked == 0 && $i34->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                <ul>
                                    @foreach ($pn34 as $p)
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
            @foreach ($kamar35 as $k35)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal35">
                @if ($k35->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">PARKIT 209-1</div>
                @elseif ($bk35 > 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">PARKIT 209-1</div> 
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">PARKIT 209-1</div> 
                @endif
                        <div class="card-body">
                            @foreach ($isi35 as $i35)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>{{ $i35->kapasitas }}</h5>
                           
                            @if ($i35->kapasitas == 1)
                                @if ($i35->booked == 0 && $i35->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn35 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i35->booked == 0 && $i35->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                <ul>
                                    @foreach ($pn35 as $p)
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
            @foreach ($kamar36 as $k36)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal36">
                @if ($k36->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">PARKIT 209-2</div>
                @elseif ($bk36 > 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">PARKIT 209-2</div> 
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">PARKIT 209-2</div> 
                @endif
                        <div class="card-body">
                            @foreach ($isi36 as $i36)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>{{ $i36->kapasitas }}</h5>
                            
                            @if ($i36->kapasitas == 1)
                                @if ($i36->booked == 0 && $i36->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn36 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i36->booked == 0 && $i36->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                <ul>
                                    @foreach ($pn36 as $p)
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
            @foreach ($kamar37 as $k37)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal37">
                @if ($k37->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">PARKIT 210-1</div>
                @elseif ($bk37 > 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">PARKIT 210-1</div> 
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">PARKIT 210-1</div> 
                @endif
                        <div class="card-body">
                            @foreach ($isi37 as $i37)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>{{ $i37->kapasitas }}</h5>
                            
                            @if ($i37->kapasitas == 1)
                                @if ($i37->booked == 0 && $i37->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn37 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i37->booked == 0 && $i37->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                <ul>
                                    @foreach ($pn37 as $p)
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
            @foreach ($kamar38 as $k38)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal38">
                @if ($k38->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">PARKIT 210-2</div>
                @elseif ($bk38 > 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">PARKIT 210-2</div> 
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">PARKIT 210-2</div> 
                @endif
                        <div class="card-body">
                            @foreach ($isi38 as $i38)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>{{ $i38->kapasitas }}</h5>
                            
                            @if ($i38->kapasitas == 1)
                                @if ($i38->booked == 0 && $i38->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn38 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i38->booked == 0 && $i38->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                <ul>
                                    @foreach ($pn38 as $p)
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
            @foreach ($kamar39 as $k39)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal39">
                @if ($k39->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">PARKIT 211-1</div>
                @elseif ($bk39 > 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">PARKIT 211-1</div> 
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">PARKIT 211-1</div> 
                @endif
                        <div class="card-body">
                            @foreach ($isi39 as $i39)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>{{ $i39->kapasitas }}</h5>
                            
                            @if ($i39->kapasitas == 1)
                                @if ($i39->booked == 0 && $i39->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn39 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i39->booked == 0 && $i39->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                <ul>
                                    @foreach ($pn39 as $p)
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
            @foreach ($kamar40 as $k40)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal40">
                @if ($k40->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">PARKIT 211-2</div> 
                @elseif ($bk40 > 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">PARKIT 211-2</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">PARKIT 211-2</div> 
                @endif
                        <div class="card-body">
                            @foreach ($isi40 as $i40)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>{{ $i40->kapasitas }}</h5>
                            
                            @if ($i40->kapasitas == 1)
                                @if ($i40->booked == 0 && $i40->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn40 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i40->booked == 0 && $i40->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                <ul>
                                    @foreach ($pn40 as $p)
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
            @foreach ($kamar41 as $k41)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal41">
                @if ($k41->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">PARKIT 212-1</div> 
                @elseif ($bk41 > 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">PARKIT 212-1</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">PARKIT 212-1</div> 
                @endif
                        <div class="card-body">
                            @foreach ($isi41 as $i41)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>{{ $i41->kapasitas }}</h5>
                           
                            @if ($i41->kapasitas == 1)
                                @if ($i41->booked == 0 && $i41->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn41 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i41->booked == 0 && $i41->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                <ul>
                                    @foreach ($pn41 as $p)
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
            @foreach ($kamar42 as $k42)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal42">
                @if ($k42->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">PARKIT 212-2</div>
                @elseif ($bk42 > 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">PARKIT 212-2</div> 
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">PARKIT 212-2</div> 
                @endif
                        <div class="card-body">
                            @foreach ($isi42 as $i42)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>{{ $i42->kapasitas }}</h5>
                            
                            @if ($i42->kapasitas == 1)
                                @if ($i42->booked == 0 && $i42->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn42 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i42->booked == 0 && $i42->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                <ul>
                                    @foreach ($pn42 as $p)
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
            @foreach ($kamar43 as $k43)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal43">
                @if ($k43->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">PARKIT 213-1</div> 
                @elseif ($bk43 > 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">PARKIT 213-1</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">PARKIT 213-1</div> 
                @endif
                        <div class="card-body">
                            @foreach ($isi43 as $i43)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>{{ $i43->kapasitas }}</h5>
                           
                            @if ($i43->kapasitas == 1)
                                @if ($i43->booked == 0 && $i43->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn43 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i43->booked == 0 && $i43->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                <ul>
                                    @foreach ($pn43 as $p)
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
            @foreach ($kamar44 as $k44)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal44">
                @if ($k44->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">PARKIT 213-2</div> 
                @elseif ($bk44 > 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">PARKIT 213-2</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">PARKIT 213-2</div> 
                @endif
                        <div class="card-body">
                            @foreach ($isi44 as $i44)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>{{ $i44->kapasitas }}</h5>
                            
                            @if ($i44->kapasitas == 1)
                                @if ($i44->booked == 0 && $i44->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn44 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i44->booked == 0 && $i44->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                <ul>
                                    @foreach ($pn44 as $p)
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
            @foreach ($kamar45 as $k45)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal45">
                @if ($k45->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">KENARI 214</div> 
                @elseif ($bk45 > 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">KENARI 214</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">KENARI 214</div> 
                @endif
                        <div class="card-body">
                            @foreach ($isi45 as $i45)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>{{ $i45->kapasitas }}</h5>
                            
                            @if ($i45->kapasitas == 1)
                                @if ($i45->booked == 0 && $i45->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn45 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i45->booked == 0 && $i45->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                <ul>
                                    @foreach ($pn45 as $p)
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
                
                <div class="col-lg-1">

                </div>
                <div class="col-lg-2 mb-30">
            @foreach ($kamar46 as $k46)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal46">
                @if ($k46->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">KENARI 215</div>
                @elseif ($bk46 > 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">KENARI 215</div> 
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">KENARI 215</div> 
                @endif
                        <div class="card-body">
                            @foreach ($isi46 as $i46)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>{{ $i46->kapasitas }}</h5>
                            
                            @if ($i46->kapasitas == 1)
                                @if ($i46->booked == 0 && $i46->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn46 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i46->booked == 0 && $i46->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                <ul>
                                    @foreach ($pn46 as $p)
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
            @foreach ($kamar47 as $k47)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal47">
                @if ($k47->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">KENARI 216</div>
                @elseif ($bk47 > 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">KENARI 216</div> 
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">KENARI 216</div> 
                @endif
                        <div class="card-body">
                            @foreach ($isi47 as $i47)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>{{ $i47->kapasitas }}</h5>
                            
                            @if ($i47->kapasitas == 1)
                                @if ($i47->booked == 0 && $i47->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn47 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i47->booked == 0 && $i47->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                <ul>
                                    @foreach ($pn47 as $p)
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
            @foreach ($kamar48 as $k48)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal48">
                @if ($k48->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">KENARI 217</div>
                @elseif ($bk48 > 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">KENARI 217</div> 
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">KENARI 217</div> 
                @endif
                        <div class="card-body">
                            @foreach ($isi48 as $i48)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>{{ $i48->kapasitas }}</h5>
                            
                            @if ($i48->kapasitas == 1)
                                @if ($i48->booked == 0 && $i48->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn48 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i48->booked == 0 && $i48->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                <ul>
                                    @foreach ($pn48 as $p)
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
            @foreach ($kamar49 as $k49)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal49">
                @if ($k49->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">KENARI 218</div>
                @elseif ($bk49 > 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">KENARI 218</div> 
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">KENARI 218</div> 
                @endif
                        <div class="card-body">
                            @foreach ($isi49 as $i49)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>{{ $i49->kapasitas }}</h5>
                            
                            @if ($i49->kapasitas == 1)
                                @if ($i49->booked == 0 && $i49->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn49 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i49->booked == 0 && $i49->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                <ul>
                                    @foreach ($pn49 as $p)
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
            @foreach ($kamar50 as $k50)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal50">
                @if ($k50->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">KENARI 219</div> 
                @elseif ($bk50 > 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">KENARI 219</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">KENARI 219</div> 
                @endif
                        <div class="card-body">
                            @foreach ($isi50 as $i50)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>{{ $i50->kapasitas }}</h5>
                            
                            @if ($i50->kapasitas == 1)
                                @if ($i50->booked == 0 && $i50->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn50 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i50->booked == 0 && $i50->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                <ul>
                                    @foreach ($pn50 as $p)
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
            @foreach ($kamar51 as $k51)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal51">
                @if ($k51->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">KENARI 220</div>
                @elseif ($bk51 > 0)
                    <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">KENARI 220</div> 
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">KENARI 220</div> 
                @endif
                        <div class="card-body">
                            @foreach ($isi51 as $i51)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>{{ $i51->kapasitas }}</h5>
                            
                            @if ($i51->kapasitas == 1)
                                @if ($i51->booked == 0 && $i51->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn51 as $p)
                                            <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i51->booked == 0 && $i51->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                <ul>
                                    @foreach ($pn51 as $p)
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

            </div>
            <div class="hk-row">
            </div>
         </div>
     </div>
</div>

{{-- Modal Pilihan --}}
<div class="modal fade" id="ChoiceModal27" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi27 as $i27)
                    @if ($i27->booked == $i27->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/27/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi27 as $i27)
                    @if ($i27->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/27/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi27 as $i27)
                    @if ($i27->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/27/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal178" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi178 as $i178)
                    @if ($i178->booked == $i178->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/178/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi178 as $i178)
                    @if ($i178->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/178/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi178 as $i178)
                    @if ($i178->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/178/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal28" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi28 as $i28)
                    @if ($i28->booked == $i28->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/28/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi28 as $i28)
                    @if ($i28->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/28/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi28 as $i28)
                    @if ($i28->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/28/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal29" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi29 as $i29)
                    @if ($i29->booked == $i29->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/29/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi29 as $i29)
                    @if ($i29->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/29/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi29 as $i29)
                    @if ($i29->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/29/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal30" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi30 as $i30)
                    @if ($i30->booked == $i30->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/30/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi30 as $i30)
                @if ($i30->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/30/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
            @endforeach
                @foreach ($isi30 as $i30)
                    @if ($i30->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/30/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal31" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi31 as $i31)
                    @if ($i31->booked == $i31->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/31/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi31 as $i31)
                @if ($i31->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/31/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
            @endforeach
                @foreach ($isi31 as $i31)
                    @if ($i31->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/31/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal32" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi32 as $i32)
                    @if ($i32->booked == $i32->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/32/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi32 as $i32)
                @if ($i32->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/32/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
            @endforeach
                @foreach ($isi32 as $i32)
                    @if ($i32->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/32/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
                @foreach ($isi33 as $i33)
                    @if ($i33->booked == $i33->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/33/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi33 as $i33)
                    @if ($i33->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/33/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi33 as $i33)
                    @if ($i33->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/33/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal34" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi34 as $i34)
                    @if ($i34->booked == $i34->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/34/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi34 as $i34)
                    @if ($i34->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/34/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi34 as $i34)
                    @if ($i34->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/34/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal35" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi35 as $i35)
                    @if ($i35->booked == $i35->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/35/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi35 as $i35)
                    @if ($i35->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/35/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi35 as $i35)
                    @if ($i35->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/35/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal36" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi36 as $i36)
                    @if ($i36->booked == $i36->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/36/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi36 as $i36)
                    @if ($i36->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/36/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi36 as $i36)
                    @if ($i36->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/36/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal37" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi37 as $i37)
                    @if ($i37->booked == $i37->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/37/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi37 as $i37)
                    @if ($i37->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/37/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi37 as $i37)
                    @if ($i37->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/37/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal38" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi38 as $i38)
                    @if ($i38->booked == $i38->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/38/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi38 as $i38)
                    @if ($i38->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/38/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi38 as $i38)
                    @if ($i38->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/38/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal39" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi39 as $i39)
                    @if ($i39->booked == $i39->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/39/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi39 as $i39)
                    @if ($i39->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/39/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi39 as $i39)
                    @if ($i39->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/39/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal40" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi40 as $i40)
                    @if ($i40->booked == $i40->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/40/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi40 as $i40)
                    @if ($i40->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/40/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi40 as $i40)
                    @if ($i40->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/40/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal41" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi41 as $i41)
                    @if ($i41->booked == $i41->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/41/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi41 as $i41)
                    @if ($i41->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/41/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi41 as $i41)
                    @if ($i41->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/41/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal42" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi42 as $i42)
                    @if ($i42->booked == $i42->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/42/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi42 as $i42)
                    @if ($i42->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/42/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi42 as $i42)
                    @if ($i42->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/42/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal43" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi43 as $i43)
                    @if ($i43->booked == $i43->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/43/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi43 as $i43)
                    @if ($i43->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/43/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi43 as $i43)
                    @if ($i43->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/43/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal44" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi44 as $i44)
                    @if ($i44->booked == $i44->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/44/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi44 as $i44)
                    @if ($i44->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/44/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi44 as $i44)
                    @if ($i44->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/44/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal45" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi45 as $i45)
                    @if ($i45->booked == $i45->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/45/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi45 as $i45)
                    @if ($i45->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/45/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi45 as $i45)
                    @if ($i45->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/45/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal46" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi46 as $i46)
                    @if ($i46->booked == $i46->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/46/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi46 as $i46)
                    @if ($i46->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/46/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi46 as $i46)
                    @if ($i46->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/46/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal47" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi47 as $i47)
                    @if ($i47->booked == $i47->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/47/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi47 as $i47)
                    @if ($i47->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/47/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi47 as $i47)
                    @if ($i47->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/47/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal48" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi48 as $i48)
                    @if ($i48->booked == $i48->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/48/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi48 as $i48)
                    @if ($i48->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/48/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi48 as $i48)
                    @if ($i48->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/48/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal49" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi49 as $i49)
                    @if ($i49->booked == $i49->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/49/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi49 as $i49)
                    @if ($i49->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/49/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi49 as $i49)
                    @if ($i49->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/49/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal50" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi50 as $i50)
                    @if ($i50->booked == $i50->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/50/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi50 as $i50)
                    @if ($i50->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/50/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi50 as $i50)
                    @if ($i50->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/50/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal51" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi51 as $i51)
                    @if ($i51->booked == $i51->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                    @else
                        <a href="{{ url('/booking-mrs/51/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi51 as $i51)
                    @if ($i51->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/51/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                @foreach ($isi51 as $i51)
                    @if ($i51->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/51/paviliun2') }}" class="btn btn-outline-primary btn-lg btn-block" >
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

@extends('_master')

@section('title-content')
    Lantai 3 (Neonatal)
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
            @foreach ($kamar137 as $k137)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal137">
                @if ($k137->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">RUANG OBSERVASI</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">RUANG OBSERVASI</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi137 as $i137)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i137->kapasitas }}</h5>
                                
                                @if ($i137->kapasitas == 1)
                                    @if ($i137->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i137->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i137->booked }} dari {{ $i137->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar138 as $k138)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal138">
                @if ($k138->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">RUANG OBSERVASI</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">RUANG OBSERVASI</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi138 as $i138)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i138->kapasitas }}</h5>
                                
                                @if ($i138->kapasitas == 1)
                                    @if ($i138->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i138->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i138->booked }} dari {{ $i138->kapasitas }}</p>
                                        
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
                    @foreach ($kamar139 as $k139)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal139">
                        @if ($k139->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">TERATAI</div>
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">SERUNI 213-1</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi139 as $i139)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i139->kapasitas }}</h5>
                                        
                                        @if ($i139->kapasitas == 1)
                                            @if ($i139->booked == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <p class="card-text text-white">Ruangan Penuh</p>
                                                
                                            @endif
                                        @else
                                            @if ($i139->booked == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                                
                                            @else
                                                <p class="card-text text-white">Terisi {{ $i139->booked }} dari {{ $i139->kapasitas }}</p>
                                                
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
            @foreach ($kamar140 as $k140)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal140">
                @if ($k140->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">ALAMANDA 1</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">ALAMANDA 1</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi140 as $i140)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i140->kapasitas }}</h5>
                                
                                @if ($i140->kapasitas == 1)
                                    @if ($i140->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i140->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i140->booked }} dari {{ $i140->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar141 as $k141)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal141">
                @if ($k141->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">ALAMANDA 2</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">ALAMANDA2</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi141 as $i141)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i141->kapasitas }}</h5>
                                
                                @if ($i141->kapasitas == 1)
                                    @if ($i141->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i141->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i141->booked }} dari {{ $i141->kapasitas }}</p>
                                        
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
            @foreach ($kamar142 as $k142)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal142">
                @if ($k142->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">RUANG FOTO TERAPI</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">RUANG FOTO TERAPI</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi142 as $i142)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i142->kapasitas }}</h5>
                                
                                @if ($i142->kapasitas == 1)
                                    @if ($i142->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i142->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i142->booked }} dari {{ $i142->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar143 as $k143)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal143">
                @if ($k143->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">RUANG FOTO TERAPI</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">RUANG FOTO TERAPI</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi143 as $i143)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i143->kapasitas }}</h5>
                                
                                @if ($i143->kapasitas == 1)
                                    @if ($i143->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i143->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i143->booked }} dari {{ $i143->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar144 as $k144)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal144">
                @if ($k144->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">RUANG FOTO TERAPI</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">RUANG FOTO TERAPI</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi144 as $i144)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i144->kapasitas }}</h5>
                                
                                @if ($i144->kapasitas == 1)
                                    @if ($i144->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i144->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i144->booked }} dari {{ $i144->kapasitas }}</p>
                                        
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
            @foreach ($kamar145 as $k145)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal145">
                @if ($k145->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">AZALEA 1</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AZALEA 1</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi145 as $i145)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i145->kapasitas }}</h5>
                                
                                @if ($i145->kapasitas == 1)
                                    @if ($i145->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i145->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i145->booked }} dari {{ $i145->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
               
                <div class="col-lg-2 mb-30">
            @foreach ($kamar146 as $k146)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal146">
                @if ($k146->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">AZALEA 2</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AZALEA 2</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi146 as $i146)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i146->kapasitas }}</h5>
                                
                                @if ($i146->kapasitas == 1)
                                    @if ($i146->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i146->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i146->booked }} dari {{ $i146->kapasitas }}</p>
                                        
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
            @foreach ($kamar147 as $k147)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal147">
                @if ($k147->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">RUANG ISOLASI</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">RUANG ISOLASI</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi147 as $i147)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i147->kapasitas }}</h5>
                                
                                @if ($i147->kapasitas == 1)
                                    @if ($i147->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i147->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i147->booked }} dari {{ $i147->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar148 as $k148)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal148">
                @if ($k148->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">SRUANG ISOLASI</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">RUANG ISOLASI</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi148 as $i148)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i148->kapasitas }}</h5>
                                
                                @if ($i148->kapasitas == 1)
                                    @if ($i148->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i148->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i148->booked }} dari {{ $i148->kapasitas }}</p>
                                        
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
            @foreach ($kamar149 as $k149)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal149">
                @if ($k149->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">AZALEA 3</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AZALEA 3</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi149 as $i149)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i149->kapasitas }}</h5>
                                
                                @if ($i149->kapasitas == 1)
                                    @if ($i149->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i149->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i149->booked }} dari {{ $i149->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar150 as $k150)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal150">
                @if ($k150->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">AZALEA 4</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">AZALEA 4</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi150 as $i150)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i150->kapasitas }}</h5>
                                
                                @if ($i150->kapasitas == 1)
                                    @if ($i150->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i150->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i150->booked }} dari {{ $i150->kapasitas }}</p>
                                        
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
 
                <div class="col-lg-6">

                </div>
                <div class="col-lg-2 mb-30">
            @foreach ($kamar151 as $k151)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal151">
                @if ($k151->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">SERUNI 1</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 1</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi151 as $i151)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i151->kapasitas }}</h5>
                                
                                @if ($i151->kapasitas == 1)
                                    @if ($i151->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i151->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i151->booked }} dari {{ $i151->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar152 as $k152)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal152">
                @if ($k152->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">SERUNI 2</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 2</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi152 as $i152)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i152->kapasitas }}</h5>
                                
                                @if ($i152->kapasitas == 1)
                                    @if ($i152->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i152->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i152->booked }} dari {{ $i152->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar153 as $k153)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal153">
                @if ($k153->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">SERUNI 3</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 3</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi153 as $i153)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i153->kapasitas }}</h5>
                                
                                @if ($i153->kapasitas == 1)
                                    @if ($i153->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i153->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i153->booked }} dari {{ $i153->kapasitas }}</p>
                                        
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

                <div class="col-lg-6">

                </div>
                <div class="col-lg-2 mb-30">
            @foreach ($kamar175 as $k175)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal175">
                @if ($k175->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">SERUNI 4</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 4</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi175 as $i175)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i175->kapasitas }}</h5>
                                
                                @if ($i175->kapasitas == 1)
                                    @if ($i175->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i175->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i175->booked }} dari {{ $i175->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar176 as $k176)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal176">
                @if ($k176->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">SERUNI 5</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 5</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi176 as $i176)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i176->kapasitas }}</h5>
                                
                                @if ($i176->kapasitas == 1)
                                    @if ($i176->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i176->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i176->booked }} dari {{ $i176->kapasitas }}</p>
                                        
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    </a>
            @endforeach
                </div>
                
                <div class="col-lg-2 mb-30">
            @foreach ($kamar177 as $k177)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal177">
                @if ($k177->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                    <div class="card-header text-white">SERUNI 6</div>
                @else
                    <div id="icu1" class="card bg-light">
                    <div class="card-header ">SERUNI 6</div>
                @endif
                        
                        <div class="card-body">
                            @foreach ($isi177 as $i177)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i177->kapasitas }}</h5>
                                
                                @if ($i177->kapasitas == 1)
                                    @if ($i177->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <p class="card-text text-white">Ruangan Penuh</p>
                                        
                                    @endif
                                @else
                                    @if ($i177->booked == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                        
                                    @else
                                        <p class="card-text text-white">Terisi {{ $i177->booked }} dari {{ $i177->kapasitas }}</p>
                                        
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
<div class="modal fade" id="ChoiceModal137" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi137 as $i137)
                    @if ($i137->booked == $i137->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/137/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/137/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi137 as $i137)
                @if ($i137->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/137/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi137 as $i137)
                    @if ($i137->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/137/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal138" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi138 as $i138)
                    @if ($i138->booked == $i138->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/138/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/138/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi138 as $i138)
                @if ($i138->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/138/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi138 as $i138)
                    @if ($i138->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/138/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal139" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi139 as $i139)
                    @if ($i139->booked == $i139->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/139/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/139/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi139 as $i139)
                @if ($i139->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/139/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi139 as $i139)
                    @if ($i139->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/139/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal140" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi140 as $i140)
                    @if ($i140->booked == $i140->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/140/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/140/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi140 as $i140)
                @if ($i140->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/140/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi140 as $i140)
                    @if ($i140->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/140/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal141" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi141 as $i141)
                    @if ($i141->booked == $i141->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/141/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/141/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi141 as $i141)
                @if ($i141->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/141/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi141 as $i141)
                    @if ($i141->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/141/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal142" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi142 as $i142)
                    @if ($i142->booked == $i142->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/142/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/142/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi142 as $i142)
                @if ($i142->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/142/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi142 as $i142)
                    @if ($i142->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/142/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal143" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi143 as $i143)
                    @if ($i143->booked == $i143->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/143/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/143/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi143 as $i143)
                @if ($i143->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/143/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi143 as $i143)
                    @if ($i143->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/143/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal144" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi144 as $i144)
                    @if ($i144->booked == $i144->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/144/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/144/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi144 as $i144)
                @if ($i144->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/144/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi144 as $i144)
                    @if ($i144->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/144/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal145" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi145 as $i145)
                    @if ($i145->booked == $i145->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/145/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/145/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi145 as $i145)
                @if ($i145->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/145/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi145 as $i145)
                    @if ($i145->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/145/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal146" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi146 as $i146)
                    @if ($i146->booked == $i146->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/146/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/146/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi146 as $i146)
                @if ($i146->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/146/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi146 as $i146)
                    @if ($i146->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/146/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal147" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi147 as $i147)
                    @if ($i147->booked == $i147->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/147/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/147/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi147 as $i147)
                @if ($i147->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/147/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi147 as $i147)
                    @if ($i147->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/147/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal148" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi148 as $i148)
                    @if ($i148->booked == $i148->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/148/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/148/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi148 as $i148)
                @if ($i148->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/148/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi148 as $i148)
                    @if ($i148->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/148/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal149" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi149 as $i149)
                    @if ($i149->booked == $i149->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/149/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/149/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi149 as $i149)
                @if ($i149->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/149/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi149 as $i149)
                    @if ($i149->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/149/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal150" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi150 as $i150)
                    @if ($i150->booked == $i150->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/150/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/150/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi150 as $i150)
                @if ($i150->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/150/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi150 as $i150)
                    @if ($i150->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/150/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal151" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi151 as $i151)
                    @if ($i151->booked == $i151->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/151/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/151/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi151 as $i151)
                @if ($i151->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/151/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi151 as $i151)
                    @if ($i151->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/151/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal152" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi152 as $i152)
                    @if ($i152->booked == $i152->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/152/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/152/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi152 as $i152)
                @if ($i152->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/152/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi152 as $i152)
                    @if ($i152->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/152/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal153" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi153 as $i153)
                    @if ($i153->booked == $i153->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/153/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/153/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi153 as $i153)
                @if ($i153->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/153/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi153 as $i153)
                    @if ($i153->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/153/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal175" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi175 as $i175)
                    @if ($i175->booked == $i175->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/175/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/175/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi175 as $i175)
                @if ($i175->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/175/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi175 as $i175)
                    @if ($i175->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/175/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal176" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi176 as $i176)
                    @if ($i176->booked == $i176->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/176/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/176/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi176 as $i176)
                @if ($i176->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/176/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi176 as $i176)
                    @if ($i176->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/176/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal177" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi177 as $i177)
                    @if ($i177->booked == $i177->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/177/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/177/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                @foreach ($isi177 as $i177)
                @if ($i177->booked > 0)
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                        Entry Pasien Reservasi
                    </button>
                @else
                    <a href="{{ url('/booking-page/177/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
                        Entry Pasien Reservasi
                    </a>
                @endif
                @endforeach
                @foreach ($isi177 as $i177)
                    @if ($i177->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/177/lantai3neo') }}" class="btn btn-outline-primary btn-lg btn-block" >
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

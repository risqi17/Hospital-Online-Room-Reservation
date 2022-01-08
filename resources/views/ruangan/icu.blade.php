@extends('_master')

@section('title-content')
    ICU
@endsection

@section('css-content')
    
    <!-- Data Table CSS -->
    <link href="{{ asset('vendors/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}" rel="stylesheet" type="text/css" />

    {{-- Daterange --}}
    <link href="{{ asset('vendors/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<!-- Container -->
<div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
    <!-- Row -->
     <div class="row">
         <div class="col-xl-12">
            <div class="hk-row">
                <div class="col-lg-2">

                </div>
                
                <div class="col-lg-2 mb-30">
                    @foreach ($kamar1 as $k1)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal1">
                        @if ($k1->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">ICU 1</div>
                        @elseif ($bk1 > 0)
                            <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">ICU 1</div>
                       
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">ICU 1</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi1 as $i1)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i1->kapasitas }}</h5>

                                        @if ($i1->kapasitas == 1)
                                            @if ($i1->booked == 0 && $i1->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <ul>
                                                    @foreach ($pn1 as $p)
                                                        <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @else
                                            @if ($i1->booked == 0 && $i1->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                            <ul>
                                                @foreach ($pn1 as $p)
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
                    @foreach ($kamar2 as $k2)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal2">
                        @if ($k2->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">ICU 2</div>
                        @elseif ($bk2 > 0)
                            <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">ICU 2</div>
                       
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">ICU 2</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi2 as $i2)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i2->kapasitas }}</h5>
                                        
                                        @if ($i2->kapasitas == 1)
                                            @if ($i2->booked == 0 && $i2->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <ul>
                                                    @foreach ($pn2 as $p)
                                                        <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @else
                                            @if ($i2->booked == 0 && $i2->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                            <ul>
                                                @foreach ($pn2 as $p)
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
                    @foreach ($kamar3 as $k3)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal3">
                        @if ($k3->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">ICU 3</div>
                        @elseif ($bk3 > 0)
                            <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">ICU 3</div>
                       
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">ICU 3</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi3 as $i3)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i3->kapasitas }}</h5>
                                        
                                        @if ($i3->kapasitas == 1)
                                            @if ($i3->booked == 0 && $i3->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <ul>
                                                    @foreach ($pn3 as $p)
                                                        <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @else
                                            @if ($i3->booked == 0 && $i3->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                            <ul>
                                                @foreach ($pn3 as $p)
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
                    @foreach ($kamar4 as $k4)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal4">
                        @if ($k4->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">ICU 4</div>
                        @elseif ($bk4 > 0)
                            <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">ICU 4</div>
                        
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">ICU 4</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi4 as $i4)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i4->kapasitas }}</h5>
                                        
                                        @if ($i4->kapasitas == 1)
                                            @if ($i4->booked == 0 && $i4->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <ul>
                                                    @foreach ($pn4 as $p)
                                                        <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @else
                                            @if ($i4->booked == 0 && $i4->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                            <ul>
                                                @foreach ($pn4 as $p)
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
                    @foreach ($kamar5 as $k5)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal5">
                        @if ($k5->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">ICU 5</div>
                        @elseif ($bk5 > 0)
                            <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">ICU 5</div>
                       
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">ICU 5</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi5 as $i5)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i5->kapasitas }}</h5>
                                        
                                        @if ($i5->kapasitas == 1)
                                            @if ($i5->booked == 0 && $i5->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <ul>
                                                    @foreach ($pn5 as $p)
                                                        <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @else
                                            @if ($i5->booked == 0 && $i5->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                            <ul>
                                                @foreach ($pn5 as $p)
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
                    @foreach ($kamar6 as $k6)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal6">
                        @if ($k6->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">ICU 6</div>
                        @elseif ($bk6 > 0)
                            <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">ICU 6</div>
                       
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">ICU 6</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi6 as $i6)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i6->kapasitas }}</h5>
                                        
                                        @if ($i6->kapasitas == 1)
                                            @if ($i6->booked == 0 && $i6->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <ul>
                                                    @foreach ($pn6 as $p)
                                                        <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @else
                                            @if ($i6->booked == 0 && $i6->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                            <ul>
                                                @foreach ($pn6 as $p)
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
                    @foreach ($kamar217 as $k217)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal217">
                        @if ($k217->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">ICU 7</div>
                        @elseif ($bk217 > 0)
                            <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">ICU 7</div>
                        
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">ICU 7</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi217 as $i217)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i217->kapasitas }}</h5>
                                        
                                        @if ($i217->kapasitas == 1)
                                            @if ($i217->booked == 0 && $i217->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <ul>
                                                    @foreach ($pn217 as $p)
                                                        <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @else
                                            @if ($i217->booked == 0 && $i217->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                            <ul>
                                                @foreach ($pn217 as $p)
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
                    @foreach ($kamar218 as $k218)
                            <a href="#" data-toggle="modal" data-target="#ChoiceModal218">
                        @if ($k218->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">ICU 8</div>
                        @elseif ($bk218 > 0)
                            <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">ICU 8</div>
                        
                        @else
                            <div id="icu1" class="card bg-light">
                            <div class="card-header ">ICU 8</div>
                        @endif
                                
                                <div class="card-body">
                                    @foreach ($isi218 as $i218)
                                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i218->kapasitas }}</h5>
                                        
                                        @if ($i218->kapasitas == 1)
                                            @if ($i218->booked == 0 && $i218->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                                <ul>
                                                    @foreach ($pn218 as $p)
                                                        <li class="text-white">{{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}</li>    
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @else
                                            @if ($i218->booked == 0 && $i218->bkg == 0)
                                                <p class="card-text">Ruangan Tersedia</p>
                                            @else
                                            <ul>
                                                @foreach ($pn218 as $p)
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
<div class="modal fade" id="ChoiceModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi1 as $i1)
                    @if ($i1->booked == $i1->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/1/icu') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/1/icu') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                {{-- Ini yang perlu ditambahkan --}}
                @foreach ($isi1 as $i1)
                    @if ($i1->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/1/icu') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                {{-- Sampai Sini --}}
                @foreach ($isi1 as $i1)
                    @if ($i1->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/1/icu') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi2 as $i2)
                    @if ($i2->booked == $i2->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/2/icu') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/2/icu') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                {{-- Ini yang perlu ditambahkan --}}
                @foreach ($isi2 as $i2)
                    @if ($i2->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/2/icu') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                {{-- Sampai Sini --}}
                @foreach ($isi2 as $i2)
                    @if ($i2->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/2/icu') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi3 as $i3)
                    @if ($i3->booked == $i3->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/3/icu') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/3/icu') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                {{-- Ini yang perlu ditambahkan --}}
                @foreach ($isi3 as $i3)
                    @if ($i3->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/3/icu') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                {{-- Sampai Sini --}}
                @foreach ($isi3 as $i3)
                    @if ($i3->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/3/icu') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi4 as $i4)
                    @if ($i4->booked == $i4->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/4/icu') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/4/icu') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                {{-- Ini yang perlu ditambahkan --}}
                @foreach ($isi4 as $i4)
                    @if ($i4->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/4/icu') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                {{-- Sampai Sini --}}
                @foreach ($isi4 as $i4)
                    @if ($i4->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/4/icu') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi5 as $i5)
                    @if ($i5->booked == $i5->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/5/icu') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/5/icu') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                {{-- Ini yang perlu ditambahkan --}}
                @foreach ($isi5 as $i5)
                    @if ($i5->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/5/icu') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                {{-- Sampai Sini --}}
                @foreach ($isi5 as $i5)
                    @if ($i5->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/5/icu') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi6 as $i6)
                    @if ($i6->booked == $i6->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/6/icu') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/6/icu') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                {{-- Ini yang perlu ditambahkan --}}
                @foreach ($isi6 as $i6)
                    @if ($i6->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/6/icu') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                {{-- Sampai Sini --}}
                @foreach ($isi6 as $i6)
                    @if ($i6->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/6/icu') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal217" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi217 as $i217)
                    @if ($i217->booked == $i217->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/217/icu') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/217/icu') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                {{-- Ini yang perlu ditambahkan --}}
                @foreach ($isi217 as $i217)
                    @if ($i217->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/217/icu') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                {{-- Sampai Sini --}}
                @foreach ($isi217 as $i217)
                    @if ($i217->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/217/icu') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
<div class="modal fade" id="ChoiceModal218" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($isi218 as $i218)
                    @if ($i218->booked == $i218->kapasitas)
                        <form action="">
                            <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2" value="Entry Pasien Masuk Rawat Inap" disabled>
                        </form>
                        {{-- <a href="{{ url('/booking-mrs/218/icu') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                    @else
                        <a href="{{ url('/booking-mrs/218/icu') }}" class="btn btn-outline-primary btn-lg btn-block">
                            Entry Pasien Masuk Rawat Inap
                        </a>
                    @endif
                @endforeach
                {{-- Ini yang perlu ditambahkan --}}
                @foreach ($isi218 as $i218)
                    @if ($i218->booked > 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Entry Pasien Reservasi
                        </button>
                    @else
                        <a href="{{ url('/booking-page/218/icu') }}" class="btn btn-outline-primary btn-lg btn-block" >
                            Entry Pasien Reservasi
                        </a>
                    @endif
                @endforeach
                {{-- Sampai Sini --}}
                @foreach ($isi218 as $i218)
                    @if ($i218->booked == 0)
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" id="keluar" data-target="#KeluarForm" disabled>
                            Pasien Keluar Rawat Inap
                        </button>
                    @else
                        <a href="{{ url('/booking-keluar/218/icu') }}" class="btn btn-outline-primary btn-lg btn-block" >
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
    
    <!-- Data Table JavaScript -->
    <script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-dt/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendors/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('dist/js/dataTables-data.js') }}"></script>

    {{-- Daterange --}}
    <script src="{{ asset('vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{ asset('vendors/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{ asset('dist/js/daterangepicker-data.js')}}"></script>



@endsection
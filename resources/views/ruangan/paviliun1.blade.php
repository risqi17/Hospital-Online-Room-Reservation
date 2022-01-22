@extends('_master')

@section('title-content')
    Paviliun 1
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
                                    <span class="display-5 font-weight-400 text-dark"><span class="counter-anim">
                                            @foreach ($dirawat as $dr)
                                                {{ $dr->hasil }}
                                            @endforeach
                                        </span> Pasien</span>
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
                                            @endforeach
                                        </span> Pasien</span>

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
                                            @endforeach
                                        </span> Pasien</span>
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

                            @if (checkUtama(7) == true)
                                <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                                    <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                                </div>
                            @endif


                            <div class="card-body">

                                @foreach ($isi7 as $i7)
                                    <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                                        {{ $i7->kapasitas }}</h5>

                                    @if ($i7->kapasitas == 1)
                                        @if ($i7->booked == 0 && $i7->bkg == 0)
                                            <p class="card-text">Ruangan Tersedia</p>
                                        @else
                                            <ul>
                                                @foreach ($pn7 as $p)
                                                    <li class="text-white">
                                                        {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    @else
                                        @if ($i7->booked == 0 && $i7->bkg == 0)
                                            <p class="card-text">Ruangan Tersedia</p>
                                        @else
                                            <ul>
                                                @foreach ($pn7 as $p)
                                                    <li class="text-white">
                                                        {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                                    </li>
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
            <div class="col-lg-3">

            </div>
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
                        @if (checkUtama(8) == true)
                            <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                                <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                            </div>
                        @endif
                        <div class="card-body">
                            @foreach ($isi8 as $i8)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                                    {{ $i8->kapasitas }}</h5>

                                @if ($i8->kapasitas == 1)
                                    @if ($i8->booked == 0 && $i8->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn8 as $p)
                                                <li class="text-white">
                                                    {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i8->booked == 0 && $i8->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn8 as $p)
                                                <li class="text-white">
                                                    {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                                </li>
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
                    @if (checkUtama(9) == true)
                        <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                            <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                        </div>
                    @endif
                    <div class="card-body">
                        @foreach ($isi9 as $i9)
                            <h5 class="card-title text-center"><i
                                    class="material-icons">single_bed</i>{{ $i9->kapasitas }}</h5>

                            @if ($i9->kapasitas == 1)
                                @if ($i9->booked == 0 && $i9->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn9 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i9->booked == 0 && $i9->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn9 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
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
                @if (checkUtama(10) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi10 as $i10)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i> {{ $i10->kapasitas }}
                        </h5>

                        @if ($i10->kapasitas == 1)
                            @if ($i10->booked == 0 && $i10->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn10 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i10->booked == 0 && $i10->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn10 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
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

                    @if (checkUtama(21) == true)
                        <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                            <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                        </div>
                    @endif
                    <div class="card-body">
                        @foreach ($isi21 as $i21)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                                {{ $i21->kapasitas }}</h5>

                            @if ($i21->kapasitas == 1)
                                @if ($i21->booked == 0 && $i21->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn21 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i21->booked == 0 && $i21->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn21 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
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
        @foreach ($kamar195 as $k195)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal195">
                @if ($k195->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">FLAMBOYAN 116-1</div>
                    @elseif ($bk195 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">FLAMBOYAN 116-1</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">FLAMBOYAN 116-1</div>
                @endif
                @if (checkUtama(195) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi195 as $i195)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i195->kapasitas }}</h5>

                        @if ($i195->kapasitas == 1)
                            @if ($i195->booked == 0 && $i195->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn195 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i195->booked == 0 && $i195->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn195 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
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
        @foreach ($kamar196 as $k196)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal196">
                @if ($k196->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">FLAMBOYAN 116-2</div>
                    @elseif ($bk196 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">FLAMBOYAN 116-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">FLAMBOYAN 116-2</div>
                @endif
                @if (checkUtama(196) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi196 as $i196)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i196->kapasitas }}</h5>

                        @if ($i196->kapasitas == 1)
                            @if ($i196->booked == 0 && $i196->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn196 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i196->booked == 0 && $i196->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn196 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
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
        @foreach ($kamar197 as $k197)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal197">
                @if ($k197->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">FLAMBOYAN 117-1</div>
                    @elseif ($bk197 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">FLAMBOYAN 117-1</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">FLAMBOYAN 117-1</div>
                @endif
                @if (checkUtama(197) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi197 as $i197)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i197->kapasitas }}</h5>

                        @if ($i197->kapasitas == 1)
                            @if ($i197->booked == 0 && $i197->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn197 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i197->booked == 0 && $i197->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn197 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
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
        @foreach ($kamar198 as $k198)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal198">
                @if ($k198->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">FLAMBOYAN 117-2</div>
                    @elseif ($bk198 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">FLAMBOYAN 117-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">FLAMBOYAN 117-2</div>
                @endif
                @if (checkUtama(198) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi198 as $i198)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i198->kapasitas }}</h5>

                        @if ($i198->kapasitas == 1)
                            @if ($i198->booked == 0 && $i198->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn198 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i198->booked == 0 && $i198->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn198 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
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
            @foreach ($kamar199 as $k199)
                <a href="#" data-toggle="modal" data-target="#ChoiceModal199">
                    @if ($k199->hasil > 0)
                        <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">FLAMBOYAN 118-1</div>
                        @elseif ($bk199 > 0)
                            <div id="icu1" class="card bg-warning">
                                <div class="card-header text-white">FLAMBOYAN 118-1</div>
                            @else
                                <div id="icu1" class="card bg-light">
                                    <div class="card-header ">FLAMBOYAN 118-1</div>
                    @endif
                    @if (checkUtama(199) == true)
                        <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                            <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                        </div>
                    @endif

                    <div class="card-body">
                        @foreach ($isi199 as $i199)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                                {{ $i199->kapasitas }}</h5>

                            @if ($i199->kapasitas == 1)
                                @if ($i199->booked == 0 && $i199->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn199 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i199->booked == 0 && $i199->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn199 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
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
        @foreach ($kamar200 as $k200)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal200">
                @if ($k200->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">FLAMBOYAN 118-2</div>
                    @elseif ($bk200 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">FLAMBOYAN 118-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">FLAMBOYAN 118-2</div>
                @endif
                @if (checkUtama(200) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi200 as $i200)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i200->kapasitas }}</h5>

                        @if ($i200->kapasitas == 1)
                            @if ($i200->booked == 0 && $i200->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn200 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i200->booked == 0 && $i200->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn200 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
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
        @foreach ($kamar201 as $k201)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal201">
                @if ($k201->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">FLAMBOYAN 119-1</div>
                    @elseif ($bk201 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">FLAMBOYAN 119-1</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">FLAMBOYAN 119-1</div>
                @endif
                @if (checkUtama(201) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi201 as $i201)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i201->kapasitas }}</h5>

                        @if ($i201->kapasitas == 1)
                            @if ($i201->booked == 0 && $i201->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn201 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i201->booked == 0 && $i201->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn201 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
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
        @foreach ($kamar202 as $k202)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal202">
                @if ($k202->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">FLAMBOYAN 119-2</div>
                    @elseif ($bk202 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">FLAMBOYAN 119-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">FLAMBOYAN 119-2</div>
                @endif
                @if (checkUtama(202) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi202 as $i202)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i202->kapasitas }}</h5>

                        @if ($i202->kapasitas == 1)
                            @if ($i202->booked == 0 && $i202->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn202 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i202->booked == 0 && $i202->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn202 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
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
        @foreach ($kamar203 as $k203)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal203">
                @if ($k203->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">FLAMBOYAN 120-1</div>
                    @elseif ($bk203 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">FLAMBOYAN 120-1</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">FLAMBOYAN 120-1</div>
                @endif
                @if (checkUtama(203) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi203 as $i203)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i203->kapasitas }}</h5>

                        @if ($i203->kapasitas == 1)
                            @if ($i203->booked == 0 && $i203->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn203 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i203->booked == 0 && $i203->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn203 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
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
        @foreach ($kamar204 as $k204)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal204">
                @if ($k204->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">FLAMBOYAN 120-2</div>
                    @elseif ($bk204 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">FLAMBOYAN 120-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">FLAMBOYAN 120-2</div>
                @endif
                @if (checkUtama(204) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi204 as $i204)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i204->kapasitas }}</h5>

                        @if ($i204->kapasitas == 1)
                            @if ($i204->booked == 0 && $i204->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn204 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i204->booked == 0 && $i204->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn204 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
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
            @foreach ($kamar205 as $k205)
                <a href="#" data-toggle="modal" data-target="#ChoiceModal205">
                    @if ($k205->hasil > 0)
                        <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">ICU ISOLASI 109</div>
                        @elseif ($bk205 > 0)
                            <div id="icu1" class="card bg-warning">
                                <div class="card-header text-white">ICU ISOLASI 109</div>
                            @else
                                <div id="icu1" class="card bg-light">
                                    <div class="card-header ">ICU ISOLASI 109</div>
                    @endif
                    @if (checkUtama(205) == true)
                        <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                            <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                        </div>
                    @endif

                    <div class="card-body">
                        @foreach ($isi205 as $i205)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                                {{ $i205->kapasitas }}</h5>

                            @if ($i205->kapasitas == 1)
                                @if ($i205->booked == 0 && $i205->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn205 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i205->booked == 0 && $i205->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn205 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
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
        @foreach ($kamar206 as $k206)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal206">
                @if ($k206->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">ICU ISOLASI 110</div>
                    @elseif ($bk206 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">ICU ISOLASI 110</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">ICU ISOLASI 110</div>
                @endif
                @if (checkUtama(206) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi206 as $i206)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i206->kapasitas }}</h5>

                        @if ($i206->kapasitas == 1)
                            @if ($i206->booked == 0 && $i206->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn206 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i206->booked == 0 && $i206->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn206 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
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
        @foreach ($kamar207 as $k207)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal207">
                @if ($k207->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">ICU ISOLASI 111</div>
                    @elseif ($bk207 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">ICU ISOLASI 111</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">ICU ISOLASI 111</div>
                @endif
                @if (checkUtama(207) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi207 as $i207)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i207->kapasitas }}</h5>

                        @if ($i207->kapasitas == 1)
                            @if ($i207->booked == 0 && $i207->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn207 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i207->booked == 0 && $i207->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn207 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
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
        @foreach ($kamar208 as $k208)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal208">
                @if ($k208->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">ISOLASI 105-1</div>
                    @elseif ($bk208 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">ISOLASI 105-1</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">ISOLASI 105-1</div>
                @endif
                @if (checkUtama(208) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi208 as $i208)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i208->kapasitas }}</h5>

                        @if ($i208->kapasitas == 1)
                            @if ($i208->booked == 0 && $i208->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn208 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i208->booked == 0 && $i208->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn208 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
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
        @foreach ($kamar209 as $k209)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal209">
                @if ($k209->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">ISOLASI 105-2</div>
                    @elseif ($bk209 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">ISOLASI 105-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">ISOLASI 105-2</div>
                @endif
                @if (checkUtama(209) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi209 as $i209)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i209->kapasitas }}</h5>

                        @if ($i209->kapasitas == 1)
                            @if ($i209->booked == 0 && $i209->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn209 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i209->booked == 0 && $i209->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn209 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
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
            @foreach ($kamar210 as $k210)
                <a href="#" data-toggle="modal" data-target="#ChoiceModal210">
                    @if ($k210->hasil > 0)
                        <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">ISOLASI 107-1</div>
                        @elseif ($bk210 > 0)
                            <div id="icu1" class="card bg-warning">
                                <div class="card-header text-white">ISOLASI 107-1</div>
                            @else
                                <div id="icu1" class="card bg-light">
                                    <div class="card-header ">ISOLASI 107-1</div>
                    @endif
                    @if (checkUtama(210) == true)
                        <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                            <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                        </div>
                    @endif

                    <div class="card-body">
                        @foreach ($isi210 as $i210)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                                {{ $i210->kapasitas }}</h5>

                            @if ($i210->kapasitas == 1)
                                @if ($i210->booked == 0 && $i210->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn210 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i210->booked == 0 && $i210->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn210 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
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
        @foreach ($kamar211 as $k211)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal211">
                @if ($k211->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">ISOLASI 107-2</div>
                    @elseif ($bk211 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">ISOLASI 107-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">ISOLASI 107-2</div>
                @endif
                @if (checkUtama(211) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi211 as $i211)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i211->kapasitas }}</h5>

                        @if ($i211->kapasitas == 1)
                            @if ($i211->booked == 0 && $i211->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn211 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i211->booked == 0 && $i211->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn211 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
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
        @foreach ($kamar212 as $k212)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal212">
                @if ($k212->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">ISOLASI 108-1</div>
                    @elseif ($bk212 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">ISOLASI 108-1</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">ISOLASI 108-1</div>
                @endif
                @if (checkUtama(212) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi212 as $i212)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i212->kapasitas }}</h5>

                        @if ($i212->kapasitas == 1)
                            @if ($i212->booked == 0 && $i212->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn212 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i212->booked == 0 && $i212->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn212 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
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
        @foreach ($kamar213 as $k213)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal213">
                @if ($k213->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">ISOLASI 108-2</div>
                    @elseif ($bk213 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">ISOLASI 108-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">ISOLASI 108-2</div>
                @endif
                @if (checkUtama(213) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi213 as $i213)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i213->kapasitas }}</h5>

                        @if ($i213->kapasitas == 1)
                            @if ($i213->booked == 0 && $i213->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn213 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i213->booked == 0 && $i213->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn213 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
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
        @foreach ($kamar214 as $k214)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal214">
                @if ($k214->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">ISOLASI 112-1</div>
                    @elseif ($bk214 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">ISOLASI 112-1</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">ISOLASI 112-1</div>
                @endif
                @if (checkUtama(214) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi214 as $i214)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i214->kapasitas }}</h5>

                        @if ($i214->kapasitas == 1)
                            @if ($i214->booked == 0 && $i214->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn214 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i214->booked == 0 && $i214->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn214 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
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
        @foreach ($kamar215 as $k215)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal215">
                @if ($k215->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">ISOLASI 112-2</div>
                    @elseif ($bk215 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">ISOLASI 112-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">ISOLASI 112-2</div>
                @endif
                @if (checkUtama(215) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi215 as $i215)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i215->kapasitas }}</h5>

                        @if ($i215->kapasitas == 1)
                            @if ($i215->booked == 0 && $i215->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn215 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i215->booked == 0 && $i215->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn215 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
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

    {{-- Modal Pilihan --}}
    <div class="modal fade" id="ChoiceModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/7/paviliun1') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/7/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    {{-- Ini yang perlu ditambahkan --}}
                    @foreach ($isi7 as $i7)
                        @if ($i7->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/7/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    {{-- Sampai Sini --}}
                    @foreach ($isi7 as $i7)
                        @if ($i7->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/7/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
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
    <div class="modal fade" id="ChoiceModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/8/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    {{-- Ini yang perlu ditambahkan --}}
                    @foreach ($isi8 as $i8)
                        @if ($i8->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/8/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    {{-- Sampai Sini --}}

                    @foreach ($isi8 as $i8)
                        @if ($i8->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/8/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
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
    <div class="modal fade" id="ChoiceModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/9/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    {{-- Ini yang perlu ditambahkan --}}
                    @foreach ($isi9 as $i9)
                        @if ($i9->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/9/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    {{-- Sampai Sini --}}

                    @foreach ($isi9 as $i9)
                        @if ($i9->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/9/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
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
    <div class="modal fade" id="ChoiceModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/10/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    {{-- Ini yang perlu ditambahkan --}}
                    @foreach ($isi10 as $i10)
                        @if ($i10->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/10/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    {{-- Sampai Sini --}}

                    @foreach ($isi10 as $i10)
                        @if ($i10->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/10/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
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
    <div class="modal fade" id="ChoiceModal21" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/21/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    {{-- Ini yang perlu ditambahkan --}}
                    @foreach ($isi21 as $i21)
                        @if ($i21->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/21/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    {{-- Sampai Sini --}}

                    @foreach ($isi21 as $i21)
                        @if ($i21->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/21/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
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
    <div class="modal fade" id="ChoiceModal195" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi195 as $i195)
                        @if ($i195->booked == $i195->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/195/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    {{-- Ini yang perlu ditambahkan --}}
                    @foreach ($isi195 as $i195)
                        @if ($i195->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/195/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    {{-- Sampai Sini --}}

                    @foreach ($isi195 as $i195)
                        @if ($i195->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/195/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
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
    <div class="modal fade" id="ChoiceModal196" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi196 as $i196)
                        @if ($i196->booked == $i196->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/196/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    {{-- Ini yang perlu ditambahkan --}}
                    @foreach ($isi196 as $i196)
                        @if ($i196->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/196/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    {{-- Sampai Sini --}}

                    @foreach ($isi196 as $i196)
                        @if ($i196->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/196/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
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
    <div class="modal fade" id="ChoiceModal197" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi197 as $i197)
                        @if ($i197->booked == $i197->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/197/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    {{-- Ini yang perlu ditambahkan --}}
                    @foreach ($isi197 as $i197)
                        @if ($i197->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/197/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    {{-- Sampai Sini --}}

                    @foreach ($isi197 as $i197)
                        @if ($i197->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/197/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
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
    <div class="modal fade" id="ChoiceModal198" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi198 as $i198)
                        @if ($i198->booked == $i198->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/198/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    {{-- Ini yang perlu ditambahkan --}}
                    @foreach ($isi198 as $i198)
                        @if ($i198->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/198/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi198 as $i198)
                        @if ($i198->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/198/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
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
    <div class="modal fade" id="ChoiceModal199" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi199 as $i199)
                        @if ($i199->booked == $i199->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/199/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    {{-- Ini yang perlu ditambahkan --}}
                    @foreach ($isi199 as $i199)
                        @if ($i199->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/199/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    {{-- Sampai Sini --}}

                    @foreach ($isi199 as $i199)
                        @if ($i199->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/199/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
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
    <div class="modal fade" id="ChoiceModal200" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi200 as $i200)
                        @if ($i200->booked == $i200->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/200/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    {{-- Ini yang perlu ditambahkan --}}
                    @foreach ($isi200 as $i200)
                        @if ($i200->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/200/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    {{-- Sampai Sini --}}

                    @foreach ($isi200 as $i200)
                        @if ($i200->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/200/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
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
    <div class="modal fade" id="ChoiceModal201" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi201 as $i201)
                        @if ($i201->booked == $i201->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/201/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    {{-- Ini yang perlu ditambahkan --}}
                    @foreach ($isi201 as $i201)
                        @if ($i201->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/201/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    {{-- Sampai Sini --}}

                    @foreach ($isi201 as $i201)
                        @if ($i201->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/201/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
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
    <div class="modal fade" id="ChoiceModal202" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi202 as $i202)
                        @if ($i202->booked == $i202->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/202/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    {{-- Ini yang perlu ditambahkan --}}
                    @foreach ($isi202 as $i202)
                        @if ($i202->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/202/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    {{-- Sampai Sini --}}

                    @foreach ($isi202 as $i202)
                        @if ($i202->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/202/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
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
    <div class="modal fade" id="ChoiceModal203" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi203 as $i203)
                        @if ($i203->booked == $i203->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/203/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    {{-- Ini yang perlu ditambahkan --}}
                    @foreach ($isi203 as $i203)
                        @if ($i203->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/203/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    {{-- Sampai Sini --}}

                    @foreach ($isi203 as $i203)
                        @if ($i203->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/203/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
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
    <div class="modal fade" id="ChoiceModal204" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi204 as $i204)
                        @if ($i204->booked == $i204->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/204/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    {{-- Ini yang perlu ditambahkan --}}
                    @foreach ($isi204 as $i204)
                        @if ($i204->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/204/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    {{-- Sampai Sini --}}

                    @foreach ($isi204 as $i204)
                        @if ($i204->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/204/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
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
    <div class="modal fade" id="ChoiceModal205" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi205 as $i205)
                        @if ($i205->booked == $i205->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/205/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    {{-- Ini yang perlu ditambahkan --}}
                    @foreach ($isi205 as $i205)
                        @if ($i205->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/205/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    {{-- Sampai Sini --}}

                    @foreach ($isi205 as $i205)
                        @if ($i205->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/205/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
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
    <div class="modal fade" id="ChoiceModal206" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi206 as $i206)
                        @if ($i206->booked == $i206->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/206/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    {{-- Ini yang perlu ditambahkan --}}
                    @foreach ($isi206 as $i206)
                        @if ($i206->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/206/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    {{-- Sampai Sini --}}

                    @foreach ($isi206 as $i206)
                        @if ($i206->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/206/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
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
    <div class="modal fade" id="ChoiceModal207" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi207 as $i207)
                        @if ($i207->booked == $i207->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/207/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    {{-- Ini yang perlu ditambahkan --}}
                    @foreach ($isi207 as $i207)
                        @if ($i207->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/207/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    {{-- Sampai Sini --}}

                    @foreach ($isi207 as $i207)
                        @if ($i207->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/207/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
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
    <div class="modal fade" id="ChoiceModal208" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi208 as $i208)
                        @if ($i208->booked == $i208->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/208/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    {{-- Ini yang perlu ditambahkan --}}
                    @foreach ($isi208 as $i208)
                        @if ($i208->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/208/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    {{-- Sampai Sini --}}

                    @foreach ($isi208 as $i208)
                        @if ($i208->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/208/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
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
    <div class="modal fade" id="ChoiceModal209" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi209 as $i209)
                        @if ($i209->booked == $i209->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/209/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    {{-- Ini yang perlu ditambahkan --}}
                    @foreach ($isi209 as $i209)
                        @if ($i209->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/209/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    {{-- Sampai Sini --}}

                    @foreach ($isi209 as $i209)
                        @if ($i209->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/209/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
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
    <div class="modal fade" id="ChoiceModal210" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi210 as $i210)
                        @if ($i210->booked == $i210->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/210/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    {{-- Ini yang perlu ditambahkan --}}
                    @foreach ($isi210 as $i210)
                        @if ($i210->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/210/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    {{-- Sampai Sini --}}

                    @foreach ($isi210 as $i210)
                        @if ($i210->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/210/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
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
    <div class="modal fade" id="ChoiceModal211" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi211 as $i211)
                        @if ($i211->booked == $i211->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/211/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    {{-- Ini yang perlu ditambahkan --}}
                    @foreach ($isi211 as $i211)
                        @if ($i211->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/211/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    {{-- Sampai Sini --}}

                    @foreach ($isi211 as $i211)
                        @if ($i211->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/211/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
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
    <div class="modal fade" id="ChoiceModal212" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi212 as $i212)
                        @if ($i212->booked == $i212->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/212/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    {{-- Ini yang perlu ditambahkan --}}
                    @foreach ($isi212 as $i212)
                        @if ($i212->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/212/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    {{-- Sampai Sini --}}

                    @foreach ($isi212 as $i212)
                        @if ($i212->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/212/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
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
    <div class="modal fade" id="ChoiceModal213" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi213 as $i213)
                        @if ($i213->booked == $i213->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/213/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    {{-- Ini yang perlu ditambahkan --}}
                    @foreach ($isi213 as $i213)
                        @if ($i213->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/213/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    {{-- Sampai Sini --}}

                    @foreach ($isi213 as $i213)
                        @if ($i213->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/213/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
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
    <div class="modal fade" id="ChoiceModal214" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi214 as $i214)
                        @if ($i214->booked == $i214->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/214/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    {{-- Ini yang perlu ditambahkan --}}
                    @foreach ($isi214 as $i214)
                        @if ($i214->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/214/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    {{-- Sampai Sini --}}

                    @foreach ($isi214 as $i214)
                        @if ($i214->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/214/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
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
    <div class="modal fade" id="ChoiceModal215" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cModalTitle">Entry Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($isi215 as $i215)
                        @if ($i215->booked == $i215->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/215/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    {{-- Ini yang perlu ditambahkan --}}
                    @foreach ($isi215 as $i215)
                        @if ($i215->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/215/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    {{-- Sampai Sini --}}

                    @foreach ($isi215 as $i215)
                        @if ($i215->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/215/paviliun1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
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

@extends('_master')

@section('title-content')
    Lantai 1 (Penyakit Dalam Pria)
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

                <div class="col-lg-1">

                </div>
                <div class="col-lg-2 mb-30">
                    @foreach ($kamar63 as $k63)
                        <a href="#" data-toggle="modal" data-target="#ChoiceModal63">
                            @if ($k63->hasil > 0)
                                <div id="icu1" class="card bg-primary">
                                    <div class="card-header text-white">KEMUNING 101</div>
                                @elseif ($bk63 > 0)
                                    <div id="icu1" class="card bg-warning">
                                        <div class="card-header text-white">KEMUNING 101</div>
                                    @else
                                        <div id="icu1" class="card bg-light">
                                            <div class="card-header ">KEMUNING 101</div>
                            @endif
                            @if (checkUtama(63) == true)
                                <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                                    <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                                </div>
                            @endif

                            <div class="card-body">
                                @foreach ($isi63 as $i63)
                                    <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                                        {{ $i63->kapasitas }}</h5>

                                    @if ($i63->kapasitas == 1)
                                        @if ($i63->booked == 0 && $i63->bkg == 0)
                                            <p class="card-text">Ruangan Tersedia</p>
                                        @else
                                            <ul>
                                                @foreach ($pn63 as $p)
                                                    <li class="text-white">
                                                        {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    @else
                                        @if ($i63->booked == 0 && $i63->bkg == 0)
                                            <p class="card-text">Ruangan Tersedia</p>
                                        @else
                                            <ul>
                                                @foreach ($pn63 as $p)
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

            <div class="col-lg-2">

            </div>

            <div class="col-lg-2 mb-30">
                @foreach ($kamar65 as $k65)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal65">
                        @if ($k65->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                                <div class="card-header text-white">ALAMANDA 103</div>
                            @elseif ($bk65 > 0)
                                <div id="icu1" class="card bg-warning">
                                    <div class="card-header text-white">ALAMANDA 103</div>
                                @else
                                    <div id="icu1" class="card bg-light">
                                        <div class="card-header ">ALAMANDA 103</div>
                        @endif
                        @if (checkUtama(65) == true)
                            <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                                <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                            </div>
                        @endif

                        <div class="card-body">
                            @foreach ($isi65 as $i65)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                                    {{ $i65->kapasitas }}</h5>

                                @if ($i65->kapasitas == 1)
                                    @if ($i65->booked == 0 && $i65->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn65 as $p)
                                                <li class="text-white">
                                                    {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i65->booked == 0 && $i65->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn65 as $p)
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

        <div class="col-lg-2">

        </div>
        <div class="col-lg-2 mb-30">
            @foreach ($kamar219 as $k219)
                <a href="#" data-toggle="modal" data-target="#ChoiceModal219">
                    @if ($k219->hasil > 0)
                        <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">ALAMANDA 108</div>
                        @elseif ($bk219 > 0)
                            <div id="icu1" class="card bg-warning">
                                <div class="card-header text-white">ALAMANDA 108</div>
                            @else
                                <div id="icu1" class="card bg-light">
                                    <div class="card-header ">ALAMANDA 108</div>
                    @endif
                    @if (checkUtama(219) == true)
                        <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                            <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                        </div>
                    @endif

                    <div class="card-body">
                        @foreach ($isi219 as $i219)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                                {{ $i219->kapasitas }}</h5>

                            @if ($i219->kapasitas == 1)
                                @if ($i219->booked == 0 && $i219->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn219 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i219->booked == 0 && $i219->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn219 as $p)
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
            @foreach ($kamar220 as $k220)
                <a href="#" data-toggle="modal" data-target="#ChoiceModal220">
                    @if ($k220->hasil > 0)
                        <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">AZALEA 102-1</div>
                        @elseif ($bk220 > 0)
                            <div id="icu1" class="card bg-warning">
                                <div class="card-header text-white">AZALEA 102-1</div>
                            @else
                                <div id="icu1" class="card bg-light">
                                    <div class="card-header ">AZALEA 102-1</div>
                    @endif
                    @if (checkUtama(220) == true)
                        <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                            <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                        </div>
                    @endif

                    <div class="card-body">
                        @foreach ($isi220 as $i220)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                                {{ $i220->kapasitas }}</h5>

                            @if ($i220->kapasitas == 1)
                                @if ($i220->booked == 0 && $i220->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn220 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i220->booked == 0 && $i220->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn220 as $p)
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
        @foreach ($kamar221 as $k221)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal221">
                @if ($k221->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">AZALEA 102-2</div>
                    @elseif ($bk221 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 102-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">AZALEA 102-1</div>
                @endif
                @if (checkUtama(221) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi221 as $i221)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i221->kapasitas }}</h5>

                        @if ($i221->kapasitas == 1)
                            @if ($i221->booked == 0 && $i221->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn221 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i221->booked == 0 && $i221->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn221 as $p)
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


    <div class="col-lg-4">

    </div>
    <div class="col-lg-2 mb-30">
        @foreach ($kamar67 as $k67)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal67">
                @if ($k67->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">AZALEA 104-1</div>
                    @elseif ($bk67 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 104-1</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">AZALEA 104-1</div>
                @endif
                @if (checkUtama(67) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi67 as $i67)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i67->kapasitas }}</h5>

                        @if ($i67->kapasitas == 1)
                            @if ($i67->booked == 0 && $i67->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn67 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i67->booked == 0 && $i67->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn67 as $p)
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
        @foreach ($kamar68 as $k68)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal68">
                @if ($k68->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">AZALEA 104-2</div>
                    @elseif ($bk68 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 104-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">AZALEA 104-2</div>
                @endif
                @if (checkUtama(68) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi68 as $i68)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i68->kapasitas }}</h5>

                        @if ($i68->kapasitas == 1)
                            @if ($i68->booked == 0 && $i68->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn68 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i68->booked == 0 && $i68->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn68 as $p)
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
            @foreach ($kamar222 as $k222)
                <a href="#" data-toggle="modal" data-target="#ChoiceModal222">
                    @if ($k222->hasil > 0)
                        <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">AZALEA 105-1</div>
                        @elseif ($bk222 > 0)
                            <div id="icu1" class="card bg-warning">
                                <div class="card-header text-white">AZALEA 105-1</div>
                            @else
                                <div id="icu1" class="card bg-light">
                                    <div class="card-header ">AZALEA 105-1</div>
                    @endif
                    @if (checkUtama(222) == true)
                        <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                            <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                        </div>
                    @endif

                    <div class="card-body">
                        @foreach ($isi222 as $i222)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                                {{ $i222->kapasitas }}</h5>

                            @if ($i222->kapasitas == 1)
                                @if ($i222->booked == 0 && $i222->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn222 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i222->booked == 0 && $i222->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn222 as $p)
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
        @foreach ($kamar223 as $k223)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal223">
                @if ($k223->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">AZALEA 105-2</div>
                    @elseif ($bk223 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 105-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">AZALEA 105-2</div>
                @endif
                @if (checkUtama(223) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi223 as $i223)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i223->kapasitas }}</h5>

                        @if ($i223->kapasitas == 1)
                            @if ($i223->booked == 0 && $i223->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn223 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i223->booked == 0 && $i223->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn223 as $p)
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

    <div class="col-lg-4">

    </div>
    <div class="col-lg-2 mb-30">
        @foreach ($kamar71 as $k71)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal71">
                @if ($k71->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">AZALEA 106-1</div>
                    @elseif ($bk71 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 106-1</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">AZALEA 106-1</div>
                @endif
                @if (checkUtama(71) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi71 as $i71)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i71->kapasitas }}</h5>

                        @if ($i71->kapasitas == 1)
                            @if ($i71->booked == 0 && $i71->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn71 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i71->booked == 0 && $i71->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn71 as $p)
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
        @foreach ($kamar72 as $k72)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal72">
                @if ($k72->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">AZALEA 106-2</div>
                    @elseif ($bk72 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 106-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">AZALEA 106-2</div>
                @endif
                @if (checkUtama(72) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi72 as $i72)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i72->kapasitas }}</h5>

                        @if ($i72->kapasitas == 1)
                            @if ($i72->booked == 0 && $i72->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn72 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i72->booked == 0 && $i72->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn72 as $p)
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
            @foreach ($kamar69 as $k69)
                <a href="#" data-toggle="modal" data-target="#ChoiceModal69">
                    @if ($k69->hasil > 0)
                        <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">AZALEA 107-1</div>
                        @elseif ($bk69 > 0)
                            <div id="icu1" class="card bg-warning">
                                <div class="card-header text-white">AZALEA 107-1</div>
                            @else
                                <div id="icu1" class="card bg-light">
                                    <div class="card-header ">AZALEA 107-1</div>
                    @endif
                    @if (checkUtama(69) == true)
                        <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                            <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                        </div>
                    @endif

                    <div class="card-body">
                        @foreach ($isi69 as $i69)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                                {{ $i69->kapasitas }}</h5>

                            @if ($i69->kapasitas == 1)
                                @if ($i69->booked == 0 && $i69->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn69 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i69->booked == 0 && $i69->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn69 as $p)
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
        @foreach ($kamar70 as $k70)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal70">
                @if ($k70->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">AZALEA 107-2</div>
                    @elseif ($bk70 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 107-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">AZALEA 107-2</div>
                @endif
                @if (checkUtama(70) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi70 as $i70)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i70->kapasitas }}</h5>

                        @if ($i70->kapasitas == 1)
                            @if ($i70->booked == 0 && $i70->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn70 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i70->booked == 0 && $i70->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn70 as $p)
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

    <div class="col-lg-4">

    </div>

    <div class="col-lg-2 mb-30">
        @foreach ($kamar73 as $k73)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal73">
                @if ($k73->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">AZALEA 109-1</div>
                    @elseif ($bk73 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 109-1</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">AZALEA 109-1</div>
                @endif
                @if (checkUtama(73) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi73 as $i73)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i73->kapasitas }}</h5>

                        @if ($i73->kapasitas == 1)
                            @if ($i73->booked == 0 && $i73->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn73 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i73->booked == 0 && $i73->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn73 as $p)
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
        @foreach ($kamar74 as $k74)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal74">
                @if ($k74->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">AZALEA 109-2</div>
                    @elseif ($bk74 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 109-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">AZALEA 109-2</div>
                @endif
                @if (checkUtama(74) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi74 as $i74)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i74->kapasitas }}</h5>

                        @if ($i74->kapasitas == 1)
                            @if ($i74->booked == 0 && $i74->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn74 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i74->booked == 0 && $i74->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn74 as $p)
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

    <div class="col-lg-4">

    </div>

    </div>
    <div class="hk-row">
        <div class="col-lg-1">

        </div>
        <div class="col-lg-2 mb-30">
            @foreach ($kamar77 as $k77)
                <a href="#" data-toggle="modal" data-target="#ChoiceModal77">
                    @if ($k77->hasil > 0)
                        <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">SERUNI 111-1</div>
                        @elseif ($bk77 > 0)
                            <div id="icu1" class="card bg-warning">
                                <div class="card-header text-white">SERUNI 111-1</div>
                            @else
                                <div id="icu1" class="card bg-light">
                                    <div class="card-header ">SERUNI 111-1</div>
                    @endif
                    @if (checkUtama(77) == true)
                        <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                            <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                        </div>
                    @endif

                    <div class="card-body">
                        @foreach ($isi77 as $i77)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                                {{ $i77->kapasitas }}</h5>

                            @if ($i77->kapasitas == 1)
                                @if ($i77->booked == 0 && $i77->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn77 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i77->booked == 0 && $i77->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn77 as $p)
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
        @foreach ($kamar78 as $k78)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal78">
                @if ($k78->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">SERUNI 111-2</div>
                    @elseif ($bk78 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">SERUNI 111-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">SERUNI 111-2</div>
                @endif
                @if (checkUtama(78) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi78 as $i78)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i78->kapasitas }}</h5>

                        @if ($i78->kapasitas == 1)
                            @if ($i78->booked == 0 && $i78->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn78 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i78->booked == 0 && $i78->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn78 as $p)
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

    <div class="col-lg-2">

    </div>
    <div class="col-lg-2 mb-30">
        @foreach ($kamar79 as $k79)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal79">
                @if ($k79->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">TANJUNG 110-1</div>
                    @elseif ($bk79 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">TANJUNG 110-1</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">TANJUNG 110-1</div>
                @endif
                @if (checkUtama(79) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi79 as $i79)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i79->kapasitas }}</h5>

                        @if ($i79->kapasitas == 1)
                            @if ($i79->booked == 0 && $i79->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn79 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i79->booked == 0 && $i79->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn79 as $p)
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
        @foreach ($kamar80 as $k80)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal80">
                @if ($k80->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">TANJUNG 110-2</div>
                    @elseif ($bk80 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">TANJUNG 110-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">TANJUNG 110-2</div>
                @endif
                @if (checkUtama(80) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi80 as $i80)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i80->kapasitas }}</h5>

                        @if ($i80->kapasitas == 1)
                            @if ($i80->booked == 0 && $i80->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn80 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i80->booked == 0 && $i80->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn80 as $p)
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
            @foreach ($kamar81 as $k81)
                <a href="#" data-toggle="modal" data-target="#ChoiceModal81">
                    @if ($k81->hasil > 0)
                        <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">SERUNI 111-3</div>
                        @elseif ($bk81 > 0)
                            <div id="icu1" class="card bg-warning">
                                <div class="card-header text-white">SERUNI 111-3</div>
                            @else
                                <div id="icu1" class="card bg-light">
                                    <div class="card-header ">SERUNI 111-3</div>
                    @endif
                    @if (checkUtama(81) == true)
                        <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                            <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                        </div>
                    @endif

                    <div class="card-body">
                        @foreach ($isi81 as $i81)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                                {{ $i81->kapasitas }}</h5>

                            @if ($i81->kapasitas == 1)
                                @if ($i81->booked == 0 && $i81->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn81 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i81->booked == 0 && $i81->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn81 as $p)
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
        @foreach ($kamar82 as $k82)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal82">
                @if ($k82->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">SERUNI 111-4</div>
                    @elseif ($bk82 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">SERUNI 111-4</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">SERUNI 111-4</div>
                @endif
                @if (checkUtama(82) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi82 as $i82)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i82->kapasitas }}</h5>

                        @if ($i82->kapasitas == 1)
                            @if ($i82->booked == 0 && $i82->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn82 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i82->booked == 0 && $i82->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn82 as $p)
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

    <div class="col-lg-2">

    </div>
    <div class="col-lg-2 mb-30">
        @foreach ($kamar83 as $k83)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal83">
                @if ($k83->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">TANJUNG 110-3</div>
                    @elseif ($bk83 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">TANJUNG 110-3</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">TANJUNG 110-3</div>
                @endif
                @if (checkUtama(83) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi83 as $i83)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i83->kapasitas }}</h5>

                        @if ($i83->kapasitas == 1)
                            @if ($i83->booked == 0 && $i83->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn83 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i83->booked == 0 && $i83->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn83 as $p)
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
        @foreach ($kamar84 as $k84)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal84">
                @if ($k84->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">TANJUNG 110-4</div>
                    @elseif ($bk84 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">TANJUNG 110-4</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">TANJUNG 110-4</div>
                @endif
                @if (checkUtama(84) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi84 as $i84)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i84->kapasitas }}</h5>

                        @if ($i84->kapasitas == 1)
                            @if ($i84->booked == 0 && $i84->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn84 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i84->booked == 0 && $i84->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn84 as $p)
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
    </div>

    {{-- Modal Pilihan --}}
    <div class="modal fade" id="ChoiceModal63" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi63 as $i63)
                        @if ($i63->booked == $i63->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/63/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi63 as $i63)
                        @if ($i63->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/63/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi63 as $i63)
                        @if ($i63->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/63/lantai1pdp') }}"
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
    <div class="modal fade" id="ChoiceModal65" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi65 as $i65)
                        @if ($i65->booked == $i65->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/65/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi65 as $i65)
                        @if ($i65->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/65/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi65 as $i65)
                        @if ($i65->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/65/lantai1pdp') }}"
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
    <div class="modal fade" id="ChoiceModal219" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi219 as $i219)
                        @if ($i219->booked == $i219->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/219/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi219 as $i219)
                        @if ($i219->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/219/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi219 as $i219)
                        @if ($i219->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/219/lantai1pdp') }}"
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
    <div class="modal fade" id="ChoiceModal220" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi220 as $i220)
                        @if ($i220->booked == $i220->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/220/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi220 as $i220)
                        @if ($i220->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/220/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi220 as $i220)
                        @if ($i220->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/220/lantai1pdp') }}"
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
    <div class="modal fade" id="ChoiceModal221" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi221 as $i221)
                        @if ($i221->booked == $i221->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/221/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi221 as $i221)
                        @if ($i221->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/221/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi221 as $i221)
                        @if ($i221->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/221/lantai1pdp') }}"
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
    <div class="modal fade" id="ChoiceModal67" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi67 as $i67)
                        @if ($i67->booked == $i67->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/67/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi67 as $i67)
                        @if ($i67->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/67/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi67 as $i67)
                        @if ($i67->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/67/lantai1pdp') }}"
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
    <div class="modal fade" id="ChoiceModal68" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi68 as $i68)
                        @if ($i68->booked == $i68->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/68/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi68 as $i68)
                        @if ($i68->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/68/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi68 as $i68)
                        @if ($i68->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/68/lantai1pdp') }}"
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
    <div class="modal fade" id="ChoiceModal222" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi222 as $i222)
                        @if ($i222->booked == $i222->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/222/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi222 as $i222)
                        @if ($i222->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/222/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi222 as $i222)
                        @if ($i222->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/222/lantai1pdp') }}"
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
    <div class="modal fade" id="ChoiceModal223" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi223 as $i223)
                        @if ($i223->booked == $i223->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/223/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi223 as $i223)
                        @if ($i223->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/223/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi223 as $i223)
                        @if ($i223->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/223/lantai1pdp') }}"
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
    <div class="modal fade" id="ChoiceModal69" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi69 as $i69)
                        @if ($i69->booked == $i69->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/69/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi69 as $i69)
                        @if ($i69->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/69/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi69 as $i69)
                        @if ($i69->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/69/lantai1pdp') }}"
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
    <div class="modal fade" id="ChoiceModal70" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi70 as $i70)
                        @if ($i70->booked == $i70->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/70/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi70 as $i70)
                        @if ($i70->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/70/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi70 as $i70)
                        @if ($i70->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/70/lantai1pdp') }}"
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
    <div class="modal fade" id="ChoiceModal71" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi71 as $i71)
                        @if ($i71->booked == $i71->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/71/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi71 as $i71)
                        @if ($i71->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/71/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi71 as $i71)
                        @if ($i71->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/71/lantai1pdp') }}"
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
    <div class="modal fade" id="ChoiceModal72" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi72 as $i72)
                        @if ($i72->booked == $i72->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/72/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi72 as $i72)
                        @if ($i72->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/72/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi72 as $i72)
                        @if ($i72->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/72/lantai1pdp') }}"
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
    <div class="modal fade" id="ChoiceModal73" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi73 as $i73)
                        @if ($i73->booked == $i73->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/73/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi73 as $i73)
                        @if ($i73->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/73/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi73 as $i73)
                        @if ($i73->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/73/lantai1pdp') }}"
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
    <div class="modal fade" id="ChoiceModal74" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi74 as $i74)
                        @if ($i74->booked == $i74->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/74/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi74 as $i74)
                        @if ($i74->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/74/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi74 as $i74)
                        @if ($i74->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/74/lantai1pdp') }}"
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
    <div class="modal fade" id="ChoiceModal77" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi77 as $i77)
                        @if ($i77->booked == $i77->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/77/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi77 as $i77)
                        @if ($i77->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/77/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi77 as $i77)
                        @if ($i77->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/77/lantai1pdp') }}"
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
    <div class="modal fade" id="ChoiceModal78" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi78 as $i78)
                        @if ($i78->booked == $i78->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/78/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi78 as $i78)
                        @if ($i78->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/78/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi78 as $i78)
                        @if ($i78->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/78/lantai1pdp') }}"
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
    <div class="modal fade" id="ChoiceModal79" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi79 as $i79)
                        @if ($i79->booked == $i79->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/79/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi79 as $i79)
                        @if ($i79->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/79/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi79 as $i79)
                        @if ($i79->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/7/lantai1pdp') }}"
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
    <div class="modal fade" id="ChoiceModal80" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi80 as $i80)
                        @if ($i80->booked == $i80->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/80/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi80 as $i80)
                        @if ($i80->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/80/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi80 as $i80)
                        @if ($i80->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/80/lantai1pdp') }}"
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
    <div class="modal fade" id="ChoiceModal81" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi81 as $i81)
                        @if ($i81->booked == $i81->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/81/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi81 as $i81)
                        @if ($i81->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/81/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi81 as $i81)
                        @if ($i81->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/81/lantai1pdp') }}"
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
    <div class="modal fade" id="ChoiceModal82" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi82 as $i82)
                        @if ($i82->booked == $i82->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/82/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi82 as $i82)
                        @if ($i82->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/82/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi82 as $i82)
                        @if ($i82->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/82/lantai1pdp') }}"
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
    <div class="modal fade" id="ChoiceModal83" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi83 as $i83)
                        @if ($i83->booked == $i83->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/83/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi83 as $i83)
                        @if ($i83->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/83/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi83 as $i83)
                        @if ($i83->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/83/lantai1pdp') }}"
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
    <div class="modal fade" id="ChoiceModal84" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi84 as $i84)
                        @if ($i84->booked == $i84->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/84/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi84 as $i84)
                        @if ($i84->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/84/lantai1pdp') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi84 as $i84)
                        @if ($i84->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/84/lantai1pdp') }}"
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

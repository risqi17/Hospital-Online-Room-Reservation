@extends('_master')

@section('title-content')
    Lantai 4 (Penyakit Dalam Wanita)
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
                    @foreach ($kamar154 as $k154)
                        <a href="#" data-toggle="modal" data-target="#ChoiceModal154">
                            @if ($k154->hasil > 0)
                                <div id="icu1" class="card bg-primary">
                                    <div class="card-header text-white">KEMUNING 401</div>
                                @elseif ($bk154 > 0)
                                    <div id="icu1" class="card bg-warning">
                                        <div class="card-header text-white">KEMUNING 401</div>
                                    @else
                                        <div id="icu1" class="card bg-light">
                                            <div class="card-header ">KEMUNING 401</div>
                            @endif
                            @if (checkUtama(154) == true)
                                <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                                    <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                                </div>
                            @endif

                            <div class="card-body">
                                @foreach ($isi154 as $i154)
                                    <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                                        {{ $i154->kapasitas }}</h5>

                                    @if ($i154->kapasitas == 1)
                                        @if ($i154->booked == 0 && $i154->bkg == 0)
                                            <p class="card-text">Ruangan Tersedia</p>
                                        @else
                                            <ul>
                                                @foreach ($pn154 as $p)
                                                    <li class="text-white">
                                                        {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    @else
                                        @if ($i154->booked == 0 && $i154->bkg == 0)
                                            <p class="card-text">Ruangan Tersedia</p>
                                        @else
                                            <ul>
                                                @foreach ($pn154 as $p)
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
                @foreach ($kamar245 as $k245)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal245">
                        @if ($k245->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                                <div class="card-header text-white">ALAMANDA 403</div>
                            @elseif ($bk245 > 0)
                                <div id="icu1" class="card bg-warning">
                                    <div class="card-header text-white">ALAMANDA 403</div>
                                @else
                                    <div id="icu1" class="card bg-light">
                                        <div class="card-header ">ALAMANDA 403</div>
                        @endif
                        @if (checkUtama(245) == true)
                            <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                                <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                            </div>
                        @endif

                        <div class="card-body">
                            @foreach ($isi245 as $i245)
                                <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                                    {{ $i245->kapasitas }}</h5>

                                @if ($i245->kapasitas == 1)
                                    @if ($i245->booked == 0 && $i245->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn245 as $p)
                                                <li class="text-white">
                                                    {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i245->booked == 0 && $i245->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn245 as $p)
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
            @foreach ($kamar246 as $k246)
                <a href="#" data-toggle="modal" data-target="#ChoiceModal246">
                    @if ($k246->hasil > 0)
                        <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">ALAMANDA 405</div>
                        @elseif ($bk246 > 0)
                            <div id="icu1" class="card bg-warning">
                                <div class="card-header text-white">ALAMANDA 405</div>
                            @else
                                <div id="icu1" class="card bg-light">
                                    <div class="card-header ">ALAMANDA 405</div>
                    @endif
                    @if (checkUtama(246) == true)
                        <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                            <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                        </div>
                    @endif

                    <div class="card-body">
                        @foreach ($isi246 as $i246)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                                {{ $i246->kapasitas }}</h5>

                            @if ($i246->kapasitas == 1)
                                @if ($i246->booked == 0 && $i246->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn246 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i246->booked == 0 && $i246->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn246 as $p)
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
            @foreach ($kamar247 as $k247)
                <a href="#" data-toggle="modal" data-target="#ChoiceModal247">
                    @if ($k247->hasil > 0)
                        <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">AZALEA 402-1</div>
                        @elseif ($bk247 > 0)
                            <div id="icu1" class="card bg-warning">
                                <div class="card-header text-white">AZALEA 402-1</div>
                            @else
                                <div id="icu1" class="card bg-light">
                                    <div class="card-header ">AZALEA 402-1</div>
                    @endif
                    @if (checkUtama(247) == true)
                        <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                            <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                        </div>
                    @endif

                    <div class="card-body">
                        @foreach ($isi247 as $i247)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                                {{ $i247->kapasitas }}</h5>

                            @if ($i247->kapasitas == 1)
                                @if ($i247->booked == 0 && $i247->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn247 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i247->booked == 0 && $i247->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn247 as $p)
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
        @foreach ($kamar248 as $k248)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal248">
                @if ($k248->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">AZALEA 402-2</div>
                    @elseif ($bk248 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 402-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">AZALEA 402-2</div>
                @endif
                @if (checkUtama(248) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi248 as $i248)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i248->kapasitas }}</h5>

                        @if ($i248->kapasitas == 1)
                            @if ($i248->booked == 0 && $i248->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn248 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i248->booked == 0 && $i248->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn248 as $p)
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
        @foreach ($kamar249 as $k249)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal249">
                @if ($k249->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">AZALEA 404-1</div>
                    @elseif ($bk249 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 404-1</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">AZALEA 404-1</div>
                @endif
                @if (checkUtama(249) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi249 as $i249)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i249->kapasitas }}</h5>

                        @if ($i249->kapasitas == 1)
                            @if ($i249->booked == 0 && $i249->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn249 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i249->booked == 0 && $i249->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn249 as $p)
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
        @foreach ($kamar250 as $k250)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal250">
                @if ($k250->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">ALAMANDA 404</div>
                    @elseif ($bk250 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">ALAMANDA 404</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">ALAMANDA 404</div>
                @endif
                @if (checkUtama(250) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi250 as $i250)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i250->kapasitas }}</h5>

                        @if ($i250->kapasitas == 1)
                            @if ($i250->booked == 0 && $i250->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn250 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i250->booked == 0 && $i250->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn250 as $p)
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
            @foreach ($kamar161 as $k161)
                <a href="#" data-toggle="modal" data-target="#ChoiceModal161">
                    @if ($k161->hasil > 0)
                        <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">AZALEA 406-1</div>
                        @elseif ($bk161 > 0)
                            <div id="icu1" class="card bg-warning">
                                <div class="card-header text-white">AZALEA 406-1</div>
                            @else
                                <div id="icu1" class="card bg-light">
                                    <div class="card-header ">AZALEA 406-1</div>
                    @endif
                    @if (checkUtama(161) == true)
                        <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                            <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                        </div>
                    @endif

                    <div class="card-body">
                        @foreach ($isi161 as $i161)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                                {{ $i161->kapasitas }}</h5>

                            @if ($i161->kapasitas == 1)
                                @if ($i161->booked == 0 && $i161->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn161 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i161->booked == 0 && $i161->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn161 as $p)
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
        @foreach ($kamar162 as $k162)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal162">
                @if ($k162->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">AZALEA 406-2</div>
                    @elseif ($bk162 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 406-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">AZALEA 406-2</div>
                @endif
                @if (checkUtama(162) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif


                <div class="card-body">
                    @foreach ($isi162 as $i162)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i162->kapasitas }}</h5>

                        @if ($i162->kapasitas == 1)
                            @if ($i162->booked == 0 && $i162->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn162 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i162->booked == 0 && $i162->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn162 as $p)
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
        @foreach ($kamar159 as $k159)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal159">
                @if ($k159->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">AZALEA 407-1</div>
                    @elseif ($bk159 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 407-1</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">AZALEA 407-1</div>
                @endif

                @if (checkUtama(159) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi159 as $i159)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i159->kapasitas }}</h5>

                        @if ($i159->kapasitas == 1)
                            @if ($i159->booked == 0 && $i159->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn159 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i159->booked == 0 && $i159->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn159 as $p)
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
        @foreach ($kamar160 as $k160)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal160">
                @if ($k160->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">AZALEA 407-2</div>
                    @elseif ($bk160 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 407-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">AZALEA 407-2</div>
                @endif
                @if (checkUtama(160) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi160 as $i160)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i160->kapasitas }}</h5>

                        @if ($i160->kapasitas == 1)
                            @if ($i160->booked == 0 && $i160->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn160 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i160->booked == 0 && $i160->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn160 as $p)
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
            @foreach ($kamar165 as $k165)
                <a href="#" data-toggle="modal" data-target="#ChoiceModal165">
                    @if ($k165->hasil > 0)
                        <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">AZALEA 408-1</div>
                        @elseif ($bk165 > 0)
                            <div id="icu1" class="card bg-warning">
                                <div class="card-header text-white">AZALEA 408-1</div>
                            @else
                                <div id="icu1" class="card bg-light">
                                    <div class="card-header ">AZALEA 408-1</div>
                    @endif
                    @if (checkUtama(165) == true)
                        <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                            <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                        </div>
                    @endif

                    <div class="card-body">
                        @foreach ($isi165 as $i165)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                                {{ $i165->kapasitas }}</h5>

                            @if ($i165->kapasitas == 1)
                                @if ($i165->booked == 0 && $i165->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn165 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i165->booked == 0 && $i165->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn165 as $p)
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
        @foreach ($kamar166 as $k166)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal166">
                @if ($k166->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">AZALEA 408-2</div>
                    @elseif ($bk166 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 408-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">AZALEA 408-2</div>
                @endif
                @if (checkUtama(166) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi166 as $i166)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i166->kapasitas }}</h5>

                        @if ($i166->kapasitas == 1)
                            @if ($i166->booked == 0 && $i166->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn166 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i166->booked == 0 && $i166->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn166 as $p)
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
        @foreach ($kamar163 as $k163)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal163">
                @if ($k163->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">AZALEA 409-1</div>
                    @elseif ($bk163 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 409-1</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">AZALEA 409-1</div>
                @endif
                @if (checkUtama(163) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi163 as $i163)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i163->kapasitas }}</h5>

                        @if ($i163->kapasitas == 1)
                            @if ($i163->booked == 0 && $i163->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn163 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i163->booked == 0 && $i163->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn163 as $p)
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
        @foreach ($kamar164 as $k164)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal164">
                @if ($k164->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">AZALEA 409-2</div>
                    @elseif ($bk164 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 409-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">AZALEA 409-2</div>
                @endif
                @if (checkUtama(164) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi164 as $i164)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i164->kapasitas }}</h5>

                        @if ($i164->kapasitas == 1)
                            @if ($i164->booked == 0 && $i164->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn164 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i164->booked == 0 && $i164->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn164 as $p)
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
            @foreach ($kamar167 as $k167)
                <a href="#" data-toggle="modal" data-target="#ChoiceModal167">
                    @if ($k167->hasil > 0)
                        <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">SERUNI 411-1</div>
                        @elseif ($bk167 > 0)
                            <div id="icu1" class="card bg-warning">
                                <div class="card-header text-white">SERUNI 411-1</div>
                            @else
                                <div id="icu1" class="card bg-light">
                                    <div class="card-header ">SERUNI 411-1</div>
                    @endif
                    @if (checkUtama(167) == true)
                        <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                            <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                        </div>
                    @endif

                    <div class="card-body">
                        @foreach ($isi167 as $i167)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                                {{ $i167->kapasitas }}</h5>

                            @if ($i167->kapasitas == 1)
                                @if ($i167->booked == 0 && $i167->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn167 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i167->booked == 0 && $i167->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn167 as $p)
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
        @foreach ($kamar168 as $k168)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal168">
                @if ($k168->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">SERUNI 411-2</div>
                    @elseif ($bk168 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">SERUNI 411-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">SERUNI 411-2</div>
                @endif
                @if (checkUtama(168) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi168 as $i168)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i168->kapasitas }}</h5>

                        @if ($i168->kapasitas == 1)
                            @if ($i168->booked == 0 && $i168->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn168 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i168->booked == 0 && $i168->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn168 as $p)
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
        @foreach ($kamar171 as $k171)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal171">
                @if ($k171->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">SERUNI 411-3</div>
                    @elseif ($bk171 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">SERUNI 411-3</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">SERUNI 411-3</div>
                @endif
                @if (checkUtama(171) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi171 as $i171)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i171->kapasitas }}</h5>

                        @if ($i171->kapasitas == 1)
                            @if ($i171->booked == 0 && $i171->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn171 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i171->booked == 0 && $i171->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn171 as $p)
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
        @foreach ($kamar169 as $k169)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal169">
                @if ($k169->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">TANJUNG 410-1</div>
                    @elseif ($bk169 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">TANJUNG 410-1</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">TANJUNG 410-1</div>
                @endif
                @if (checkUtama(169) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi169 as $i169)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i169->kapasitas }}</h5>

                        @if ($i169->kapasitas == 1)
                            @if ($i169->booked == 0 && $i169->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn169 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i169->booked == 0 && $i169->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn169 as $p)
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
        @foreach ($kamar170 as $k170)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal170">
                @if ($k170->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">TANJUNG 410-2</div>
                    @elseif ($bk170 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">TANJUNG 410-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">TANJUNG 410-2</div>
                @endif
                @if (checkUtama(170) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi170 as $i170)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i170->kapasitas }}</h5>

                        @if ($i170->kapasitas == 1)
                            @if ($i170->booked == 0 && $i170->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn170 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i170->booked == 0 && $i170->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn170 as $p)
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
            @foreach ($kamar172 as $k172)
                <a href="#" data-toggle="modal" data-target="#ChoiceModal172">
                    @if ($k172->hasil > 0)
                        <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">SERUNI 411-4</div>
                        @elseif ($bk172 > 0)
                            <div id="icu1" class="card bg-warning">
                                <div class="card-header text-white">SERUNI 411-4</div>
                            @else
                                <div id="icu1" class="card bg-light">
                                    <div class="card-header ">SERUNI 411-4</div>
                    @endif
                    @if (checkUtama(172) == true)
                        <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                            <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                        </div>
                    @endif

                    <div class="card-body">
                        @foreach ($isi172 as $i172)
                            <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                                {{ $i172->kapasitas }}</h5>

                            @if ($i172->kapasitas == 1)
                                @if ($i172->booked == 0 && $i172->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn172 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i172->booked == 0 && $i172->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn172 as $p)
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
        @foreach ($kamar251 as $k251)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal251">
                @if ($k251->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">SERUNI 411-5</div>
                    @elseif ($bk251 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">SERUNI 411-5</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">SERUNI 411-5</div>
                @endif
                @if (checkUtama(251) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi251 as $i251)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i251->kapasitas }}</h5>

                        @if ($i251->kapasitas == 1)
                            @if ($i251->booked == 0 && $i251->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn251 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i251->booked == 0 && $i251->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn251 as $p)
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
        @foreach ($kamar252 as $k252)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal252">
                @if ($k252->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">SERUNI 411-6</div>
                    @elseif ($bk252 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">SERUNI 411-6</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">SERUNI 411-6</div>
                @endif
                @if (checkUtama(252) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi252 as $i252)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i252->kapasitas }}</h5>

                        @if ($i252->kapasitas == 1)
                            @if ($i252->booked == 0 && $i252->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn252 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i252->booked == 0 && $i252->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn252 as $p)
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
        @foreach ($kamar173 as $k173)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal173">
                @if ($k173->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">TANJUNG 410-3</div>
                    @elseif ($bk173 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">TANJUNG 410-3</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">TANJUNG 410-3</div>
                @endif
                @if (checkUtama(173) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi173 as $i173)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i173->kapasitas }}</h5>

                        @if ($i173->kapasitas == 1)
                            @if ($i173->booked == 0 && $i173->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn173 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i173->booked == 0 && $i173->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn173 as $p)
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
        @foreach ($kamar174 as $k174)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal174">
                @if ($k174->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">TANJUNG 410-4</div>
                    @elseif ($bk174 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">TANJUNG 410-4</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">TANJUNG 410-4</div>
                @endif
                @if (checkUtama(174) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi174 as $i174)
                        <h5 class="card-title text-center"><i class="material-icons">single_bed</i>
                            {{ $i174->kapasitas }}</h5>

                        @if ($i174->kapasitas == 1)
                            @if ($i174->booked == 0 && $i174->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn174 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i174->booked == 0 && $i174->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn174 as $p)
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
    <div class="modal fade" id="ChoiceModal154" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi154 as $i154)
                        @if ($i154->booked == $i154->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/154/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/154/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi154 as $i154)
                        @if ($i154->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/154/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi154 as $i154)
                        @if ($i154->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/154/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal252" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi252 as $i252)
                        @if ($i252->booked == $i252->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/252/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/252/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi252 as $i252)
                        @if ($i252->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/252/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi252 as $i252)
                        @if ($i252->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/252/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal251" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi251 as $i251)
                        @if ($i251->booked == $i251->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/251/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/251/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi251 as $i251)
                        @if ($i251->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/251/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi251 as $i251)
                        @if ($i251->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/251/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal245" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi245 as $i245)
                        @if ($i245->booked == $i245->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/245/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/245/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi245 as $i245)
                        @if ($i245->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/245/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi245 as $i245)
                        @if ($i245->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/245/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal246" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi246 as $i246)
                        @if ($i246->booked == $i246->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/246/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/246/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi246 as $i246)
                        @if ($i246->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/246/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi246 as $i246)
                        @if ($i246->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/246/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal155" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi155 as $i155)
                        @if ($i155->booked == $i155->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/155/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/155/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi155 as $i155)
                        @if ($i155->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/155/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi155 as $i155)
                        @if ($i155->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/155/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal247" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi247 as $i247)
                        @if ($i247->booked == $i247->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/247/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/247/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi247 as $i247)
                        @if ($i247->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/247/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi247 as $i247)
                        @if ($i247->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/247/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal156" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi156 as $i156)
                        @if ($i156->booked == $i156->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/156/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/156/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi156 as $i156)
                        @if ($i156->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/156/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi156 as $i156)
                        @if ($i156->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/156/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal248" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi248 as $i248)
                        @if ($i248->booked == $i248->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/248/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/248/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi248 as $i248)
                        @if ($i248->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/248/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi248 as $i248)
                        @if ($i248->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/248/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal157" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi157 as $i157)
                        @if ($i157->booked == $i157->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/157/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/157/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi157 as $i157)
                        @if ($i157->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/157/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi157 as $i157)
                        @if ($i157->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/157/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal249" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi249 as $i249)
                        @if ($i249->booked == $i249->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/249/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/249/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi249 as $i249)
                        @if ($i249->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/249/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi249 as $i249)
                        @if ($i249->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/249/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal158" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi158 as $i158)
                        @if ($i158->booked == $i158->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/158/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/158/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi158 as $i158)
                        @if ($i158->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/158/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi158 as $i158)
                        @if ($i158->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/158/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal250" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi250 as $i250)
                        @if ($i250->booked == $i250->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/250/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/250/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi250 as $i250)
                        @if ($i250->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/250/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi250 as $i250)
                        @if ($i250->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/250/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal159" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi159 as $i159)
                        @if ($i159->booked == $i159->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/159/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/159/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi159 as $i159)
                        @if ($i159->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/159/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi159 as $i159)
                        @if ($i159->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/159/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal160" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi160 as $i160)
                        @if ($i160->booked == $i160->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/160/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/160/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi160 as $i160)
                        @if ($i160->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/160/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi160 as $i160)
                        @if ($i160->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/160/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal161" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi161 as $i161)
                        @if ($i161->booked == $i161->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/161/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/161/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi161 as $i161)
                        @if ($i161->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/161/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi161 as $i161)
                        @if ($i161->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/161/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal162" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi162 as $i162)
                        @if ($i162->booked == $i162->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/162/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/162/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi162 as $i162)
                        @if ($i162->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/162/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi162 as $i162)
                        @if ($i162->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/162/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal163" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi163 as $i163)
                        @if ($i163->booked == $i163->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/163/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/163/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi163 as $i163)
                        @if ($i163->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/163/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi163 as $i163)
                        @if ($i163->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/163/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal164" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi164 as $i164)
                        @if ($i164->booked == $i164->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/164/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/164/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi164 as $i164)
                        @if ($i164->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/164/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi164 as $i164)
                        @if ($i164->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/164/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal165" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi165 as $i165)
                        @if ($i165->booked == $i165->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/165/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/165/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi165 as $i165)
                        @if ($i165->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/165/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi165 as $i165)
                        @if ($i165->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/165/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal166" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi166 as $i166)
                        @if ($i166->booked == $i166->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/166/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/166/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi166 as $i166)
                        @if ($i166->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/166/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi166 as $i166)
                        @if ($i166->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/166/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal167" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi167 as $i167)
                        @if ($i167->booked == $i167->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/167/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/167/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi167 as $i167)
                        @if ($i167->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/167/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi167 as $i167)
                        @if ($i167->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/167/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal168" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi168 as $i168)
                        @if ($i168->booked == $i168->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/168/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/168/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi168 as $i168)
                        @if ($i168->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/168/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi168 as $i168)
                        @if ($i168->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/168/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal169" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi169 as $i169)
                        @if ($i169->booked == $i169->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/169/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/169/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi169 as $i169)
                        @if ($i169->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/169/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi169 as $i169)
                        @if ($i169->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/169/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal170" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi170 as $i170)
                        @if ($i170->booked == $i170->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/170/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/170/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi170 as $i170)
                        @if ($i170->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/170/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi170 as $i170)
                        @if ($i170->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/170/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal171" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi171 as $i171)
                        @if ($i171->booked == $i171->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/171/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/171/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi171 as $i171)
                        @if ($i171->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/171/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi171 as $i171)
                        @if ($i171->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/171/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal172" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi172 as $i172)
                        @if ($i172->booked == $i172->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/172/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/172/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi172 as $i172)
                        @if ($i172->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/172/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi172 as $i172)
                        @if ($i172->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/172/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal173" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi173 as $i173)
                        @if ($i173->booked == $i173->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/173/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/173/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi173 as $i173)
                        @if ($i173->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/173/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi173 as $i173)
                        @if ($i173->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/173/lantai4pdw') }}"
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
    <div class="modal fade" id="ChoiceModal174" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi174 as $i174)
                        @if ($i174->booked == $i174->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                            {{-- <a href="{{ url('/booking-mrs/174/lantai4pdw') }}" class="btn btn-outline-primary btn-lg btn-block" disabled>
                            Entry Pasien Masuk Rawat Inap
                        </a> --}}
                        @else
                            <a href="{{ url('/booking-mrs/174/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi174 as $i174)
                        @if ($i174->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/174/lantai4pdw') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi174 as $i174)
                        @if ($i174->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/174/lantai4pdw') }}"
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

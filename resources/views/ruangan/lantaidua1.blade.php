@extends('_master')

@section('title-content')
    Lantai 2 (Ruang Bedah Anak 1)
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
                    @foreach ($kamar224 as $k224)
                        <a href="#" data-toggle="modal" data-target="#ChoiceModal224">
                            @if ($k224->hasil > 0)
                                <div id="icu1" class="card bg-primary">
                                    <div class="card-header text-white">KEMUNING 201</div>
                                @elseif ($bk224 > 0)
                                    <div id="icu1" class="card bg-warning">
                                        <div class="card-header text-white">KEMUNING 201</div>
                                    @else
                                        <div id="icu1" class="card bg-light">
                                            <div class="card-header ">KEMUNING 201</div>
                            @endif
                            @if (checkUtama(224) == true)
                                <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                                    <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                                </div>
                            @endif

                            <div class="card-body">
                                @foreach ($isi224 as $i224)
                                    <h5 class="card-title text-center"><i
                                            class="material-icons">single_bed</i>{{ $i224->kapasitas }}</h5>

                                    @if ($i224->kapasitas == 1)
                                        @if ($i224->booked == 0 && $i224->bkg == 0)
                                            <p class="card-text">Ruangan Tersedia</p>
                                        @else
                                            <ul>
                                                @foreach ($pn224 as $p)
                                                    <li class="text-white">
                                                        {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    @else
                                        @if ($i224->booked == 0 && $i224->bkg == 0)
                                            <p class="card-text">Ruangan Tersedia</p>
                                        @else
                                            <ul>
                                                @foreach ($pn224 as $p)
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
                @foreach ($kamar86 as $k86)
                    <a href="#" data-toggle="modal" data-target="#ChoiceModal86">
                        @if ($k86->hasil > 0)
                            <div id="icu1" class="card bg-primary">
                                <div class="card-header text-white">ALAMANDA 203</div>
                            @elseif ($bk86 > 0)
                                <div id="icu1" class="card bg-warning">
                                    <div class="card-header text-white">ALAMANDA 203</div>
                                @else
                                    <div id="icu1" class="card bg-light">
                                        <div class="card-header ">ALAMANDA 203</div>
                        @endif
                        @if (checkUtama(86) == true)
                            <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                                <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                            </div>
                        @endif

                        <div class="card-body">
                            @foreach ($isi86 as $i86)
                                <h5 class="card-title text-center"><i
                                        class="material-icons">single_bed</i>{{ $i86->kapasitas }}</h5>

                                @if ($i86->kapasitas == 1)
                                    @if ($i86->booked == 0 && $i86->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn86 as $p)
                                                <li class="text-white">
                                                    {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    @if ($i86->booked == 0 && $i86->bkg == 0)
                                        <p class="card-text">Ruangan Tersedia</p>
                                    @else
                                        <ul>
                                            @foreach ($pn86 as $p)
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
            @foreach ($kamar87 as $k87)
                <a href="#" data-toggle="modal" data-target="#ChoiceModal87">
                    @if ($k87->hasil > 0)
                        <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">ALAMANDA 204</div>
                        @elseif ($bk87 > 0)
                            <div id="icu1" class="card bg-warning">
                                <div class="card-header text-white">ALAMANDA 204</div>
                            @else
                                <div id="icu1" class="card bg-light">
                                    <div class="card-header ">ALAMANDA 204</div>
                    @endif
                    @if (checkUtama(87) == true)
                        <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                            <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                        </div>
                    @endif

                    <div class="card-body">
                        @foreach ($isi87 as $i87)
                            <h5 class="card-title text-center"><i
                                    class="material-icons">single_bed</i>{{ $i87->kapasitas }}</h5>

                            @if ($i87->kapasitas == 1)
                                @if ($i87->booked == 0 && $i87->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn87 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i87->booked == 0 && $i87->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn87 as $p)
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
            @foreach ($kamar88 as $k88)
                <a href="#" data-toggle="modal" data-target="#ChoiceModal88">
                    @if ($k88->hasil > 0)
                        <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">AZALEA 202-1</div>
                        @elseif ($bk88 > 0)
                            <div id="icu1" class="card bg-warning">
                                <div class="card-header text-white">AZALEA 202-1</div>
                            @else
                                <div id="icu1" class="card bg-light">
                                    <div class="card-header ">AZALEA 202-1</div>
                    @endif
                    @if (checkUtama(88) == true)
                        <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                            <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                        </div>
                    @endif

                    <div class="card-body">
                        @foreach ($isi88 as $i88)
                            <h5 class="card-title text-center"><i
                                    class="material-icons">single_bed</i>{{ $i88->kapasitas }}</h5>

                            @if ($i88->kapasitas == 1)
                                @if ($i88->booked == 0 && $i88->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn88 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i88->booked == 0 && $i88->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn88 as $p)
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
        @foreach ($kamar91 as $k91)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal91">
                @if ($k91->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">AZALEA 202-2</div>
                    @elseif ($bk91 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 202-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">AZALEA 202-2</div>
                @endif
                @if (checkUtama(91) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi91 as $i91)
                        <h5 class="card-title text-center"><i
                                class="material-icons">single_bed</i>{{ $i91->kapasitas }}</h5>

                        @if ($i91->kapasitas == 1)
                            @if ($i91->booked == 0 && $i91->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn91 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i91->booked == 0 && $i91->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn91 as $p)
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
        @foreach ($kamar85 as $k85)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal85">
                @if ($k85->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">AZALEA 205-1</div>
                    @elseif ($bk85 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 205-1</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">AZALEA 205-1</div>
                @endif
                @if (checkUtama(85) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi85 as $i85)
                        <h5 class="card-title text-center"><i
                                class="material-icons">single_bed</i>{{ $i85->kapasitas }}</h5>

                        @if ($i85->kapasitas == 1)
                            @if ($i85->booked == 0 && $i85->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn85 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i85->booked == 0 && $i85->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn85 as $p)
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
        @foreach ($kamar90 as $k90)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal90">
                @if ($k90->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">AZALEA 205-2</div>
                    @elseif ($bk90 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 205-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">AZALEA 205-2</div>
                @endif
                @if (checkUtama(90) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi90 as $i90)
                        <h5 class="card-title text-center"><i
                                class="material-icons">single_bed</i>{{ $i90->kapasitas }}</h5>

                        @if ($i90->kapasitas == 1)
                            @if ($i90->booked == 0 && $i90->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn90 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i90->booked == 0 && $i90->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn90 as $p)
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
            @foreach ($kamar95 as $k95)
                <a href="#" data-toggle="modal" data-target="#ChoiceModal95">
                    @if ($k95->hasil > 0)
                        <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">AZALEA 206-1</div>
                        @elseif ($bk95 > 0)
                            <div id="icu1" class="card bg-warning">
                                <div class="card-header text-white">AZALEA 206-1</div>
                            @else
                                <div id="icu1" class="card bg-light">
                                    <div class="card-header ">AZALEA 206-1</div>
                    @endif
                    @if (checkUtama(95) == true)
                        <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                            <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                        </div>
                    @endif

                    <div class="card-body">
                        @foreach ($isi95 as $i95)
                            <h5 class="card-title text-center"><i
                                    class="material-icons">single_bed</i>{{ $i95->kapasitas }}</h5>

                            @if ($i95->kapasitas == 1)
                                @if ($i95->booked == 0 && $i95->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn95 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i95->booked == 0 && $i95->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn95 as $p)
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
        @foreach ($kamar96 as $k96)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal96">
                @if ($k96->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">AZALEA 206-2</div>
                    @elseif ($bk96 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 206-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">AZALEA 206-2</div>
                @endif
                @if (checkUtama(96) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi96 as $i96)
                        <h5 class="card-title text-center"><i
                                class="material-icons">single_bed</i>{{ $i96->kapasitas }}</h5>

                        @if ($i96->kapasitas == 1)
                            @if ($i96->booked == 0 && $i96->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn96 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i96->booked == 0 && $i96->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn96 as $p)
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
        @foreach ($kamar93 as $k93)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal93">
                @if ($k93->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">AZALEA 207-1</div>
                    @elseif ($bk93 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 207-1</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">AZALEA 207-1</div>
                @endif
                @if (checkUtama(93) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi93 as $i93)
                        <h5 class="card-title text-center"><i
                                class="material-icons">single_bed</i>{{ $i93->kapasitas }}</h5>

                        @if ($i93->kapasitas == 1)
                            @if ($i93->booked == 0 && $i93->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn93 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i93->booked == 0 && $i93->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn93 as $p)
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
        @foreach ($kamar94 as $k94)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal94">
                @if ($k94->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">AZALEA 207-2</div>
                    @elseif ($bk94 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 207-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">AZALEA 207-2</div>
                @endif
                @if (checkUtama(94) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi94 as $i94)
                        <h5 class="card-title text-center"><i
                                class="material-icons">single_bed</i>{{ $i94->kapasitas }}</h5>

                        @if ($i94->kapasitas == 1)
                            @if ($i94->booked == 0 && $i94->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn94 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i94->booked == 0 && $i94->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn94 as $p)
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
            @foreach ($kamar99 as $k99)
                <a href="#" data-toggle="modal" data-target="#ChoiceModal99">
                    @if ($k99->hasil > 0)
                        <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">TANJUNG 208-1</div>
                        @elseif ($bk99 > 0)
                            <div id="icu1" class="card bg-warning">
                                <div class="card-header text-white">TANJUNG 208-1</div>
                            @else
                                <div id="icu1" class="card bg-light">
                                    <div class="card-header ">TANJUNG 208-1</div>
                    @endif
                    @if (checkUtama(99) == true)
                        <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                            <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                        </div>
                    @endif

                    <div class="card-body">
                        @foreach ($isi99 as $i99)
                            <h5 class="card-title text-center"><i
                                    class="material-icons">single_bed</i>{{ $i99->kapasitas }}</h5>

                            @if ($i99->kapasitas == 1)
                                @if ($i99->booked == 0 && $i99->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn99 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i99->booked == 0 && $i99->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn99 as $p)
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
        @foreach ($kamar100 as $k100)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal100">
                @if ($k100->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">TANJUNG 208-2</div>
                    @elseif ($bk100 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">TANJUNG 208-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">TANJUNG 208-2</div>
                @endif
                @if (checkUtama(100) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi100 as $i100)
                        <h5 class="card-title text-center"><i
                                class="material-icons">single_bed</i>{{ $i100->kapasitas }}</h5>

                        @if ($i100->kapasitas == 1)
                            @if ($i100->booked == 0 && $i100->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn100 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i100->booked == 0 && $i100->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn100 as $p)
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
        @foreach ($kamar97 as $k97)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal97">
                @if ($k97->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">AZALEA 209-1</div>
                    @elseif ($bk97 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 209-1</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">AZALEA 209-1</div>
                @endif
                @if (checkUtama(97) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi97 as $i97)
                        <h5 class="card-title text-center"><i
                                class="material-icons">single_bed</i>{{ $i97->kapasitas }}</h5>

                        @if ($i97->kapasitas == 1)
                            @if ($i97->booked == 0 && $i97->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn97 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i97->booked == 0 && $i97->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn97 as $p)
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
        @foreach ($kamar98 as $k98)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal98">
                @if ($k98->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">AZALEA 209-2</div>
                    @elseif ($bk98 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">AZALEA 209-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">AZALEA 209-2</div>
                @endif
                @if (checkUtama(98) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi98 as $i98)
                        <h5 class="card-title text-center"><i
                                class="material-icons">single_bed</i>{{ $i98->kapasitas }}</h5>

                        @if ($i98->kapasitas == 1)
                            @if ($i98->booked == 0 && $i98->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn98 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i98->booked == 0 && $i98->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn98 as $p)
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
            @foreach ($kamar103 as $k103)
                <a href="#" data-toggle="modal" data-target="#ChoiceModal103">
                    @if ($k103->hasil > 0)
                        <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">SERUNI 210-1</div>
                        @elseif ($bk103 > 0)
                            <div id="icu1" class="card bg-warning">
                                <div class="card-header text-white">SERUNI 210-1</div>
                            @else
                                <div id="icu1" class="card bg-light">
                                    <div class="card-header ">SERUNI 210-1</div>
                    @endif
                    @if (checkUtama(103) == true)
                        <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                            <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                        </div>
                    @endif

                    <div class="card-body">
                        @foreach ($isi103 as $i103)
                            <h5 class="card-title text-center"><i
                                    class="material-icons">single_bed</i>{{ $i103->kapasitas }}</h5>

                            @if ($i103->kapasitas == 1)
                                @if ($i103->booked == 0 && $i103->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn103 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i103->booked == 0 && $i103->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn103 as $p)
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
        @foreach ($kamar104 as $k104)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal104">
                @if ($k104->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">SERUNI 210-2</div>
                    @elseif ($bk104 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">SERUNI 210-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">SERUNI 210-2</div>
                @endif
                @if (checkUtama(104) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi104 as $i104)
                        <h5 class="card-title text-center"><i
                                class="material-icons">single_bed</i>{{ $i104->kapasitas }}</h5>

                        @if ($i104->kapasitas == 1)
                            @if ($i104->booked == 0 && $i104->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn104 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i104->booked == 0 && $i104->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn104 as $p)
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
        @foreach ($kamar101 as $k101)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal101">
                @if ($k101->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">SERUNI 211-1</div>
                    @elseif ($bk101 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">SERUNI 211-1</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">SERUNI 211-1</div>
                @endif
                @if (checkUtama(101) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi101 as $i101)
                        <h5 class="card-title text-center"><i
                                class="material-icons">single_bed</i>{{ $i101->kapasitas }}</h5>

                        @if ($i101->kapasitas == 1)
                            @if ($i101->booked == 0 && $i101->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn101 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i101->booked == 0 && $i101->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn101 as $p)
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
        @foreach ($kamar102 as $k102)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal102">
                @if ($k102->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">SERUNI 211-2</div>
                    @elseif ($bk102 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">SERUNI 211-2</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">SERUNI 211-2</div>
                @endif
                @if (checkUtama(102) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi102 as $i102)
                        <h5 class="card-title text-center"><i
                                class="material-icons">single_bed</i>{{ $i102->kapasitas }}</h5>

                        @if ($i102->kapasitas == 1)
                            @if ($i102->booked == 0 && $i102->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn102 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i102->booked == 0 && $i102->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn102 as $p)
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
            @foreach ($kamar107 as $k107)
                <a href="#" data-toggle="modal" data-target="#ChoiceModal107">
                    @if ($k107->hasil > 0)
                        <div id="icu1" class="card bg-primary">
                            <div class="card-header text-white">SERUNI 210-3</div>
                        @elseif ($bk107 > 0)
                            <div id="icu1" class="card bg-warning">
                                <div class="card-header text-white">SERUNI 210-3</div>
                            @else
                                <div id="icu1" class="card bg-light">
                                    <div class="card-header ">SERUNI 210-3</div>
                    @endif
                    @if (checkUtama(107) == true)
                        <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                            <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                        </div>
                    @endif

                    <div class="card-body">
                        @foreach ($isi107 as $i107)
                            <h5 class="card-title text-center"><i
                                    class="material-icons">single_bed</i>{{ $i107->kapasitas }}</h5>

                            @if ($i107->kapasitas == 1)
                                @if ($i107->booked == 0 && $i107->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn107 as $p)
                                            <li class="text-white">
                                                {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            @else
                                @if ($i107->booked == 0 && $i107->bkg == 0)
                                    <p class="card-text">Ruangan Tersedia</p>
                                @else
                                    <ul>
                                        @foreach ($pn107 as $p)
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
        @foreach ($kamar108 as $k108)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal108">
                @if ($k108->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">SERUNI 210-4</div>
                    @elseif ($bk108 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">SERUNI 210-4</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">SERUNI 210-4</div>
                @endif
                @if (checkUtama(108) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi108 as $i108)
                        <h5 class="card-title text-center"><i
                                class="material-icons">single_bed</i>{{ $i108->kapasitas }}</h5>

                        @if ($i108->kapasitas == 1)
                            @if ($i108->booked == 0 && $i108->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn108 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i108->booked == 0 && $i108->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn108 as $p)
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
        @foreach ($kamar109 as $k109)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal109">
                @if ($k109->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">SERUNI 210-5</div>
                    @elseif ($bk109 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">SERUNI 210-5</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">SERUNI 210-5</div>
                @endif
                @if (checkUtama(109) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi109 as $i109)
                        <h5 class="card-title text-center"><i
                                class="material-icons">single_bed</i>{{ $i109->kapasitas }}</h5>

                        @if ($i109->kapasitas == 1)
                            @if ($i109->booked == 0 && $i109->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn109 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i109->booked == 0 && $i109->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn109 as $p)
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
        @foreach ($kamar105 as $k105)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal105">
                @if ($k105->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">SERUNI 211-3</div>
                    @elseif ($bk105 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">SERUNI 211-3</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">SERUNI 211-3</div>
                @endif
                @if (checkUtama(105) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi105 as $i105)
                        <h5 class="card-title text-center"><i
                                class="material-icons">single_bed</i>{{ $i105->kapasitas }}</h5>

                        @if ($i105->kapasitas == 1)
                            @if ($i105->booked == 0 && $i105->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn105 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i105->booked == 0 && $i105->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn105 as $p)
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
        @foreach ($kamar106 as $k106)
            <a href="#" data-toggle="modal" data-target="#ChoiceModal106">
                @if ($k106->hasil > 0)
                    <div id="icu1" class="card bg-primary">
                        <div class="card-header text-white">SERUNI 211-4</div>
                    @elseif ($bk106 > 0)
                        <div id="icu1" class="card bg-warning">
                            <div class="card-header text-white">SERUNI 211-4</div>
                        @else
                            <div id="icu1" class="card bg-light">
                                <div class="card-header ">SERUNI 211-4</div>
                @endif
                @if (checkUtama(106) == true)
                    <div class="card-header" style="margin-top: -25px; margin-bottom: -20px">
                        <span class="badge badge-success mr-10">Kamar 1 / Utama</span>
                    </div>
                @endif

                <div class="card-body">
                    @foreach ($isi106 as $i106)
                        <h5 class="card-title text-center"><i
                                class="material-icons">single_bed</i>{{ $i106->kapasitas }}</h5>

                        @if ($i106->kapasitas == 1)
                            @if ($i106->booked == 0 && $i106->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn106 as $p)
                                        <li class="text-white">
                                            {{ $p->nama_pasien }}&nbsp;&nbsp;&nbsp;{{ $p->tgm }}&nbsp;/&nbsp;{{ $p->penanggungjawab }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @else
                            @if ($i106->booked == 0 && $i106->bkg == 0)
                                <p class="card-text">Ruangan Tersedia</p>
                            @else
                                <ul>
                                    @foreach ($pn106 as $p)
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
    <div class="modal fade" id="ChoiceModal224" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi224 as $i224)
                        @if ($i224->booked == $i224->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/224/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi224 as $i224)
                        @if ($i224->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/224/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi224 as $i224)
                        @if ($i224->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/224/lantai2rba1') }}"
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
    <div class="modal fade" id="ChoiceModal85" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi85 as $i85)
                        @if ($i85->booked == $i85->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/85/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi85 as $i85)
                        @if ($i85->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/85/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi85 as $i85)
                        @if ($i85->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/85/lantai2rba1') }}"
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
    <div class="modal fade" id="ChoiceModal86" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi86 as $i86)
                        @if ($i86->booked == $i86->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/86/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi86 as $i86)
                        @if ($i86->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/86/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi86 as $i86)
                        @if ($i86->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/86/lantai2rba1') }}"
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
    <div class="modal fade" id="ChoiceModal87" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi87 as $i87)
                        @if ($i87->booked == $i87->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/87/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi87 as $i87)
                        @if ($i87->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/87/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi87 as $i87)
                        @if ($i87->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/87/lantai2rba1') }}"
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
    <div class="modal fade" id="ChoiceModal88" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi88 as $i88)
                        @if ($i88->booked == $i88->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/88/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi88 as $i88)
                        @if ($i88->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/88/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi88 as $i88)
                        @if ($i88->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/88/lantai2rba1') }}"
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
    <div class="modal fade" id="ChoiceModal89" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi89 as $i89)
                        @if ($i89->booked == $i89->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/89/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi89 as $i89)
                        @if ($i89->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/89/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi89 as $i89)
                        @if ($i89->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/89/lantai2rba1') }}"
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
    <div class="modal fade" id="ChoiceModal90" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi90 as $i90)
                        @if ($i90->booked == $i90->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/90/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi90 as $i90)
                        @if ($i90->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/90/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi90 as $i90)
                        @if ($i90->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/90/lantai2rba1') }}"
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
    <div class="modal fade" id="ChoiceModal91" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi91 as $i91)
                        @if ($i91->booked == $i91->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/91/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi91 as $i91)
                        @if ($i91->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/91/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi91 as $i91)
                        @if ($i91->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/91/lantai2rba1') }}"
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
    <div class="modal fade" id="ChoiceModal92" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi92 as $i92)
                        @if ($i92->booked == $i92->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/92/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi92 as $i92)
                        @if ($i92->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/92/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi92 as $i92)
                        @if ($i92->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/92/lantai2rba1') }}"
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
    <div class="modal fade" id="ChoiceModal93" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi93 as $i93)
                        @if ($i93->booked == $i93->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/93/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi93 as $i93)
                        @if ($i93->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/93/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi93 as $i93)
                        @if ($i93->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/93/lantai2rba1') }}"
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
    <div class="modal fade" id="ChoiceModal94" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi94 as $i94)
                        @if ($i94->booked == $i94->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/94/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi94 as $i94)
                        @if ($i94->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/94/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi94 as $i94)
                        @if ($i94->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/94/lantai2rba1') }}"
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
    <div class="modal fade" id="ChoiceModal95" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi95 as $i95)
                        @if ($i95->booked == $i95->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/95/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi95 as $i95)
                        @if ($i95->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/95/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi95 as $i95)
                        @if ($i95->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/95/lantai2rba1') }}"
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
    <div class="modal fade" id="ChoiceModal96" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi96 as $i96)
                        @if ($i96->booked == $i96->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/96/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi96 as $i96)
                        @if ($i96->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/96/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi96 as $i96)
                        @if ($i96->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/96/lantai2rba1') }}"
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
    <div class="modal fade" id="ChoiceModal97" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi97 as $i97)
                        @if ($i97->booked == $i97->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/97/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi97 as $i97)
                        @if ($i97->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/97/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi97 as $i97)
                        @if ($i97->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/97/lantai2rba1') }}"
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
    <div class="modal fade" id="ChoiceModal98" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi98 as $i98)
                        @if ($i98->booked == $i98->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/98/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi98 as $i98)
                        @if ($i98->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/98/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi98 as $i98)
                        @if ($i98->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/98/lantai2rba1') }}"
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
    <div class="modal fade" id="ChoiceModal99" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi99 as $i99)
                        @if ($i99->booked == $i99->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/99/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi99 as $i99)
                        @if ($i99->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/99/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi99 as $i99)
                        @if ($i99->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/99/lantai2rba1') }}"
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
    <div class="modal fade" id="ChoiceModal100" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi100 as $i100)
                        @if ($i100->booked == $i100->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/100/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi100 as $i100)
                        @if ($i100->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/100/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi100 as $i100)
                        @if ($i100->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/100/lantai2rba1') }}"
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
    <div class="modal fade" id="ChoiceModal101" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi101 as $i101)
                        @if ($i101->booked == $i101->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/101/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi101 as $i101)
                        @if ($i101->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/101/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi101 as $i101)
                        @if ($i101->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/101/lantai2rba1') }}"
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
    <div class="modal fade" id="ChoiceModal102" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi102 as $i102)
                        @if ($i102->booked == $i102->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/102/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi102 as $i102)
                        @if ($i102->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/102/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi102 as $i102)
                        @if ($i102->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/102/lantai2rba1') }}"
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
    <div class="modal fade" id="ChoiceModal103" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi103 as $i103)
                        @if ($i103->booked == $i103->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/103/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi103 as $i103)
                        @if ($i103->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/103/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi103 as $i103)
                        @if ($i103->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/103/lantai2rba1') }}"
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
    <div class="modal fade" id="ChoiceModal104" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi104 as $i104)
                        @if ($i104->booked == $i104->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/104/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi104 as $i104)
                        @if ($i104->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/104/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi104 as $i104)
                        @if ($i104->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/104/lantai2rba1') }}"
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
    <div class="modal fade" id="ChoiceModal105" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi105 as $i105)
                        @if ($i105->booked == $i105->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/105/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi105 as $i105)
                        @if ($i105->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/105/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi105 as $i105)
                        @if ($i105->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/105/lantai2rba1') }}"
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
    <div class="modal fade" id="ChoiceModal106" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi106 as $i106)
                        @if ($i106->booked == $i106->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/106/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi106 as $i106)
                        @if ($i106->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/106/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi106 as $i106)
                        @if ($i106->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/106/lantai2rba1') }}"
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
    <div class="modal fade" id="ChoiceModal107" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi107 as $i107)
                        @if ($i107->booked == $i107->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/107/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi107 as $i107)
                        @if ($i107->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/107/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi107 as $i107)
                        @if ($i107->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/107/lantai2rba1') }}"
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
    <div class="modal fade" id="ChoiceModal108" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi108 as $i108)
                        @if ($i108->booked == $i108->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/108/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi108 as $i108)
                        @if ($i108->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/108/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi108 as $i108)
                        @if ($i108->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/108/lantai2rba1') }}"
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
    <div class="modal fade" id="ChoiceModal109" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    @foreach ($isi109 as $i109)
                        @if ($i109->booked == $i109->kapasitas)
                            <form action="">
                                <input type="submit" class="btn btn-outline-primary btn-lg btn-block mb-2"
                                    value="Entry Pasien Masuk Rawat Inap" disabled>
                            </form>
                        @else
                            <a href="{{ url('/booking-mrs/109/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Masuk Rawat Inap
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi109 as $i109)
                        @if ($i109->booked > 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Entry Pasien Reservasi
                            </button>
                        @else
                            <a href="{{ url('/booking-page/109/lantai2rba1') }}"
                                class="btn btn-outline-primary btn-lg btn-block">
                                Entry Pasien Reservasi
                            </a>
                        @endif
                    @endforeach
                    @foreach ($isi109 as $i109)
                        @if ($i109->booked == 0)
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                id="keluar" data-target="#KeluarForm" disabled>
                                Pasien Keluar Rawat Inap
                            </button>
                        @else
                            <a href="{{ url('/booking-keluar/109/lantai2rba1') }}"
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

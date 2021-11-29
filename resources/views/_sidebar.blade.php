 <!-- Vertical Nav -->
 <nav class="hk-nav hk-nav-light">
    <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
    <div class="nicescroll-bar">
        <div class="navbar-nav-wrap">
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}" >
                        <span class="feather-icon"><i data-feather="activity"></i></span>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
            </ul>
            <hr class="nav-separator">
            <div class="nav-header">
                <span>Ruangan Pasien</span>
                <span>RP</span>
            </div>
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#Components_drp">
                        <span class="feather-icon"><i data-feather="layout"></i></span>
                        <span class="nav-link-text">Ruangan</span>
                    </a>
                    <ul id="Components_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/icu') }}">ICU (Intensive Care Unit) </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/paviliun1') }}">Paviliun 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/paviliun2') }}">Paviliun 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/paviliun3') }}">Paviliun 3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/lantai1pdp') }}">Lantai 1 (Penyakit Dalam Pria)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/lantai2rba1') }}">Lantai 2 (Ruang Bedah dan Anak 1)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/lantai2rba2') }}">Lantai 2 (Ruang Bedah dan Anak 2)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/lantai3obg') }}">Lantai 3 (Obgyn)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/lantai3neo') }}">Lantai 3 (Neonatal)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/lantai4pdw') }}">Lantai 4 (Penyakit Dalam Wanita)</a>
                                </li>
                                
                            </ul>
                        </li>
                    </ul>
                </li>
                
            </ul>
            <hr class="nav-separator">
            <div class="nav-header">
                <span>Fasilitas</span>
                <span>FS</span>
            </div>
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#Fasil">
                        <span class="feather-icon"><i data-feather="server"></i></span>
                        <span class="nav-link-text">Fasilitas Kamar</span>
                    </a>
                    <ul id="Fasil" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/fasilitas-vvip') }}">VVIP </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/fasilitas-vip') }}">VIP</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/fasilitas-kelas1pav') }}">Kelas 1 Paviliun</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/fasilitas-kelas2pav') }}">Kelas 2 Paviliun</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/fasilitas-kelas1gp') }}">Kelas 1 Gedung Depan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/fasilitas-kelas2gp') }}">Kelas 2 Gedung Depan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/fasilitas-kelas2b') }}">Kelas 2B</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/fasilitas-kelas3') }}">Kelas 3</a>
                                </li>
                                
                                
                            </ul>
                        </li>
                    </ul>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="documentation.html" >
                        <span class="feather-icon"><i data-feather="server"></i></span>
                        <span class="nav-link-text">Fasilitas Kamar</span>
                    </a>
                </li> --}}
                
            </ul>

            <hr class="nav-separator">
            <div class="nav-header">
                <span>Data Kamar</span>
                <span>DK</span>
            </div>
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/rekap') }}" >
                        <span class="feather-icon"><i data-feather="book"></i></span>
                        <span class="nav-link-text">Rekap Data</span>
                    </a>
                </li>
                
            </ul>

            @if (session()->get('user.level') == '1')
                <hr class="nav-separator">
                <div class="nav-header">
                    <span>Data User</span>
                    <span>DU</span>
                </div>
                <ul class="navbar-nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/add-user') }}" >
                            <span class="feather-icon"><i data-feather="user-plus"></i></span>
                            <span class="nav-link-text">Tambah User</span>
                        </a>
                    </li>
                    
                </ul>
            @endif
        </div>
    </div>
</nav>
<div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
<!-- /Vertical Nav -->

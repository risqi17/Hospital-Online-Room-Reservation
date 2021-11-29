@extends('_master')

@section('title-content')
    Tambah User
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
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Data User <button type="button" class="btn btn-primary btn-wth-icon btn-sm" data-toggle="modal" data-target="#addUser" >
                    <span class="icon-label"><span class="feather-icon"><i data-feather="plus"></i></span> </span><span class="btn-text">Tambah</span>
                </button></h5>
                            <p class="mb-25">Pastikan data yang dimasukkan benar.</p>
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap">
                                <table id="tbJadwal" class="table table-hover w-100 display pb-30">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Level</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $u)
                                            <tr>
                                                <td>{{ $u->name }}</td>
                                                <td>{{ $u->email }}</td>
                                                <td>{{ $u->username }}</td>
                                                <td>{{ $u->password }}</td>
                                                <td>{{ $u->level }}</td>
                                                <td>
                                                <button type="button" class="btn btn-info btn-wth-icon btn-sm" data-toggle="modal" id="edit" data-target="#editUser" data-id="{{ $u->user_id }}" data-nama="{{ $u->name }}" data-email="{{ $u->email }}" data-username="{{ $u->username }}" data-level="{{ $u->level }}" >
                                                    <span class="icon-label"><span class="feather-icon"><i data-feather="edit-2"></i></span> </span><span class="btn-text">Edit</span>
                                                </button>
                                            <a href="{{ url('/delete-user') }}/{{ $u->user_id }}" class="btn btn-danger btn-wth-icon btn-sm" >
                                                    <span class="icon-label"><span class="feather-icon"><i data-feather="trash"></i></span> </span><span class="btn-text">Hapus</span>
                                                </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                
            </section>
         </div>
     </div>
</div>


<!-- Modal adduser -->
<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah User Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/add-user') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Nama User</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="name" name="nama" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Alamat Email</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="username" name="tppri-username" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="password" name="tppri-password" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Level</label>
                        <div class="col-sm-3">
                            <select class="form-control custom-select" name="level">
                                <option value="1">Admin</option>
                                <option value="2">Pegawai</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        
                        <button type="submit" class="btn btn-primary btn-wth-icon btn-sm" >
                            <span class="icon-label"><span class="feather-icon"><i data-feather="save"></i></span> </span><span class="btn-text">Simpan</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal edituser -->
<div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah User Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/update-user') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Nama User</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="edname" name="nama" required>
                            <input type="text" class="form-control" id="edidusr" name="id" hidden>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Alamat Email</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="edemail" name="email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="edusername" name="tppri-username" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="edpassword" name="tppri-password" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Level</label>
                        <div class="col-sm-3">
                            <select class="form-control custom-select" id="edlevel" name="level">
                                <option value="1">Admin</option>
                                <option value="2">Pegawai</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        
                        <button type="submit" class="btn btn-primary btn-wth-icon btn-sm" >
                            <span class="icon-label"><span class="feather-icon"><i data-feather="save"></i></span> </span><span class="btn-text">Simpan</span>
                        </button>
                    </div>
                </form>
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

    <script>
        renderTable();
        function renderTable(){
            t = $('#tbJadwal').DataTable();
        }

        $(document).on("click", "#edit" , function() {

            var id = $(this).data('id');
            var nama = $(this).data('nama');
            var email = $(this).data('email');
            var username = $(this).data('username');
            var level = $(this).data('level');
            
            // var descriptionValue = $(this).data('name');

            // console.log(descriptionValue);
            $(".modal-body #edname").val(nama);
            $(".modal-body #edidusr").val(id);
            $(".modal-body #edemail").val(email);
            $(".modal-body #edusername").val(username);
            $(".modal-body #edlevel").val(level);
        });
    </script>
@endsection

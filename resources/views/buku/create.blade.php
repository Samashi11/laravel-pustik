@extends('template')
@section('aside')
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
        <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html " target="_blank">
            <img src="{{ asset('dash') }}/assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">PUSTIK Dashboard</span>
        </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">HOME</h6>
            </li>
            <li class="nav-item">
            <a class="nav-link " href="{{ route('admin') }}">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>shop </title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(0.000000, 148.000000)">
                            <path class="color-background opacity-6" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                            <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                        </g>
                        </g>
                    </g>
                    </g>
                </svg>
                </div>
                <span class="nav-link-text ms-1">Dashboard</span>
            </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Manage Data</h6>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="{{ route('buku.index') }}">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-books text-lg text-white opacity-100" aria-hidden="true"></i>
                    <title>Books</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                        <g id="office" transform="translate(153.000000, 2.000000)">
                            <path class="color-background opacity-6" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                            <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                        </g>
                        </g>
                    </g>
                    </g>
                </div>
                <span class="nav-link-text ms-1">Books</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link  " href="{{ route('kategori.index') }}">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-settings text-lg text-primary text-gradient" aria-hidden="true"></i>
                    <title>Categories</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(453.000000, 454.000000)">
                            <path class="color-background opacity-6" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"></path>
                            <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                        </g>
                        </g>
                    </g>
                    </g>
                </div>
                <span class="nav-link-text ms-1">Categories</span>
            </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
            </li>
            <li class="nav-item">
            <a class="nav-link  " href="{{ asset('dash') }}/pages/profile.html">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>customer-support</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(1.000000, 0.000000)">
                            <path class="color-background opacity-6" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                            <path class="color-background" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                            <path class="color-background" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                        </g>
                        </g>
                    </g>
                    </g>
                </svg>
                </div>
                <span class="nav-link-text ms-1">Profile</span>
            </a>
            </li>
        </ul>
        </div>
    </aside>
@section('navbar')
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="{{ route('admin') }}">Dashboard</a></li>
            <li class="breadcrumb-item text-sm text-dark" aria-current="page"><a class="opacity-5 text-dark" href="{{ route('buku.index') }}">Books</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Book Create</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Book Create</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" placeholder="Type here...">
                </div>
            </div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item dropdown pe-1 d-flex align-items-center">
                    <a  href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user me-sm-1"></i>
                    <span class="d-sm-inline d-none">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                    <form method="POST" action="{{ route('logout') }}">
                        <li class="mb-2" :href="route('logout')" onclick="event.preventDefault();
                            this.closest('form').submit();">
                            @csrf
                            <a class="dropdown-item border-radius-md" >
                                <div class="d-flex py-1">
                                <i class="fas fa-sign-out-alt fa-lg my-auto mx-3"></i>
                                <div class="d-flex flex-column justify-content-center" >
                                    <h6 class="text-sm font-weight-normal mb-1">
                                    <span class="font-weight-bold" >Log Out</span>
                                    </h6>
                                </div>
                                </div>
                            </a>
                        </li>
                    </form>
                    </ul>
                </li>
                <li class="nav-item d-xl-none px-2 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                    </a>
                </li>
                <li class="nav-item dropdown ps-1 pe-2 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell cursor-pointer"></i>
                    </a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
@endsection
@section('content')
    <div class="row mt-4">
        <div class="card card-white">
            <div class="card-header pb-0 bg-transparent">
                <div class="row">
                    <div class="col-6 align-items-center">
                        <h3 class="font-weight-bolder text-info text-gradient">Book Create</h3>
                        <p class="text-danger mb-0 text-sm">(*) Wajib Diisi</p>
                    </div>
                    <div class="col-6 text-end">
                        <a class="btn bg-gradient-warning mb-0" href="{{ route('buku.index') }}"><i class="fas fa-chevron-left me-2"></i>Back</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('buku.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label>Judul Buku<small class="text-danger ms-1">*</small></label>
                            <div class="mb-3">
                                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" placeholder="Judul Buku" aria-label="Judul Buku" aria-describedby="Judul Buku-addon">
                                @error('judul')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <!-- Penyesuaian nama input -->
                            <label>Penulis<small class="text-danger ms-1">*</small></label>
                            <div class="mb-3">
                                <input type="text" class="form-control @error('penulis') is-invalid @enderror" name="penulis" placeholder="Penulis" aria-label="Penulis" aria-describedby="Penulis-addon">
                                <!-- Penyesuaian validasi -->
                                @error('penulis')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <label>Kategori<small class="text-danger ms-1">*</small></label>
                            <div class="mb-3">
                                <select class="form-select @error('kategori') is-invalid @enderror" name="kategori" aria-label="Default select example">
                                    <option selected hidden></option>
                                    @foreach ($category as $item)
                                        <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                                    @endforeach
                                </select>
                                <!-- Penyesuaian validasi -->
                                @error('kategori')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <!-- Penyesuaian nama input -->
                            <label>Penerbit<small class="text-danger ms-1">*</small></label>
                            <div class="mb-3">
                                <input type="text" class="form-control @error('penerbit') is-invalid @enderror" name="penerbit" placeholder="Penerbit" aria-label="Penerbit" aria-describedby="Penerbit-addon">
                                <!-- Penyesuaian validasi -->
                                @error('penerbit')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <label>Sampul Buku<small class="text-danger ms-1">*</small></label>
                            <div class="mb-3">
                                <input class="form-control @error('sampul') is-invalid @enderror" name="sampul" type="file" id="formFile">
                                @error('sampul')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <label>ISBN<small class="text-danger ms-1">*</small></label>
                            <div class="mb-3">
                                <input type="text" class="form-control @error('isbn') is-invalid @enderror" name="isbn" placeholder="ISBN" aria-label="isbn" aria-describedby="isbn-addon">
                                <!-- Penyesuaian validasi -->
                                @error('isbn')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <label>Deskripsi<small class="text-danger ms-1">*</small></label>
                    <div class="mb-3">
                        <textarea type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" placeholder="Deskripsi" aria-label="Deskripsi" aria-describedby="Deskripsi-addon"></textarea>
                        <!-- Penyesuaian validasi -->
                        @error('deskripsi')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New Book</button>
                    </div>
                </form>
            </div>
          </div>
    </div>
@endsection

@extends('layouts.master')
@section('title')
<title>{{ config('app.name') }} · Catálogos</title>
@endsection

@section('content')
        <!-- header -->
        <header class="header__container">
            @include('fragment._menu-simple-responsive')
            <div class="flex__box" data-aos="fade-up">
                <img src="{{ asset('assets/banners/Banner_Catalogos.png') }}" alt="Banner Catálogos">
            </div>
        </header>
        <!-- End header -->
        <!-- Main section or body -->
        <div class="body__container">
            <main class="main mb__mobile">
                <div class="container-fluid">
                    <div class="container" data-aos="fade-up">
                        <h5 class="position-relative d-inline-block text-uppercase heading">
                            Catálogos
                            <span class="sub__line1"></span>
                            <span class="sub__line2"></span>
                        </h5>
                        <div class="contenedor pt-4 pb-4">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Español</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">English</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-projects-tab" data-bs-toggle="pill" data-bs-target="#pills-projects" type="button" role="tab" aria-controls="pills-projects" aria-selected="false">Proyectos</button>
                                </li>
                            </ul>
                        </div>


                        <div class="row mb-5">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="row flex__box">                                            
                                        <div class="col-lg-4 col-md-4 col-sm-12  square">
                                            <a href="https://publuu.com/flip-book/25584/80099/page/1?cover" class="show-publuu-viewer" style="width: auto; height: 60%; position: relative; display: inline-block;"><img src="https://g2.publuu.com/cover.php?iid=80099&pid=25584&page=1&time=1652711752" style="height: 100%;"></a><script src="https://cms2.publuu.com/js/embed-viewer.js"></script>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 square">
                                            <a href="https://publuu.com/flip-book/25584/80087/page/1?cover" class="show-publuu-viewer" style="width: auto; height: 100%; position: relative; display: inline-block;"><img src="https://g2.publuu.com/cover.php?iid=80087&pid=25584&page=1&time=1652711455" style="height: 100%;"></a><script src="https://cms2.publuu.com/js/embed-viewer.js"></script>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12  square">
                                            <a href="https://publuu.com/flip-book/25584/80097/page/1?cover" class="show-publuu-viewer" style="width: auto; height: 100%; position: relative; display: inline-block;"><img src="https://g2.publuu.com/cover.php?iid=80097&pid=25584&page=1&time=1652711615" style="height: 100%;"></a><script src="https://cms2.publuu.com/js/embed-viewer.js"></script>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12  square">
                                            <a href="https://publuu.com/flip-book/25584/80085/page/1?cover" class="show-publuu-viewer" style="width: auto; height: 100%; position: relative; display: inline-block;"><img src="https://g2.publuu.com/cover.php?iid=80085&pid=25584&page=1&time=1652711368" style="height: 100%;"></a><script src="https://cms2.publuu.com/js/embed-viewer.js"></script>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 square">
                                            <a href="https://publuu.com/flip-book/25584/80083/page/1?cover" class="show-publuu-viewer" style="width: auto; height: 100%; position: relative; display: inline-block;"><img src="https://g2.publuu.com/cover.php?iid=80083&pid=25584&page=1&time=1652711285" style="height: 100%;"></a><script src="https://cms2.publuu.com/js/embed-viewer.js"></script>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="row flex__box">                                          
                                        <div class="col-lg-4 col-md-4 col-sm-12  square">
                                            <a href="https://publuu.com/flip-book/25584/80101/page/1?cover" class="show-publuu-viewer" style="width: auto; height: 60%; position: relative; display: inline-block;"><img src="https://g2.publuu.com/cover.php?iid=80101&pid=25584&page=1&time=1652711894" style="height: 100%;"></a><script src="https://cms2.publuu.com/js/embed-viewer.js"></script>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12  square">
                                            <a href="https://publuu.com/flip-book/25584/80089/page/1?cover" class="show-publuu-viewer" style="width: auto; height: 100%; position: relative; display: inline-block;"><img src="https://g2.publuu.com/cover.php?iid=80089&pid=25584&page=1&time=1652711981" style="height: 100%;"></a><script src="https://cms2.publuu.com/js/embed-viewer.js"></script>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 square">
                                            <a href="https://publuu.com/flip-book/25584/80090/page/1?cover" class="show-publuu-viewer" style="width: auto; height: 100%; position: relative; display: inline-block;"><img src="https://g2.publuu.com/cover.php?iid=80090&pid=25584&page=1&time=1652712070" style="height: 100%;"></a><script src="https://cms2.publuu.com/js/embed-viewer.js"></script>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12  square">
                                            <a href="https://publuu.com/flip-book/23869/74992/page/1?cover" class="show-publuu-viewer" style="width: 100%; height: 100%; position: relative; display: inline-block;"><img src="https://g2.publuu.com/cover.php?iid=74992&pid=23869&page=1&time=1651256101" style="height: 100%;"></a><script src="https://cms2.publuu.com/js/embed-viewer.js"></script>
                                        </div>
                                        <div class="col-lg-4-col-md-4 col-sm-12 square">
                                            -
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-projects" role="tabpanel" aria-labelledby="pills-projects-tab">
                                    <div class="row flex__box">                                          
                                        <div class="col-lg-4 col-md-4 col-sm-12  square">
                                            <a href="https://publuu.com/flip-book/23869/74979/page/1?cover" class="show-publuu-viewer" style="width: auto; height: 85%; position: relative; display: inline-block;"><img src="https://g2.publuu.com/cover.php?iid=74979&pid=23869&page=1&time=1651253441"></a><script src="https://cms2.publuu.com/js/embed-viewer.js"></script>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 square">
                                            <a href="https://publuu.com/flip-book/23869/74981/page/1?cover" class="show-publuu-viewer" style="width: auto; height: 80%; position: relative; display: inline-block;"><img src="https://g2.publuu.com/cover.php?iid=74981&pid=23869&page=1&time=1651253509"></a><script src="https://cms2.publuu.com/js/embed-viewer.js"></script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <!-- End body -->
@endsection
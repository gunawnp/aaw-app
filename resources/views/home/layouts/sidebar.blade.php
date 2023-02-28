<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-blue sidebar collapse">
    <div class="position-sticky pt-4 sidebar-sticky">
        
        @can('admin')
            <ul class="nav flex-column">
                <li class="nav-item ">
                    <a class="nav-link {{ Request::is('home/admin') ? 'bg-blued' : '' }} text-white" aria-current="page" href="/home/admin">
                    <i class="fs-5 bi-house pe-2"></i>
                    Home
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Request::is('home/admin/dashboard') ? 'bg-blued' : '' }} text-white" aria-current="page" href="/home/admin/dashboard">
                    <i class="fs-5 bi-clipboard-data pe-2"></i>
                    Dashboard
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Request::is('home/admin/dashboard-2') ? 'bg-blued' : '' }} text-white" aria-current="page" href="/home/admin/dashboard-2">
                    <i class="fs-5 bi-clipboard-check pe-2"></i>
                    Dashboard Uji Coba
                    </a>
                </li>
            </ul>
        @else
            <ul class="nav flex-column">
                
                <li class="nav-item ">
                    <a class="nav-link {{ Request::is('home') ? 'bg-blued' : '' }} text-white" aria-current="page" href="/home">
                    <i class="fs-5 bi-house pe-2"></i>
                    Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('home/styles*') ? ' bg-blued' : '' }} text-white" data-bs-toggle="collapse" href="#collapse-style" role="button" aria-expanded="false" aria-controls="collapse-style">
                    <i class="fs-5 bi-card-checklist pe-2"></i>
                    Tes Gaya Belajar
                    </a>
                    <div class="collapse {{ Request::is('home/styles*') ? 'show' : '' }}" id="collapse-style">
                        <a class="nav-link text-white ms-4 ps-4 {{ Request::is('home/styles', 'home/styles/begin') ? ' bg-blued' : '' }}" href="/home/styles">Mulai</a>
                        <a class="nav-link text-white ms-4 ps-4 {{ Request::is('home/styles/score') ? ' bg-blued' : '' }}" href="/home/styles/score">Penilaian</a>
                        <a class="nav-link text-white ms-4 ps-4 {{ Request::is('home/styles/pref') ? ' bg-blued' : '' }}" href="/home/styles/pref">Preferensi</a>
                        <a class="nav-link text-white ms-4 ps-4 {{ Request::is('home/styles/result') ? ' bg-blued' : '' }}" href="/home/styles/result">Hasil Tes</a>
                    </div>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ Request::is('home/logics/*') ? ' bg-blued' : '' }} text-white" data-bs-toggle="collapse" href="#collapse-logic" role="button" aria-expanded="false" aria-controls="collapse-logic">
                    <i class="fs-5 bi-lightbulb pe-2"></i>
                    Tes Berpikir Logis
                    </a>
                    <div class="collapse {{ Request::is('home/logics/*') ? 'show' : '' }}" id="collapse-logic">
                        <a class="nav-link text-white ms-4 ps-4 {{ Request::is('home/logics/desc', 'home/logics/begin', 'home/logics/next') ? ' bg-blued' : '' }}" href="/home/logics/desc">Mulai</a>
                        <a class="nav-link text-white ms-4 ps-4 {{ Request::is('home/logics/score') ? ' bg-blued' : '' }}" href="/home/logics/score">Penilaian</a>
                    </div>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('home/logics2/*') ? ' bg-blued' : '' }} text-white" href="/home/logics2/desc">
                        <i class="fs-5 bi-journal-bookmark pe-2"></i>
                        Tes Berpikir Logis
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white {{ Request::is('home/pretest', 'home/pretest/begin') ? ' bg-blued' : '' }}" href="/home/pretest">
                        <i class="fs-5 bi-file-earmark-code pe-2"></i>
                        Pretest Asesmen
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('home/materi*') ? ' bg-blued' : '' }} text-white" href="/home/materi">
                    {{-- <a class="nav-link {{ Request::is('home/materi*') ? ' bg-blued' : '' }} text-white-50 disabled" href=""> --}}
                        <i class="fs-5 bi-journal-bookmark pe-2"></i>
                        Materi Pembelajaran
                    </a>
                </li>
                
                <li class="nav-item">
                    {{-- <a class="nav-link {{ Request::is('home/posttest*') ? ' bg-blued' : '' }} text-white" data-bs-toggle="collapse" href="#collapse-posttest" role="button" aria-expanded="false" aria-controls="collapse-posttest">
                        <i class="fs-5 bi-file-earmark-code pe-2"></i>
                        Posttest Asesmen
                        <p class="ms-4 ps-2 mb-0">Adaptif</p> 
                    </a> --}}
                    <a class="nav-link {{ Request::is('home/posttest*') ? ' bg-blued' : '' }} text-white-50 disabled" data-bs-toggle="collapse" href="#collapse-posttest" role="button" aria-expanded="false" aria-controls="collapse-posttest">
                        <i class="fs-5 bi-file-earmark-code pe-2"></i>
                        Posttest Asesmen
                        <p class="ms-4 ps-2 mb-0">Adaptif</p> 
                    </a>
                    <div class="collapse {{ Request::is('home/posttest*') ? 'show' : '' }}" id="collapse-posttest">
                        <a class="nav-link text-white ms-4 ps-4 {{ Request::is('home/posttest', 'home/posttest/begin') ? ' bg-blued' : '' }}" href="/home/posttest">Mulai</a>
                        <a class="nav-link text-white ms-4 ps-4 {{ Request::is('home/posttest/score') ? ' bg-blued' : '' }}" href="/home/posttest/score">Penilaian</a>
                    </div>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link {{ Request::is('home/logicsii*') ? ' bg-blued' : '' }} text-white" data-bs-toggle="collapse" href="#collapse-logicii" role="button" aria-expanded="false" aria-controls="collapse-logicii">
                        <i class="fs-5 bi-lightbulb pe-2"></i>
                        Tes Berpikir Logis 2
                    </a> --}}
                    <a class="nav-link {{ Request::is('home/logicsii*') ? ' bg-blued' : '' }} text-white-50 disabled" data-bs-toggle="collapse" href="#collapse-logicii" role="button" aria-expanded="false" aria-controls="collapse-logicii">
                        <i class="fs-5 bi-lightbulb pe-2"></i>
                        Tes Berpikir Logis 2
                    </a>
                    <div class="collapse {{ Request::is('home/logicsii*') ? 'show' : '' }}" id="collapse-logicii">
                        <a class="nav-link text-white ms-4 ps-4 {{ Request::is('home/logicsii', 'home/logicsii/next', 'home/logicsii/begin') ? ' bg-blued' : '' }}" href="/home/logicsii">Mulai</a>
                        <a class="nav-link text-white ms-4 ps-4 {{ Request::is('home/logicsii/score') ? ' bg-blued' : '' }}" href="/home/logicsii/score">Penilaian</a>
                    </div>
                </li>

                {{-- <hr class="mx-3 text-white">

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('home/trials*') ? ' bg-blued' : '' }} text-white" href="/home/trials">
                    <a class="nav-link {{ Request::is('home/trials*') ? ' bg-blued' : '' }} text-white-50 disabled" href="">
                        <i class="fs-5 bi-file-earmark-text pe-2"></i>
                        Uji Coba
                    </a>
                </li>  --}}
            </ul>
        @endcan

    </div>
</nav>
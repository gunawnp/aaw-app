<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-4 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" aria-current="page" href="/home">
                <i class="fs-5 bi-house pe-2"></i>
                Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home/styles*') ? 'active' : '' }}" data-bs-toggle="collapse" href="#collapse-style" role="button" aria-expanded="false" aria-controls="collapse-style">
                <i class="fs-5 bi-card-checklist pe-2"></i>
                Tes Gaya Belajar
                </a>
                <div class="collapse {{ Request::is('home/styles*') ? 'show' : '' }}" id="collapse-style">
                    <a class="nav-link ms-4 ps-4 {{ Request::is('home/styles', 'home/styles/begin') ? 'active' : '' }}" href="/home/styles">Mulai</a>
                    <a class="nav-link ms-4 ps-4 {{ Request::is('home/styles/score') ? 'active' : '' }}" href="/home/styles/score">Penilaian</a>
                    <a class="nav-link ms-4 ps-4 {{ Request::is('home/styles/pref') ? 'active' : '' }}" href="/home/styles/pref">Preferensi</a>
                    <a class="nav-link ms-4 ps-4 {{ Request::is('home/styles/result') ? 'active' : '' }}" href="/home/styles/result">Hasil Tes</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home/logics*') ? 'active' : '' }}" data-bs-toggle="collapse" href="#collapse-logic" role="button" aria-expanded="false" aria-controls="collapse-logic">
                <i class="fs-5 bi-card-checklist pe-2"></i>
                Tes Berpikir Logis
                </a>
                <div class="collapse {{ Request::is('home/logics*') ? 'show' : '' }}" id="collapse-logic">
                    <a class="nav-link ms-4 ps-4 {{ Request::is('home/logics', 'home/logics/next', 'home/logics/begin') ? 'active' : '' }}" href="/home/logics">Mulai</a>
                    <a class="nav-link ms-4 ps-4 {{ Request::is('home/logics/score') ? 'active' : '' }}" href="/home/logics/score">Penilaian</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home/pretest*') ? 'active' : '' }}" data-bs-toggle="collapse" href="#collapse-pretest" role="button" aria-expanded="false" aria-controls="collapse-pretest">
                <i class="fs-5 bi-card-checklist pe-2"></i>
                Pretest Asesmen
                <p class="ms-4 ps-2 mb-0">Adaptif</p> 
                </a>
                <div class="collapse {{ Request::is('home/pretest*') ? 'show' : '' }}" id="collapse-pretest">
                    <a class="nav-link ms-4 ps-4 {{ Request::is('home/pretest', 'home/pretest/begin') ? 'active' : '' }}" href="/home/pretest">Mulai</a>
                    <a class="nav-link ms-4 ps-4 {{ Request::is('home/pretest/score') ? 'active' : '' }}" href="/home/pretest/score">Penilaian</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home/materi*') ? 'active' : '' }}" href="/home/materi">
                <i class="fs-5 bi-card-checklist pe-2"></i>
                Materi Pembelajaran
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home/posttest*') ? 'active' : '' }}" data-bs-toggle="collapse" href="#collapse-posttest" role="button" aria-expanded="false" aria-controls="collapse-posttest">
                <i class="fs-5 bi-card-checklist pe-2"></i>
                Posttest Asesmen
                <p class="ms-4 ps-2 mb-0">Adaptif</p> 
                </a>
                <div class="collapse {{ Request::is('home/posttest*') ? 'show' : '' }}" id="collapse-posttest">
                    <a class="nav-link ms-4 ps-4 {{ Request::is('home/posttest', 'home/posttest/begin') ? 'active' : '' }}" href="/home/posttest">Mulai</a>
                    <a class="nav-link ms-4 ps-4 {{ Request::is('home/posttest/score') ? 'active' : '' }}" href="/home/posttest/score">Penilaian</a>
                </div>
            </li>
        </ul>

        {{-- @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Posts Categories
                </a>
            </li>
        </ul>
        @endcan --}}

    </div>
</nav>
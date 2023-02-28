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
                

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('home/trials*') ? ' bg-blued' : '' }} text-white" href="/home/trials">
                    {{-- <a class="nav-link {{ Request::is('home/trials*') ? ' bg-blued' : '' }} text-white-50 disabled" href=""> --}}
                        <i class="fs-5 bi-file-earmark-text pe-2"></i>
                        Uji Coba
                    </a>
                </li> 
            </ul>
        @endcan

    </div>
</nav>
    <header class="navbar navbar-light bg-light sticky-top flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-5 fw-bold text-dark" href="/">
            <img class="me-2" src="/img/logo-aaw-b.png" alt="Logo AAW" width="30" height="30" />
            AAW
        </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container-fluid">
            <span class="navbar-text text-dark fs-5 py-3 ms-4 px-2 fw-bold">
            {{ $header }}
            </span>
            <div class="dropdown">
                <button class="btn py-2 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    @if ( auth()->user()->image )
                        <img src="{{ asset('storage/' . auth()->user()->image) }}" alt="profile" width="35px" class="rounded-circle me-2">
                    @else
                        <img src="{{ asset('storage/profile-image/profile.png') }}" alt="profile" width="35px" class="rounded-circle me-2">
                    @endif
                    {{ auth()->user()->name }}
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="bi bi-box-arrow-right me-3"></i>Sign out
                            </button>
                        </form>
                    </li>
                    <li>
                        <a href="/home/profile" class="dropdown-item">
                            <i class="bi bi-person me-3"></i>Profile
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        
    </header>

    


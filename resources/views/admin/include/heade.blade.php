<nav class="topnav navbar navbar-light">
    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>
    <form class="form-inline mr-auto searchform text-muted">
        <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
    </form>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="dark">
                <i class="fe fe-sun fe-16"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
                <span class="fe fe-grid fe-16"></span>
            </a>
        </li>
        <li class="nav-item nav-notif">
            <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
                <span class="fe fe-bell fe-16"></span>
                <span class="dot dot-md bg-success"></span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="avatar avatar-sm mt-2">
                  @if(Auth::user()->image == null)
                      <img style="width: 32px; height: 32px;" src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" class="avatar-img rounded-circle" />
                  @else
                      <img style="width: 32px; height: 32px;" src="{{asset('admin-assets/user-photo')}}/{{ Auth::user()->image }}" class="avatar-img rounded-circle" alt="profile">
                  @endif
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" style="text-align: center" aria-labelledby="navbarDropdownMenuLink">
                <h6 class="name font-weight-bold mb-0">{{ Auth::user()->name }}</h6>
                <p class="email text-muted mb-3">{{ Auth::user()->email }}</p>
                <a class="dropdown-item" href="{{route('profile.edit')}}">Profile Edit</a>
                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i data-feather="log-out"></i>
                    <span>LogOut</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>

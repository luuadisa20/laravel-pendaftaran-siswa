<header class="flex-shrink-0">
  <nav class="navbar navbar-expand-lg navbar-dark main-nav-lrvl bg-primary-lrvl-grd" style="padding-bottom: 3rem;">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{ $title === 'Dashboard' ? 'active' : '' }}">
            <a class="nav-link" href="/dashboard">Dashboard</a>
          </li>
          @if (Auth::user()->role === 'admin')
            <li class="nav-item {{ $title === 'Verifikasi Pembayaran' ? 'active' : '' }}">
              <a class="nav-link" href="/page-pembayaran">Verifikasi Pembayaran</a>
            </li>
            <li class="nav-item {{ $title === 'Pesan' ? 'active' : '' }}">
              <a class="nav-link" href="/pesan">Pesan</a>
            </li>
          @else
            <li class="nav-item {{ $title === 'Pembayaran' ? 'active' : '' }}">
              <a class="nav-link" href="/page-pembayaran">Pembayaran</a>
            </li>
          @endif
          <li class="nav-item {{ $title === 'Logout' ? 'active' : '' }}">
            <a class="nav-link" href="/dashboard"
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

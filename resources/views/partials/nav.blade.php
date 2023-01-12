<header class="flex-shrink-0">
  <nav class="navbar navbar-expand-lg navbar-dark main-nav-lrvl bg-primary-lrvl-grd">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="/img/logo-wk.png" width="60" height="60" class="d-inline-block align-top" alt="" loading="lazy">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{ $title === 'Beranda' ? 'active' : '' }}">
            <a class="nav-link" href="/">Beranda</a>
          </li>
          <li class="nav-item {{ $title === 'Jurusan' ? 'active' : '' }}">
            <a class="nav-link" href="/jurusan">Jurusan</a>
          </li>
          <li class="nav-item {{ $title === 'Tentang Kami' ? 'active' : '' }}">
            <a class="nav-link" href="/tentang-kami">Tentang Kami</a>
          </li>
          <li class="nav-item {{ $title === 'Testimoni' ? 'active' : '' }}">
            <a class="nav-link" href="/testimoni">Testimoni</a>
          </li>
          <li class="nav-item {{ $title === 'Hubungi Kami' ? 'active' : '' }}">
            <a class="nav-link" href="/hubungi-kami">Hubungi Kami</a>
          </li>
          <li class="nav-item {{ $title === 'Login' ? 'active' : '' }}">
            <a class="nav-link" href="/login">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
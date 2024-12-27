<nav class="navbar navbar-expand-lg bg-success" data-bs-theme="success">
  <div class="container">
    <a class="navbar-brand text-white fw-bold" href="#">Data Guru:</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white fw-bold" href="./">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white fw-bold" href="/jabatan">Jabatan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white fw-bold" href="/pegawai">Pegawai</a>
        </li>
        <?php if(session()->get('login')): ?>
          <li class="nav-item">
          <a class="nav-link text-white fw-bold" href="/logout">Logout</a>
        </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
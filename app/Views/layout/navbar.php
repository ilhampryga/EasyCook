<nav class="navbar fixed-top navbar-expand-lg navbar-light fs-2">
  <div class="container-fluid">
  <a class="navbar-brand fs-2" href="#" style="display: inline-block; margin-top: -90px; margin-left: -40px">
    <img src="<?= base_url('asset/img/easy_cook_logo.png'); ?>" alt="FOTO Easy Cook" width="130" height="110">
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
      <div class="navbar-nav d-flex justify-content-center align-items-center w-100">
        <a class="nav-link active mx-3" aria-current="page" href="/">Home</a>
        <a class="nav-link mx-3" href="/pages/resep">Unggah Resep</a>
        <form class="d-flex me-3" style="flex-grow: 1; max-width: 400px;">
          <input class="form-control me-2 mt-2" type="search" placeholder="Masak Apa Hari Ini?" aria-label="Search">
          <button class="btn btn-outline-success fs-2" type="submit">Search</button>
        </form>
        <a class="nav-link mx-3" href="/pages/login">Login</a>
      </div>
    </div>
  </div>
</nav>
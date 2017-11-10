
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto"></ul>
          <div class="form-inline mt-2 mt-md-0">
            <p class="mr-sm-2"><?= $this->session->userdata('nome') ?></p>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </div>
        </div>
      </nav>
    </header>
    
    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar side navi">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item <?php if($active == 'inicial'){ echo 'active';} ?>">
              <a href="<?= base_url() ?>paginas/painel">Inicial</a>
            </li>
            
            
            <li class="nav-item <?php if($active == 'cadastroSite'){ echo 'active';} ?>">
              <a class="nav-link" href="<?= base_url() ?>paginas/cadastrarSite">Cadastrar novo Site</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>usuario/logout">Sair</a>
            </li>
          </ul>
        </nav>

<!--<nav class="navbar navbar-expand-md navbar-dark">
    <a class="navbar-brand" href="#">Click-trail</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      
      
    </button>

    <div class="collapse navbar-collapse navbar-right" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class= "nav-link" href="#">Painel</a>
        </li>
        <span><i class="icono-user icone"></i></span>
      </ul>
    </div>
</nav>

<div class="row">
  
    <div class="col-sm-2 col-md-2 side navi fixed">
      <nav>
          
          <ul class="nav nav-pills flex-column">
            <li class="nav-item <?php if($active == 'inicial'){ echo 'active';} ?>">
              <a href="<?= base_url() ?>paginas/painel">Inicial</a>
            </li>
            
            
            <li class="nav-item <?php if($active == 'cadastroSite'){ echo 'active';} ?>">
              <a class="nav-link" href="<?= base_url() ?>paginas/cadastrarSite">Cadastrar novo Site</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>usuario/logout">Sair</a>
            </li>
          </ul>
      </nav>
    </div>
    
    <div class="col-md-10 col-sm-10">-->
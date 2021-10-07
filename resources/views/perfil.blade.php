@include('layout.header')
@include('layout.navbar')
@include('layout.sidebar')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper lio-dark">
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Main row -->
      <div class="row justify-content-center">
        <div class="lio-dark lio-feed p-3">
          <div class="card lio-dark lio-card">
            {{-- <img class="lio-capa" src="{{rand(0,1) == 0 ? '/uploads/posts/user_1_20210907150905.jpg' : '/uploads/usersFoto/user-default.png'}}" alt=""> --}}
            <div class="card-header row align-items-end justify-content-center lio-capa">
              <img class="lio-img-perfil" src="{{rand(0,1) == 0 ? '/uploads/posts/user_1_20210907150905.jpg' : '/uploads/usersFoto/user-default.png'}}" alt="">
            </div>
            <div class="card-body">
              <div align='center'>
                <P class="lio-userName text-light" >@Teste</p>
                <p class="text-light">Teste</p>
              </div>
            </div>
            <div class="user-info">
              <p class="text-light mx-3">blablablabalblab</p>
              <ul class="list-group detalhes">
                <li class="detalhes-item">
                  <span><i class="fas fa-map-marker-alt lio-text-secondary lio-icon"></i></span>
                  <p class="lio-text-secondary mx-3 mt-1">Rua 5 Lote 91, Brasília-DF</p>
                </li>
                <li class="detalhes-item">
                  <span><i class="fas fa-phone lio-text-secondary lio-icon"></i></span>
                  <p class="lio-text-secondary mx-1 mt-1">Contato:</p>
                  <p class="lio-text-secondary mx-1 mt-1">testes@email.com</p>
                </li>
                <li class="detalhes-item">
                  <span><i class="fas fa-calendar lio-text-secondary lio-icon"></i></span>
                  <p class="lio-text-secondary mx-1 mt-1">Entrou em:</p>
                  <p class="lio-text-secondary mx-1 mt-1">01/01/2021</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="card-columns">
            @for ($i = 0; $i < 20; $i++)    
              <div class="card lio-dark lio-card">
                <a href="/post">
                  <img class="lio-feed-perfil" src="{{rand(0,1) == 0 ? '/uploads/posts/user_1_20210907150905.jpg' : '/uploads/usersFoto/user-default.png'}}" alt="">
                </a>
              </div>
            @endfor
          </div>
        </div>
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

@include('layout.footer')  
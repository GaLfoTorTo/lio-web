@include('layout.header')
@include('layout.navbar')
@include('layout.sidebar')
<!-- Content Wrapper. Contains page content -->

<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content lio-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nova Postagem</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <form action="/api/cadastrar" method="POST" enctype="multipart/form-data">
          @csrf
          </div>
          <div class="modal-body">
            <textarea name="descricao" class="form-control form-control-sm" required="" id="exampleFormControlTextarea1" rows="3" placeholder="Insira uma legenda."></textarea><br>
            <input type="file" name="foto_temp" multiple class="form-control form-control-sm"></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success btn-sm">Publicar</button>
          </div>
        </form>
    </div>
  </div>
</div>

<div class="content-wrapper lio-dark">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="row justify-content-center">
      <a class="btn btn-teal text-primary text-center" data-toggle="modal" data-target="#exampleModal" href="#activity">
        <h4><i class="far fa-plus-square text-primary"></i>Novo</h4>
      </a>
    </div>
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Main row -->
      <div class="row justify-content-center">
        <div class="lio-dark lio-feed p-3">
          <div class="lio-card-container">
            @for ($i = 0; $i < 17; $i++)
              <div class="card lio-dark lio-card">
                <div class="card-header lio-card-header">
                  <a href="/post">
                    <img class="lio-img" src="{{rand(0,1) == 0 ? '/uploads/posts/user_1_20210907150905.jpg' : '/uploads/usersFoto/user-default.png'}}" alt="">
                  </a>
                </div>
                <div class="card-body">
                  <div class="post">
                    <div class="user-block">
                      <a href="/perfil">
                        <img class="img-circle img-bordered-sm" src="/uploads/usersFoto/user-default.png{{-- @if($item->user->foto == ''){{"/upload/imagens/user-default.png"}}@else{{$item->user->foto}} @endif --}}" alt="user image">
                      </a>
                      <span class="username">
                        <a href="/perfil">@Teste</a>
                        </span>
                      {{-- <span class="description">Publicado - {{date('D, H:i')}}</span> --}}
                    </div>
                  </div>
                  <p class="card-text text-white lio-legenda">With supporting text below as a natural lead-in to additional content.</p>
                </div>
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
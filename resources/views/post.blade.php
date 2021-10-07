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
            <div class="card-header row align-items-end justify-content-center">
              <img class="lio-post" src="{{rand(0,1) == 0 ? '/uploads/posts/user_1_20210907150905.jpg' : '/uploads/usersFoto/user-default.png'}}" alt="">
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <a href="/perfil">
                        <img class="lio-img-perfil img-bordered-sm" src="/uploads/usersFoto/user-default.png{{-- @if($item->user->foto == ''){{"/upload/imagens/user-default.png"}}@else{{$item->user->foto}} @endif --}}" alt="user image">
                    </a>
                    <span class="lio-userName text-light mx-1">
                        <a href="/perfil">@Teste</a>
                    </span>
                </div>
                <p class="text-white text-center">With supporting text below as a natural lead-in to additional content.</p>
                <div class="row mt-5">
                    <div class="col-6">
                        <div class="row ml-1">
                            <a id="curtir" class="curtidas"><i class="far fa-thumbs-up mr-1 lio-icon lio-text-secondary "></i>
                            </a>
                            <p class="text-secondary text-center mx-2 num_curtidas">0</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="float-right">
                            <a href="#" class="">
                                <i class="far fa-comments mr-1 lio-icon lio-text-secondary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <form class="my-3" method="dialog">
                    <input name="user_id" type="hidden" class="form-control" value="">
                    <div class="row justity-content-around">
                        <input name="comentario" class="form-control col-11 lio-input-comentario lio-dark" placeholder="Digite aqui" value="">                        
                        <button type="submit" class="btn col-1"><i class="far fa-paper-plane mr-1 lio-icon lio-text-secondary"></i></button>
                    </div>
                </form>
                <a class="toggleComentarios btn lio-text-secondary d-none">Mostrar mais comentarios...</a>
                <div class="">
                    @for ($i = 0; $i < 15; $i++)
                    <div class="row userComents">                   
                        <div class="col-12 user-block mx-2 comentarios">
                            <div class="row align-items-center">
                                <a href="/perfil">
                                    <img class="img-circle img-bordered-sm" src="/uploads/usersFoto/user-default.png" alt="user image">
                                </a>
                                <a class="username mx-3" href="/perfil">@teste</a>
                                <p class="lio-text-secondary pt-3">comentario{{$i}}</p>
                            </div>
                            <span class="description">{{date('H')}}h</span>
                        </div>
                    </div>
                    @endfor
                </div>
          </div>
        </div>
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@include('layout.footer')
<script>
    $(document).ready(function(){
        var comentarios = $('.userComents').children();
        if(comentarios.length > 3){
            $('.toggleComentarios').removeClass('d-none')
            for(let i = 0; i < comentarios.length; i++ ){
                if(i < 3){
                    $(comentarios[i]).removeClass('d-none') 
                }else{
                    $(comentarios[i]).addClass('d-none')
                }
            }
            //$('.comentarios').toggleClass('d-none')
        }
    })
    $('.toggleComentarios').click(function(){
        var comentario = $('.userComents').children();
        for(let i = 0; i < comentario.length; i++ ){
            if($(comentario[i]).hasClass('d-none')){
                $('.toggleComentarios').text('Mostrar menos comentarios...')
                $(comentario[i]).toggleClass('d-none');
            }else{
                $('.toggleComentarios').text('Mostrar mais comentarios...')
                if(i > 2){
                    $(comentario[i]).toggleClass('d-none');
                }
            }
        }
    });
</script>
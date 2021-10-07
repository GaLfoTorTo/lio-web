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
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Main row -->
      <div class="row justify-content-center">
        <div class="lio-form bg-light p-3 my-1">
          <form action="/cadastrar" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="">
            <div class="lio-info_pessoais">
              <div class="row justify-content-center my-2">
                <div class="col-12">
                  <h3 class="lio-form-title text-center">Informações Pessoais</h3>
                </div>
                <div class="col-12 mx-2">
                  <p class="lio-subtitle text-center">Informe seu nome, sua data de nascimento e escolha um nome de usuário para podermos te identificar melhor</p>
                </div>
              </div>
              <hr class="lio-hr">
              <div class="row">
                  <div class="col-6">
                      <div class="form-group">
                          <label for="nome" class="form-label">Nome:</label>
                          <input type="text" name="nome" class="form-control" required value="">
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="form-group">
                          <label for="data_nascimento">Data de Nascimento:</label>
                          <input type="date" name="data_nascimento" class="form-control" required value="">
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="telefone" class="form-label">Telefone:</label>
                        <input type="text" name="telefone" class="form-control telefone" required value="">
                    </div>
                </div>
                <div class="col-4">
                  <div class="form-group">
                        <label for="user_name" class="form-label">Nome de Usuário:</label>
                        <input type="text" name="user_name" class="form-control" value="" required placeholder="Ex: @fulano">
                    </div>
                </div>
                <div class="col-4">
                  <div class="form-group">
                    <label for="foto" class="form-label">Foto:</label>
                    <input type="file" name="foto_temp" class="form-control" value="">
                  </div>
                </div>
              </div>
            </div>
            <div class="lio-info_login">
              <div class="row justify-content-center my-2">
                <div class="col-12">
                  <h3 class="lio-form-title text-center">Login</h3>
                </div>
                <div class="col-12 mx-2">
                  <p class="lio-subtitle text-center">Informe seu endereço de email e crie uma senha para fazer login</p>
                </div>
              </div>
              <hr class="lio-hr">
              <div class="row">
                <div class="col-8">
                  <div class="form-group">
                        <label for="email" class="form-label">E-mail:</label>
                        <input type="email" name="email" class="form-control" required value="" >
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="senha" class="form-label">Senha:</label>
                        <input type="password" name="senha" class="form-control" required value="">
                    </div>
                </div>
              </div>
            </div>
            <div class="lio-info-endereço">
              <div class="row justify-content-center my-2">
                <div class="col-12">
                  <h3 class="lio-form-title text-center">Enderço</h3>
                </div>
                <div class="col-12 mx-2">
                  <p class="lio-subtitle text-center">Por fim, diga-nos onde você mora para facilitar a procura por seus conhecidos. Essa parte <strong class="lio-obrigatorio">Não</strong> e obrigatória, portanto você pode escolher preenche-la ou não.</p>
                </div>
              </div>
              <hr class="lio-hr">
              <div class="row">
                <div class="col-4">
                  <div class="form-group">
                      <label for="cep" class="form-label">Cep:</label>
                      <input type="text" name="cep" class="form-control cep" value="">
                  </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="logradouro" class="form-label">Logradouro:</label>
                        <input type="text" name="logradouro" class="form-control" value="">
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <label for="numero" class="form-label">Numero:</label>
                        <input type="number" name="numero" class="form-control" value="">
                    </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-4">
                      <div class="form-group">
                          <label for="cidade" class="form-label">Cidade:</label>
                          <input type="text" name="cidade" class="form-control" value="">
                      </div>
                  </div>
                  <div class="col-5">
                      <div class="form-group">
                          <label for="bairro" class="form-label">Bairro:</label>
                          <input type="text" name="bairro" class="form-control" value="">
                      </div>
                  </div>
                  <div class="col-3">
                      <div class="form-group">
                          <label for="uf" class="form-label">Estado:</label>
                          <input type="text" name="uf" class="form-control" maxlength="2" value="">
                      </div>
                  </div>
              </div>
            </div>
            <div class="lio-politicas">
              <div class="row justify-content-center my-2">
                <div class="col-12">
                  <h3 class="lio-form-title text-center">Termos de Uso e Políticas de privacidade</h3>
                </div>
                <div class="col-12 mx-2">
                  <p class="lio-subtitle text-center">Esses são os termos de uso e Políticas de privacidade propostos pelo lio, leia e aceite os termos para poder concluir seu cadastro.</p>
                </div>
                <a class="btn btn-primary btn-politicas">Politicas de Privacidade</a>
              </div>
              <hr class="lio-hr">
              <div class="row justify-content-center">
                <div class="card card-politicas p-3 d-none">
                  @include('layout.politicas')
                </div>
                <p class="lio-subtitle text-center">Você conocorda com os temos de uso e com as políticas de privacidade oferecida pelo Lio?</p>
              </div>
            </div>
            <div class="row my-3">
              <div class="col-6">
                <div class="form-group" align='center'>
                  <input type="radio" class="lio-tipo" name="tipo" id='concordo'>
                  <label for="servico" class="lio-label-politicas">Concordo</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group" align='center'>
                  <input type="radio" class="lio-tipo" name="tipo" id='discordo'>
                  <label for="servico" class="lio-label-politicas">Discordo</label>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col" align="end">
                    <button type="submit" class="btn bg-secondary text-light w-25 hover-shadow py-3 salvar" disabled>
                        Salvar 
                        <i class="fas fa-save text-light"></i>
                    </button>
                </div>
            </div>
          </form>
        </div>
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

@include('layout.footer')  
<script>
  $('.btn-politicas').click(function(){
    $('.card-politicas').toggleClass('d-none');
  })

  $('.lio-tipo').click(function(){
    var tipo = $(this).attr('id');
    if(tipo == 'concordo'){
      $('.salvar').removeClass('bg-secondary');
      $('.salvar').addClass('lio-color');
      $('.salvar').removeAttr('disabled');
    }else{
      $('.salvar').removeClass('lio-color');
      $('.salvar').addClass('bg-secondary');
      $('.salvar').attr('disabled', true);
    }
  })
</script>
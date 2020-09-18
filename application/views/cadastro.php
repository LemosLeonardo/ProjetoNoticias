<div class="container animate__animated animate__fadeIn slower">
  <div class="py-5"></div>
  <div class="row">
    <div class="col"></div>
    <div class="col-sm-10 col-md-8">
      <div class="text-center">
        <h2>Página de Cadastro</h2>
      </div>
      <form method="POST" action="<?php echo base_url('Contas/validarCadastro'); ?>" id="Cadastro">
        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="senha">Senha</label>
          <input type="password" class="form-control" id="senha" name="senha">
        </div>
        <div class="form-group">
          <label for="confirmarSenha">Confirmar senha</label>
          <input type="password" class="form-control" id="confirmarSenha" name="confirmarSenha">
        </div>
        <div class="text-center py-3">
        <p class="small">Ao se cadastrar, você estará concordando com os nossos <a href="#" data-toggle="modal" data-target="#termos">termos de política e privacidade</a>.</p>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-success">CADASTRAR</button>
          <button type="button" class="btn btn-danger" onclick="reset()">LIMPAR CAMPOS</button>
        </div>
      </form>
    </div>
    <div class="col"></div>
  </div>
  <div class="py-5"></div>
</div>

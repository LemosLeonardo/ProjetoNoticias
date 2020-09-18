<div class="container animate__animated animate__fadeIn slower">
  <div class="py-5"></div>
  <div class="row">
    <div class="col"></div>
    <div class="col-sm-10 col-md-8">
      <div class="text-center">
        <h2>Faça Login</h2>
      </div>
      <form method="POST" action="<?php echo base_url('Contas/validarLogin'); ?>" id="Login">
        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="senha">Senha</label>
          <input type="password" class="form-control" id="senha" name="senha">
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary">ENTRAR</button>
        </div>
      </form>
    </div>
    <div class="col"></div>
  </div>
  <div class="py-5"></div>
</div>
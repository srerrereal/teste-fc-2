<?php $__env->startSection('content'); ?>
    

  <?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
        <div class='container'>


           <div class="card text-left signup-area">

            <div class="card-header">
              <h1>Cadastrar</h1>
            </div>

      <form style='margin-top: 2em;'>


        <div class="form-group" style='width: 20em; margin-left: 2em;'>
          <label for="name">Nome Completo</label>
          <input type="name" minlength="6" class="form-control" name="" id="name" aria-describedby="name" placeholder="Ex.: João Maria">
          <small id="helpId" class="text-muted">Preencha com as informações solicitadas</small>        
        </div>  

        <div class="form-group"  style="width: 20em; margin-left: 2em;">

          <label for="email">E-mail</label>
          <input type="email" minlength="6" class="form-control" name="email" id="email" aria-describedby="email" placeholder="exemplo@mail.com">
          <small id="helpId" class="text-muted">Preencha com as informações solicitadas</small> 
     
        </div>


        <div class="form-group"  style="width: 20em; margin-left: 2em;">

          <label for="password">Senha</label>
          <input type="password" minlength="6" name="password" id="password" class="form-control" placeholder="Sua Senha" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Cria uma senha com mínimo 6 digitos [ A | Z / 0 ~ 9 ]</small>
          
        </div>

        <div class="form-group" style="width: 20em; margin-left: 2em;">
          <label for=""></label>
          <input name="" id="" class="btn btn-primary" type="button" value="Cadastrar">
       
        </div>


      </form>
  

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/agenda-fc/resources/views/pages/signup.blade.php ENDPATH**/ ?>
    <?php $__env->startSection('content'); ?>
        

        <?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="d-flex justify-content-center align-self-center"  style="margin-top: 40px;" >
                <div class="card area-login d-flex justify-content-center" style="width: 30em;">
                    <div class="card-header text-center">
                    <h4>Bem-vindo</h4>
                <p>Por favor entre com os dados abaixo:</p>
                    </div>
                
                    <div class="card-body">

                           
                    <form>
                       

                    <div class='form-group text-center'>
                    <h1>Acesso Restrito</h1>
                    </div>

                        <div class="form-group row">


                            <label for="email" class="col-sm-1-12 col-form-label">Digite o E-mail</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="seu@email.com" Required>
                        </div> 
                        
                        <div class="form-group row">
                            <label for="password" class="col-sm-1-12 col-form-label">Digite a senha</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="senha" Required>
                        </div>
                        <div class="form-group text-center">
                           
                                <button type="submit" class="btn btn-primary">Entrar</button>
                
                        </div>
                    </form>
                    </div>
                </div>
            </div>

            <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/agenda-fc/resources/views/pages/index.blade.php ENDPATH**/ ?>
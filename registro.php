<?php
    require_once 'head.php';
    require_once 'menu.php';
    require_once 'cabecera.php';

?>
<div class="container-fluid">
    <div class="container">
        <div class="row py-3">
            <div class="col-lg-3">

            </div>
                <div class="col-lg-6">
                    <div class='card bg-light shadow px-2 rounded'>
                        <div class='card-body'><h5 class='card-title text-center'><em>DATOS DE CLIENTE</em></h5>
                        <h6 class='card-subtitle mb-2 text-muted'>Ofertas</h6>
                        <form class="form-horizontal" method="post" action="registrar.php">
                    <fieldset>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-12">
                                <input id="nombre" name="Nombre" type="text" 
                                    placeholder="Nombre" class="form-control" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-12">
                                <input id="apellidos" name="Apellidos" type="text" placeholder="Apellidos" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-12">
                                <input id="Email" name="Email" type="email" 
                                    placeholder="Email Address" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center">Contraseña</span>
                            <div class="col-md-12">
                                <input id="pwd1" name="pwd1" type="password" placeholder="Password" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center">Repita Contraseña</span>
                            <div class="col-md-12">
                                <input id="pwd2" name="pwd2" type="password" placeholder="Pasword" class="form-control" required>
                            </div>
                        </div>



                        
                      
                        <div class="form-group">
                            <div class="col-md-12 text-center btm-danger">
                                <button type="submit" class="btn btn-danger">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>

                    </div>
                     
               </div>
          
          </div>

            </div>
            <div class="col-lg-3">

            </div>


        
        </div>
    </div>

</div>
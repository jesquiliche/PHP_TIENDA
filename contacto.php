
<?php
 require_once 'head.php';
 require_once 'cabecera.php';
 require_once 'menu.php';
 require_once 'conexion.php';

?>
<div class="container-fluid">
<div class="container">
<div class="container">
    <div class="row">

    <div class="card-body mx-auto">   
            <form method="post" class="card bg-light shadow px-2 rounded col-lg-12" action="pcontacto.php">
                
                    
                    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header"><h4>Datos de contacto</h4></legend>

                        <div class="form-group fprm-inline">
                            
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-12">
                                <input id="Nombre" name="Nombre" type="text" placeholder="Nombre" class="form-control" required>
                            </div>
                     
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-12">
                                <input id="Apellidos" name="Apellidos" type="text" placeholder="Apellidos" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-12">
                                <input type="email" id="Email" name="Email"  placeholder="Email" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-12">
                                <input type="tel" id="Telefono" name="Telefono" placeholder="Teléfono" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-12">
                                <textarea class="form-control" id="mensaje" name="Comentario" placeholder="Entre su mensaje." rows="7" required></textarea>
                            </div>
                            
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-danger btn-lg">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>                            
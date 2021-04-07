
<div class="menu text-white">
    
    <nav class="navbar navbar-expand-md navbar-primary fixed-top bg-danger ">
        
        <a href="index.php" class="navbar-brand text-light">JQE</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="btn-group role="group" aria-label="Basic example">
                <button type="button" class="btn btn-danger btn-lg">
                    <a class="text-light" href="#" class="nav-item">Servicios</a>
                </button>
                
                <button type="button" class="btn btn-danger btn-lg">
                    <a class="text-light" href="contacto.php" class="nav-item">Contacto</a>
                </button>
                
                <button type="button" class="btn btn-danger btn-lg">
                    <a class="text-light" href="#" class="nav-item">Donde estamos</a>
                </button>
                
                <ul class="nav navbar-nav">


                    <li class="nav-item dropdown">
                        <a href="#" class="btn btn-danger btn-lg  dropdown-toggle" data-toggle="dropdown">Categorías</a>
                        <div class="dropdown-menu">
                            <?php
                                require_once 'conexion.php';
                                global $link;
                                global $usuario, $pwd,$pdo;
                                $pdo = new PDO($link, $usuario, $pwd);
                                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                foreach($pdo->query('SELECT * FROM tienda.VCATEGORIAS') as $fila) {
                                    //echo "<a href='#' class='dropdown-item'>".$fila['CATEGORIA']."</a>";
                                    if($fila['N']>0){
                                    echo "<ul class='nav navbar-nav'>";


                                    echo "<li class='nav-item dropdown'>";
                                        echo "<div class='dropdown-item dropright'>";

                                        echo "<a href='#' class='sm dropdown-toggle' data-toggle='dropdown'>".$fila['CATEGORIA']."</a>";

                                        echo "<div class='dropdown-menu'>";
                                        echo "<a href='#' class='dropdown-item'>".$fila['CATEGORIA']."</a>";
                                        echo "<a href='#' class='dropdown-item'>".$fila['CATEGORIA']."</a>";
                                        echo "<a href='#' class='dropdown-item'>".$fila['CATEGORIA']."</a>";
                                        echo "<a href='#' class='dropdown-item'>".$fila['CATEGORIA']."</a>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "</li>";
                                        echo "</ul>";
                                    } else {
                                        echo "<a href='#' class='dropdown-item'>".$fila['CATEGORIA']."</a>";
                                    }

                                    
                                }
                            ?>
                        </div>
                </li>
</ul>
            
            <ul class="nav navbar-nav ml-auto">
                <li>
        
                <form class="form-inline ml-5" action="login.php" method="POST">
                    <div class="form-group mx-sm-1">
                        <label for="inputUser" class="sr-only"></label>
                        <input type="email" name="correo" class="form-control" id="inputUser" placeholder="Usuario" required>
                    </div>
                    
                    <div class="form-group mx-sm-1">
                        <label for="inputPass" class="sr-only"></label>
                        <input type="password" name="pwd" class="form-control" id="inputPass" placeholder="Contraseña" required>
                    </div>
                    
                    <div class="form-group mx-sm-1">
                        <button type="submit" class="btn btn-warning">Ingresar</button>
                        
                        <a href="registro.php" class="btn btn-warning ml-1">Registrar</a>
                        <img src='./assets/img/carrito-peque.png'/>
                    </div>
                    
                </form>
                </li>                
                </nav>

            
    
</div>


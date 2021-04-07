<?php



$link='mysql:host=localhost;port=3307;dbname=tienda';
$usuario="root";
$pwd="3912481";

function categorias()
{
   
    try {
        global $link;
        global $usuario, $pwd,$pdo;
        $pdo = new PDO($link, $usuario, $pwd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // $mdb->exec('SET ChARACTER SET utf8');
        echo "<div class='container-fluid'>
              
       <div class='container py-3 rm-auto'>
        <div class='row'>
        ";
        foreach($pdo->query('SELECT * FROM tienda.CATEGORIAS') as $fila) {
            echo "
            
            <div class='card bg-light shadow px-2 rounded col-lg-3 '>
            <div class='card-body'><h5 class='card-title'>".$fila['NOMBRE']."</h5>
              <h6 class='card-subtitle mb-2 text-muted'>Ofertas</h6>
              <div class='item'>
                <img src='".$fila['FOTO']."' />
                

              </div>
              <a href='ofertas.php?categoria=".$fila['ID']."' class='btn btn-danger'>Ofertas</a>
           
               </div>
          
          </div>
          
          ";

        }
        echo "</div>
              
        </div>
         </div>
         </div>
         ";
         
        $pdo = null;
    } catch (Exception $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    return true;
};

function ArticulosPorCategoria($categoria)
{
   
    try {
        global $link;
        global $usuario, $pwd,$pdo;
        $pdo = new PDO($link, $usuario, $pwd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // $mdb->exec('SET ChARACTER SET utf8');
        echo "<div class='container-fluid'>
              
       <div class='container py-3 mx-auto'>
        <div class='row'>        ";
        $sql='SELECT * FROM tienda.vfarticulos WHERE CATEGORIA='.$categoria.' LIMIT 4';
        
        
        foreach($pdo->query($sql) as $fila)
        {
          echo "
          
          <div class='card bg-light shadow px-2 rounded col-lg-10 '>
          <div class='card-body'><h4>".$fila['NOMBRE']." - ".$fila['PRECIO']." €
          </h4>
            
            <div class='row'>
            <div class='item col-lg-offset-1 col-lg-5'>
              <img class='zoom' src='".$fila['FOTO']."'/>
            </div>
            
            <div class='item col-lg-5'><b>".
              $fila['SNOMBRE']."</b>
              <br/>
              <b>MARCA</b>
              ".$fila['MARCA']."
              </br>
              <b>DESCRIPCIÓN</b>
              <p>".$fila['DESCRIPCION']."</p>
            
              

            </div>
            
            </div>
            <a href='#'class='btn btn-danger'>Comprar</a>
         
             </div>
        
        </div>
        
        ";

        }
        echo "</div>
              
        </div>
         </div>
         ";
         
        $pdo = null;
    } catch (Exception $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    return true;
};



?>


<?PHP
echo "
$('#tree').tree({
  dataSource: [ 
    { 
      text: 'Planta 1', 
      children: [ 
        { text: 'Área 1', 
         children: [
           { text: 'Equipo 1',
             children: [
               { text: 'Punto 1' },
               { text: 'Punto 2' },
               { text: 'Punto 3' }
             ]
           }
         ] 
        } 
      ] 
    }
  ]
});
<link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css' rel='stylesheet'/>
<link href='https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css' rel='stylesheet'/>

<div class='container'>
  <div id='tree'></div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js'></script>";

?>
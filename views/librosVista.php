<?php include_once("encabezado.php"); ?>
        <h1 class="text-center">Tipos de cafe</h1>
        <div class="card p-4 bg-light">
          <?php
            $ren = 0;
            for ($i=0; $i < count($datos["data"]); $i++) { 
              if ($ren==0) {
                print "<div class='row'>";
              }
              print "<div class='card pt-2 col-sm-3'>";
              print "<img src='public/img/".$datos['data'][$i]["imagen"]."' ";
              print "class='img-responsive' style='width:100%; height:140px;' ";
              print "alt='".$datos['data'][$i]["nombre"]."'/>";
              print "<p><a href='".URL."admonProductos/producto/";
              print $datos['data'][$i]["id"]."/libros'>";
              print $datos['data'][$i]["nombre"]."</a></p>";
              print "</div>";
              $ren++;
              if ($ren==4) {
                $ren = 0;
                print "</div>";
              }
            }
          ?>
        </div><!--card-->
<?php include_once("piepagina.php"); ?>
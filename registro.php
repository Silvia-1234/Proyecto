<?php include("include/EncabezadoAdmin.php") ?>


    <div class="">
        <p >
          <h4 >AÑADIR ADMINISTRADOR</h4>
       </p>
       <h4 >llenar formulario</h4>
             <form action="validaregistro.php" method="POST">
                        
            <div >
              <input type="text"  name="nombre" placeholder="nombre">
            </div><br>

            <div>
              <input type="text" name="apellidos" placeholder="apellidos">
            </div>
            <br>

            <div>
              <input type="text" name="ci" placeholder="ci">
            </div>
            <br>

            <div>
              <input type="text" name="usuario" placeholder="usuario">
            </div>
            <br>

            <div>
              <input type="password" name="contraseña" placeholder="contraseña">
            </div>
            <br>
            
            <br>

            <button class="btn-login" type="submit">Registrar     <i class=""></i></button>
        </form>

    </div>  


    <?php include("include/footer.php") ?>

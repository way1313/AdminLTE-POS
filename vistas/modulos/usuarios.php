 
<div class="content-wrapper">
    
  <section class="content-header">
     
    <h1>
      Administrar Usuarios
     
    </h1>

    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Administrar Usuarios</li>
    </ol>

  </section>

   
  <section class="content">

     
      <div class="box">
        <div class="box-header with-border">
         
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
            
            Agregar Usuario

          </button>
         
        </div>
        <div class="box-body">
          
          
          <table class="table table-bordered table-striped table-responsive tablas">

            <thead>
              
              <tr>
                
                <th style="width: 10px">#</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Foto</th>
                <th>Perfil</th>
                <th>Estado</th>
                <th>Ultimo Login</th>
                <th>Acciones</th>

              </tr>

            </thead>
            
            <tbody>
              
              <tr>
                
                <td>1</td>
                <td>Usuario Administrador</td>
                <td>admin</td>
                <td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                <td>Administrador</td>
                <td><button class="btn btn-success btn-xs">Activado</button></td>
                <td>2025-11-18 12:05:32</td>
                <td>
                  <div class="btn-group">

                    <button class="btn btn-warning "><i class="fa fa-pencil"></i></button>

                    <button class="btn btn-danger "><i class="fa fa-times"></i></button>
                    

                  </div>

                </td>




              </tr>


              <tr>
                
                <td>1</td>
                <td>Usuario Administrador</td>
                <td>admin</td>
                <td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                <td>Administrador</td>
                <td><button class="btn btn-success btn-xs">Activado</button></td>
                <td>2025-11-18 12:05:32</td>
                <td>
                  <div class="btn-group">

                    <button class="btn btn-warning "><i class="fa fa-pencil"></i></button>

                    <button class="btn btn-danger "><i class="fa fa-times"></i></button>
                    

                  </div>

                </td>




              </tr>


              <tr>
                
                <td>1</td>
                <td>Usuario Administrador</td>
                <td>admin</td>
                <td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                <td>Administrador</td>
                <td><button class="btn btn-danger btn-xs">Inactivo</button></td>
                <td>2025-11-18 12:05:32</td>
                <td>
                  <div class="btn-group">

                    <button class="btn btn-warning "><i class="fa fa-pencil"></i></button>

                    <button class="btn btn-danger "><i class="fa fa-times"></i></button>
                    

                  </div>

                </td>

              </tr>

            </tbody>

          </table>

        </div>
    
      </div>
    
  </section>
  
</div>


<!--======================================
MODAL AGREGAR USUARIO
=======================================-->

<div class="modal fade" id="modalAgregarUsuario" role="dialog">

  <div class="modal-dialog">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data">

<!--====================================== 
CABEZA DEL MODAL
=======================================-->
      <div class="modal-header" style="background: #3c8dbc; color: white;">

        <h4 class="modal-title">Agregar Usuario</h4>

        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>

<!--======================================
CUERPO DEL MODAL
=======================================-->     
      <div class="modal-body">
        <div class="box-body">
          
          <!--ENTRADA PARA EL NOMBRE-->

          <div class="form-group">
            
            <div class="input-group">
              
              <span class="input-group-addon"><i class="fa fa-user"></i></span>

              <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar Nombre" required>

            </div>

          </div>

          <!--ENTRADA PARA EL USUARIO-->
          <div class="form-group">
            
            <div class="input-group">
              
              <span class="input-group-addon"><i class="fa fa-key"></i></span>

              <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar Usuario" required>

            </div>

          </div>

          <!--ENTRADA PARA EL CONTRASEÑA-->
          <div class="form-group">
            
            <div class="input-group">
              
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>

              <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar Contraseña" required>

            </div>

          </div>

          <!--ENTRADA PARA SELECCIONAR SU PERFIL-->
          <div class="form-group">
            
            <div class="input-group">
              
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>

              <select class="form-control input-lg" name="nuevoPerfil">
                
                <option value="">Seleccionar Perfil</option>
                <option value="Administrador">Administrador</option>
                <option value="Especial">Especial</option>
                <option value="Vendedor">Vendedor</option>

              </select>

            </div>

          </div>

           <!--ENTRADA PARA SUBIR FOTO-->
          <div class="form-group">
            
            <div class="panel">SUBIR FOTO</div>

            <input type="file" id="nuevaFoto" name="nuevaFoto">

            <p class="help-block">Peso maximo de la foto 200mb</p>

            <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="100px">

          </div>


        </div>
      </div>

<!--======================================
PIE DEL MODAL
=======================================-->      
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary">Guardar Usuario</button>
      </div>

      <?php


        $crearUsuario = new ControladorUsuarios();
        $crearUsuario -> ctrCrearusuario();


      ?>
      
    </form>

    </div>
  </div>
</div>

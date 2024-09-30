<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/mainpart.php');
include ('../app/controllers/usuarios/listado_usuarios.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Listado de usuarios</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Usuarios registrados</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                            <table class="table table-bordered table-hover table-sm">
                                <tr>
                                   <th>No.</th>
                                   <th>Nombres</th>
                                   <th>Email</th>
                                </tr>                                 
                                <tbody>
                                <?php
                                Foreach ($usuarios_datos as $usuarios_datos){ ?>
                                <tr>
                                    <td><?php echo $usuarios_datos['id_usuario'];?></td>
                                    <td><?php echo $usuarios_datos['nombres'];?></td>
                                    <td><?php echo $usuarios_datos['email'];?></td>
                                </tr>

                                <?php  
                                }
                                ?>
                                </tbody>
                            </tabe>
                        </div>

                    </div>
                </div>
            </div>





            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
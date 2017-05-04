
<?php include "includes/header.php"; ?>
<?php ob_start(); ?>
    <div id="wrapper">

        <!-- Navigation -->
      <?php include "includes/navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Bem vindo
                            <small>Gustavo</small>
                        </h1>

                        <div class="col-sm-6">

                          <?php
                                insertCategoria();
                           ?>

                          <form action="" method="post">
                            <div class="form-group">
                              <label for="cat_nome">Adicionar Categoria</label>
                              <input type="text" class="form-control" name="cat_nome">
                            </div>

                            <div class="form-group">
                            <input type="submit" class="btn btn-primary"
                            name="enviar" value="Adicionar">
                            </div>
                          </form>


                        <?php  // EDITA CATEGORIAS

                          if(isset($_GET['edit'])){
                            $cat_id = $_GET['edit'];
                            include "includes/editar_categorias.php";
                           }
                        ?>

                          <!-- FECHA DIV SM 6-->
                        </div>


                        <div class="col-sm-6">

                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th> ID </th>
                                    <th> Nome da Categoria </th>
                                  </tr>
                                </thead>

                                <tbody>

                                  <?php // MOSTRA AS CATEGORIAS
                                    mostraDadosCategoria();
                                  ?>

                                  <?php // DELETA CATEGORIA
                                      deletaCategoria();
                                   ?>

                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include "includes/footer.php"; ?>

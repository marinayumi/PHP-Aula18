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

                                <table class="table table-bordered table-hover">
                                  <thead>
                                    <tr>
                                      <th>ID</th>
                                      <th>Autor</th>
                                      <th>Nome</th>
                                      <th>Status</th>
                                      <th>Imagem</th>
                                      <th>Data</th>
                                      <th>Tags</th>
                                      <th>Conteúdo</th>
                                    </tr>
                                  </thead>


                                  <tbody>

                                      <?php
                                      $query = "SELECT * from posts";
                                      $select_posts = mysqli_query($connection, $query);
                                      while($row = mysqli_fetch_assoc($select_posts)){
                                          $post_id = $row['post_id'];
                                          $post_autor = $row['post_autor'];
                                          $post_nome = $row['post_nome'];
                                          $post_status = $row['post_status'];
                                          $post_imagem = $row['post_imagem'];
                                          $post_data = $row['post_data'];
                                          $post_tags = $row['post_tags'];
                                          $post_conteudo = $row['post_conteudo'];

                                          echo "<tr>";
                                          echo "<td> $post_id </td>";
                                          echo "<td> $post_autor </td>";
                                          echo "<td>" . $post_nome . "</td>";
                                          echo "<td>" . $post_status . "</td>";
                                          echo "<td><img src='../images/" . $post_imagem . "' class = 'img-responsive'></td>";
                                          echo "<td>" . $post_data . "</td>";
                                          echo "<td>" . $post_tags . "</td>";
                                          echo "<td>" . $post_conteudo . "</td>";
                                          echo "</tr>";
                                        }
                                       ?>


                                  </tbody>

                                </table>



                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include "includes/footer.php"; ?>

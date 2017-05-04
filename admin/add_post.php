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

                        <?php

                          if(isset($_POST['adicionar'])){
                            $post_nome = $_POST['post_nome'];
                            $post_autor = $_POST['post_autor'];
                            $post_status = $_POST['post_status'];

                            $post_imagem = $_FILES['post_imagem']['name'];
                            $post_imagem_temp = $_FILES['post_imagem']['tmp_name'];

                            $post_data = date('Y-m-d');
                            $post_tags = $_POST['post_tags'];
                            $post_conteudo = $_POST['post_conteudo'];

                            move_uploaded_file($post_imagem_temp, "../images/$post_imagem");



                            $query = "INSERT INTO posts(post_nome, post_autor, post_conteudo, post_imagem, post_data, post_tags, post_status) VALUES('$post_nome', '$post_autor', '$post_conteudo', '$post_imagem', '$post_data', '$post_tags', '$post_status')";
                            $resultado = mysqli_query($connection, $query);


                            if(!$resultado){
                              die("Não deu certo, porque: ") . mysqli_error($connection);
                            }
                            else {
                              echo "Post adicionado com sucesso";
                            }
                          }

                         ?>

                        <form class="" action="" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="post_nome">Título do Post: </label>
                            <input type="text" name="post_nome" class="form-control">
                          </div>

                          <div class="form-group">
                            <label for="post_autor">Autor: </label>
                            <input type="text" name="post_autor" class="form-control">
                          </div>

                          <div class="form-group">
                            <label for="post_status">Status do Post: </label>
                            <input type="text" name="post_status" class="form-control">
                          </div>

                          <div class="form-group">
                            <label for="post_imagem">Imagem do Post: </label>
                            <input type="file" name="post_imagem" >
                          </div>

                          <div class="form-group">
                            <label for="post_tags">Tags do Post: </label>
                            <input type="text" name="post_tags" class="form-control">
                          </div>

                          <div class="form-group">
                            <label for="post_conteudo">Conteúdo do Post: </label>
                            <textarea name="post_conteudo" class="form-control" cols="30" rows="10"> </textarea>
                          </div>

                          <div class="form-group">
                            <input type="submit" name="adicionar"  value="ADICIONAR" class="btn btn-primary">
                          </div>

                        </form>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include "includes/footer.php"; ?>

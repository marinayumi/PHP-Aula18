<form action="" method="post">
  <div class="form-group">
    <label for="cat_nome">Editar Categoria</label>

    <?php

    if(isset($_GET['edit'])){

      $cat_id = $_GET['edit'];

    $query = "SELECT * from categorias WHERE cat_id = {$cat_id}";
    $select_categorias = mysqli_query($connection, $query);
    while($row = mysqli_fetch_assoc($select_categorias)){
        $cat_id = $row['cat_id'];
        $cat_nome = $row['cat_nome'];

    ?>

      <input value="<?php if(isset($cat_nome)) {echo $cat_nome;}?>" type="text" class="form-control" name="cat_nome">

    <?php  }} ?>


    <?php
    if (isset($_POST['editar'])) {

      $edita_cat_nome = $_POST['cat_nome'];

      $query = "UPDATE categorias SET cat_nome = '$edita_cat_nome'
      WHERE cat_id = {$cat_id}";
      $editaCategoria = mysqli_query($connection, $query);

      if(!$editaCategoria){
        die("deu ruim" . mysqli_error($connection));
      }

    }

     ?>






  </div>

  <div class="form-group">
  <input type="submit" class="btn btn-primary" name="editar" value="EDITAR">
  </div>


</form>

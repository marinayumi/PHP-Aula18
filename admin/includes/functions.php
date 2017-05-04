<?php
  // INSERIR CATEGORIA

  function insertCategoria() {
      global $connection;

    if(isset($_POST['enviar'])){
      $cat_nome = $_POST['cat_nome'];

      if($cat_nome == ""){
        echo "Insira uma categoria";
      }
      else {
        $query = "INSERT INTO categorias(cat_nome) VALUE('$cat_nome')";
        $resultado = mysqli_query($connection, $query);


        if(!$resultado){
          die("Não deu certo, porque: ") . mysqli_error($connection);
        }
        else {
          echo "Categoria adicionada com sucesso";
        }

      }


    }
  }

//EXIBIR CATEGORIAS NA TABELA

function mostraDadosCategoria() {
  global $connection;
  $query = "SELECT * from categorias";
  $select_categorias = mysqli_query($connection, $query);
  while($row = mysqli_fetch_assoc($select_categorias)){
      $cat_id = $row['cat_id'];
      $cat_nome = $row['cat_nome'];

      echo "<tr>";
      echo "<td>" . $cat_id . "</td>";
      echo "<td>" . $cat_nome . "</td>";
      echo "<td><a href='categorias.php?delete={$cat_id}'>Apagar</a></td>";
      echo "<td><a href='categorias.php?edit={$cat_id}'>Editar</a></td>";
      echo "</tr>";
    }
}

// DELETAR categorias

function deletaCategoria(){
  global $connection;
  if (isset($_GET['delete'])) {

    $apaga_cat_id = $_GET['delete'];

    $query = "DELETE FROM categorias WHERE cat_id = {$apaga_cat_id}";
    $apagandoId = mysqli_query($connection, $query);
    header("Location: categorias.php");
  }
}



 ?>

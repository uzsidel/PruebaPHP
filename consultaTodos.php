<?php  

$valor = $_GET['llaveabuscar'];

$data = json_decode( file_get_contents('https://jsonplaceholder.typicode.com/users/'.$valor.'/todos'), true );


echo "<h4>Todos</h4>";
for ($i=0; $i < count($data) ; $i++) { 
?>
userId: <?php echo $data[$i]['userId']; ?><br>
id: <?php echo $data[$i]['id']; ?><br>
title: <?php echo $data[$i]['title']; ?><br><br>

<?php 
}
?>



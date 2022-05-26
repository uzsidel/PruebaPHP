<?php  

$valor = $_GET['llaveabuscar'];

$data = json_decode( file_get_contents('https://jsonplaceholder.typicode.com/users/'.$valor.'/posts'), true );
$data2 = json_decode( file_get_contents('https://jsonplaceholder.typicode.com/post/'.$valor.'/comments'), true );

echo "<h4>Post</h4>";
for ($i=0; $i < count($data) ; $i++) { 
?>
Title: <?php echo $data[$i]['title']; ?><br>
Body: <?php echo $data[$i]['body']; ?><br><br>

<?php 
}
?>



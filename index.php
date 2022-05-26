<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
</head>
<body>

</body>
</html>
<?php 


$data = json_decode( file_get_contents('https://jsonplaceholder.typicode.com/users'), true );


?>
<ul>
<?php  

for ($i=0; $i < count($data); $i++) { 
	echo "<li style='cursor:pointer;' onClick=valor($i+1);>"."Id: ".$data[$i]['id']."</li>";
}
?>
</ul>

 <div id="resultado">
 	
 </div>



 <script>
	function valor(index){
		console.log(index);
		var parametros = {
		  "llaveabuscar" : index
		};
		$.ajax({
    		  data:  parametros,
    		  url:   'data.php',
    		  type:  'get',
    		  success:  function (response) {
    				  $("#resultado").html(response);

    		  }
    	});
	}
</script>
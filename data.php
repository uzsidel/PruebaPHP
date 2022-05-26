<?php 

$valor = $_GET['llaveabuscar'];

$data = json_decode( file_get_contents('https://jsonplaceholder.typicode.com/users/'.$valor), true );


 ?>
<h3>Datos del Usuario</h3>
<p>Nombre:  <?php echo $data['name']; ?></p>
<p>APellido: <?php echo $data['username']; ?></p>
<p>Email: <?php echo $data['email']; ?></p>

<button onclick="mostrarPost(<?php echo $valor; ?>)">POST</button>
<button onclick="mostrarTodos(<?php echo $valor; ?>)">TODOS</button>

<div id="seccion"></div>


 <script>
	function mostrarPost(valor){
		console.log(valor);
		var parametros = {
		  "llaveabuscar" : valor
		};
		$.ajax({
    		  data:  parametros,
    		  url:   'consulta.php',
    		  type:  'get',
    		  success:  function (response) {
    				  $("#seccion").html(response);

    		  }
    	});
	}

	function mostrarTodos(valor){
		console.log(valor);
		var parametros = {
		  "llaveabuscar" : valor
		};
		$.ajax({
			  data:  parametros,
			  url:   'consultaTodos.php',
			  type:  'get',
			  success:  function (response) {
					  $("#seccion").html(response);

			  }
		});
	}	
</script>
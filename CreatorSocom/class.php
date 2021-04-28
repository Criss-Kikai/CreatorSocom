<html>
<head><title>hola</title></head>
<body>
<?php

$con = new Constr();
class Constr{
    var $this = "this";    

	function listadoDirectorio($directorio){
	    $listado = scandir($directorio);	    
        unset($listado[array_search('.', $listado, true)]);
	    unset($listado[array_search('..', $listado, true)]);
	    if (count($listado) < 1) {
	        return;
	    }
	    foreach($listado as $elemento){
	    	if(!is_dir($directorio.'/'.$elemento)) {
	        	echo "<li>- <a href='$directorio/$elemento'>$elemento</a></li>";
	        }
	        if(is_dir($directorio.'/'.$elemento)) {
	        	echo '<strong><li class="open-dropdown">'.$elemento.'</li></strong>';
	    		echo '<ul class="dropdown d-none">';
	        		$this->listadoDirectorio($directorio.'/'.$elemento);
	    		echo '</ul>';
	        }
	    }
	}
	
}


Echo "<strong>Header</strong>";
$con->listadoDirectorio('..\CreatorSocom\Parts\Header');
Echo "<strong>Body</strong>";
$con->listadoDirectorio('..\CreatorSocom\Parts\Body');
Echo "<strong>Footer</strong>";
$con->listadoDirectorio('..\CreatorSocom\Parts\Footer');

?>

<div id="cloning" class="row">
			<h4 class="col-12">Cloning</h4>
			<p class="col-12">Try dragging from one list to another. The item you drag will be cloned and the clone will stay in the original list.</p>
			<div id="example3-left" class="list-group col">
				<div class="list-group-item">Item 1</div>
				<div class="list-group-item">Item 2</div>
				<div class="list-group-item">Item 3</div>
				
				<div class="list-group-item" draggable="false" style="">Item 4</div><div class="list-group-item">Item 5</div>
				<div class="list-group-item">Item 6</div>
			</div>

			<div id="example3-right" class="list-group col">
				<div class="list-group-item tinted">Item 1</div>
				<div class="list-group-item tinted">Item 2</div>
				<div class="list-group-item tinted">Item 3</div>
				<div class="list-group-item tinted" style="">Item 4</div>
				<div class="list-group-item tinted" style="">Item 5</div>
				<div class="list-group-item tinted" style="">Item 6</div>
			</div>
		</div>


		<script src="js/Sortable.min.js"></script>
	<script src="js/options.js"></script>

</body>
</html>

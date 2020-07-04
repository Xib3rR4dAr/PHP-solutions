<?php

if( 'cli' == php_sapi_name() ){
	$lineBreak = "\n";
} else {
	$lineBreak = "<br>";
}

?>
<?php

$lines = 6;

for($i=1, $k=1; $i<=$lines; $i++){
	for($j=1; $j<$i+1; $j++){
		echo ( $i & 1 ? $j : $j+1 ) . " ";
	}
	echo $lineBreak;
}

?>

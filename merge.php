<?php

$filelist = [
    "names",
    "capital",
    "continent",
    "phone",
    "currency",
    "iso3",
];

$iso2 	= [];
$iso3 	= [];

foreach ($filelist as $file)  {
	$json	= json_decode( file_get_contents( $file . ".json" ), JSON_OBJECT_AS_ARRAY );
	foreach( $json as $key => $value ) {
		$iso2[$key][$file]	= $value;
		$iso2[$key]['iso2']	= $key;
	}
}

foreach( $iso2 as $key => $value ) {
	$iso3[ $iso2[$key]['iso3'] ]	= $value;
}

file_put_contents( "combined.iso2.json", json_encode( $iso2,  JSON_PRETTY_PRINT ) );
file_put_contents( "combined.iso3.json", json_encode( $iso3,  JSON_PRETTY_PRINT ) );


?>
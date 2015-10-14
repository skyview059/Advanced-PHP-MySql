<?php 

$json = array(
'results' => array( 
    'address_components' => array(
            array(
                "long_name" 	=> "Dhaka",
                "short_name" 	=> "Dhaka",
                "types" 		=> array ( "locality", "political" )
            ),
            array (
                "long_name" 	=> "Dhaka",
                "short_name" 	=> "Dhaka",
                "types" 		=> array ( "administrative_area_level_2", "political" )
            ),
            array (
                "long_name" 	=> "Dhaka Division",
                "short_name" 	=> "Dhaka Division",
                "types" 		=> array ( "administrative_area_level_1", "political" )
            ),
            array (
                "long_name" 	=> "Bangladesh",
                "short_name" 	=> "BD",
                "types" 		=> array ( "country", "political" )
            )									
        )
    ),
'status' => 'OK'
);
		
header("HTTP/1.1 200 OK"); 
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: http://www.example.com/');
header('Access-Control-Max-Age: 3628800');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');	
	
$new_json = (json_encode($json));
echo _format_json($new_json);


echo "\r\n \r\n";
//foreach (getallheaders() as $name => $value) {
//    echo "$name: $value\n";
//}

//print_r(getallheaders());



function _format_json($json, $html = false) {
		$tabcount = 0; 
		$result = ''; 
		$inquote = false; 
		$ignorenext = false; 
		if ($html) { 
		    $tab = "&nbsp;&nbsp;&nbsp;"; 
		    $newline = "<br/>"; 
		} else { 
		    $tab = "\t"; 
		    $newline = "\n"; 
		} 
		for($i = 0; $i < strlen($json); $i++) { 
		    $char = $json[$i]; 
		    if ($ignorenext) { 
		        $result .= $char; 
		        $ignorenext = false; 
		    } else { 
		        switch($char) { 
		            case '{': 
		                $tabcount++; 
		                $result .= $char . $newline . str_repeat($tab, $tabcount); 
		                break; 
		            case '}': 
		                $tabcount--; 
		                $result = trim($result) . $newline . str_repeat($tab, $tabcount) . $char; 
		                break; 
		            case ',': 
		                $result .= $char . $newline . str_repeat($tab, $tabcount); 
		                break; 
		            case '"': 
		                $inquote = !$inquote; 
		                $result .= $char; 
		                break; 
		            case '\\': 
		                if ($inquote) $ignorenext = true; 
		                $result .= $char; 
		                break; 
		            default: 
		                $result .= $char; 
		        } 
		    } 
		} 
		return $result; 
	}

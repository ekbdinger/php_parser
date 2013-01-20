<?php

// Parse employee data from a CSV file and 
// trying this on my own from the code in 17_parser2.php

// each record is on a separate line \n
function parse_data_file($data_file, $array_labels, $record_divider = "\n", $data_divider = ",") {
	ob_start();  // output buffer
	include($data_file);
	$data = ob_get_contents();
	ob_end_clean();

	$data_array = explode($record_divider, $data);

	// generalizes this to work with all types of input
	foreach ($data_array as $string)  {    // this takes one line (record) at a time
		$array = explode($data_divider, $string);  // dividing up contents in the record based on the delimiter ,
		foreach ($array as $key => $value) {
			$item[$array_labels[$key]] = trim($value); 
		}
		$items[] = $item;
//		die(var_dump($items));  // error checking to view the array
		}
		return $items;		


			// item[]
			// labels:  name, birth year, fav band, shoe size
			// example
			// array_label[$name] = George
			// 
		}
// parse_data_file();


// Creates the table from our previous example.
$data_file = 'data.txt';
$array_labels = array('First Name', 'Last Name', 'Email', 'Department');
$items = parse_data_file($data_file, $array_labels);
// print output_as_table($items);

var_dump($items);

// I just added this here.  This is working in the current example
// putting the die(var_dump($items)); in the foreach loop only ran the first time and then stopped the program

/*
	}
}
*/

?>
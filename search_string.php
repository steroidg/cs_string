<?php
require ("cs_string_functions.php");

function main() {
	$search_str=$_GET['search_str'];
	sql_connect();

	generate_html_header("boo");
	echo "$search_str\n";
	$a_result=mysql_fetch_array(mysql_query("SELECT id FROM cs_string WHERE code='$search_str';"));
	$string_id=$a_result['id'];
	echo "<br> code $string_id\n";
	$result=mysql_query("SELECT bag_id FROM cs_unit WHERE string_id='$string_id';");
	while ($a_result=mysql_fetch_array($result)) {
		$bag_id=$a_result['bag_id'];
		echo "<br> bag_id $bag_id\n";
	/*	
		$c_result=mysql_fetch_array(mysql_query("SELECT description FROM cs_bag WHERE id='$bag_id';");
		$bag_name=$c_result['description'];
		echo "<br> bag_name $bag_name\n";
	*/
	}
	
//	mysql_query("INSERT INTO cs_unit VALUES (NULL, '$string_id', '$bag_id');");
	generate_html_footer();

} # main()

main();
?>

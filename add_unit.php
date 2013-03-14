<?php
require ("cs_string_functions.php");

function main() {
	$string_id=$_GET['string_id'];
	$bag_id=$_GET['bag_id'];
	sql_connect();

	generate_html_header("boo");
	echo "$string_id  oe\n";
	echo "$bag_id oo\n";
	mysql_query("INSERT INTO cs_unit VALUES (NULL, '$string_id', '$bag_id');");
	generate_html_footer();

} # main()

main();
?>

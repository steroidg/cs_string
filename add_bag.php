<?php
require ("cs_string_functions.php");

function get_max_bag() {
	$result=mysql_fetch_array(mysql_query("SELECT MAX(id) FROM cs_bag;"));
	return $result['MAX(id)'];
} # get_max_bag()

function main() {
	$id=$_GET['box_id'];
	sql_connect();

	generate_html_header("boo");
	echo "$id\n";
	$max_bag=get_max_bag();
	$new_bag=$max_bag+1;
	$new_bag_str="bag $new_bag";
	echo "$new_bag_str\n";
	mysql_query("INSERT INTO cs_bag VALUES (NULL, \"$new_bag_str\", $id);");
	generate_html_footer();

} # main()

main();
?>

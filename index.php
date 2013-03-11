<?php

require ("cs_string_functions.php");

function generate_box_list() {
	$result=mysql_query("SELECT id, description FROM cs_box") or die (mysql_error());

	echo "<select id=\"cs_box\" name=\"box_id\">";

	while ($a_result=mysql_fetch_array($result)) {
		$box_id=$a_result['id'];
		$box_description=$a_result['description'];
		echo "<option value=\"$box_id\">$box_description</option>";
	};

	echo "</select>";
} # generate_box_list


function generate_dmc_list() {
	$result=mysql_query("SELECT id, code, description FROM cs_string WHERE sys='1' ORDER by code;") or die (mysql_error());

	echo "<select id=\"cs_string\" name=\"string_id\">";
	while ($a_result=mysql_fetch_array($result)) {
		$string_id=$a_result['id'];
		$string_code=$a_result['code'];
		$string_description=$a_result['description'];
		echo "<option value=\"$string_id\">$string_code $string_description</option>";
	};
	echo "</select>";
}

function generate_venus_list() {
	$result=mysql_query("SELECT id, code, description FROM cs_string WHERE sys='2' ORDER by code;") or die (mysql_error());

	echo "<select id=\"cs_string\" name=\"string_id\">";
	while ($a_result=mysql_fetch_array($result)) {
		$string_id=$a_result['id'];
		$string_code=$a_result['code'];
		$string_description=$a_result['description'];
		echo "<option value=\"$string_id\">$string_code $string_description</option>";
	};
	echo "</select>";
}

function generate_bag_list() {
	$result=mysql_query("SELECT id, description FROM cs_bag;") or die (mysql_error());

	echo "<select id=\"cs_bag\" name=\"bag_id\">";
	while ($a_result=mysql_fetch_array($result)) {
		$bag_id=$a_result['id'];
		$bag_description=$a_result['description'];
		echo "<option value=\"$bag_id\">$bag_description</option>";
	};
	echo "</select>";
}

function main() {
	generate_html_header("boo");
	sql_connect();
	get_row_usage();

	echo "<form name=\"add_bag\" action=\"add_bag.php\" method=\"GET\">\n";
	generate_box_list();
	echo "<input type=\"submit\" value=\"Add bag\">\n";
	echo "</form>\n";

	echo "<form name=\"add_unit\" action=\"add_unit.php\" method=\"GET\">\n";
	generate_dmc_list();
	generate_bag_list();
	echo "<input type=\"submit\" value=\"Add DMC unit\">\n";
	echo "</form>\n";
	
	echo "<form name=\"add_unit\" action=\"add_unit.php\" method=\"GET\">\n";
	generate_venus_list();
	generate_bag_list();
	echo "<input type=\"submit\" value=\"Add VENUS unit\">\n";
	echo "</form>\n";


	echo "<form name=\"add_unit\" action=\"search_string.php\" method=\"GET\">\n";
	echo "<input type=\"text\" name=\"search_str\"></input>";
	echo "<input type=\"submit\" value=\"Search\">\n";
	echo "</form>\n";

	generate_html_footer();
};

main();

?>

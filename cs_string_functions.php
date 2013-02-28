<?php

require ("cs_string_sql_connect.php");

function get_row_usage() {
	$result=mysql_query("SELECT id FROM cs_unit WHERE bag_id='2';") or die(mysql_error());;    
	$n_entries=mysql_num_rows($result);
	echo "\n\n weeee ! $n_entries\n\n";
};

function generate_html_header ($title) {
	echo "<html>\n";
	echo "  <head>\n";
	echo "    <title>\n";
	echo "      $title\n";
	echo "    </title>\n";
	echo "  </head>\n";
	echo "  <body>\n";
} //generate_html_header

function generate_html_footer () {
	echo "\n";
	echo "  </body>\n";
	echo "</html>\n";
}

?>

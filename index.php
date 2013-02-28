<?php

require ("cs_string_functions.php");

function main() {
	generate_html_header("boo");
	sql_connect();
	get_row_usage();
	echo "noheunoheuneoh";
	generate_html_footer();
};

main();

?>

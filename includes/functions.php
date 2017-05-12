<?php
	// Want to check if query actually worked otherwise exit with comment
	function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed.");
		}
	}
?>
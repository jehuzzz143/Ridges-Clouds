<?php

	if(!is_file('count.txt')){
		file_put_contents('count.txt',0);
	}
	$count = file_get_contents('count.txt');
	file_put_contents('count.txt',++$count);
?>
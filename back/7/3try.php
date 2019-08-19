<?php

try {
	echo '早上起床<br />';

	throw new Exception('拉肚子了', 10);
	echo '先吃早点<br />';
	
} catch (Exception $e) {
	echo $e->getMessage();
	echo $e->getCode();
}

echo '开始上班';
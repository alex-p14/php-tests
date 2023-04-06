<?php

require_once 'src/StringUtils.php';

if (\StringUtils\capitalize('hello') !== 'Hello') {
	throw new \Exception("Функция работает неверно!\n");
}
if (\StringUtils\capitalize('') !== '') {
	throw new \Exception("Функция работает неверно!\n");
}

echo "Все тесты успешно пройдены!\n";

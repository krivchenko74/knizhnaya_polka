$fh = fopen("testfile.txt", 'w+');
$test = <<<_END
Строка 1
Строка 2
Строка 3
_END;
fwrite($fh, $test) or die ("Сбой записи файла");
fclose($fh);
echo "Файл 'testfile.txt' записан успешно ";
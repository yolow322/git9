<p>В данной работе используюется хук pre-commit. При коммите выполняются UNIT тесты и если они провалются, то коммит не будет выпоплнен.</p>
<p>Для работы на linux необходимо заменить строчки <code>#!D:/OSPanel/modules/php/PHP_7.1/php.exe</code> и 
<code>exec('.\vendor\bin\phpunit tests\NumbersTest', $output, $returnCode);</code> в файле хука на: 
<code>#!/usr/bin/env php</code>, <code>exec('.\vendor\bin\phpunit', $output, $returnCode);</code>.</p>

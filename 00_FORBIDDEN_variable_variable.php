<?php

// Pure evil, why do variable variables even exist?
// https://www.php.net/manual/en/language.variables.variable.php

$a = 'hello';
$$a = 'world';
// my VS Code PHP formatter adds the gap annoyingly $ $$$
$ $$a = 'why';
$ $ $$a = 'is this allowed';

echo "$a ${$a} ${$$a} ${$ $$a}";

echo "<br>";

echo "$a $hello $world $why";

/*
hello world why is this allowed
hello world why is this allowed
*/
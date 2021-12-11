<?php

$text = file_get_contents('input.txt', true);

preg_match_all('[defiant]', $text, $matches);

echo '<br /><br />';

echo 'Text in square brackets occured:'.  sizeof($matches[0]).' times <br />';
echo '<br /><br />';
echo 'The occurrences of Defiant: <br />';

print_r($matches);

echo '</pre>';

exit;


?>
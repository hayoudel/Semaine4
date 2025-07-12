<?php
function fucnc ($tab) {

foreach($tab as $element)
{
echo $element . '<br />'; 
}


}
$a = fucnc (array('de', 're', 'refe'));
echo $a ;
?>
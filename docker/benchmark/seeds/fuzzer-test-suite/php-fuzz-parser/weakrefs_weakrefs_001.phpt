<?php
$std = new stdClass;

debug_zval_dump($std);

$wr = WeakReference::create($std);
$wr2 = WeakReference::create($std);

debug_zval_dump($std);

var_dump($wr, $wr2);

debug_zval_dump($wr->get());
debug_zval_dump($wr2->get());

unset($std);

debug_zval_dump($wr->get());
debug_zval_dump($wr2->get());
?>
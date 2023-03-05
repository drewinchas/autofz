<?php
function test() {
    try {
        return 5;
    } finally {
        try {
            echo 1;
        } finally {
            echo 2;
        }
    }
}



$a = test();
if($a !== 5) {
    echo "FAILED: expected 5, received ", var_export($a), PHP_EOL;
} else {
    echo "Passed", PHP_EOL;
}
?>
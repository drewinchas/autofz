<?php

class bar  {
    public function __call($a, $b) {
        print "__call:\n";
        var_dump($a);
    }
    public function test() {
        self::ABC();
        bar::ABC();
        call_user_func(array('BAR', 'xyz'));
        call_user_func('BAR::www');
        call_user_func(array('self', 'y'));
        call_user_func('self::y');
    }
    static function x() {
        print "ok\n";
    }
}

$x = new bar;

$x->test();

call_user_func(array('BAR','x'));
try {
    call_user_func('BAR::www');
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
try {
    call_user_func('self::y');
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

?>
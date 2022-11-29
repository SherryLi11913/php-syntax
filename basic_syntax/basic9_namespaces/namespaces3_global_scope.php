<?php
    /* Global Scope */
    namespace NS;

    /* Access Global Classes inside a Namespace */
    echo "<h1>Accessing Global Classes inside a Namespace</h1>";

    class Exception extends \Exception {
    }

    $exception1 = new Exception();
    var_dump($exception1);
    echo "<br/>";
    $exception2 = new \Exception();
    var_dump($exception2);
    echo "<br/>";

    echo "<hr/>";

    /* Global Functions/Constants Fallback inside a Namespace */
    echo "<h1>Global Functions/Constants Fallback inside a Namespace</h1>";

    var_dump(E_ERROR);
    echo "<br/>";
    const E_ERROR = 20;
    var_dump(E_ERROR);
    echo "<br/>";

    function strlen($str) {
        return \strlen($str) + 20;
    }
    var_dump(strlen("Hi"));
    echo "<br/>";

    var_dump(is_array("Hi"));
    echo "<br/>";
    var_dump(is_array([]));
    echo "<br/>";
?>

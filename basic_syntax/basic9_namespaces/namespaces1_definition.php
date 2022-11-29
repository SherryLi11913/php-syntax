<?php
    /* Defining Namespaces */
    namespace NS;

    echo "<h1>Defining Namespaces <code>namespace</code></h1>";

    var_dump(__NAMESPACE__);
    echo "<br/>";

    trait CommonFunc {
        function print() {
            var_dump($this::class);
            echo "<br/>";
        }
    }

    class Obj {
        use CommonFunc;
    }
    $obj = new Obj();
    $obj->print();

    function fnc() {
        echo "<p>This is a function</p>";
    }
    fnc();

    const CONSTANT = "THIS IS A CONSTANT";
    var_dump(CONSTANT);
    echo "<br/>";
?>

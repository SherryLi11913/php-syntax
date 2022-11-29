<?php
    /* Declaring Multiple Namespaces */
    namespace NS1 {
        const CONSTANT = "CONSTANT IN NS1";

        trait CommonFunc {
            function print() {
                var_dump($this::class);
                echo "<br/>";
            }
        }

        class Obj {
            use CommonFunc;
        }

        function func() {
            echo "<p>Function in NS1</p>";
        }
    }

    namespace NS2 {
        const CONSTANT = "CONSTANT in NS2";

        class Obj {
            function print() {
                var_dump($this::class);
                echo "<br/>";
            }
        }

        function func() {
            echo "<p>Function in NS2</p>";
        }
    }

    // Global Scope
    namespace {
        echo "<h1>Declaring Multiple Namespaces</h1>";

        var_dump(NS1\CONSTANT);
        echo "<br/>";
        var_dump(NS2\CONSTANT);
        echo "<br/>";

        $obj1 = new NS1\Obj();
        $obj1->print();
        $obj2 = new NS2\Obj();
        $obj2->print();

        class Obj {
            use NS1\CommonFunc;
        }
        $obj3 = new Obj();
        $obj3->print();

        NS1\func();
        NS2\func();
    }
?>

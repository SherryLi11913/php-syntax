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
        echo "<h1>Aliasing/Importing</h1>";

        use NS1 as First;
        var_dump(First\CONSTANT);
        echo "<br/>";

        $obj1 = new First\Obj();
        $obj1->print();

        class Obj {
            use First\CommonFunc;
        }
        $obj2 = new Obj();
        $obj2->print();

        First\func();

        use const NS2\CONSTANT as CONSTANT;
        var_dump(CONSTANT);
        echo "<br/>";

        use function NS2\func as func;
        func();

        use NS2\Obj as Obj2;
        $obj3 = new Obj2;
        $obj3->print();
    }
?>

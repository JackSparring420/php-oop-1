    <?php

        class Film {

            public $title;
            public $subtitle;
            public $director;

            public function __construct($title) {

                $this -> title = $title;
            }
    
            public function setFullTitle($titolo, $subtitle) {
    
                $this -> title = $title;
                $this -> subtitle = $subtitle;
            }

            public function getTitle() {
    
                return $this -> title;
            }
    
            public function getFullTitle() {
    
                return $this -> title . $this -> subtitle;
            }
    
            public function __toString() {
    
                return $this -> getFullTitle() . "<br> regia di: " . $this -> director;
            }
        }

        $f1 = new Film("Sulla Mia Pelle");
        $f1 -> subtitle =  ": Gli ultimi sette giorni di Stefano Cucchi";
        $f1 -> director = "Alessio Cremonini";

        $f2 = new Film("L'Odio");
        $f2 -> subtitle = ": Fino a qui tutto bene...";
        $f2 -> director = "Mathieu Kassovitz";

        $f3 = new Film("Free State of Jones");
        $f3 -> director = "Gary Ross";

        echo "FILM 1: " . $f1 -> getTitle() . "<br>";
        echo "FILM 2: " . $f2 -> getTitle() . "<br>";
        echo "FILM 3: " . $f3 -> getTitle() . "<br>";

        echo "<br>";
    
        echo "FILM 1: " . $f1 -> getFullTitle() . "<br>";
        echo "FILM 2: " . $f2 -> getFullTitle() . "<br>";
        echo "FILM 3: " . $f3 -> getFullTitle() . "<br>";

        echo "<br>";

        echo "FILM 1: " . $f1 . "<br>";
        echo "FILM 2: " . $f2 . "<br>";
        echo "FILM 3: " . $f3 . "<br>";

        echo "<br>";

    ?>






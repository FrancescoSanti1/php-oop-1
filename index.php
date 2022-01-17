<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es. PHP OOP 1</title>
</head>
<body>
    <?php
        class Film {
            public $title;
            public $subtitle;
            public $director;

            public function __construct($title) {
                $this -> title = $title;
            }

            public function getFullTitle() {
                if($this -> subtitle) {
                    return $this -> title . ": " . $this -> subtitle;
                } else {
                    return $this -> title;
                }
            }

            public function __toString() {
                if($this -> director) {
                    return $this -> getFullTitle() . " | " . $this -> director;
                } else {
                    return $this -> getFullTitle() . " | ???";
                }
            }
        }

        $film1 = new Film("Gran Torino");
        $film2 = new Film("The Big Short");
        $film3 = new Film("Cape Fear");

        $film2 -> subtitle = "La grande scommessa";
        $film3 -> subtitle = "Il promontorio della paura";
        $film3 -> director = "Martin Scorsese";

        echo $film1 . "<br>";
        echo $film2 . "<br>";
        echo $film3 . "<br>";

    ?>

</body>
</html>
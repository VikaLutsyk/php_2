<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class</title>
</head>
<body>
    <?php

    class Clothes {
        private $name;
        private $brand;
        private $size;
        private $color;
        private $price;
        
        private $sale;
        
        public function __construct($name,$brand,$size,$color,$price, $sale) {
            $this->name = $name;
            $this->size = $size;
            $this->color = $color;
            $this->price = $price;
            $this->sale = $sale;
            $this->brand = $brand;
            $this->show();
        } 
    }
    
    $skirt = new Clothes("Юбка","HOME","S","red","500","10");
    $skirt->price();
    //$skirt->sale();
?>
</body>
</html>
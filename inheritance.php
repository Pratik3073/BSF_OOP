
<?php
  /*  class Mother
        {
            public function getEyeCount()
            {
                return 2;
            }
        }
    class Child extends Mother
        {

        }
(new Child)->getEyeCount();
*/
?>


<?php
    abstract class shape
    {
        protected $color;
       public function __construct($color = "red")
       {
        $this->color = $color;
       }
       public function getColor(){
        return $this->color;
       }

       abstract protected function getArea();
    }
    class square extends shape
    {
        protected$length=4;
        public function getArea()
            {
                return pow($this->length,2);
            }
    }
    class triangle extends shape
    {
        protected $base=4;
        protected $height = 7;
        public function getArea() //overriding functions form parent class
        {
            return .5* $this->base * $this->height;
        }
    }

    class circle extends shape
    {
        protected $radius=5;
        public function getArea()
        {
            return M_PI*pow($this->radius,2);
        }
    }

$circle = new circle;
echo $circle->getArea();

//new circle->getArea(); //we cannot assign like that  (new circle)->getArea();

?>


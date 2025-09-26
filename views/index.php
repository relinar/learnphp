<?php
$posts = [
  [
    'title' => 'World news 1',
    'published' => '16.09.2025',
    'author' => 'Kaspar',
    'body' => 'Some world news body 1'
  ],
  [
    'title' => 'World news 2',
    'published' => '15.09.2025',
    'author' => 'Martin',
    'body' => 'Some world news body 2'
  ],
  [
    'title' => 'World news 3',
    'published' => '14.09.2025',
    'author' => 'Pets',
    'body' => 'Some world news body 3'
  ],
  [
    'title' => 'World news 4',
    'published' => '13.09.2025',
    'author' => 'Kelly',
    'body' => 'Some world news body 4'
  ],
];
?>


<?php include __DIR__ . '/partials/header.php'; ?>
    <main class="container">
      <?php include __DIR__ . '/partials/hero.php'; ?>
      <?php include __DIR__ . '/partials/featured.php'; ?>

      <div class="row g-5">
        <div class="col-md-8">
            <?php include __DIR__ . '/partials/posts.php'; ?>
        </div>
        <div class="col-md-4">
          <?php include __DIR__ . '/partials/sidebar.php'; ?>
        </div>
      </div>
    </main>
<?php include __DIR__ . '/partials/footer.php'; ?>
<?php

class Cat {
    use Colorful;
}

class Box {
    use Colorful;
    private $width;
    protected $heigth;
    private $length;

    public static $count = 0;


    public static function test(){
        var_dump(static::class);
    }

    public function __construct($w=0, $h=0, $l=0)
    {   
        self::$count++;
        $this->width = $w;
        $this->heigth = $h;
        $this->length = $l;
    }

    public function getWidth(){
        return $this->width;
    }

    public function setWidth($width){
        if($width > 0 && is_numeric($width)){
            $this->width = $width;
        } else {
            throw new Exception('You are stupid dumbass');
        }


    }

    public function volume(){
        return $this->width * $this->heigth * $this->length;
    }
}

class MetalBox extends Box {
    public $material = 'metal';
    public $massPerUnit = 2; 

    public function changeWidth(){
        $this->width = 333;
    }

    public function mass() {
        return $this->volume() * $this->massPerUnit;
    }
}

trait Colorful {
    private $color;

    public function setColor($color){
        $this->color = $color;
    }
    public function getColor(){
        return $this->color;
    }
}


$metalBox = new Box(2,3,4);

$box2 = new Box(2,4,5);
Box::test();
MetalBox::test();
var_dump(Box::$count, Box::$count);



$metalBox->setWidth(12);

var_dump($metalBox);
var_dump($metalBox->volume());
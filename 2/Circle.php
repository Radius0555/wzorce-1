<?PHP

include_once('Shape.php');

class Circle extends Shape
{
  public $cx;
  public $cy;
  public $r;
  private $svg;

  public function __construct()
  {
    $this->svg_width = 100;
    $this->svg_height = 100;
    $this->color = 'green';
    $this->cx = 50;
    $this->cy = 50;
    $this->r = 35;
  }

  public function getShape()
  {
    $this->svg.='<svg width="'.$this->svg_width.'"height="'.$this->svg_height.'">"';
    $this->svg.='<circle cx="'.$this->cx.'"cy="'.$this->cy.'"r="'.$this->r.'"fill="'.$this->color.'"/>';
    $this->svg.='</svg>';

    echo $this->svg;
  }

  function __clone() {}
}

?>

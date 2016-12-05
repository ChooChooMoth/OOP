<?php
abstract class AbstractClass
{
    abstract protected function prefixName($name);

}

class ConcreteClass extends AbstractClass
{

    public function prefixName($name, $separator = ".") {
        if ($name == "Durden") {
            $prefix = "Mr";
        } elseif ($name == "Singer") {
            $prefix = "Mrs";
        } else {
            $prefix = "";
        }
        return "{$prefix}{$separator} {$name}";
    }
}

$class = new ConcreteClass;
echo $class->prefixName("Durden"), "\n";
echo $class->prefixName("Singer"), "\n";
?>


<?php
interface Hello
{
    public function hello();
}

interface World
{
    public function world();
}

interface Hi extends Hello, World
{
    public function hi();
}

class DoIt implements Hi
{
    public function hello()
    {
        echo 'Hello';
    }

    public function world()
    {
        echo 'World';
    }

    public function hi()
    {
        echo 'Hi!';
    }
}
$doit = new DoIt;
$doit->hello();
$doit->world();
echo '<br>';
$doit->hi();
?>

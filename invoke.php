<?php
const MYSTEPSIZE = 7;
class stepcounter
{
    private $stepsize;
    private $count = 0;
    
    public function __construct($stepsize)
    {
        $this->stepsize = $stepsize;
    }
    
    public function __invoke()
    {
        $this->count += $this->stepsize;
        return $this->count;
    }
}
$sc = new stepcounter(MYSTEPSIZE);
for ($i = 0; $i < 10; $i++) {
    echo $sc() . PHP_EOL;
}
?>
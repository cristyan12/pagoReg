<?php
declare(strict_types=1);

class Quadratic
{
    public int $a;
    public int $b;
    public int $c;

    public function __construct(int $a, int $b, int $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function showResult(): string
    {
        $messageX1 = 'X1 = '.$this->calculatePlus();

        $messageX2 = 'X2 = '.$this->calculateMinus();

        return $messageX1 . "\n" . $messageX2;
    }

    protected function calculatePlus(): float
    {
        return (-$this->b + (sqrt($this->b * $this->b - 4 * $this->a * $this->c))) / (2 * $this->a);
    }

    protected function calculateMinus(): float
    {
        return (-$this->b - (sqrt($this->b * $this->b - 4 * $this->a * $this->c))) / (2 * $this->a);
    }
}

$hello = new Quadratic(14, 55, 38);
echo $hello->showResult();

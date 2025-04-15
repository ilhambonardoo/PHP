<?php

use PhpParser\Node\Expr\FuncCall;

class Student
{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    public function setSample(string $sample): void
    {
        $this->sample = $sample;
    }

    public function __clone()
    {
        unset($this->sample);
    }
    //__clone ini berfungsi untuk memilih object yang ingin dihapus atau menyalin yang ingin diubah.

    public function __toString()
    {
        return "Id : $this->id Name : $this->name Value : $this->value";
    }

    public function __invoke(...$arguements): void
    {
        $join = join(", ", $arguements);
        echo "Invoke with student argument $join" . PHP_EOL;
    }

    public function __debugInfo()
    {
        return  [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample,
            "Author" => "Ghina Rania",
            "Version" => "1.0.0"
        ];
    }
}

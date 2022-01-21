<?php
namespace news;

class Page
{
    private string $string = "News loaded";

    public function getString()
    {
        echo $this->string;
    }

}
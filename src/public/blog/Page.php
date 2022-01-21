<?php
namespace blog;

class Page
{
    private string $stringOne = "Blog loaded";

    public function getStringOne()
    {
        echo $this->stringOne;
    }


}
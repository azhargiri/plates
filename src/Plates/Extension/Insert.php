<?php

namespace Plates\Extension;

class Insert extends Base
{
    public $methods = array('insert');
    public $engine;
    public $template;

    public function insert($path)
    {
        include $this->engine->resolvePath($path);
    }
}

<?php

namespace Commentar\Presentation\View;

use Commentar\Presentation\ThemeLoader;
use Commentar\ServiceBuilder\Builder;

abstract class View
{
    protected $theme;
    protected $serviceFactory;
    private $variables;

    public function __construct(ThemeLoader $theme, Builder $serviceFactory, array $variables = [])
    {
        $this->theme          = $theme;
        $this->serviceFactory = $serviceFactory;
        $this->variables      = $variables;
    }

    public function __set($key, $value)
    {
        $this->variables[$key] = $value;
    }

    public function __get($key)
    {
        return $this->variables[$key];
    }

    public function getContent($filename)
    {
        return $filename;
    }
}

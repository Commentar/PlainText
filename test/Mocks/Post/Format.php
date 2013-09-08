<?php

namespace Commentar\Post;

interface Format
{
    public function parse($content);
}

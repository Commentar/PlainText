<?php

namespace Commentar\ServiceBuilder;

interface Builder
{
    public function build($service, array $arguments = []);
}

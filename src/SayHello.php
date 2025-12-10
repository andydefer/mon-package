<?php

namespace AndyKani\MonPackage;

use AndyKani\MonPackage\Contracts\HelloInterface;

final class SayHello implements HelloInterface
{
    public function direBonjour(string $subject)
    {
        dd("Hello");
    }
}

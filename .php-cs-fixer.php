<?php

$finder = PhpCsFixer\Finder::create()
    ->in(['./src', './tests'])
;

$config = new PhpCsFixer\Config();

return $config->setFinder($finder);
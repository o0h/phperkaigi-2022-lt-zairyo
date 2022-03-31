<?php

namespace App;

class Hoge
{
    /**
     *
     * @return string|false
     */
    public function say (string $script) {
        $output = 'You say'.             $script;

        echo $output;
    }
}

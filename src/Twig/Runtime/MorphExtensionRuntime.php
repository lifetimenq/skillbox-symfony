<?php

namespace App\Twig\Runtime;

use Twig\Extension\RuntimeExtensionInterface;

class MorphExtensionRuntime implements RuntimeExtensionInterface
{
    public function __construct()
    {
        // Inject dependencies if needed
    }

    /**
     * @param $value
     * @param $number
     * @return mixed
     */
    public function wordForm($value, $number): mixed
    {
        if ($number > 6 || $number < 0) {
            return $value[0];
        }

        foreach ($value as $key => $item) {
            if ($key != $number) {
                continue;
            } else {
                return $item;
            }
        }
    }
}

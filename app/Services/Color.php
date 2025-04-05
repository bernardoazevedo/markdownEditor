<?php

namespace App\Services;

use Spatie\Color\Factory as ColorFactory;
use Spatie\Color\Hsl;

class Color {

    public function generateDarkerColors($colors_array, $amount){
        foreach($colors_array as $colorName => $colorCode){
            $color = ColorFactory::fromString($colorCode);
            $hslColor = $color->toHsl();
            $hue = $hslColor->hue();
            $saturation = $hslColor->saturation();
            $lightness = $hslColor->lightness();

            $lightnessShades = $this->generateLightnessDiference($lightness, $amount, -10);

            // default color
            $colors_array[$colorName] = $hslColor->__toString();

            foreach($lightnessShades as $key => $shade){
                // darker colors
                $darkerColor = new Hsl($hue, $saturation, $shade);
                $colors_array[$colorName.$key] = $darkerColor->__toString();
            }

        }
        ksort($colors_array);
        return $colors_array;
    }

    private function generateLightnessDiference($baseLightness, $amount, $step = 10){
        $minLightness = 0;
        $maxLightness = 100;
        $lightness_array = [];

        $positiveStep = ($step >= 0);
        $negativeStep = ($step < 0);

        if($positiveStep){
            if((($amount * $step) + $baseLightness) > $maxLightness){
                $distanceToMax = $maxLightness - $baseLightness;
                $step = $distanceToMax / $amount;
            }

        }
        else if($negativeStep){
            if((($amount * $step) + $baseLightness) < $minLightness){
                $distanceToMin = $baseLightness;
                $step = -($distanceToMin / $amount);
            }
        }
        $lightness_array = $this->calculateLightnessSteps($baseLightness, $amount, $step);

        return $lightness_array;
    }

    private function calculateLightnessSteps($baseLightness, $amount, $step){
        for($i = 1; $i <= $amount; $i++){
            $lightness_array[] = $baseLightness + ($i * $step);
        }
        return $lightness_array;
    }
}

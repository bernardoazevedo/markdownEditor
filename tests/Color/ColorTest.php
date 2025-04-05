<?php

namespace Tests\Color;

use App\Services\Color;
use Tests\TestCase;

class ColorTest extends TestCase {
    private $color_service;

    public function setup():void {
        $this->color_service = new Color();
    }

    public function test_if_generates_darker_colors(){
        $cssColors = [
            '--hexColor'  => '#e5e5e5',
            '--rgbColor'  => 'rgb(16, 185, 129)',
            '--hslColor'  => 'hsl(0, 0%, 100%)',
            '--darkColor' => 'hsl(0, 0%, 0%)',
        ];
        $expectedColors = [
            '--darkColor'  => 'hsl(0,0%,0%)',
            '--darkColor0' => 'hsl(0,0%,0%)',
            '--darkColor1' => 'hsl(0,0%,0%)',
            '--hexColor'   => 'hsl(0,0%,90%)',
            '--hexColor0'  => 'hsl(0,0%,80%)',
            '--hexColor1'  => 'hsl(0,0%,70%)',
            '--hslColor'   => 'hsl(0,0%,100%)',
            '--hslColor0'  => 'hsl(0,0%,90%)',
            '--hslColor1'  => 'hsl(0,0%,80%)',
            '--rgbColor'   => 'hsl(160,84%,39%)',
            '--rgbColor0'  => 'hsl(160,84%,29%)',
            '--rgbColor1'  => 'hsl(160,84%,19%)',
        ];

        $return = $this->color_service->generateDarkerColors($cssColors, 2);

        $this->assertEquals($expectedColors, $return);
    }
}

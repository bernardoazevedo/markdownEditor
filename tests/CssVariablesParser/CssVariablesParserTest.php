<?php

namespace Tests\CssVariablesParser;

use App\Services\CssVariablesParser;
use Tests\TestCase;

class CssVariablesParserTest extends TestCase {
    public function test_css_variables_parser(){
        $css =
            '#id-test {
                background-color: var(--backgroundColor);
            }

            .class-test {
                color: var(--textColor);
                text-wrap: wrap;
                overflow-wrap: break-word;
            }
        ';
        $variables = [
            '--backgroundColor' => '#FFFFFF',
            '--textColor'       => '#000000',
        ];
        $expected =
            '#id-test {
                background-color: #FFFFFF;
            }

            .class-test {
                color: #000000;
                text-wrap: wrap;
                overflow-wrap: break-word;
            }
        ';

        $return = CssVariablesParser::parseAllFromArray($css, $variables);

        $this->assertEquals($expected, $return);
    }
}

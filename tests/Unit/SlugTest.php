<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class SlugTest extends TestCase
{
    /** @test */
    public function generate_a_slug_from_a_title()
    {
        $title = "  Hello @ World ! From Osama ^ ";


        $slug = strtolower($title);
        $slug = preg_replace('/[^a-z0-9]/', ' ', $slug);
        $slug = preg_replace('/\s+/', '-', $slug);
        $slug = trim($slug, '-');


        $expected = "hello-world-from-osama";

        $this->assertEquals($expected, $slug);
    }
}

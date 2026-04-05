<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Support\Str;

class SlugTest extends TestCase
{
    /** @test */
    public function it_can_generate_a_slug_from_a_title()
    {
        // المعطيات (المُدخل)
        $title = 'What is a "slug" in Laravel?';

        // النتيجة المتوقعة (المُخرج)
        $expectedSlug = 'what-is-a-slug-in-laravel';

        // التنفيذ باستخدام الـ Helper اللي استخدمته بالـ Controller
        $result = Str::slug($title, '-');

        // التأكد: هل النتيجة المحسوبة تساوي المتوقعة؟
        $this->assertEquals($expectedSlug, $result);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SlugController extends Controller
{
    public function generate(Request $request)
    {
        // نأخذ العنوان من الرابط (مثلاً ?title=My Article)
        $title = $request->query('title');

        // التحقق من وجود عنوان
        if (!$title) {
            return response()->json(['error' => 'Please provide a title'], 400);
        }

        // تحويل العنوان لـ Slug (حروف صغيرة، مسافات تتحول لشرطات)
        $slug = Str::slug($title, '-');

        // إرجاع النتيجة بتنسيق JSON   
        return response()->json([
            'slug' => $slug
        ]);
    }
}

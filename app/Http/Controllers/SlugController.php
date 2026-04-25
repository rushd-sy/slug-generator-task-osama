<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SlugController extends Controller
{
    public function generate(Request $request)
    {
        $title = $request->query('title');

        if (!$title) {
            return response()->json(['error' => 'Title is required'], 400);
        }

        $slug = strtolower($title);
        // Upercase to Lowercase

        $slug = preg_replace('/[^a-z0-9]/', ' ', $slug);
        //استبدلت كلشي رموز بفراغ

        $slug = preg_replace('/\s+/', '-', $slug);
        //حولت كلشي سبيس سواء كانت سبيس فراغ واحد او عدة فراغات ل داش (-)

        $slug = trim($slug, '-');
        //هي الدالة مشان الاطراف لوكان في عندي داش بالاول او بالاخير بتحذفلي هي


        return response()->json([
            'slug' => $slug
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ResumeController extends Controller
{
    public function download()
    {
        $file = public_path() . "/AhmadGiofadhil_resume.pdf";

        $headers = array(
            'Content-Type: application/pdf',
        );

        return response()->download($file, 'AhmadGiofadhil_resume.pdf', $headers);
    }
}

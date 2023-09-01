<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PDF;
use App\Models\Profile_info;

class PDFController extends Controller
{
    public function generatePDF($profileId)
    {  
        
        $profile = Profile_info::where('user_id',$profileId)->first(); 
        $pdf = PDF::loadView('profile.pdf_template', compact('profile'));
        return $pdf->download('profile_information.pdf');
        
    }
}

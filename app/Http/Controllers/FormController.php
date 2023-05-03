<?php

namespace App\Http\Controllers;
use App\Models\FormData;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        $formData = new FormData;
        $formData->african_region = $request->input('dropdown');
        $formData->country = $request->input('country');
        $formData->brief_history = $request->input('brief_history');
        $formData->vope_profile = $request->input('vope_profile');
        $formData->partners = $request->input('partners');
        $formData->name = $request->input('name');
        $formData->position = $request->input('position');
        $formData->email = $request->input('email');
        $formData->telephone = $request->input('telephone');
        $formData->linkedin_profile = $request->input('linkedin_profile');
        $formData->save();
        $formData = FormData::all();

        return view('Frontend.table', ['formData' => $formData]);

    }
}

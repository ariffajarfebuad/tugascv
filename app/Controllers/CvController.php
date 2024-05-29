<?php

namespace App\Controllers;

use App\Models\CvModel;

class CvController extends BaseController
{
    public function index()
    {
        $cvModel = new CvModel();
        $data['cv'] = $cvModel->first();

        return view('cv_view', $data);
    }
}

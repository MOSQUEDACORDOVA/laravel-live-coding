<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobOffer;

class JobOfferController extends Controller
{
    public function index()
    {
        // Obtener todas las ofertas de empleo
        $jobOffers = JobOffer::paginate(10); // Por ejemplo, paginamos de 10 en 10

        return response()->json($jobOffers);
    }

    public function loadMore(Request $request)
    {
        // Obtener más ofertas de empleo según el último ID cargado
        $lastId = $request->input('last_id');
        $jobOffers = JobOffer::where('id', '>', $lastId)->paginate(10);

        return response()->json($jobOffers);
    }
}

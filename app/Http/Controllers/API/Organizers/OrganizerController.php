<?php

namespace App\Http\Controllers\API\Organizers;

use App\Http\Services\Organizers\OrganizerService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrganizerController extends Controller
{
    public function __construct(OrganizerService $organizerService)
    {
        $this->organizerService = $organizerService;
    }

    public function index()
    {
        $organizers = $this->organizerService->getData();
        return view('organizers.index', compact('organizers'));
    }
}

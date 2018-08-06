<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Repositories\PetitionRepository;
use App\Repositories\SignatureRepository;

/**
 * Class HomeController 
 * 
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /** @var \App\Repositories\PetitionRepository $petitionRepository */
    private $petitionRepository;

    /** @var \App\Repositories\SignatureRepository $signatureRepository */
    private $signatureRepository;

    /**
     * Create a new controller instance.
     *
     * @param  PetitionRepository  $petitionRepository  The class that holds all the needed petition logic.
     * @param  SignatureRepository $signatureRepository The class that holds all the needed logic for the signatures and counter.
     * @return void
     */
    public function __construct(PetitionRepository $petitionRepository, SignatureRepository $signatureRepository)
    {
        $this->middleware(['auth', 'role:admin', 'forbid-banned-user'])->only(['index']);
        
        $this->petitionRepository  = $petitionRepository;
        $this->signatureRepository = $signatureRepository; 
    }

    /**
     * Show the application welcome page 
     * 
     * @return View 
     */
    public function welcome(): View 
    {
        $social  = $this->petitionRepository->getSocialLinks(); 
        $counter = $this->signatureRepository->getCounterInformation(); 

        return view('welcome', compact('social', 'counter'));
    }

    /**
     * Show the application dashboard.
     *
     * @see \App\Composers\HomeComposer::class for the default data in the view
     * 
     * @return View
     */
    public function index(): View
    {
        return view('home');
    }
}

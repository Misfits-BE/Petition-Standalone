<?php

namespace App\Http\Controllers\Signature;

use App\Http\Requests\Signature\SignatureValidation;
use App\Mail\Petitions\PetitionMail;
use App\Repositories\SignatureRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

/**
 * Class SignatureController
 *
 * @package App\Http\Controllers\Signature
 */
class SignatureController extends Controller
{
    /** @var SignatureRepository $signatureRepository */
    private $signatureRepository;

    /**
     * SignatureController constructor.
     *
     * @param  SignatureRepository $signatureRepository Abstraction field for the storage.
     * @return void
     */
    public function __construct(SignatureRepository $signatureRepository)
    {
        $this->signatureRepository = $signatureRepository;
    }

    /**
     * Method for mailing and storing the petition.
     *
     * @param  SignatureValidation $input The form request validation.
     * @return RedirectResponse
     */
    public function __invoke(SignatureValidation $input): RedirectResponse
    {
        if ($this->signatureRepository->create($input->all())) {
           Mail::to(config('platform.petitions.recievers'))->queue(new PetitionMail($input->all()));
        }

        return redirect()->route('welcome');
    }
}

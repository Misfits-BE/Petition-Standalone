<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\User;
use Illuminate\Http\RedirectResponse; 
use Illuminate\View\View;

/**
 * Class DeactivateController
 * 
 * @package App\Http\Controllers\Users
 */
class ActiveStateController extends Controller
{
    /** @var \App\Repositories\UserRepository $userRepository */
    private $userRepository;

    /**
     * ActiveStateConstructor 
     * 
     * @param  UserRepository $userRepository Abstraction layer between controller and user data storage.
     * @return void
     */
    public function __construct(UserRepository $userRepository) 
    {
        $this->middleware(['auth', 'role:admin', 'forbid-banned-user']);
        $this->userRepository = $userRepository;
    }

    /**
     * View for the deactivation from a user. 
     * 
     * @param  User $user The resource entity from the user in the application. 
     * @return View
     */
    public function create(User $user): View 
    {   
        return view('users.deactivate', ['user' => $user]);
    }

    /**
     * Store the deactivation for a user in the storage 
     * 
     * @return RedirectResponse
     */
    public function store(): RedirectResponse 
    {

    }

    /**
     * Delete the deactivation for the user in the storage 
     * 
     * @param  User $user The resource entity from the user in the storage
     * @return RedirectReponse
     */
    public function destroy(User $user): RedirectResponse 
    {
        
    }
}

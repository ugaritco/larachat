<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Heritage\Http\RedirectResponse;
use Heritage\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class EmailVerificationPromptController extends Controller
{
    /**
     * Show the email verification prompt page.
     */
    public function __invoke(Request $request): Response|RedirectResponse
    {
        return $request->user()->hasVerifiedEmail()
                    ? redirect()->intended(route('home', absolute: false))
                    : Inertia::render('auth/verify-email', ['status' => $request->session()->get('status')]);
    }
}

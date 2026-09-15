<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Heritage\Auth\Events\Verified;
use Heritage\Foundation\Auth\EmailVerificationRequest;
use Heritage\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route('home', absolute: false).'?verified=1');
        }

        if ($request->user()->markEmailAsVerified()) {
            /** @var \Heritage\Contracts\Auth\MustVerifyEmail $user */
            $user = $request->user();

            event(new Verified($user));
        }

        return redirect()->intended(route('home', absolute: false).'?verified=1');
    }
}

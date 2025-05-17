<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class SocialAuthController extends Controller
{
    /**
     * Redirect the user to the provider authentication page.
     *
     * @param string $provider
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        // Validasi provider
        if (!in_array($provider, ['facebook', 'twitter', 'linkedin', 'instagram'])) {
            return redirect()->route('login')->with('error', 'Provider sosial tidak valid');
        }

        return Socialite::driver($provider)->redirect();
    }

    /**
     * Handle provider callback and authenticate the user.
     *
     * @param string $provider
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        try {
            // Dapatkan data pengguna dari provider
            $socialUser = Socialite::driver($provider)->user();

            // Cari pengguna di database berdasarkan provider ID
            $user = User::where('provider_id', $socialUser->getId())
                ->where('provider', $provider)
                ->first();

            if (!$user) {
                // Cek apakah pengguna sudah ada dengan email yang sama
                $user = User::where('email', $socialUser->getEmail())->first();

                if (!$user) {
                    // Buat pengguna baru jika belum ada
                    $user = User::create([
                        'name' => $socialUser->getName() ?? $socialUser->getNickname(),
                        'email' => $socialUser->getEmail(),
                        'password' => Hash::make(Str::random(16)), // Password acak yang aman
                        'provider' => $provider,
                        'provider_id' => $socialUser->getId(),
                        'email_verified_at' => now(), // Anggap login sosial sebagai terverifikasi
                    ]);
                } else {
                    // Perbarui informasi provider untuk pengguna yang sudah ada
                    $user->update([
                        'provider' => $provider,
                        'provider_id' => $socialUser->getId(),
                    ]);
                }
            }

            // Login pengguna
            Auth::login($user, true);

            // Redirect setelah login
            return redirect()->intended('/dashboard');
        } catch (Exception $e) {
            // Tangani error
            return redirect()->route('login')->with('error', 'Autentikasi gagal: ' . $e->getMessage());
        }
    }
}

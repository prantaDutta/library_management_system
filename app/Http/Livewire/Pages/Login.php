<?php

namespace App\Http\Livewire\Pages;

use App\Http\Requests\RegistrationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public string $email, $password;

    protected array $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6|max:50'
    ];

    public function updated($propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    public function submit(RegistrationRequest $request): RedirectResponse
    {
        $validated_data = $this->validate();

        $email = $validated_data['email'];

        // hashing the password
        $hash = Hash::make($validated_data['password']);

        if (Auth::attempt($email, $hash)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Something Went Wrong. Please Try Again',
        ]);
    }

    public function render()
    {
        return view('livewire.pages.login');
    }
}

<?php

namespace App\Http\Livewire\Pages;

use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public string $name, $email, $password;

    protected array $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|max:50|confirmed'
    ];

    public function updated($propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    public function submit(RegistrationRequest $request): RedirectResponse
    {
        $validated_data = $this->validate();

        // hashing the password
        $hash = Hash::make($validated_data['password']);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $hash,
        ]);

        if (Auth::attempt($this->email, $hash)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Something Went Wrong. Please Try Again',
        ]);
    }

    public function render()
    {
        return view('livewire.pages.register');
    }
}

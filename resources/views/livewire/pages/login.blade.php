<div class="max-w-4xl mx-auto my-10">
    @livewire('components.page-title', ['title' => 'Login to Your Account'])
    <form wire:submit.prevent="submit" class="my-5 p-5 card bg-base-200">
        @csrf

        @livewire('components.text-field', [
            'fieldName' => 'email',
            'label' => 'Enter Your Email',
            'placeholder' => 'johndoe@gmail.com',
            'type' => 'email'
        ])

        @livewire('components.text-field', [
            'fieldName' => 'password',
            'label' => 'Enter Your Password',
            'placeholder' => 'password',
            'type' => 'password'
        ])

        <div class="mt-5">
            <button type="submit" class="btn btn-block btn-primary btn-active" role="button" aria-pressed="true">Login</button>
        </div>
    </form>
</div>

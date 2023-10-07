<!-- Button trigger modal -->
<button type="button" class="btn_3" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Create an Account
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h1>Sign up</h1>
                {{-- register form --}}
                <div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div class="mt-3 d-flex flex-column align-items-start">
                            <label for="name" class=" fw-bold mt-2">Name:</label>
                            <x-text-input id="name" class="form-control" type="text" name="name"
                                :value="old('name')" required autofocus autocomplete="name" placeholder="Name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-3 d-flex flex-column align-items-start">
                            <label for="email" class=" fw-bold mt-2">Email:</label>                            <x-text-input id="email" class="form-control" type="email" name="email"
                                :value="old('email')" required autocomplete="username" placeholder="Email" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-3 d-flex flex-column align-items-start">
                            <label for="password" class=" fw-bold mt-2">Password:</label>
                            <x-text-input id="password" class="form-control" type="password" name="password"
                                required autocomplete="new-password" placeholder="Password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-3 d-flex flex-column align-items-start">
                            <label for="password_confirmation" class=" fw-bold mt-2">Confirm Password:</label>
                            <x-text-input id="password_confirmation" class="form-control" type="password"
                                name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-300"
                                href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                            <button type="submit" class="button px-3 btn-info ml-4">Sign up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

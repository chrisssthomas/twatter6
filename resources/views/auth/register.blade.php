@component('components.master')

    <div class="container mx-auto px-8 py-4 flex justify-center">
        <div class="row bg-gray-100 w-full lg:w-1/3 shadow-lg border-gray-300 px-12 py-10 rounded-lg">
            <div class="col-md-8">
                    <div class="card-header font-bold text-lg mb-4">{{ __('Register') }}</div>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                    Username
                                </label>

                                <div class="col-md-6">
                                    <input 
                                        id="username" 
                                        type="text" 
                                        class="border border-gray-400 p-2 w-full" 
                                        name="username" 
                                        value="{{ old('username') }}" 
                                        required 
                                        autocomplete="username" 
                                        autofocus
                                        >

                                    @error('name')
                                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label 
                                    for="name" 
                                    class="block my-2 uppercase font-bold text-xs text-gray-700"
                                    >
                                    {{ __('Name') }}
                                </label>

                                <div class="col-md-6">
                                    <input 
                                        id="name" 
                                        type="text" 
                                        class="border border-gray-400 p-2 w-full" 
                                        name="name" value="{{ old('name') }}" 
                                        required 
                                        autocomplete="name" 
                                        autofocus
                                        >

                                    @error('name')

                                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>

                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label 
                                    for="email" 
                                    class="block my-2 uppercase font-bold text-xs text-gray-700"
                                    >
                                    {{ __('E-Mail Address') }}
                                </label>

                                <div class="col-md-6">
                                    <input 
                                        id="email" 
                                        type="email" 
                                        class="border border-gray-400 p-2 w-full" 
                                        name="email" 
                                        value="{{ old('email') }}" 
                                        required 
                                        autocomplete="email"
                                        >

                                    @error('email')
                                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label 
                                    for="password"  
                                    class="block my-2 uppercase font-bold text-xs text-gray-700"
                                    >
                                    {{ __('Password') }}
                                </label>

                                <div class="col-md-6">
                                    <input 
                                        id="password" 
                                        type="password" 
                                        class="border border-gray-400 p-2 w-full" 
                                        name="password" 
                                        value="{{ old('password') }}"
                                        required 
                                        autocomplete="new-password"
                                        >

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label 
                                    for="password-confirm" 
                                    class="block my-2 uppercase font-bold text-xs text-gray-700"
                                    >
                                    {{ __('Confirm Password') }}
                                </label>

                                <div class="col-md-6">
                                    <input 
                                    id="password-confirm" 
                                    type="password" 
                                    class="border border-gray-400 p-2 w-full" 
                                    name="password_confirmation" 
                                    required 
                                    autocomplete="new-password"
                                    >
                                </div>
                            </div>

                            <div class="mt-2">
                                <button class="bg-blue-400 text-white rounded py-2 px-4">Register</button>
                            </div>
                        </form>
            </div>
        </div>
    </div>
@endcomponent

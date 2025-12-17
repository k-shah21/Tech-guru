<x-guest-layout>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mt-4">
            <label for="name">Name</label>
            <input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ old('name') }}" required
                autofocus autocomplete="name" />
            @error('name')
                <div class="text-danger text-sm">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email -->
        <div class="mt-4">
            <label for="email">Email</label>
            <input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email') }}" required
                autocomplete="email" />
            @error('email')
                <div class="text-danger text-sm">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password">Password</label>
            <input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />
            @error('password')
                <div class="text-danger text-sm">{{ $message }}</div>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
                required autocomplete="new-password" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('login') }}" class="underline text-sm text-gray-600">
                Already registered?
            </a>

            <button class="ms-4 btn btn-primary" type="submit">
                Register
            </button>
        </div>
    </form>
</x-guest-layout>
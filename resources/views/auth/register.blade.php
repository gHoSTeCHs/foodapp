<x-authlayout title="Register">
    <div class="container">

        <form method="POST" action="/register" class="mx-auto flex flex-col items-center gap-3 py-5">
            @csrf
            <div class="flex flex-col gap-1">
                <label for="name" class="text-base text-text-secondary font-semibold">Name</label>
                <input type="text" id="name" name="name"
                       class="w-full bg-inherit border-b border-b-text-primary focus:outline-0 text-text-primary text-lg font-semibold"
                       placeholder="John Doe"/>
                @error('name')
                <p class="text-sm text-text-error italic">{{$message}}</p>
                @enderror
            </div>

            <div class="flex flex-col gap-1">
                <label for="email" class="text-base text-text-secondary font-semibold">Email</label>
                <input type="email" id="email" name="email"
                       class="w-full bg-inherit border-b border-b-text-primary focus:outline-0 text-text-primary text-lg font-semibold"
                       placeholder="Enter your Email"/>
                @error('email')
                <p class="text-sm text-text-error italic">{{$message}}</p>
                @enderror
            </div>

            <div class="flex flex-col gap-1">
                <label for="location" class="text-base text-text-secondary font-semibold">Please provide a
                    location</label>
                <input type="text" id="location" name="location"
                       class="w-full bg-inherit border-b border-b-text-primary focus:outline-0 text-text-primary text-lg font-semibold"
                       placeholder="157 Ukaegbu"/>
                @error('location')
                <p class="text-sm text-text-error italic">{{$message}}</p>
                @enderror
            </div>

            <div class="flex flex-col gap-1">
                <label for="password" class="text-base text-text-secondary font-semibold">Password</label>
                <input type="password" id="password" name="password"
                       class="w-full bg-inherit border-b border-b-text-primary focus:outline-0 text-text-primary text-lg font-semibold"
                       placeholder="....."/>
                @error('password')
                <p class="text-sm text-text-error italic">{{$message}}</p>
                @enderror
            </div>

            <div class="flex flex-col gap-1">
                <label for="password_confirmation" class="text-base text-text-secondary font-semibold">Confirm your
                    password</label>
                <input type="password" id="password_confirmation" name="password_confirmation"
                       class="w-full bg-inherit border-b border-b-text-primary focus:outline-0 text-text-primary text-lg font-semibold"
                       placeholder="......"/>
            </div>

            <button class="bg-text-error px-4 py-2 rounded-md">Submit</button>

        </form>

    </div>

</x-authlayout>

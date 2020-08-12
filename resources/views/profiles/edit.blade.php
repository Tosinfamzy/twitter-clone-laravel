<x-app>
    <form action="/profiles/{{$user->username}}/edit" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="mb-6">
            <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
            <input type="text" class="border border-gray-400 p-2 w-full" name="name" id="name" value="{{$user->name}}">
            @error('name')
                <p class="tex-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>
            <input type="text" class="border border-gray-400 p-2 w-full" name="username" id="username" value="{{$user->username}}">
            @error('username')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="avatar" class="block mb-2 upper-case font-bold text-xs text-gray-700">Avatar</label>
            <div class="flex">
                <input type="file" name="avatar" id="avatar" class="border border-gray-400 p-2 w-full">
                <img src="{{$user->avatar}}" alt="avatar" width="40">
            </div>
        </div>
        <div class="mb-6">
            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
            <input type="email" class="border border-gray-400 p-2 w-full" name="email" id="email" value="{{$user->email}}">
            @error('email')
            <p class="tex-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">password</label>
            <input type="password" class="border border-gray-400 p-2 w-full" name="password" id="password">
            @error('password')
            <p class="tex-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password confirmation</label>
            <input type="password" class="border border-gray-400 p-2 w-full" name="password_confirmation" id="password_confirmation">
            @error('password_confirmation')
            <p class="tex-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>
        </div>
    </form>
</x-app>

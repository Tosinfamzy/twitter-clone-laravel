<x-app>
    <header class="mb-6 relative">
        <img src="/images/default-profile-banner.jpg" alt="" class="mb-2">

    <div class="flex justify-between items-center mb-4">
        <div>
            <h2 class="font-bold text-2xl mb-2">{{$user->name}}</h2>
            <p>Joined {{$user->created_at->diffForHumans()}}</p>
        </div>
        <div class="flex">
            <a href="" class="rounded-full border border-gray-100 py-2 px-2 text-black text-xs">Edit Profile</a>
            <x-follow-button :user="$user"></x-follow-button>
        </div>
    </div>
        <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur at quo. Distinctio, rem, unde. A deleniti, eum explicabo facilis incidunt iure perspiciatis placeat porro, praesentium quae quo sint tempora?</p>

        <img src="{{$user->avatar}}" alt="" class="rounded-full mr-2 absolute" style="width: 150px; left: calc(50% - 75px); top: 47%">
    </header>
    <hr>
    @include('_timeline',['tweets' => $user->tweets])
</x-app>

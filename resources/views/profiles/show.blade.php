<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img src="/images/default-profile-banner.jpg" alt="" class="mb-2">
            <img src="{{$user->avatar}}" alt="" class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" width="150" style="left: 50%">
        </div>


        <div class="flex justify-between items-center mb-4">
        <div style="max-width: 270px">
            <h2 class="font-bold text-2xl mb-2">{{$user->name}}</h2>
            <p>Joined {{$user->created_at->diffForHumans()}}</p>
        </div>
        <div class="flex">
            @can('edit',$user)
            <a href="/profiles/{{$user->username}}/edit" class="rounded-full border border-gray-100 py-2 px-2 text-black text-xs">Edit Profile</a>
            @endcan
            <x-follow-button :user="$user"></x-follow-button>
        </div>
    </div>
        <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur at quo. Distinctio, rem, unde. A deleniti, eum explicabo facilis incidunt iure perspiciatis placeat porro, praesentium quae quo sint tempora?</p>

    </header>
    <hr>
    @include('_timeline',['tweets' => $tweets])
</x-app>

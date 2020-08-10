@if(auth()->user()->isNot($user))
<form method="post" action="/profiles/{{$user->name}}/follow">
    @csrf
    <button type="submit" class="bg-blue-500 rounded-full shadow py-2 px-2 text-white text-xs">{{auth()->user()->following($user) ? 'Unfollow Moi' : 'Follow Moi'}}
    </button>
</form>
@endif

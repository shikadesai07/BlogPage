<div class="">
    <h1 class="text-gray-800 text-3xl font-bold p-5 text-center">Recent Blogs</h1>
    <ul>
        @foreach($posts as $post)
        <li class="flex flex-col border border-t-none  border-b-2 w-full p-4">
            <h3 class="text-gray-800 text-lg font-bold">{{$post->title}}</h3>
            <div>
                <div class=" text-gray-800 italic text-sm">Created by {{$post->author}}</div>
                <div class="text-gray-800 italic text-sm">Published {{Carbon\Carbon::parse($post->date)->diffForHumans()}}</div>
            </div>
            <!--<a href="{{ url('adminhome/'.$post->id.'/') }}">Read Blog</a>-->
            <a href="{{ url('/'.$this->home.'/'.$post->id.'/') }}" class="text-gray-800 text-md text-blue-500 hover:text-blue-700">Read Blog</a>
        </li>
        @endforeach
        <ul>
            <button type="button" wire:click="incrementCount" class="text-white text-blue-500 text-md hover:text-blue-700 bg-none border-none ml-4 mb-10">Show more...</button>
</div>
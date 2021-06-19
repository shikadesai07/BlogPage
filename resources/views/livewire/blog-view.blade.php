<div class="bg-gradient-to-l from-green-300 to-blue-200 relative h-screen flex justify-center">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<button wire:click="goBack" class="bg-gray-500 text-white hover:bg-gray-700  px-5 py-2 absolute rounded-md shadow left-4 top-4">Back</button>
  <div class="bg-gray-100 w-10/12 m-6 rounded-lg shadow overflow-y-scroll">
  <h1 class="text-5xl text-center text-gray-700 font-bold py-8">{{$post[0]->title}}</h1>
      <span class="ml-4 text-lg">Published by {{$post[0]->author}}</span><span class="text-sm float-right mr-3"> {{Carbon\Carbon::parse($post[0]->date)->diffForHumans()}}</span>
      <p class="ml-4 text-lg">Category: {{$post[0]->category}}</p>
      <p class="m-4 text-md">{{$post[0]->content}}</p>

      <div class="border-t-4 border-gray-400">
      <form  wire:submit.prevent="addComment" action="blog-view" method="post" class="border-b-2 pb-3">
          @csrf
          <input wire:model="comment" type="text" name="comment" class="ml-4 mt-4 p-3 w-1/4 bg-white outline-none border focus:outline-none focus:border-gray-500" placeholder="Leave a comment!">
          <button type="submit" class="bg-green-500 hover:bg-green-700 text-white py-3 px-2 rounded shadow">Comment</button>
      </form>
        
        <div class="ml-4">
          @foreach($comments as $com)
            <div class="border-b-2 p-3">
            <span class="font-bold text-md">{{ $this->getUsername($com->id) }}    </span> <span class="text-sm">   {{Carbon\Carbon::parse($com->commentdate)->diffForHumans()}} </span>
          <p>{{$com->comment}}</p>
          </div>
        @endforeach
        </div>
         

    <button type="button" wire:click="increaseCount" class="text-gray-500 hover:text-gray-700 ml-4 my-3 focus:outline-none">Show more comments</button>
      </div>
      
  </div>
   

</div>

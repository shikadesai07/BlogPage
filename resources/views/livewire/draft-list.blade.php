<div class="bg-gradient-to-l from-green-300 to-blue-200 relative">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <a href="adminhome" class="bg-gray-500 text-white hover:bg-gray-700  px-5 py-2 relative rounded-md shadow left-4 top-4">Back</a>
    
    <h1 class="text-gray-700 text-3xl mt-10 text-center font-bold">Drafts</h1>
    <ul  class="grid grid-row-3 grid-cols-3 gap-x-10 mx-10">
        @foreach($posts as $post)
        <div class="draft-post-container p-5 border-none shadow-lg bg-white rounded my-10">
        <form action="draft-list" method="post" class="flex flex-col gap-5">
            @csrf
            <input type="text" value="{{$post->id}}" name="id" hidden>
            <input type="text" placeholder="Title" name="title" value="{{$post->title}}" class="p-2 bg-gray-100 border border-gray-300 focus:outline-none appearance-none focus:bg-white focus:border-gray-500 rounded shadow" required>
            <select name="category" id="select-category" class="p-2 bg-gray-100 border border-gray-300 focus:outline-none appearance-none focus:bg-white focus:border-gray-500 rounded shadow" required><br>
                <option value="">Select your category</option>
                <option value="Travel">Travel</option>
                <option value="Food">Food</option>
                <option value="Lifestyle">Lifestyle</option>
                <option value="Music">Music</option>
                <option value="Sports">Sports</option>
                <option value="Others">Others</option>
            </select><br>
            <textarea name="content" id="content" cols="30" rows="10" class="resize-none overflow-y-scroll p-2 bg-gray-100 border border-gray-300 focus:outline-none focus:bg-white focus:border-gray-500 rounded shadow" required>{{$post->content}}</textarea><br>
            <div>
                <button type="submit" id="cancel-btn" name="delete" value="deletedraft" class="text-white bg-red-500 px-3 py-2 rounded hover:bg-red-700">Delete</button>
                <button type="submit" class="edit-edit-btn text-white bg-green-500 px-3 py-2 rounded hover:bg-green-700" name="post" value="postdraft">Post</button>
            </div>
        </form>
    </div>
        @endforeach

        
    <ul>
</div>



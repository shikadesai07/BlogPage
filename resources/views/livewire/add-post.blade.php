<div class="">
    
    <button type="button" id="new-post-btn" class="py-2 px-2 text-white bg-blue-500 rounded hover:bg-blue-700 float-right relative top-5 right-5">
        New Post
    </button>

    <div class="add-post-container absolute top-1/5 left-1/4 right-1/4 border-8 border-green-300 shadow-lg bg-white rounded">
        <form action="add-post" wire:submit.prevent="addPost" method="post" class="flex flex-col m-8 gap-3">
            <input type="text" placeholder="Title" name="title" wire:model="title" class="p-2 bg-gray-100 border border-gray-300 focus:outline-none appearance-none focus:bg-white focus:border-gray-500 rounded shadow" required>
            <select name="category" id="select-category" wire:model="category" class="p-2 bg-gray-100 border border-gray-300 focus:outline-none appearance-none focus:bg-white focus:border-gray-500 rounded shadow" required><br>
                <option value="" selected>Select your category</option>
                <option value="Travel">Travel</option>
                <option value="Food">Food</option>
                <option value="Lifestyle">Lifestyle</option>
                <option value="Music">Music</option>
                <option value="Sports">Sports</option>
                <option value="Others">Others</option>
            </select><br>
            <textarea name="content" id="content" cols="30" rows="10" wire:model="content" class="resize-none overflow-y-scroll p-2 bg-gray-100 border border-gray-300 focus:outline-none focus:bg-white focus:border-gray-500 rounded shadow" placeholder="Happy blogging!" required></textarea><br>
            <div class="flex text-white text-md gap-3">
                <button type="button" id="cancel-btn" class=" bg-red-500 px-3 py-2 rounded hover:bg-red-700">Close</button>
                <button type="submit" class="submit-post-btn bg-gray-500 px-3 py-2 rounded hover:bg-gray-700" name="draft" wire:click="setStatus('DRAFT')">Draft</button>
                <button type="submit" class="submit-post-btn bg-green-500 px-3 py-2 rounded hover:bg-green-700" name="post" wire:click="setStatus('POST')">Post</button>
            </div>
            
        </form>
    </div>
    
</div>



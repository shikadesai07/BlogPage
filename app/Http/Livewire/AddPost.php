<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AddPost extends Component
{   
    public $title;
    public $author;
    public $category;
    public $content;
    public $status;
    public $userid;
    public $date;
    
    public function render()
    {
        return view('livewire.add-post');
    }

    
    public function setStatus($status){
        $this->status = $status; 
    }

    public function addPost(Request $req){
        $req->validate = [
            'title' => 'required',
        ];

        $post = new Post;

        $username = $req->session()->get('user');
        $result = DB::table('users')->where('username', $username)->get();
        
        $this->author = $result[0]->firstname." ".$result[0]->lastname;
        $this->userid =$result[0]->id;
        
        $this->date = Carbon::now();

        $post->title = $this->title;
        $post->author = $this->author;
        $post->category = $this->category;
        $post->content = $this->content;
        $post->status = $this->status;
        $post->userid = $this->userid;
        $post->date = $this->date;
        $post->save();
    }
}
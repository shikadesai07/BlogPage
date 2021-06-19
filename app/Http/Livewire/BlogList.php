<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class BlogList extends Component
{   
    use WithPagination;

    public $home;
    public $count = 4;

    public function incrementCount(){
        $this->count = $this->count+2;
    } 

    public function render(Request $req)
    {

        $username = $req->session()->get('user');
        $result = DB::table('users')->where('username', $username)->get();
        $userid = $result[0]->id;

        if($result[0]->role=="ADMIN"){
            $this->home="adminhome";
        }
        else{
            $this->home="userhome";
        }
        //$posts = Post::where(["userid" => $userid, "status" => "POST"])->orderBy('date', 'desc')->paginate(5);
        $posts = Post::where(["status" => "POST"])->orderBy('date', 'desc')->paginate($this->count);
        return view('livewire.blog-list',["posts" => $posts]);
    }
}

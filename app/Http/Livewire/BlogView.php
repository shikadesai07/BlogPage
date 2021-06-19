<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BlogView extends Component
{
    public $post;
    public $bid;
    public $count = 3;

    public function mount($blogid){
        $this->bid = $blogid;
        $this->post = Post::where('id', $blogid)->get();
        #$this->comments = Comment::where('postid', $blogid)->get();    
    }
        
    public function goBack(Request $req){
        
        $username = $req->session()->get('user');
        $result = DB::table('users')->where('username', $username)->get();
        
        if($result[0]->role=="ADMIN")
            redirect("adminhome");
        else    
            redirect("userhome");
    }


    public function getUsername($cid){
       $result = DB::table('comments')->where('id', $cid)->get();
       $uid = $result[0]->userid;
       $result = DB::table('users')->where('id', $uid)->get();
       $name = $result[0]->firstname." ".$result[0]->lastname;
       return $name;
    }

    public function render()
    {   
        return view('livewire.blog-view',["comments" => Comment::where('postid', $this->bid)->paginate($this->count)]);
    }

    public function increaseCount(){
        $this->count = $this->count + 2;
    }

    public $userid;
    public $comment;
      public $commentdate;
        public $postid;

    public function addComment(Request $req){
        $req->validate = [
            'comment' => 'required',
        ];

        $comm = new Comment;

        $username = $req->session()->get('user');
        $result = DB::table('users')->where('username', $username)->get();
        $this->userid =$result[0]->id;

        $this->commentdate = Carbon::now();
        $this->postid = $this ->post[0]->id;

        $comm->comment = $this->comment;
        $comm->userid = $this->userid;
        $comm->commentdate = $this->commentdate;
        $comm->postid= $this->postid;
        $comm->save();

    }

}

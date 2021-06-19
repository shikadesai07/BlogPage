<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class DraftList extends Component
{
    use WithPagination;
    public function postDraft(Request $req){
        $req->validate = [
            'title' => 'required',
        ];
        
        //dd($req->input('id'));
        if($req->has('post'))        
        {   
            $post = DB::table('posts')
            ->where('id', $req->input('id'))
            ->update(["title" => $req->input('title'), "category" => $req->input('category'), "content"=>$req->input('content'), "status"=>"POST"]);

            return redirect("adminhome");
        }
        if($req->has("delete")){
            $post = DB::table('posts')
            ->where("id",$req->input('id'))
            ->delete();
            return redirect("draft-list");
        } 

    }

    public function render(Request $req)
    {
        $username = $req->session()->get('user');
        $result = DB::table('users')->where('username', $username)->get();
        $userid = $result[0]->id;
        
        $posts = Post::where(["userid" => $userid, "status" => "DRAFT"])->orderBy('date', 'desc')->paginate(5);
        $this->currentPost = $posts[0];
        return view('livewire.draft-list',["posts" => $posts]);
    }
}

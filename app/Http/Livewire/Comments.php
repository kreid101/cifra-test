<?php

namespace App\Http\Livewire;

use App\Models\Reviews;
use Livewire\Component;

class Comments extends Component
{
    public $comments;
    public $item_id;
    public $username;
    public $comment;
    public function mount($id)
    {
        $this->item_id=$id;
        $this->getComments();
    }
    public function getComments()
    {
        $this->comments=Reviews::where('item_id','=',$this->item_id)->orderBy('created_at','desc')->get();
    }
    public function addComment()
    {
        $comment=new Reviews(['item_id'=>$this->item_id,'username'=>$this->username,'comment'=>$this->comment]);
        $comment->save();
        $this->getComments();
        $this->comment=null;
    }
    public function render()
    {
        return view('livewire.comments');
    }
}

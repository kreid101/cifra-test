<div class="w-full  m-4 grid justify-items-center">
    <form class="grid md:w-6/12" wire:submit.prevent="addComment" >
        <input class="mb-4 border-2 p-1" type="text " wire:model="username" placeholder="пользователь" required>
        <textarea class="border-2 p-1" name="" id="" cols="30" rows="10" wire:model="comment" placeholder="комментарий" required ></textarea>
        <button class="w-min p-2 rounded bg-green-200 m-4 justify-self-center hover:bg-green-400">Отправить</button>
    </form>
    @foreach($comments as $comment)
        <div class="w-full md:w-6/12 bg-sky-200 m-4 rounded p-2">
          <div>
            <span class="font-bold">Пользователь: </span>  <span>{{$comment->username}}</span>
          </div>
            <div>
               <span class="font-bold block">Комментарий:</span> <span class="block">{{$comment->comment}}</span>
            </div>
        </div>

    @endforeach
</div>

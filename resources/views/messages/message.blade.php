<div class="col-6">
            <img class="img-thumbnail" src="{{$message->image}}" >
            <p class="card-text">
            <div class="text-muted">Escrito por <a href="/{{$message->user->username}}">{{$message->user->name}}</div></a>
            {{$message->content}} 
            <a href="/messages/{{$message->id}}">leer más</a>
            <div class="text-muted">{{$message->created_at->diffForHumans()}}</div>
            
            
            </p>
</div>

<x-layout>
        <article> 
        <h1>{{$post->title}}</h1>

        <div>
            {!!$post->body!!}
        </div>
      
    </article>
<a href="/">Ir atrás</a>

</x-layout>
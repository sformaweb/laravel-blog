<x-layout>
    <article>
        <h1>{!! $post->title!!}</h1>
        <p>
        Publicado por <a href="/authors/{{$post->author->username}}"> {{$post->author->name}}</a> en <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
        </p>
        <div>
            {!!$post->body!!}
        </div>

    </article>
    <a href="/">Ir atrás</a>

</x-layout>
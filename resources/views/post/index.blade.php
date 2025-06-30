<x-layout :title="$pageTitle">
    <h2> Blog </h2>

    @foreach ($posts as $post)
        <h2 class="text-2xl"> {{$post->title}} </h2>
        <p> {{$post->body}} </p>

        
    @endforeach

    
</x-layout>
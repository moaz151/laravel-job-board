<x-layout :title="$pageTitle">
    <h2> Blog </h2>

    @foreach ($posts as $post)
        <h2 class="text-2xl"> {{$post->title}} </h2>
        <h2> {{$post->body}} </h2>
        <h2> {{$post->published}} </h2>
        <h2> {{$post->author}} </h2>
    @endforeach
</x-layout>
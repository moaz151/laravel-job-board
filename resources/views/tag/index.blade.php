<x-layout :title="$pageTitle">
    <h2> Tags </h2>

    @foreach ($tags as $tag)
        <h2 class="text-2xl"> {{$tag->title}} </h2>
    @endforeach

    
</x-layout>
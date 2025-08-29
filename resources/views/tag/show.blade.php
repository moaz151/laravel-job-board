<x-layout :title="$pageTitle">

    <h2>Tag: {{ $tag->title }} </h2>
        <h3>Related Post</h3>
        <ul>
            @forelse($tag->posts as $post)
            <li>
                <strong> {{$post->title}} </strong>
                <p> {{$post->body}} </p>
                <p>Author: {{$post->author}} </p>
                <a href="{{ route('blog.show', $post->id) }}"> View Full Post </a>
            </li>
            @empty
                <p>No related post found</p>
            @endforelse             
        </ul>
</x-layout>
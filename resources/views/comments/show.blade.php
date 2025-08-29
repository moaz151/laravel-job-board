<x-layout :title="$pageTitle">

    <h2>comment by: {{ $comment->author }} </h2>
    @if($comment->post)
        <h3>Related Post</h3>
        <ul>
            <li>
                <strong> {{$comment->post->title}} </strong>
                <p> {{$comment->post->content}} </p>
                <p>Author: {{$comment->post->author}} </p>
                <a href="{{ route('blog.show', $comment->post->id) }}"> View Full Post </a>
            </li>
        </ul>
    @else
        <p>No related post found</p>
    @endif
</x-layout>
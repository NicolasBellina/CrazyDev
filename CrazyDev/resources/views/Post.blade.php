<x-app-layout>

    <div class="post-page">
        <a href="javascript:history.back()" class="back-to-forum">← Retour</a>
        <div class="post-ctn">
            <h1 class="post-title">{{ $post->title }}</h1>
    
            <div class="post-meta">
                <span>Par {{ $post->user->first_name }} {{ $post->user->last_name }}</span>
                <span>• Publié le {{ $post->created_at->format('d/m/Y à H:i') }}</span>
            </div>
    
            <div class="post-body">
                {{ $post->body }}
            </div>
        </div>

        <div class="comments-list">
            @foreach($comments as $comment)
                <x-comment :comment="$comment" />
            @endforeach

            {{ $comments->links() }}
        </div>

        @if($comments->currentPage() == $comments->lastPage())
        <form action="{{ route('comments.store') }}" method="POST" class="comment add-comment">
            @csrf
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <textarea name="body" rows="4" placeholder="Ajouter un commentaire"></textarea>
            <button type="submit">Envoyer</button>
        </form>
        @endif
        

    </div>

</x-app-layout>

<style>

    .post-page {
        max-width: 1040px;
        margin: 0 auto;
        padding: 2rem;
        color: #EEEEEE;
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    .post-title {
        font-size: 2rem;
        font-weight: bold;
    }

    .post-meta {
        font-size: 0.9rem;
        margin-bottom: 2rem;
        opacity: .5;
    }

    .post-body {
        font-size: 1.2rem;
        line-height: 1.6;
    }

    .post-ctn {
        background-color: #A91D3A;
        padding: 2rem
    }

    .comments-list {
        display: flex;
        flex-direction: column;
        gap: .75rem;
    }

    .comment {
        border: solid 1px #A91D3A;
        background-color: rgba(169, 29, 58, .25);
        padding: 1rem 2rem;
        border-radius: 15px;
    }
    
    .comment-text {
        font-size: 18px;
        display: flex;
        flex-direction: column;
    }
    
    .comment-timestamp {
        font-size: 14px;
        align-self: flex-end;
        opacity: .75;
    }

    .user-info {
        display: flex;
        align-items: center;
        gap: 1rem;
        font-size: 20px;
        margin-bottom: 1.5rem;
    }

    .profile-picture {
        max-width: 50px;
        aspect-ratio : 1/1;
        border-radius: 100%
    }

    .add-comment {
        display: flex;
        flex-direction: column;

        & button {
            margin-top: 1rem;
            padding: .75rem 1.5rem;
            border-radius: 15px;
            transition: all .15s ease-in-out;
            align-self: center;

            &:hover {
                color: #A91D3A;
                font-weight: 600;
                background-color: #EEEEEE;
            }
        }

        & textarea {
            all: unset;
            border-bottom: #EEEEEE 1px solid;
            color: #EEEEEE;
            height: 10ch;
        }
    }

</style>
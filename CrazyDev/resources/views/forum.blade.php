<x-app-layout>
    <div class="forum-layout">
        <div class="left-panel forum-panel">
            <div class="user-welcome">
                <h2 class="user-welcome-message">{{ Auth::user()->first_name }}, ravi de vous revoir !</h2>
            </div>
        </div>

        <div class="main-forum-content forum-panel">
            <div class="thread-list">
                <div class="thread-list-header">
                    Les posts que nous vous recommandons :
                </div>

                @foreach ($posts as $post)
                <x-thread 
                    :title="$post->title" 
                    :author="$post->user->first_name" 
                    :timestamp="$post->created_at->format('d/m/Y à H:i')" 
                    :excerpt="$post->is_main_thread ? Str::limit($post->body, 100) : null" 
                    :isMainThread="$post->is_main_thread" 
                    :postId="$post->id"
                />
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>


<style>
    
    .forum-layout {
        display: grid;
        grid-template-columns: 10% 3fr 6fr 10%;
        grid-gap: 1rem;
        height: calc(100svh - 65px);
    }
    
    .left-panel {
        grid-column: 2;
        overflow: hidden;
    }
    
    .main-forum-content {
        grid-column: 3;
    }

    .forum-panel {
        padding: 2rem;
    }

    .user-welcome {
        background-color: rgba(169, 29, 58, .75);
        padding: 1rem 2rem;
        border-radius: 15px;
        word-wrap: break-word;
    }

    .user-welcome-message {
        color: #EEEEEE;
        font-family: 'Space Grotesk', sans-serif;
        font-size: 22px;
        text-align: center;
    }

    .thread-list {
        display: flex;
        flex-direction: column;
        gap: 2rem;
        border: solid 4px #A91D3A;
        border-top: none;
        padding: 0 0 2rem;
        min-height: 100%;
    }

    .thread {
        border-radius: 10px;
        padding: 1rem 1.5rem;
        margin-inline: 2rem;
        color: #EEEEEE;
        display: flex;
        justify-content: space-between;
        background-color: rgba(169, 29, 58, .75); 

        &:hover {
            background-color: rgba(199, 54, 89, .75);
            cursor: pointer;
        }
    }

    .timestamp:not(.main-thread .timestamp) {
        align-self: center;
    }

    .main-thread {
        display: flex;
        flex-direction: column;
    }

    .thread-title-inline {
        display: flex;
        gap: 5px;
    }
    
    .thread-title {
        font-weight: 600;
        font-size: 20px;
    }

    .author {
        font-size: 16px;
        align-self: center;
        vertical-align: middle;
    }

    .thread-short-extract {
        opacity: .5;
        font-size: 14px;
        margin-block: .5rem 1.5rem;
    }

    .timestamp {
        font-size: 12px;
        opacity: .5;
        text-align: right;
    }

    .thread-list-header {
        background-color: #A91D3A;
        color: #EEEEEE;
        padding: 1rem 1.5rem;
    }

</style>
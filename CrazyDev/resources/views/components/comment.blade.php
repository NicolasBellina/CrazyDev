<div class="comment">
    <div class="user-info">
        <img src="../{{ $comment->user->avatar_path ?? '../img/avatar/default.png' }}" alt="Photo de profil de {{ $comment->user->first_name }}" class="profile-picture">
        <span class="user-name">{{ $comment->user->first_name }} {{ $comment->user->last_name }}</span>
    </div>

    <div class="comment-text">
        <span class="comment-content">{{ $comment->body }}</span>
        <span class="comment-timestamp">{{ $comment->created_at->format('d/m/Y à H:i') }}</span>
    </div>
</div>
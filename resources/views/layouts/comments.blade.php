<div class="row justify-content-center my-5">
    <div class="col-md-8">
        <h4 class="mb-3">Comments</h4>

        @auth
            <h6>Reply as {{ auth()->user()->name }}</h6>
            <form action="/comments" method="post">
                @csrf
                <div class="mb-3">
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <input type="hidden" name="post_slug" value="{{ $post->slug }}">
                    <textarea class="form-control" id="comment" rows="3" name="contents"></textarea>
                </div>
                <div class="mb-3 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Reply</button>
                </div>
            </form>
        @else
            <h6>Login first to comment this post.</h6>
        @endauth

        @foreach ($comments as $comment)
            <div class="card my-3 border-secondary">
                <div class="card-body">
                    <div class="hstack">
                        <h6 class="card-title">{{ $comment->user->name }}</h6>
                        <p class="card-subtitle mb-2 text-muted ms-auto">11/18/2021</p>
                    </div>
                    <p class="card-text">{{ $comment->contents }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
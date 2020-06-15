@extends('index')

@section('content')

        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center text-success">ItSolutionHust.com</h3>
                    <br/>
                    <h2>{{ $post->title }}</h2>
                    <p>
                        {!! $post->body !!}
                    </p>
                    <hr />
                    <h4>Display Comments</h4>
  
                    @include('commentsDisplay', ['comments' => $post->comments, 'post_id' => $post->id])
   
                    <hr />
                    <h4>Add comment</h4>
                    <form method="post" action="{{ route('comments.store') }}">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" name=body></textarea>
                            <input type=hidden name=post_id value="{{ $post->id }}" />
                        </div>
                        <div class="form-group">
                            <input type=submit class="btn btn-success" value="Add Comment" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
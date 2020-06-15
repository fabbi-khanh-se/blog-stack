@extends('index')
@section('content')
    <div class="col-md-9">
        <div class="ask-question-input-part032">
            <h4 class="font-weight-bold text-center">Ask Question</h4>
            <hr>
            {{--  --}}
            <form method="POST" action="{{ route('posts.store') }}">
                @csrf
                <div class="form-group row">
                    <label for="title" class="col-md-3 col-form-lable text-md-left font-weight-bold form-description433">Question-Title* </label>
                    <div class="col-md-9">
                        <input type="text" name="title" class="question-ttile32" placeholder="Write Your Question Title"> 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="body" class="col-md-3 col-form-label text-md-left font-weight-bold form-description433">Question-body*</label>

                    <div class="col-md-9">
                        <textarea id="editor" type="text" class="form-control" name="body"></textarea>
                    </div>
                </div>
                <div class="publish-button2389">
                    <button type="submit" class="publis1291">Publish your Question</button>
                </div>	
            </form>

        </div>
    </div>
@endsection

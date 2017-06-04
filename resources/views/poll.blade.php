@extends('vendor.backpack.base.polls_layout')

@section('content')
    <div class="container">
        <h3 class="poll-title center">{{$poll->title}}</h3>
        {{ Form::open() }}
        @foreach($poll->questions as $question)
            <span class="question-span">{{$question->question}}</span>
            @foreach($question->options as $option)
                <div class="options">
                    <input id="{{$option->option}}"
                           class="radio-style"
                           name="question_{{$question->id}}"
                           value="{{$option->id}}"
                           type="radio"
                           required
                    />
                    <label for="{{$option->option}}" class="radio-style-2-label">{{$option->option}}</label>
                </div>
            @endforeach
        @endforeach

        @if(auth()->user())
            <button type="submit" class="btn btn-primary">Send</button>
            <a href="{{route('result', compact('poll'))}}" class="btn btn-primary">View Results</a>
        @else
            <span><a href="{{route('auth.login')}}">
                     Log in to answer the poll
                </a></span>
        @endif

        {{ Form::close() }}
    </div>
@endsection

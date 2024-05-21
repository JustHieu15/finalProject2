@extends('layouts.client')

@section('title')
    Show
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/client/css/studenttest.css') }}">
@endsection

@section('content')
    @php
        $index = 1;
    @endphp

    <div class="container">
        <form id="form-questions" action="{{ route('test.submit') }}" method="post">
            @csrf

            <input type="hidden" name="test_id" value="{{ $test->id }}">

            <div class="row">
                @foreach($questions as $question)
                    <div class="col-12">
                        <div class="col-md-12">
                            <p><span class="fw-bold">Question {{ $index++ }}: {{ $question->title }}</span>
                            </p>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="hidden"
                                   name="answers[{{ $question->id }}]"
                                   id="choice_0" value="null">
                        </div>

                        <div class="col-md-12 mb-4">
                            @foreach($question->answers as $answer)
                                @if($answer->question_id == $question->id)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]"
                                               id="choice_{{ $answer->id }}" value="{{ $answer->content }}">

                                        <label class="form-check-label" for="choice_{{ $answer->id }}">
                                            {{ $answer->content }}
                                        </label>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach

                <div class="col-6">
                    <h2 id="timer"></h2>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('script')
@endpush

@extends('layouts.default')

@section('content')
<div class="container">
    <h3>{{ $result->title }}</h3>
    <div class="card grey lighten-4">
        <div class="card-content">
            {{ $result->body }}
        </div>
        <div class="card-action">
        @if (\Auth::user()->can('update', $result))
            <a href="/threads/{{ $result->id }}/edit">{{ __('Edit') }}</a>
        @endif
        <a href="/">{{ __('Back') }}</a>
        </div>
    </div>
    <reply-component
        reply="{{__('Reply')}}"
        replied="{{__('Replied')}}"
        your-answer="{{__('Your Answer')}}"
        send="{{__('Send')}}">
        @include('layouts.default.preloader')
    </reply-component>
</div>
@endsection

@section('scripts')
    <script src="/js/replies.js"></script>
@endsection

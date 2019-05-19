@extends('site.layout')

@section('content')

    <div class="mt-6 rounded overflow-hidden shadow-lg">
        <div class="px-6 py-4">
            <div class="text-blue-700 font-semibold">{{ $event->start_date->diffForHumans() }}</div>
            <a href="/event/{{$event->id}}" class="block font-bold text-xl mb-2">{{ $event->name }}</a>

            <div class="text-gray-700 text-base mt-12">
                {!! nl2br($event->description) !!}
            </div>
        </div>
    </div>

@endsection

@extends('site.layout')

@section('content')

    <div class="mt-6 border {{ $eventList->id == $event->event_list_id ? 'border-gray-200' : 'border-red-400'  }} rounded overflow-hidden shadow-lg">
        <div class="px-6 py-4">
            <div class="text-blue-700 font-semi-bold">{{ $event->start_date->diffForHumans() }}</div>
            <a href="/event/{{$event->id}}" class="block font-bold text-xl mb-2">{{ $event->name }}</a>

            <div class="text-gray-700 text-base mt-4">
                Description...
            </div>

            <div class="mt-6 pb-4 text-xl">
                Site: {{ $event->eventlist->domain }}
            </div>
        </div>
    </div>

@endsection

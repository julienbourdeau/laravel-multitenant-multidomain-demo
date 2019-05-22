@extends('site.layout')

@section('content')

    @foreach ($events as $event)

        <div class="mt-6 rounded border border-gray-200 overflow-hidden shadow-lg {{ $eventList->id == $event->event_list_id ? 'border-gray-200' : 'border-red-400'  }}">
            <div class="px-6 py-4">
                <a href="/event/{{$event->id}}" class="block font-bold text-xl mb-2">
                    Event #{{$event->id}}
                    <span class="inline-block float-right rounded-full px-3 py-1 text-sm font-semibold  mr-2 {{ $eventList->id == $event->event_list_id ? 'bg-gray-200 text-gray-700' : 'bg-red-200 text-red-700'  }}">EventList #{{ $event->event_list_id }}</span>
                </a>

            </div>
            <div class="px-6 pb-4 text-xl">
                Site: {{ $event->eventlist->domain }}
            </div>
        </div>

    @endforeach

@endsection

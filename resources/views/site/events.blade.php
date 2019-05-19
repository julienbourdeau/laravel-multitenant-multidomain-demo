@extends('site.layout')

@section('content')

    @foreach ($events as $event)

        <div class="mt-6 rounded overflow-hidden shadow-lg">
            <div class="px-6 py-4">
                <a href="/event/{{$event->id}}" class="block font-bold text-xl mb-2">{{ $event->name }}</a>
                <p class="text-gray-700 text-base">
                    {{ Str::limit($event->description, 80) }}
                </p>
            </div>
            <div class="px-6 py-4">
                <span class="inline-block rounded-full px-3 py-1 text-sm font-semibold  mr-2 bg-gray-200 text-gray-700 ">#{{ $event->id }}</span>
                <span class="inline-block rounded-full px-3 py-1 text-sm font-semibold  mr-2 {{ $eventList->id == $event->event_list_id ? 'bg-gray-200 text-gray-700' : 'bg-red-200 text-red-700'  }}">EventList #{{ $event->event_list_id }}</span>
            </div>
        </div>

    @endforeach

@endsection

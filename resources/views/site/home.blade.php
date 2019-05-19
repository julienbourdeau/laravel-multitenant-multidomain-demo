@extends('site.layout')

@section('content')
    <div class="my-8 text-center text-xl">


        <div class="text-3xl text-blue-700 tracking-widest">
            {{ request()->getHost() }}
        </div>

    </div>
@endsection

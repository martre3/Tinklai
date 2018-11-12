@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Planai</div>

    <div class="panel-body">
        @foreach ($plans as $plan)
            <div class="panel panel-success plan--card">
                <div class="heading panel-heading">
                    {{ $plan->name }}
                </div>
                <div class="body panel-body">
                    <p class="card-text">{{ $plan->price }} €</p>
                    <p class="card-text">{{ $plan->mb }} MB</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

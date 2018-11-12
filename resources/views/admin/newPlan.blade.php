@extends('layouts.app')

@section('content')

{!! Form::open(['route' => 'plan.create']) !!}

<div class="form-group">
    {!! Form::label('name', 'Plano pavadinimas') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('price', 'Kaina') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('mb', 'MB kiekis') !!}
    {!! Form::text('mb', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Kurti', ['class' => 'btn btn-info']) !!}

{!! Form::close() !!}

@endsection
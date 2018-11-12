@extends('layouts.app')

@section('content')

<table class="table">
    <tr>
        <th>
            Pavadinimas
        </th>
        <th>
            Kaina
        </th>
        <th>
            MB
        </th>
        <th>

        </th>
    </tr>
@foreach ($plans as $plan)
    <tr>
        <td>
            {{ $plan->name }}
        </td>
        <td>
            {{ $plan->price }}
        </td>
        <td>
            {{ $plan->mb }}
        </td>
        <td>
            <a class="plan__remove-button" href="{{ route('plan.remove', $plan->id)  }}" role="button"><i class="far fa-times-circle"></i></a>
        </td>
    </tr>
@endforeach
</table>
<a class="btn btn-success" href="{{ route('plan.form')  }}" role="button">Naujas Planas</a>

@endsection
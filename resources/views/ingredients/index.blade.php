@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                    @foreach ($ingredients as $ingredient)
                        <h1>
                            {{ $ingredient->name }}
                        </h1>
                        {{ $ingredient->createdBy->name }}
                    @endforeach
                </div>
                    
                <div class="card-body">


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

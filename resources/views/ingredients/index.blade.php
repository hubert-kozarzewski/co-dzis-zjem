@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Składniki</div>                   
                <div class="card-body">
                    @foreach ($ingredients as $ingredient)
                        <ul class="list-group">
                            <li class="list-group-item">
                                <h5>{{ $ingredient->name }}</h5>
                                <span class="badge badge-primary badge-pill"> {{ $ingredient->createdBy->name }}</span>
                            </li>    
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

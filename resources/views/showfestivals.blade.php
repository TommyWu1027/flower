@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Choose Variety</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('festival2flower') }}">
                    

                        <div class="col-md-6">
                                <select id="festival" type="text" class="form-control" name="festival"  required autocomplete="type" autofocus>
                                @foreach($festivals as $festival)
                                    <option>{{$festival['name']}}</option>
                                @endforeach
                                </select>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Confirm
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

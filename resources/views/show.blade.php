@extends('layout')
@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
                <a class="btn btn-primary" style="float:right ;margin:20px" href="{{ route('index.index') }}"> Back</a>
        </div>
    </div>

    <div class=" bb mx-auto">

   
<div class="row mx-auto">
    <div class="col-xs-9 col-sm-9 col-md-9">
            <div class="form-group">
                <strong>Name : </strong>
                {{$data->name }}
            </div>
        </div>

        <div class="col-xs-9 col-sm-9 col-md-9">
            <div class="form-group">
                <strong>Fathe Name : </strong>
                {{ $data->father_name}}
            </div>
        </div>


        <div class="col-xs-9 col-sm-9 col-md-9">
            <div class="form-group">
                <strong> Mother Name : </strong>
                {{ $data->mother_name}}
            </div>
        </div>

        <div class="col-xs-9 col-sm-9 col-md-9">
            <div class="form-group">
                <strong> Gender : </strong>
                {{ $data->gender }}
            </div>
        </div>

        <div class="col-xs-9 col-sm-9 col-md-9">
            <div class="form-group">
                <strong> Birthday : </strong>
                {{ $data->birthday }}
            </div>
        </div>
        
        <div class="col-xs-9 col-sm-9 col-md-9">
            <div class="form-group">
                <strong> Phone : </strong>
                {{ $data->phone }}
            </div>
        </div>
        

    </div>
    </div>

@endsection
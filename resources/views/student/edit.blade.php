
@extends('layouts.master')
@section('title', 'Add')
@section('container')
<h2 style="margin-top: 25px">Edit Student</h2>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Student</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('index') }}"> Back</a>
            </div>
        </div>
    </div>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>ERROR</strong><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row">
    <form action="{{route('update', $student?->id)}}" method="post"> 
        @csrf
        <div class="col-md-4 mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="name" name="name" value="{{$student?->name}}">
        </div>
        <div class="col-md-3 mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="text" class="form-control" id="age" aria-describedby="age" name="age" value="{{$student?->age}}">
        </div>
        <div class="col-md-3 mb-3">
            <label for="age" class="form-label">Gender</label>
            <input type="radio" name="gender" value="nam"> Nam
            <input type="radio" name="gender" value="nu"> Nu
            <input type="radio" name="gender" value="other"> Other
        </div>
        <div class="col-md-3 mb-3">
        <label for="math" class="form-label">Math</label>
            <input type="text" class="form-control" id="math" aria-describedby="math" name="math" value="{{$student?->math}}">
        </div>
        <div class="col-md-3 mb-3">
            <label for="physic" class="form-label">Physic</label>
            <input type="text" class="form-control" id="physic" aria-describedby="physic" name="physic" value="{{$student?->physic}}">
        </div>
        <div class="col-md-3 mb-3">
            <label for="chemistry" class="form-label">Chemistry</label>
            <input type="text" class="form-control" id="chemistry" aria-describedby="chemistry" name="chemistry" value="{{$student?->chemistry}}">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
 
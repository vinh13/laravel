@extends('layouts.master')
@section('title', 'Add')
@section('container')
<h1 style="margin-top: 25px">Add new Student</h1>
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
    <form action="{{route('store')}}" method="post"> 
        @csrf
        <div class="col-md-4 mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="name" name="name">
        </div>
        <div class="col-md-3 mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="text" class="form-control" id="age" aria-describedby="age" name="age">
        </div>
        <div class="col-md-3 mb-3">
            <label for="age" class="form-label">Gender</label>
            <input type="radio" name="gender" value="nam"> Nam
            <input type="radio" name="gender" value="nu"> Nu
            <input type="radio" name="gender" value="other"> Other
        </div>
        <div class="col-md-3 mb-3">
        <label for="math" class="form-label">Math</label>
            <input type="text" class="form-control" id="math" aria-describedby="math" name="math">
        </div>
        <div class="col-md-3 mb-3">
            <label for="physic" class="form-label">Physic</label>
            <input type="text" class="form-control" id="physic" aria-describedby="physic" name="physic">
        </div>
        <div class="col-md-3 mb-3">
            <label for="chemistry" class="form-label">Chemistry</label>
            <input type="text" class="form-control" id="chemistry" aria-describedby="chemistry" name="chemistry">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
 
@endsection
 
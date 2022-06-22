
@extends('layouts.master')
@section('title', 'List')
@section('container')
<h1 style="margin-top: 25px">List student</h1>
<a type="button" href="{{route('add')}}" class="btn btn-primary">Add</a>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Math</th>
      <th scope="col">Physic</th>
      <th scope="col">Chemistry</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @if(isset($students) && count($students) > 0)
        @foreach($students as $key => $student)
            <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{$student['name']}}</td>
            <td>{{$student['age']}}</td>
            <td>{{$student['gender']}}</td>
            <td>{{$student['math']}}</td>
            <td>{{$student['physic']}}</td>
            <td>{{$student['chemistry']}}</td>
            <td><a href="{{route('edit', ['student' => $student['id']])}}" class="btn btn-secondary">Edit</a></td>
            <td>
                <form action="{{route('delete', ['student' => $student['id']])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
            </tr>
        @endforeach
    @endif
  </tbody>
</table>
<!-- Modal -->
 
@endsection

 
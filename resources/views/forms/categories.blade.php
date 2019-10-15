@extends('layouts.app')

@section('content')
<div class="container">
        <form>
                <div class="form-group">
                  <label for="title">Movie Title</label>
                  <input type="text" class="form-control" id="title" placeholder="Enter Movie name">

                </div>
                <div class="form-group">
                  <label for="year">Year of Release</label>
                  <input type="text" class="form-control" id="year" placeholder="Enter Year of Release">
                </div>
                <button type="submit" class="btn btn-danger">Submit</button>
                <a class="btn btn-danger" href="{{url('back')}}">Back</a>
              </form>
</div>
@endsection

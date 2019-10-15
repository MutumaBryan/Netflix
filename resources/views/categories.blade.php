@extends('layouts.app')

@section('content')
<div class="container">
        <nav class="navbar navbar-light bg-light">
                <form class="form-inline">
                    <div class="col-xs-2">
                        <a href="{{url('/home')}}" class="btn btn-danger" role="button">All Movies</a>
                        <a href="{{url('/categories')}}" class="btn btn-danger" role="button">Movie Categories</a>
                        <a href="{{url('/suggestions')}}" class="btn btn-danger" role="button">Your Suggestions</a>
                    </div>
                </form>
              </nav>
        <table class="table table-hover">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col" class="text-center">Movie Category</th>
                    <th scope="col" class="text-center">Movie Title</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td class="text-center">Mark</td>
                    <td class="text-center">Otto</td>
                  </tr>
                </tbody>
              </table>
</div>
@endsection
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
                    <th scope="col">Movie Title</th>
                    <th scope="col">Year Released</th>
                    <th scope="col">Original/Suggested</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($movies as $key => $value)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{ $value->title }}</td>
                            <td>{{ $value->year_released }}</td>
                            <td>{{ $value->Orig_Suggested }}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
</div>
@endsection

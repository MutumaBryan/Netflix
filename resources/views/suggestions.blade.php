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
                    <th scope="col" class="text-center">Movie Title</th>
                    <th scope="col" class="text-center">Year Released</th>
                    <th with="140px" class="text-center">
                        <a href="" class="btn btn-success btn-sm">
                          <img src="{{url('/icons/icons8-plus.svg')}}" height="20px"/>
                        </a>
                    </th>
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
                            <td class="text-center">
                                <a class="btn btn-danger btn-sm" href="{{url('/forms/update')}}">
                                    <img src="{{url('/icons/icons8-edit.svg')}}" height="20px" width="50px"/>
                                  </a>
                                  {!! Form::open(['method' => 'DELETE','route' => ['movie.destroy', $value->id],'style'=>'display:inline']) !!}
                                    <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
                                  {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
</div>
@endsection
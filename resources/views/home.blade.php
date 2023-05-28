@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    {{ __('Dashboard') }}
                </div>
                <div class="col-md-12 text-center">
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <a href="{{ route('add_recruitdata') }}" class="btn btn-success  ml-auto">Add Recruit Data</a>




                        <div class="card-body">
                            <h1 class="card-title pricing-card-title"><small class="text-muted">Total Recruitment Entries: </small> {{ $recruitdata_count }} </h1>
                        </div>



                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">RFP No. </th>
                        <th scope="col">Position name</th>
                        <th scope="col">Lever</th>
                        <th scope="col">Time Taken to Hire</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($recruitdata as $recruitdata)
                    <tr>
                        <th scope="row">{{$recruitdata-> id}}</th>
                        <td>{{$recruitdata-> rfp_no}}</td>
                        <td>{{$recruitdata-> position_name}}</td>
                        <td>{{$recruitdata-> lever}}</td>
                        <td>{{$recruitdata-> time_taken_to_hire}}</td>
                        <td>

{{--                            <button class="btn btn-danger">Delete</button>--}}
                            <a action="{{ route('delete_recruitdata', ['id' => $recruitdata->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                                <a href="{{ route('view_recruitdata', $recruitdata->id) }}"><button class="btn btn-dark">View</button> </a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

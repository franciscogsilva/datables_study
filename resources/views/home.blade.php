@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table" id="table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $item)
                                <tr class="item{{$item->id}}">
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td><button class="edit-modal btn btn-info"
                                    data-info="{{$item->id}},{{$item->name}},{{$item->email}}">
                                    <span class="glyphicon glyphicon-edit"></span> Edit
                                    </button>
                                    <button class="delete-modal btn btn-danger"
                                    data-info="{{$item->id}},{{$item->name}},{{$item->email}}">
                                    <span class="glyphicon glyphicon-trash"></span> Delete
                                    </button></td>
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

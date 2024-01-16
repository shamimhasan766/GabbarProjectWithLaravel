@extends('layout.layout')

@section('content')
    <div class="container mt-120">
        <div class="row">
            <div class="col-lg-12">
              @if(session('delete'))
              <div class="alert alert-danger">
                  {{ session('delete') }}
              </div>
              @endif
                <div class="card">
                    <div class="card-header text-center">All Menu</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Message</th>
                                <th scope="col">View</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($allMessages as $sl=>$message)
                              <tr>
                                <td>{{$sl+1}}</td>
                                <td>{{$message->name}}</td>
                                <td>{{$message->email}}</td>
                                <td>{{$message->message}}</td>
                                <td><a href="{{route('viewmessage',['id'=>$message->id])}}" class="btn btn-primary">View</a></td>
                                <td>
                                  <div class="d-flex">
                                      <a data-id="" href="{{ route('deletemessage', ['id' => $message->id]) }}" class="delete btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                  </div>
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
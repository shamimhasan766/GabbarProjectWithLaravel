@extends('layout.layout')

@section('content')
    <div class="container mt-120">
        <div class="row">
            <div class="col-lg-4">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
              @endif
              @if ($errors->has('image'))
                  <div class="alert alert-danger">
                      {{ $errors->first('image') }}
                  </div>
              @endif
                <div class="card">
                    <div class="card-header text-center">Update Image</div>
                    <div class="card-body">
                        <form action="{{route('updateintro')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="mb-2">
                                    <img id="blah" src="{{$intro->image}}" alt="" width="150px">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Choose File</label>
                                    <input type="file" class="d-block form-control" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    <strong class="text-danger"></strong>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="btn" value="1" class="btn btn-primary d-block m-auto">Update</button>
                                </div>
                           </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                @if(session('success_intro'))
                <div class="alert alert-success">
                    {{ session('success_intro') }}
                </div>
              @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header text-center"></div>
                    <div class="card-body">
                        <form action="{{route('updateintrotext')}}" method="POST">
                            @csrf
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Update Name</label>
                                        <input value="{{$intro->name}}" type="text" class="d-block form-control" name="name">
                                        <strong class="text-danger"></strong>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Update Description</label>
                                        <textarea name="desc" id="desc" cols="30" class="form-control" rows="5">{{$intro->desc}}</textarea>
                                        <strong class="text-danger"></strong>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Update Button Text</label>
                                        <input value="{{$intro->button}}" type="text" class="d-block form-control" name="button">
                                        <strong class="text-danger"></strong>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Update Button Link</label>
                                        <input value="{{$intro->button_link}}" type="text" class="d-block form-control" name="button_link">
                                        <strong class="text-danger"></strong>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="btn2" value="2" class="btn btn-primary d-block m-auto">Update</button>
                                </div>
                           </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
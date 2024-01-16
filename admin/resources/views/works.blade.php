@extends('layout.layout')

@section('content')
    <div class="container mt-120">
        <div class="row">
            
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="col-lg-4">
                    @if(session('success_img'))
                    <div class="alert alert-success">
                        {{ session('success_img') }}
                    </div>
                    @endif
                    <div class="card">
                      <div class="card-header text-center">Update Image</div>
                      <div class="card-body">
                          <form action="{{route('imageupdate')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                              <div class="mb-3">
                                <img id="blah" src="{{$work->image}}" alt="" width="150px">
                                <label class="form-label d-block">Choose Image</label>
                                <input name="image" type="file" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                              </div>
                              <button type="submit" class="btn btn-primary d-block m-auto">Update</button>
                          </form>
                      </div>
                  </div>
            </div>
            <div class="col-lg-4">
                @if(session('success_works'))
                    <div class="alert alert-success">
                        {{ session('success_works') }}
                    </div>
                @endif
                  <div class="card">
                      <div class="card-header text-center"></div>
                      <div class="card-body">
                          <form action="{{route('worksupdate')}}" method="POST">
                                @csrf
                              <div class="mb-3">
                                <label class="form-label d-block">Intro Text</label>
                                <input value="{{$work->intro}}" name="intro" type="text" class="form-control">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="desc" id="" cols="30" rows="5">{{$work->desc}}</textarea>
                              </div>
                              <div class="mb-3">
                                <label class="form-label d-block">Button</label>
                                <input value="{{$work->button}}" name="button" type="text" class="form-control">
                              </div>
                              <div class="mb-3">
                                <label class="form-label d-block">Button Link</label>
                                <input value="{{$work->button_link}}" name="button_link" type="text" class="form-control">
                              </div>
                              <button type="submit" class="btn btn-primary d-block m-auto">Update</button>
                          </form>
                      </div>
                  </div>
              </div>
        </div>
    </div>
@endsection
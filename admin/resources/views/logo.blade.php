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
                      <div class="card-header text-center">Update Logo</div>
                      <div class="card-body">
                       <form action="{{route('logoupdate')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="mb-2">
                                <img id="blah" src="{{$path}}" alt="" width="150px">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Choose File</label>
                                <input type="file" class="d-block form-control" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                <strong class="text-danger"></strong>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="btn" value="1" class="btn btn-primary">Update</button>
                            </div>
                       </form>
                    </div>
                  </div>
              </div>
        </div>
    </div>
@endsection
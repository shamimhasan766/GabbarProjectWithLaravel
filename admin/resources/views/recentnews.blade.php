@extends('layout.layout')

@section('content')
    <div class="container mt-120">
        <div class="row">
            <div style="margin-bottom: 50px" class="col-lg-12">
              @if(session('delete'))
              <div class="alert alert-danger">
                  {{ session('delete') }}
              </div>
              @endif
                <div class="card">
                    <div class="card-header text-center"></div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Image</th>
                                <th scope="col">Caption</th>
                                <th scope="col">Short Description</th>
                                <th scope="col">Author</th>
                                <th scope="col">Link</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                    @foreach ($recentnews as $sl=>$News)
                                        
                                    <tr>
                                      <td>{{$sl+1}}</td>
                                      <td><img src="{{$News->image}}" height="60px" alt=""></td>
                                      <td class="editable caption">{{$News->caption}}</td>
                                      <td class="editable desc">{{$News->short_desc}}</td>
                                      <td class="editable author">{{$News->author}}</td>
                                      <td class="editable link">{{$News->link}}</td>
                                      <td>
                                        <div class="d-flex">
                                            <button style="margin-right: 5px" value="{{$News->id}}" class="btn btn-primary shadow btn-xs sharp mr-1 edit-row"><i class="fa fa-pencil"></i></button>
                                            <a data-id="" href="{{ route('deletenews', ['id' => $News->id]) }}" class="delete btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                    </tr>

                                    @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 p-2 m-auto mb-5">
              @if(session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
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
                    <div class="card-header text-center">Add Recent News</div>
                    <div class="card-body">
                        <form action="{{route('addrecentnews')}}" method="POST" enctype="multipart/form-data">
                          @csrf
                            <div class="mb-3">
                                <img id="blah" src="" alt="" width="150px">
                            <label class="form-label d-block">News Image</label>
                            <input name="image" type="file" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Caption</label>
                              <textarea name="caption" id="" cols="30" class="form-control" rows="2"></textarea>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Description</label>
                              <textarea name="short_desc" id="" cols="30" class="form-control" rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Author</label>
                              <input type="text" name="author" class="form-control">
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Link</label>
                              <input type="text" name="link" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary d-block m-auto">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
  $(document).ready(function() {
      $('.table').on('click', '.edit-row', function() {
        var row = $(this).closest('tr');
      
        row.find('.editable').each(function() {
            var content = $(this).text();
            var textareaField = $('<textarea class="edit-input form-control"></textarea>');
                textareaField.val(content); // Set textarea value based on content
                $(this).html(textareaField);
        });
      
        var id = $(this).val();
        var saveButton = $('<button style="margin-right:10px" class="save-row btn btn-success">Save</button>');
        saveButton.data('id', id);
        $(this).replaceWith(saveButton);
      });
      
      $('.table').on('click', '.save-row', function() {
        var row = $(this).closest('tr');
        var editedValues = [];
      
        row.find('.edit-input').each(function() {
            editedValues.push($(this).val());
        });
      
        var id = $(this).data('id');
      
        $.ajax({
            type: 'POST',
            url: '/edit_news', // PHP script to handle database update
            data: {
                id: id,
                values: editedValues
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                // Handle success response if needed
                console.log('Update successful');
            },
            error: function(xhr, status, error) {
                // Handle error if needed
                console.error(error);
            }
        });
      
        // Revert input fields to text cells
        row.find('.edit-input').each(function(index) {
            $(this).closest('td').text(editedValues[index]);
        });
      
        var editButton = $('<button value="' + id + '" class="btn btn-primary shadow btn-xs sharp mr-1 edit-row"><i class="fa fa-pencil"></i></button>');
        $(this).replaceWith(editButton);
      });
      });
  </script>
@endsection
@extends('layout.layout')

@section('content')
    <div class="container mt-120">
        <div class="row">
            <div class="col-lg-8">
                @if(session('delete'))
              <div class="alert alert-danger">
                  {{ session('delete') }}
              </div>
              @endif
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($promos as $sl=>$promo)
                                    
                                <tr>
                                  <td>{{$sl+1}}</td>
                                  <td><img src="{{$promo->image}}" height="60px" alt="{{$promo->name}}"></td>
                                  <td class="editable title">{{$promo->title}}</td>
                                  <td class="editable desc">{{$promo->desc}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <button style="margin-right: 5px" value="{{$promo->id}}" class="btn btn-primary shadow btn-xs sharp mr-1 edit-row"><i class="fa fa-pencil"></i></button>
                                            <a data-id="" href="{{ route('deletepromo', ['id' => $promo->id]) }}" class="delete btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
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
                      <div class="card-header text-center">Add Promo</div>
                      <div class="card-body">
                          <form action="{{route('addpromo')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                              <div class="mb-3">
                                <img id="blah" src="" alt="" width="150px">
                                <label class="form-label d-block">Promo Image</label>
                                <input name="image" type="file" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Promo Title</label>
                                <input name="title" placeholder="Title" type="text" class="form-control">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Promo Description</label>
                                <textarea name="desc" id="" class="form-control" cols="30" rows="5"></textarea>
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
            url: '/edit_promo', // PHP script to handle database update
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
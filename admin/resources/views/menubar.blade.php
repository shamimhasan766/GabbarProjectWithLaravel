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
                    <div class="card-header text-center">All Menu</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Menu</th>
                                <th scope="col">Link</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($menus as $sl=>$menu)
                              <tr>
                                <td>{{$sl+1}}</td>
                                <td class="editable menu">{{$menu->menu}}</td>
                                <td class="editable link">{{$menu->link}}</td>
                                <td>
                                  <div class="d-flex">
                                    <button style="margin-right: 5px" value="{{$menu->id}}" class="btn btn-primary shadow btn-xs sharp mr-1 edit-row"><i class="fa fa-pencil"></i></button>
                                      <a data-id="" href="{{ route('deletemenu', ['id' => $menu->id]) }}" class="delete btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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

                <div class="card">
                    <div class="card-header text-center">Add Menu</div>
                    <div class="card-body">
                        <form action="/addmenu" method="POST">
                          @csrf
                            <div class="mb-3">
                              <label class="form-label">Menu Name</label>
                              <input name="menu" type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Link</label>
                              <input name="link" placeholder="nullable" type="text" class="form-control">
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
            var inputField = $('<input type="text" class="edit-input form-control" value="' + content + '">');
            $(this).html(inputField);
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
            url: '/edit_menu', // PHP script to handle database update
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
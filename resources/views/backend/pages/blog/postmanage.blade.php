@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
  <i class="icon ion-ios-home-outline"></i>
  <div>
    <h4>Blank Page</h4>
    <p class="mg-b-0">Page Description</p>
  </div>
</div>

<div class="br-pagebody">
  <div class="row row-sm">
    <div class="col-sm-12">
      
        <table class="table">
            <thead>
                <th>#sl</th>
                <th>Title</th>
                <th>Content</th>
                <th>Pulished Date</th>
                <td>Author Name</td>
                <th>Action</th>
            </thead>

            <tbody>
                @php $sl=1 @endphp
                @foreach($posts as $data)
                    <tr>
                        <td>{{ $sl }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->content }}</td>
                        <td>{{$data->created_at}}</td>
                        <td>{{$data->user->name}}</td>
                        <td>
                            <a href="{{ route('post.edit', $data->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash" data-target='#delete{{$data->id}}' data-toggle="modal"></i></button>
                        </td>
                    </tr>
                    <!-- Modal -->
                  <div class="modal fade" id="delete{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Are you Sure To Delete This Product?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <a href="{{ Route('post.delete', $data->id) }}"  class="btn btn-danger">Confirm</a>
                        </div>
                      </div>
                    </div>
                  </div>
                    @php $sl++ @endphp
                @endforeach
            </tbody>
        </table>
       
      </div>
    </div><!-- col-3 -->
</div><!-- br-pagebody -->
@endsection
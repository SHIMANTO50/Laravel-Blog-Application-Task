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
<form action="{{Route('post.update', $post->id)}}" method="post">
  @csrf
  <div class="row row-sm">
    <div class="col-sm-6">

      <div class="form-group">
        <label for="title">Title</label>
         <input type="text" name="title" id="title" placeholder="Enter Title" class="form-control" value="{{ $post->title}}">
      </div>

      <div class="form-group">
        <label for="description">Body</label>
         <textarea name="content" id="body"  placeholder="Enter Content" class="form-control">{{ $post->content}}</textarea>
      </div>
          <div class="form-group">
            <button class="form-control btn btn-info">Update Post</button>
          </div>
      </div>
    </div><!-- col-3 -->
</form>
</div><!-- br-pagebody -->
@endsection
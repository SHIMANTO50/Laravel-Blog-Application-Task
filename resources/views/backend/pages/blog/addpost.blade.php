@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
  <i class="icon ion-ios-home-outline"></i>
  <div>
    <h4>Add Post Page</h4>
    <p class="mg-b-0">Page Description</p>
  </div>
</div>

<div class="br-pagebody">
<form action="{{Route('post.store')}}" method="post">
  @csrf
  <div class="row row-sm">
    <div class="col-sm-6">

      <div class="form-group">
        <label for="title">Title</label>
         <input type="text" name="title" id="title" placeholder="Enter Title" class="form-control" value="{{ old('title')}}">
         <span class="text-danger">
           @error('title')
              {{ $message }}
           @enderror
         </span>
      </div>

      <div class="form-group">
        <label for="content">Content</label>
         <textarea name="content" id="body"  placeholder="Enter Content" class="form-control">{{ old('content')}}</textarea>
         <span class="text-danger">
          @error('content')
         {{ $message }}
         @enderror
         </span>
      </div>

          <div class="form-group">
            <button class="form-control btn btn-info">Add Post</button>
          </div>
      </div>
    </div><!-- col-3 -->
</form>
</div><!-- br-pagebody -->
@endsection
@extends('admin.master') 
@section('main-title') --::edit service::--
@endsection
 
@section('main-content')
<form role="form" action="{{ route('service-update',$edit->id) }}" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="row">
    <div class="col-md-12">
      <div class="box box-danger">
        <div class="box-header">
          <h3 class="box-title pull-left">Edit service</h3>
          <a href="{{ route('services') }}" class="btn btn-info pull-right"> <i class="fa fa-backward "></i> back</a>
        </div>
        <div class="clearfix"></div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <div class="box-body">
                <div class="form-group {{ $errors->has('icon') ? 'is-invalid' : '' }}">
                  <label for="title">service Icon <span class="text-danger">*</span></label>
                  <input type="text" name='icon' class="form-control" id="icon" value="{{ $edit->icon }}">
                  <span class="text-danger">{{ $errors->has('icon') ? $errors->first('icon') : '' }}</span>
                </div>
                <div class="form-group {{ $errors->has('title') ? 'is-invalid' : '' }}">
                  <label for="title">service Title <span class="text-danger">*</span></label>
                  <input type="text" name='title' class="form-control" id="title" value="{{ $edit->title }}">
                  <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
                </div>
                <div class="form-group {{ $errors->has('detail') ? 'is-invalid' : '' }}">
                  <label for="editor">Write detail's</label>
                  <textarea id="editor" name="detail" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $edit->detail }}</textarea>
                  <span class="text-danger">{{ $errors->has('detail') ? $errors->first('detail') : '' }}</span>
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-secondary" value="Update service">
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</form>
@endsection
 
@section('script')
<script src="{{ asset('admin-asset') }}/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    CKEDITOR.replace('editor'); 
  });

</script>
@endsection
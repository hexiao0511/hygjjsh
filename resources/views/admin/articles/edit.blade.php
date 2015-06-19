@extends('app')

@section('content')
<div  class="container">
	@if (count($errors) > 0)
	<div class="alert alert-danger">
		<strong>Whoops!</strong> There were some problems with your input.<br><br>
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<form action="{{ URL('admin/articles/'.$articles->id) }}" method="POST">
            <input name="_method" type="hidden" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" value="{{ $articles->id }}">
            title: <input type="text" name="title" class="form-control" required="required" value="{{ $articles->title }}">
            <br>
            Content:
            <textarea name="body" rows="10" class="form-control" required="required">{{ $articles->body }}</textarea>
            <br>
            <button class="btn btn-lg btn-info">提交修改</button>
          </form>


</div>

@endsection
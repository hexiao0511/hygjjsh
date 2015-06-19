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
	<form action="{{ URL('admin/articles/') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            title: <input type="text" name="title" class="form-control" required="required" value="标题">
            <br>
            Content:
            <textarea name="body" rows="10" class="form-control" required="required">内容</textarea>
            <br>
            <button class="btn btn-lg btn-info">提交修改</button>
          </form>


</div>

@endsection
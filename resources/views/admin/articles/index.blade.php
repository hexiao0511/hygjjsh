@extends('app')
@section('content')
<div class="container">  
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">管理文章</div>
				<a href="{{ URL('admin/articles/create') }}" class="btn btn-lg btn-primary">新增</a>
				<div class="panel-body">

					<table class="table table-striped">
						<tr class="row">
							<th class="col-lg-1">序号</th>
							<th class="col-lg-5">标题</th>
							<th class="col-lg-2">作者</th>
							<th class="col-lg-2">时间</th>
							<th class="col-lg-1">编辑</th>
							<th class="col-lg-1">删除</th>
						</tr>
						@foreach ($articles as $article)

						<tr class="row">
							<th class="col-lg-1">{{$article->id}}</th>
							<th class="col-lg-5">{{$article->title}}</th>
							<th class="col-lg-2">{{$article->user_id}}</th>
							<th class="col-lg-2">{{$article->created_at}}</th>
							<th class="col-lg-1"><a href="{{ URL('admin/articles/'.$article->id.'/edit') }}">编辑</a></th>
							<form  action="{{ URL('admin/article/'.$article->id) }}" method="POST" style="display: inline;">
							<th class="col-lg-1">删除</th>
							</form>

						</tr>
						@endforeach




					</table>

					 
				</div>
			</div>
		</div>
	</div>
</div>  
@endsection

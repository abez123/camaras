@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/blogs') }}">Blog</a> :
@endsection
@section("contentheader_description", $blog->$view_col)
@section("section", "Blogs")
@section("section_url", url(config('laraadmin.adminRoute') . '/blogs'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Blogs Edit : ".$blog->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($blog, ['route' => [config('laraadmin.adminRoute') . '.blogs.update', $blog->id ], 'method'=>'PUT', 'id' => 'blog-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'blogimg')
					@la_input($module, 'url')
					@la_input($module, 'titulo')
					@la_input($module, 'text')
					@la_input($module, 'autor_id')
					@la_input($module, 'categoria_id')
					@la_input($module, 'tags')
					@la_input($module, 'patrocinador_id')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Actualizar', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/blogs') }}">Cancelar</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#blog-edit-form").validate({
		
	});
});
</script>

@endpush

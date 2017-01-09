<head> <link rel="stylesheet" href="{{ asset('styles/login.css') }}"></head>
<h1>Menu</h1>

{!! Form::open( ['method'=>'PATCH','url' => 'admin/menu/1'] ) !!}
<div class="form-group">
	@foreach($menus as $menu)
	{!! Form::label($menu->title) !!}
	{!! Form::checkbox($menu->title, $menu->id, in_array( $menu->title, $selectedList ) ) !!}
	@endforeach
</div>
{!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}	
{!! Form::close() !!}
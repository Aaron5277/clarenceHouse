
<h1>Menus</h1>

{!! Form::open(['url' => 'admin/menu']) !!}
<div class="form-group">
	@foreach($menus as $menu)
	{!! Form::label($menu->title) !!}
	{!! Form::checkbox($menu->title, $menu->id ) !!}
	@endforeach
</div>
{!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}	
{!! Form::close() !!}

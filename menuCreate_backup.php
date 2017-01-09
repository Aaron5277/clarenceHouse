<h1>Menu</h1>
{{ count($comments) }}
{!! Form::open(['url' => 'admin/menu']) !!}
<div class="form-group">
	@foreach($menus as $menu)
	{!! Form::label($menu->title) !!}
	{!! Form::checkbox($menu->title, $menu->id,isset($dishMenus[$menu->title]) ) !!}
	@endforeach
</div>
{!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}	
{!! Form::close() !!}


{!! Form::open(['url' => 'admin/menu']) !!}
<div class="form-group">
	@foreach($menus as $menu)
	{!! Form::label($menu->name) !!}
		@foreach($menusLevel_1s as $menuslevel_1)
			<div class="form-group">
				{!! Form::checkbox($menuslevel_1->name, $menuslevel_1->id,false,['id'=>$menuslevel_1->menu_key]) !!}
				{!! Form::label($menuslevel_1->menu_key,$menuslevel_1->title) !!}
			</div>
		@endforeach
		
	@endforeach

</div>
{!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}	
{!! Form::close() !!}
<script language="JavaScript" src="{{ URL::asset('/js/lib/jquery.min.js') }}"></script>
<script language="JavaScript" src="{{ URL::asset('/js/core/Checkbox.js') }}"></script>


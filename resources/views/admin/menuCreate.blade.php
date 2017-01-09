<link rel="stylesheet" href="{{  URL::asset('/style/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{  URL::asset('/style/menu.css') }}">

<h1>Menu</h1>

{!! Form::open(['url' => 'admin/menu']) !!}
<div class="form-group">
	@foreach($menus as $menu)
	{!! Form::label($menu->title) !!}
	@endforeach
</div>
{!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}	
{!! Form::close() !!}

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-1"> 
			@foreach($menusLevel_1s_part1s as $item)
				<div class="menuCheckbox">
					{!! Form::checkbox( $item->id, $item->id, false, [ 'id'       =>$item->id,
																	   'menu-key' =>$item->menu_key,
																	   'has-child'=> count( $item->nextLevels )>0 ? true :false   ] ) 
					!!}
					{!! Form::label( $item->id, $item->title ) !!}
				</div>
				@if( count($item->nextLevels)>0)
					<div class="{!! $item->menu_key.'-child' !!} form-group hidden">
						@foreach($item->nextLevels as $item)
							<h5>{!! $item->name !!}</h5>
							{!! Form::checkbox( $item->menu_key, $item->id, false, [ 'id'=>$item->id ] ) !!}
							{!! Form::label( $item->menu_key, $item->title ) !!}
						@endforeach
					</div>
				@endif
			@endforeach
		</div>

		<div class="col-md-7 selected-session">
			@foreach($menusLevel_1s_part1s as $item)
				<div class="{!! $item->menu_key.'-des' !!} hidden">
					<h5>{!! $item->name !!}</h5>
					<p>{!! $item->description !!}</p>
				</div>
				@if( count($item->nextLevels)>0)
					<div class="form-group">
						@foreach($item->nextLevels as $item)
							<h5>{!! $item->name !!}</h5>
							<p>{!! $item->description !!}</p>
						@endforeach
					</div>
				@endif
			@endforeach
		</div>
	</div>
</div> 


<script language="JavaScript" src="{{ URL::asset('/js/lib/jquery.min.js') }}"></script>
<script language="JavaScript" src="{{ URL::asset('/js/core/menuCheckbox.js') }}"></script>


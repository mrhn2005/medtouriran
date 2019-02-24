
@php
	if(!isset($innerLoop)){
		if($is_rtl){
			$items=$items->reverse();
		}
		echo '<ul class="sf-menu">';
	}else{
	
		echo '<ul>';
	}
	
@endphp


@foreach ($items as $item)

    @php
        $originalItem = $item;
        if($item->title=='Packages'){
            $originalItem->children=$options->categories->where('parent_id',null)->all();
        }

        $listItemClass = null;
        $linkAttributes =  null;
        $styles = null;
        $icon = null;
        $caret = null;

        // Background Color or Color
        if (isset($options->color) && $options->color == true) {
            $styles = 'color:'.$item->color;
        }
        if (isset($options->background) && $options->background == true) {
            $styles = 'background-color:'.$item->color;
        }

        // With Children Attributes
        if(count($originalItem->children)>0) {
            $linkAttributes =  'class="dropdown-toggle" data-toggle="dropdown"';
            $caret = '<span class="caret"></span>';

            // if(url($item->link()) == url()->current()){
            //     $listItemClass = 'dropdown active';
            // }else{
            //     $listItemClass = 'dropdown';
            // }
        }

        // Set Icon
        if(isset($options->icon) && $options->icon == true){
            $icon = '<i class="' . $item->icon_class . '"></i>';
        }
       
    @endphp

	<li>
		<a href="{{$item->link()}}" style="font-size:{{setting('site.menu_font')}}px">
			@if(!isset($innerLoop))
			<span class="menu-description">
				<i class="{{ $item->icon_class }}"></i>
			</span>
			
			<span class="menu-title">
				{{ $item->getTranslatedAttribute('title') }}
			</span>
			@else
				{{ $item->getTranslatedAttribute('title') }}
			@endif
		</a>
		@if(count($originalItem->children)>0)
        @include('front.common.menu', ['items' => $originalItem->children, 'options' => $options, 'innerLoop' => true])
        @endif
	</li>

@endforeach

</ul>

<div class="trip-slider galleria">
    <?php $images = json_decode($package->images);?>
        @foreach($images as $image)
        <img src="{{ Voyager::image($image) }}" />
        @endforeach

</div>

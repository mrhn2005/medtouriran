<ul>
    @foreach($socials as $social)
        <li><a href="{{$social->getTranslatedAttribute('link')}}" target="_blank"><i class="social-pad {{$social->icon}}"></i></a></li>
    @endforeach

</ul>
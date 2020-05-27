<section class="slider">
    @foreach(NickDeKruijk\LaravelSlider\Slide::active()->get() as $slide)
        <div class="lazy slide{{ $loop->iteration == 1 ? ' active' : '' }}" data-bg="{{ asset('media/' . $slide->image()) }}">
            <div class="slide-content max-width">
                @if ($slide->head)
                    <h3>{{ $slide->head }}</h3>
                @endif
                <h2>{{ $slide->title }}</h2>
                @if ($slide->text)
                    <div class="slide-text">
                        {!! nl2br($slide->text) !!}
                    </div>
                @endif
                @for ($i = 1; $i <= 4; $i++)
                    @if ($slide['link' . $i] && $slide['button' . $i])
                        <a href="{{ $slide['link' . $i] }}" class="button">{{ $slide['button' . $i] }}</a>
                    @endif
                @endfor
            </div>
        </div>
    @endforeach
    <div class="slider-dots"></div>
    <span class="slider-prev slider-button"></span>
    <span class="slider-next slider-button"></span>
</section>

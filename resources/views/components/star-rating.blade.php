@if ($rating)
    @for ($i = 1; $i <= 5; $i++)
        {!! $i <= round($rating) ? '&#9733;' : '&#9734;' !!}
    @endfor
@else
    No Rating
@endif

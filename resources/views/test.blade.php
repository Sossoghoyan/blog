<h1>Hello, {{ $name }}</h1>

@if(count($records) === 1)
    I have one record!
@elseif (count($records) > 1)
    I have multiple records!
@else
    I don't have any records!
@endif


@switch($i)
    @case(1)
        First case...
    @break @case(2)
        Second case...
    @break  @default
        Default case...
@endswitch

<ul> @foreach ($colors as $color)
    <li>{{ $color }}</li>
    @endforeach
</ul>


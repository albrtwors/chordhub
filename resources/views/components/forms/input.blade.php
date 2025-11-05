@if (isset($checkbox))
    <input type="checkbox" {{ $attributes }}>
@else
    <input {{ $attributes->class(['form-control']) }}>
@endif

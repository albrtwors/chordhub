@if ($type == 'user')
    <div class="wrap-input100 validate-input">
        <input required {{ $attributes->except(['type','placeholder']) }} class="input100">

        <span class="focus-input100" data-placeholder="{{ $placeholder }}"></span>
    </div>
@elseif($type == 'email')
    <div class="wrap-input100 validate-input">
        <input required type="email" {{ $attributes->except(['type','placeholder']) }} class="input100">

        <span class="focus-input100" data-placeholder="{{ $placeholder }}"></span>
    </div>
@elseif($type == 'number')
    <div class="wrap-input100 validate-input">
        <input class="input100" {{ $attributes->except(['type','placeholder']) }} type="number">

        <span class="focus-input100" data-placeholder="{{ $placeholder }}"></span>
    </div>
@elseif($type='password')
    <div class="wrap-input100 validate-input">
        <span class="btn-show-pass">
            <i class="zmdi zmdi-eye"></i>
        </span>
        <input type="password" {{ $attributes->except(['type','placeholder']) }}>
        <span class="focus-input100" data-placeholder="{{ $placeholder }}"></span>
    </div>
@endif



 @props(['route', 'text', 'bgColor', 'icon'])
<a class="col-xl-4 mt-xl-0 mt-md-3 mt-sm-3 mt-3 col-md-6 col-sm-12 col-12 align-items-center" href="{{ $route }}">
   
    @php
        switch($bgColor){
            case 'primary':
                $bcol = 'bg-primary-subtle text-primary';
                break;
            case 'danger';
                $bcol = 'bg-danger-subtle text-danger';
                break;
            case 'success';
                $bcol = 'bg-success-subtle text-success';
                break;
            default:
                $bcol='bg-primary-subtle text-primary';
        }

    @endphp
    <div class="d-flex shadow-sm justify-content-center gap-3 fw-bold  rounded {{ $bcol }} p-3 ">

            {{ $text }}
        <i class="fas fs-5 fa-{{ $icon }}"></i>


    </div>
</a>
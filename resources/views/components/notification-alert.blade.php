    <a class="dropdown-item d-flex align-items-center" href="{{route('notification.readAsGet', $id)}}">
        <div class="mr-3">
            <div class="icon-circle bg-primary">
                <i class="fas fa-file-alt text-white"></i>
            </div>
        </div>
        <div>
            <div class="small text-gray-500">{{$date}}</div>
            <span class="font-weight-bold">{{$title}}</span>
        </div>
    </a>
@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif(Session::has('info'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        {{ Session::get('info') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif(Session::has('warning'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ Session::get('warning') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif(Session::has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ Session::get('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif(Session::has('error_validation'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        @foreach (Session::get('error_validation') as $errorName => $errorMessages)
            <ul class="my-0">
                <li>
                    {{ $errorName }}
                    <ul>
                        @foreach ($errorMessages as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        @endforeach
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if ($message = Session::get('alert-success'))
    <div class="alert alert-success alert-dismissible text-white" role="alert">
                  <span class="text-sm">
                    {{ $message }}
                  </span>
        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@elseif($message = Session::get('alert-error'))
    <div class="alert alert-danger alert-dismissible text-white" role="alert">
                  <span class="text-sm">
                    {{ $message }}
                  </span>
        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@elseif($message = Session::get('alert-warning'))
    <div class="alert alert-warning alert-dismissible text-white" role="alert">
                  <span class="text-sm">
                    {{ $message }}
                  </span>
        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
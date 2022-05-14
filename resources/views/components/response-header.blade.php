<div class=" text-center col-md-12 col-lg-12 themed-grid-col">
    @if($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
    @endif
</div>
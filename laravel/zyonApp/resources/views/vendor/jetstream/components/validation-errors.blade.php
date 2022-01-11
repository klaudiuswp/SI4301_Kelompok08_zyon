@if ($errors->any())
    <div {!! $attributes->merge(['class' => 'alert alert-danger text-sm p-2 alert-dismissible fade show']) !!} role="alert">
        <div class="font-weight-bold">{{ __('Terjadi Kesalahan') }}</div>

        <ul>
            @foreach ($errors->all() as $error)
                {{ $error }} 
            @endforeach
        </ul>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>
@endif

@foreach (session('flash_notification', collect())->toArray() as $message)
    @if ($message['overlay'])
        @include('flash::modal', [
            'modalClass' => 'flash-modal',
            'title'      => $message['title'],
            'body'       => $message['message']
        ])
    @else
        <div class="alert
                    alert-{{ $message['level'] }}
        {{ $message['important'] ? 'alert-important' : '' }}"
             role="alert"
        >
            @if ($message['important'])
                <button type="button"
                        class="close"
                        data-dismiss="alert"
                        aria-hidden="true"
                >&times;
                </button>
            @endif

            {!! $message['message'] !!}
        </div>
    @endif
@endforeach
@section('msg-js')
    @if(session('flash_notification', collect())->toArray())
        <script>
            spop({
                template: '{!! $message['message'] !!}',
                autoclose: 3000
            });
        </script>
    @endif
@endsection
{{ session()->forget('flash_notification') }}

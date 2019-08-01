@if(Session::has('flash_message'))
    @php
        $flashMessages = session('flash_message');
        $flashMessages = is_array($flashMessages) ? (is_array(reset($flashMessages)) ? $flashMessages : [$flashMessages]) : [$flashMessages];
    @endphp

    @foreach($flashMessages as $flashMessage)
        @php
            $flashMessage = is_array($flashMessage) ? $flashMessage : [$flashMessage];
            $flashMessage['type'] = isset($flashMessage['type']) ? $flashMessage['type'] : 'success';
            $flashMessage['message'] = isset($flashMessage['message']) ? $flashMessage['message'] : '';
            $flashMessage['id'] = isset($flashMessage['id']) ? ' id="' . $flashMessage['id'] . '"' : '';
            $flashMessage['class'] = isset($flashMessage['class']) ? ' ' . $flashMessage['class'] : '';
        @endphp

        <div{!! $flashMessage['id'] !!} class="alert alert-{{ $flashMessage['type'] }} alert-dismissible fade show mt-4 mb-0{{ $flashMessage['class'] }}" role="alert">
            {!! $flashMessage['message'] !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="{{ _i('Fermer') }}">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endforeach

    {{ Session::forget('flash_message') }}
@endif
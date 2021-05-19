@if ($errors->any())
    @foreach ($errors->all() as $error)
        @php
            \Alert::error($error)
        @endphp
    @endforeach
@endif
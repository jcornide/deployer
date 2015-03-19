@extends('layout')

@section('content')
    <div class="row">
        @include('commands._partials.list', [ 'step' => 'Before', 'commands' => $before ])
        @include('commands._partials.list', [ 'step' => 'After', 'commands' => $after ])
    </div>

    <script type="text/javascript">
        var before_commands = {!! $before->toJson() !!};
        var after_commands = {!! $after->toJson() !!};
    </script>

    @include('dialogs.command')
@stop
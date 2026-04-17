{{ trans ('adminite_lang.message.pagenotfound') }}
{{trans ('adminite_lang.message.pageError') }}

@section ('error-page')

@include ('header')

{
errno: 500
type_message: 'Gateway Timeout',
message: 'The server was acting as a gateway or proxy and did not receive a timely response from the upstream server'

}

@endsection

/
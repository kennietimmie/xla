@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All Jobs') }}</div>

                <div class="card-body">
                   <div id="jobs" class="list-group">
                        <button type="button" class="list-group-item list-group-item-action">
                            Cras justo odio
                        </button>
                        <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
                        <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
                        <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
                        <button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
                    </div>
                    <script>
                        fetch('api/jobs')
                        .then()
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

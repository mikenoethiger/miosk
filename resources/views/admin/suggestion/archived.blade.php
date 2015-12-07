@extends('admin.suggestion.suggestions_template')

@section('suggestions')
    <div class="main col-md-12">
        <h3>Archivierte Vorschläge</h3>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Vorschlag</th>
                <th>Zeit</th>
                <th>IP</th>
                <th>Aktion</th>
            </tr>
            </thead>
            <tbody>
            @foreach($suggestions as $suggestion)
                <tr>
                    {!! Form::open(['method' => 'PUT', 'url' => '/suggestion/' . $suggestion->id, 'id' => 'restore_suggestion_' . $suggestion->id]) !!}
                    {!! Form::hidden('restore', $suggestion->id) !!}
                    {!! Form::close() !!}

                    <td>{{ $suggestion->id }}</td>
                    <td>{{ $suggestion->suggestion }}</td>
                    <td>{{ $suggestion->created_at->format('d.m.Y H:i:s') }}</td>
                    <td>{{ $suggestion->ip }}</td>
                    <td><a href="javascript: document.getElementById('restore_suggestion_{{ $suggestion->id }}').submit();" class="btn btn-sm btn-warning">Wiederherstellen <i class="fa fa-recycle pl-10"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
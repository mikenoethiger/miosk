@extends('admin.suggestion.suggestions_template')

@section('suggestions')
    <div class="main col-md-12">
        <h3>Markierte Vorschläge</h3>
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
                    {!! Form::open(['method' => 'DELETE', 'url' => '/suggestion/' . $suggestion->id, 'id' => 'delete_suggestion_' . $suggestion->id]) !!}
                    {!! Form::hidden('id', $suggestion->id) !!}
                    {!! Form::close() !!}

                    {!! Form::open(['method' => 'PUT', 'url' => '/suggestion/' . $suggestion->id, 'id' => 'unmark_suggestion_' . $suggestion->id]) !!}
                    {!! Form::hidden('id', $suggestion->id) !!}
                    {!! Form::hidden('unmark', 'xyz') !!}
                    {!! Form::close() !!}

                    <td>{{ $suggestion->id }}</td>
                    <td>{{ $suggestion->suggestion }}</td>
                    <td>{{ $suggestion->created_at->format('d.m.Y H:i:s') }}</td>
                    <td>{{ $suggestion->ip }}</td>
                    <td><a href="javascript:document.getElementById('unmark_suggestion_{{ $suggestion->id }}').submit()" class="btn btn-gray btn-sm">Unmark <i class="fa fa-bookmark-o pl-10"></i></a> <a href="javascript: document.getElementById('delete_suggestion_{{ $suggestion->id }}').submit();" class="btn btn-sm btn-danger">Archivieren <i class="fa fa-trash pl-10"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
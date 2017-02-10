@extends('layouts.base')

@section('content')


    
    <div class="row">
        <div class="medium-3 columns">
            <a class="button" href="/allMessages">Voir tous les messages</a>
        </div>
        <div class="medium-9 columns">
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th class="hide-for-small-only">Message</th>
                        <th>Voir le message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($messages as $message)
                        <tr>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->email }}</td>
                            @if (strlen($message->content) > 75)
                                <td class="hide-for-small-only">{{ substr($message->content, 0, 75) }}</td>
                                <td>
                                    <a class="text-right button" href="/message/{{ $message->id }}">Voir plus</a>
                                    <a class="text-right button warning" href="/message/lu/{{ $message->id }}">Marquer comme lu</a>
                                </td>
                            @else
                                <td class="hide-for-small-only">{{ $message->content }}</td>
                                <td>
                                    <a class="text-right button" href="/message/{{ $message->id }}">Voir</a>
                                    <a class="text-right button warning" href="/message/lu/{{ $message->id }}">Marquer comme lu</a>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>


@stop
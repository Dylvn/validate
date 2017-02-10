@extends('layouts.base')

@section('content')


    
    <div class="row">
        <div class="medium-3 columns">
            <a class="button" href="/messages">Voir les messages non lu</a>
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
                                    @if( $message->lu == 0)
                                        <a class="text-right button warning" href="/message/lu/{{ $message->id }}">Marquer comme lu</a>
                                    @else
                                        <a class="text-right button secondary" href="/message/nonlu/{{ $message->id }}">Marquer comme non lu</a>
                                    @endif
                                </td>
                            @else
                                <td class="hide-for-small-only">{{ $message->content }}</td>
                                <td>
                                        <a class="text-right button" href="/message/{{ $message->id }}">Voir</a>
                                    @if( $message->lu == 0)
                                        <a class="text-right button warning" href="/message/lu/{{ $message->id }}">Marquer comme lu</a>
                                    @else
                                        <a class="text-right button secondary" href="/message/nonlu/{{ $message->id }}">Marquer comme non lu</a>
                                    @endif
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>


@stop
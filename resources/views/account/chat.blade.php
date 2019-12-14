@extends('layouts.account')


@section('styles')

<link rel="stylesheet" href="{{asset('css/app.css')}}">

@endsection

@section('account-content')

<div id="app" class="row">
    <div class="col">
        <div class="panel panel-default">
            <div class="panel-heading">Chats</div>

            <div class="panel-body">
                <chat-messages :messages="messages"></chat-messages>
            </div>
            <div class="panel-footer">
                <chat-form
                    v-on:messagesent="addMessage"
                    :user="{{ Auth::user() }}"
                ></chat-form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

<script src="{{asset('js/app.js')}}"></script>

@endsection

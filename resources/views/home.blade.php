@extends('layouts.app')

@section('content')
<div class="container">
    <div id="app">
        <post-button defender="{{ \Illuminate\Support\Facades\Crypt::encryptString(\Illuminate\Support\Facades\Auth::user()->getAuthIdentifier()) }}"></post-button>
    </div>
</div>
@endsection

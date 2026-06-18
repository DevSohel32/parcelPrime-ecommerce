@extends('layouts.app')
@section('content')
<div>
    <h1>User Dashboard</h1>
    <form action="{{ route('logout') }}" method="POST" class="user-item">
                                                    @csrf
                                                    <div class="icon">
                                                        <i class="icon-log-out"></i>
                                                    </div>
                                                    <button type="submit" class="body-title-2">Log out</button>
                                                </form>
</div>
@endsection

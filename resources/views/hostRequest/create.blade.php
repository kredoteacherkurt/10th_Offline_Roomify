@extends('layouts.app')

<style>
    main {
        min-height:54%;
    }

    textarea {
        height: 200px;
    }

</style>
@section('content')
<div class="container w-50 mx-auto">
    <h2>Host Request</h2>
    <form action="{{ route('hostRequest.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="message" class="form-label">Message (if you need)</label>
            <textarea name="message" id="message" class="form-control">{{ old('message') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Request</button>
    </form>
</div>
@endsection

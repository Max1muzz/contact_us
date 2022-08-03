@extends('layouts.main')
@section('title','Contact us')
@section('content')
    <div class="col-8">
        <h1 class="mt-2">Contact Us</h1>
        <form method="post" action="{{route('contact.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="text" class="form-control" id="email" name="email">
                @error('email')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Comment</label>
                <textarea class="form-control" id="comment" name="comment"></textarea>
                @error('comment')
                <p class="text-danger container">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-2">Add</button>
        </form>
        @if (session('status'))
            <div class="alert alert-success mt-2">
                {{ session('status') }}
            </div>
        @endif

@endsection

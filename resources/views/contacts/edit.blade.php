@extends('layouts.app')

@section('title', 'Edit Contact')

@section('content')
    <div class="container mt-5">
        <h1>Edit Contact</h1>
        <a href="{{ route('contacts.index') }}" class="btn btn-secondary mb-3">Back to Contacts</a>

        <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $contact->name }}" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $contact->last_name }}" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ $contact->phone }}" required>
            </div><br/>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
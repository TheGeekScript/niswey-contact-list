@extends('layouts.app')

@section('title', 'Import Contacts')

@section('content')
    <div class="container mt-5">
        <h1>Import Contacts</h1>
        <a href="{{ route('contacts.index') }}" class="btn btn-secondary mb-3">Back to Contacts</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('contacts.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="xml_file">Upload XML File</label>
                <input type="file" name="xml_file" id="xml_file" class="form-control-file" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
@endsection
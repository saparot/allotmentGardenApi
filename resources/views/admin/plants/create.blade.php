@extends('layoutAdmin')

@section('title', 'add new plant')

@section('content')
    <div class="form">

        <form method="POST" action="{{ route('admin.plants.store')  }}">
            @csrf

            <label>
                <input type="text" name="title" value="yes">
            </label>

            <label for="description"></label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
            <div class="form__save">
                <button type="submit">Save</button>
            </div>
        </form>
    </div>

@endsection

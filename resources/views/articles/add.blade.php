@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Category</label>
                <select name="category_id" class="form-control">
                    @foreach ($categories as $category)
                       <option value="{{ $category['id'] }}">
                            {{ $category['name']}}
                        </option> 
                    @endforeach
                </select>
            </div>
            <input type="submit" value="Add Article" class="btn btn-primary">
            <a href="{{url("/articles")}}" class="btn btn-success">Back</a>
        </form>
    </div>
@endsection
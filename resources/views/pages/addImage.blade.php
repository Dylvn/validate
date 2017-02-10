@extends('layouts.base')

@section('content')
    <form method="POST" action="/addImage">
        {{ csrf_field() }}
        <label for="exampleFileUpload" class="button">Upload File</label>
        <input type="file" name="image" id="exampleFileUpload" class="show-for-sr">
        <div class="medium-offset-1">
            <div class="input-group-button">
                <input type="submit" class="button" value="Submit">
            </div>    
        </div>
    </form>
@endsection
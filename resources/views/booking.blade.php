@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="w-50" method="POST" action="/booking">
        {{ csrf_field() }}
            @for($i=1;$i<=$post->quantity;$i++)     
            @foreach ($books as $item)
            @if($i==$item->booked)
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="booked[]" value="{{$i}}" disabled>
                <label class="form-check-label" for="inlineCheckbox3">{{$i}}</label>                
            </div>
            @endif    
            @endforeach
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="booked[]" value="{{$i}}">
                <label class="form-check-label" for="inlineCheckbox3">{{$i}}</label> 
            </div>
            @endfor
            <input id="user_id" type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <input id="post_id" type="hidden" name="post_id" value="{{ $post->id }}">
            <div class="row mb-0">
                
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Забронировать') }}
                    </button>
                </div>
            </div>         
        </form>         
    </div>
@endsection

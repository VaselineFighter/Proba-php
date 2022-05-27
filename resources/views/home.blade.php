@extends('layouts.app')

@section('content')
<div class="container">
    <table class="mt-3 table table-striped text-center table-bordered">
        <thead>
        <td>Номер фильма</td>
        <td>Название фильма</td>
        <td>Количество мест</td>
        </thead>
        <tbody>
        @foreach ($posts as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->quantity}}</td>
                <td><a href="booking/{{$item->id}}">Узнать подробнее</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <form method="POST" action="post">
        {{ csrf_field() }}
        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Название фильма') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="quantity" class="col-md-4 col-form-label text-md-end">{{ __('Количество мест') }}</label>

            <div class="col-md-6">
                <input id="quantity" type="text" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}" required autocomplete="quantity" autofocus>

                @error('quantity')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Добавить фильм') }}
                </button>
            </div>
        </div>
    </form>
</div>
@endsection

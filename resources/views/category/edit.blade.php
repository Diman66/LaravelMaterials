@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="my-md-5 my-4">Редактировать категорию</h1>
        <div class="row">
            <div class="col-lg-5 col-md-8">
                <form action=" {{ route('categories.update', $category->id) }} " method="post">
                @csrf
                @method('patch')
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" placeholder="Напишите название" id="floatingName" name="name" value="{{ $category->name }}">
                        <label for="floatingName">Название</label>
                        <div class="invalid-feedback">
                            Пожалуйста, заполните поле
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Сохранить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
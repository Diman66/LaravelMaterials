@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="my-md-5 my-4">Редактирование материала</h1>
        <div class="row">
            <div class="col-lg-5 col-md-8">
                <form action="{{ route('materials.update', $material->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelectType" name="type_id">
                            @foreach($types as $type)
                            <option value="{{ $type->id }}" 
                            {{ $material->type->id == $type->id ? ' selected' : ''}}>{{ $type->name}}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelectType">Тип</label>
                        <div class="invalid-feedback">
                            Пожалуйста, выберите значение
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelectCategory" name="category_id">
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" 
                            {{ $material->category->id == $category->id ? ' selected' : ''}}>{{ $category->name}}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelectCategory">Категория</label>
                        <div class="invalid-feedback">
                            Пожалуйста, выберите значение
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" placeholder="Напишите название" id="floatingName" name="name" value="{{ $material->name }}">
                        <label for="floatingName">Название</label>
                        <div class="invalid-feedback">
                            Пожалуйста, заполните поле
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" placeholder="Напишите авторов" id="floatingAuthor" name="autor" value="{{ $material->autor }}">
                        <label for="floatingAuthor">Авторы</label>
                        <div class="invalid-feedback">
                            Пожалуйста, заполните поле
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Напишите краткое описание" id="floatingDescription"
                            style="height: 100px" name="description">{{ $material->description }}</textarea>
                        <label for="floatingDescription">Описание</label>
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
@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="my-md-5 my-4">Добавить материал</h1>
        <div class="row">
            <div class="col-lg-5 col-md-8">
                <form action="{{ route('materials.store') }}" method="post">
                @csrf
                    <div class="form-floating mb-3">
                        <select class="form-select @error('type_id') is-invalid @enderror" id="floatingSelectType" name='type_id'>
                            <option value="">Выберите тип</option>
                            @forelse ($types as $type)
                            <option 
                            {{old('type_id') ==  $type->id ? ' selected' : ''}}
                            value="{{ $type->id }}">{{ $type->name }}</option>
                            @empty
                                <p>Нет результатов</p>
                            @endforelse
                        </select>
                        <label for="floatingSelectType">Тип</label>
                        <div class="invalid-feedback">
                            Пожалуйста, выберите значение
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select @error('category_id') is-invalid @enderror" id="floatingSelectCategory" name='category_id'>
                            <option value="">Выберите категорию</option>
                            @forelse ($categories as $category)
                            <option 
                                {{old('category_id') ==  $category->id ? ' selected' : ''}}
                                value="{{ $category->id }}">{{ $category->name }}</option>
                            @empty
                                <p>Нет результатов</p>
                            @endforelse
                        </select>
                        <label for="floatingSelectCategory">Категория</label>
                        <div class="invalid-feedback">
                            Пожалуйста, выберите значение
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Напишите название" id="floatingName" name='name' value="{{ old('name') }}">
                        <label for="floatingName">Название</label>
                        <div class="invalid-feedback">
                            Пожалуйста, заполните поле
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('autor') is-invalid @enderror" placeholder="Напишите авторов" id="floatingAuthor" name="autor" value="{{ old('autor') }}">
                        <label for="floatingAuthor">Авторы</label>
                        <div class="invalid-feedback">
                            Пожалуйста, заполните поле
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Напишите краткое описание" id="floatingDescription" name="description"
                            style="height: 100px">{{ old('description') }}</textarea>
                        <label for="floatingDescription">Описание</label>
                        <div class="invalid-feedback">
                            Пожалуйста, заполните поле
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Добавить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
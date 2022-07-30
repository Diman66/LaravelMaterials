<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
     tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Добавить ссылку</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('links.store') }}" method="post" id="formLink">
                    @csrf
                    <input type="text" class="form-control" name="material_id" value="{{ $material->id }}" hidden>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('name', 'linkCreate') is-invalid @enderror" placeholder="Добавьте подпись"
                            id="floatingModalSignature" name="name" value="{{ old('name') }}">
                        <label for="floatingModalSignature">Подпись</label>
                        <div class="invalid-feedback">
                            Пожалуйста, заполните поле
                        </div>

                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('link', 'linkCreate') is-invalid @enderror" placeholder="Добавьте ссылку" id="floatingModalLink" name="link" value="{{ old('link') }}">
                        <label for="floatingModalLink">Ссылка</label>
                        <div class="invalid-feedback">
                            Пожалуйста, заполните поле
                        </div>
                    </div>
                </form>
            </div>    
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="formLink">Добавить</button>
                <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

@if ($errors->linkCreate->any())

    @vite(['resources/js/modal.js']) 

@endif
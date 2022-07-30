<div class="modal fade" id="editModalToggle{{ $materialLink->id }}" aria-hidden="true" aria-labelledby="editModalToggleLabel"
     tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalToggleLabel">Редактировать ссылку</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('links.update', $materialLink->id) }}" method="post" id="formLink{{ $materialLink->id }}">
                    @csrf
                    @method('patch')
                    <input type="text" class="form-control" name="material_id" value="{{ $material->id }}" hidden>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('name', 'linkUpdate') is-invalid @enderror" placeholder="Добавьте подпись"
                            id="floatingModalSignature" name="name" value="{{ $materialLink->name }}">
                        <label for="floatingModalSignature">Подпись</label>
                        <div class="invalid-feedback">
                            Пожалуйста, заполните поле
                        </div>

                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('link', 'linkUpdate') is-invalid @enderror" placeholder="Добавьте ссылку" id="floatingModalLink" name="link" value="{{ $materialLink->link }}">
                        <label for="floatingModalLink">Ссылка</label>
                        <div class="invalid-feedback">
                            Пожалуйста, заполните поле
                        </div>
                    </div>
                </form>
            </div>    
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="formLink{{ $materialLink->id }}">Сохранить</button>
                <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="recallModal" tabindex="-1" role="dialog" aria-labelledby="recallLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('recall.send') }}" method="POST" name="form_recall" id="form_recall" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="recallLabel">Отзыв</h4>
                </div>
                <div class="modal-body">
                    <div class="form-status"></div>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" name="name" placeholder="Ваше имя">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" name="contact" placeholder="Телефон или Email">
                    </div>
                    <div class="form-group">
                        <textarea name="text" id="text" class="form-control input-lg" placeholder="Ваш отзыв" style="height: 250px;"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control input-lg" name="image" placeholder="Ваше фото">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-default" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-lg btn-primary form-button">Оставить отзыв</button>
                </div>
            </form>
        </div>
    </div>
</div>
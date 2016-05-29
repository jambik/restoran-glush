<section id="calculation" {!! isset($show) && $show ? '' : 'style="display: none;"' !!}>
    <div class="container">
        <div class="text-xl text-center">Заказ и расчет стоимости праздника</div>
        <hr>
        <form action="{{ route('calculation.send') }}" name="form_calculation" id="form_calculation" method="post">
            {{ csrf_field() }}
            <div class="form-status"></div>
            <div class="row control-type">
                <div class="col-sm-6 col-sm-offset-3">
                    <select name="type" class="form-control input-lg">
                        <option value="">- Выберите тип праздника -</option>
                        <option value="Свадьба">Свадьба</option>
                        <option value="День рождения">День рождения</option>
                        <option value="Банкет">Банкет</option>
                    </select>
                </div>
            </div>
            <div class="guests-number">
                <div class="title">Количество гостей</div>
                <div class="guests-number-choices">
                    <div>1-4</div>
                    <div>5-9</div>
                    <div>10-19</div>
                    <div>20-39</div>
                    <div>> 40</div>
                </div>
                <input type="hidden" name="number">
            </div>
            <div class="control-details">
                <div class="title text-center">Выберите дату и время для праздника</div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="sr-only" for="date">Дата</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                                <input type="date" class="form-control input-lg" name="date" placeholder="Выберите дату">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="time">Дата</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                                <input type="time" class="form-control input-lg" name="time" placeholder="Выберите время">
                            </div>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="discuss_menu" type="checkbox"> Обсудить банкетное меню
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="представьтесь" class="form-control input-lg">
                        </div>
                        <div class="form-group">
                            <input type="text" name="contact" placeholder="ваш email или телефон" class="form-control input-lg">
                        </div>
                        <div class="form-group">
                            <textarea name="text" style="min-height: 100px;" class="form-control input-lg" placeholder="Если есть еще, что нам написать, пишите сюда в свободной форме"></textarea>
                        </div>
                    </div>
                </div>
                <p>&nbsp;</p>
                <div class="text-center">
                    <button type="submit" class="btn btn-lg btn-lg btn-primary form-button">Отправить заявку</button>
                </div>
            </div>
        </form>
    </div>
</section>
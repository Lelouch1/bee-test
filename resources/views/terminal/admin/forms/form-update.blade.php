@include('terminal.admin.forms.error-success')
<form action="{{route('update-submit', $model->id)}}" method="post" class="terminal">
    @csrf
    <div class="form-group">
        <label for="command">Команда</label>
        <input type="text" name="command" id="command" value="{{$model->command}}">
    </div>

    <div class="form-group">
        <label for="command_answer">Ответ</label>
        <textarea  name="command_answer" id="command_answer">{{$model->command_answer}}</textarea>
    </div>
    <div class="form-group"><button type="submit" class="btn">Обновить</button>
        <a href="{{route('terminal-admin')}}">Назад</a></div>
</form>

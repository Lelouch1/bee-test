@include('terminal.admin.forms.error-success')
<form action="{{route('create-submit')}}" method="post" class="terminal">
    @csrf
    <div class="form-group">
        <label for="command">Команда</label>
        <input type="text" name="command" id="command" maxlength="255">
    </div>

    <div class="form-group">
        <label for="command_answer">Ответ</label>
        <textarea maxlength="500" name="command_answer" id="command_answer" required></textarea>
    </div>
    <div class="form-group"><button type="submit" class="btn">Создать</button>
        <a href="{{route('terminal')}}">Назад</a></div>
</form>

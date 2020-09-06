@extends('master') 
@section('content')
<form method="POST" action="/create/user">
{{csrf_field()}}

    <div class="input-field">
        <input type="text" name="add_username" id="add_username" required>
        <label for="add_username">Username </label>
    </div>

    <div class="input-field">
        <input type="text" name="add_email" id="add_email" required>
        <label for="add_email">E-mail </label>
    </div>

    <div class="input-field">
        <input type="password" name="add_password" id="add_password" required>
        <label for="add_password">Password </label>
    </div>

    <div class="input-field">
        <input type="password" name="add_password_confirmation" id="add_password_confirmation" required>
        <label for="add_password_confirmation">Confirm Password </label>
    </div>

    <div class="form-button">
        <button type="submit" id="btn_add_submit" name="btn_add_submit" class="btn">Submit</button>
    </div>

</form>
@endsection 
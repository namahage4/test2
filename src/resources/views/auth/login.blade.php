@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<main>
    <div class="login__content">
        <div class="content__header">
            <h2>
                Login
            </h2>
        </div>
        <form action="" class="login-form">
            <table class="login-form__table">
                <tr class="login-form__table--row">
                    <th class="login-form__table--header">
                        メールアドレス
                    </th>
                    <td class="login-form__table--item">
                       <input type="email" name="email" class="login-form__table--input">
                    </td>
                </tr>
                <tr class="login-form__table--row">
                    <th class="login-form__table--header">
                        パスワード
                    </th>
                    <td class="login-form__table--item">
                       <input type="pass" name="password" class="login-form__table--input">
                    </td>
                </tr>
                <div class="login-form__table--btn">
                    <button class="login-form__table--btn-submit">ログイン</button>
                </div>
            </table>
        </form>
    </div>
</main>
@endsection
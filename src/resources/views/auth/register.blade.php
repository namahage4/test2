@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<main>
    <div class="register__content">
        <div class="content__header">
            <h2>
                Register
            </h2>
        </div>
        <form action="" class="register-form">
            <div class="register-form__table">
                <table class="register-form__table--inner">
                    <tr class="register-form__table--row">
                        <!-- 名前フォーム -->
                        <th class="register-form__table--header">
                            お名前
                        </th>
                        <td class="register-form__table--item">
                            <input type="text" name="name" class="register-form__table--input">
                        </td>
                    </tr>

                    <!-- メールフォーム -->
                    <tr class="register-form__table--row">
                        <th class="register-form__table--header">
                            メールアドレス
                        </th>
                        <td class="register-form__table--item">
                            <input type="email" name="email" class="register-form__table--input">
                        </td>
                    </tr>

                    <!-- パスワードフォーム -->
                    <tr class="register-form__table--row">
                        <th class="register-form__table--header">
                            パスワード
                        </th>
                        <td class="register-form__table--item">
                            <input type="pass" name="password" class="register-form__table--input">
                        </td>
                    </tr>
                    <div class="register-form__table--btn">
                        <button class="register-form__table--btn-submit" type="submit">登録</button>
                    </div>
                </table>
            </div>
        </form>
    </div>
</main>
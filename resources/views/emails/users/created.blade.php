@extends('emails.layout')

@section('content')
    <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
        <tbody>
            <tr>
                <td>
                    <p>Olá {{ $user->name }},</p>
                    <p>Seu usuário foi criado, clique no link abaixo para criar a sua senha.</p>
                    <a href="{{ route('register.password', ['token' => $user->api_token]) }}" style="display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #FBA617; text-decoration: none;">Criar minha senha</a>
                    <p>Obrigado</p>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
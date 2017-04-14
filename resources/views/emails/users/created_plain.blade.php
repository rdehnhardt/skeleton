Olá {{ $user->name }},

Seu usuário foi criado em nosso sistema, clique no link abaixo para criar a sua senha.

{{ route('register.password', ['token' => $user->api_token]) }}

Acesso ao sistema: {{ route('login') }}

Obrigado
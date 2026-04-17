<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow" style="width: 350px;">
        <div class="card-body">

            <h3 class="text-center mb-4">Login</h3>

            <form method="POST" action="/login">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input 
                        type="email" 
                        name="email"
                        class="form-control" 
                        placeholder="Digite seu email" 
                        required
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">Senha</label>
                    <input 
                        type="password" 
                        name="password"
                        class="form-control" 
                        placeholder="Digite sua senha" 
                        required
                    >
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    Entrar
                </button>
            </form>

        </div>
    </div>
</div>

</body>
</html>

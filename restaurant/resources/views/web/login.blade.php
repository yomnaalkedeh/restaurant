<!-- resources/views/auth/login.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>

    <style>
        * {
            box-sizing: border-box;
            outline: 0;
        }

        html,
        body {
            background-color: #1c2837;
            margin: 0;
            padding: 0;
            font-family: 'Alexandria', sans-serif;
            text-align: -webkit-center;
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url('{{ asset('admin-assets/images/login.png') }}');

        }

        .login {
            display: flex;
            position: absolute;
            top: 4%;
            right: 35%;
            color: #192331;
            width: 30%;
            flex-direction: column;
            align-items: center;
            border: solid;
            border-color: #FEC901;
            border-radius: 50px;
            font-size: 45px;
            font-weight: 500;
            background: rgba(255, 255, 255, 0.2);

        }

        .username {
            width: 100%;
            text-align: center;
        }

        input {
            width: 72%;
            height: 55px;
            color: #38404A;
            font-size: 16px;
            border-radius: 22px;
            border: solid;
            padding-inline-start: 7%;
            border-color: #38404A;
            background-color: #e9d790;
        }

        .forget {
            width: 100%;
            margin: 4%;
            text-align: start;
        }

        a {
            text-decoration: underline;
            color: #242a30;
            font-size: 15px;
            margin-inline-start: 6%;
        }

        button {
            width: 50%;
            background-color: #e9d790;
            color: #38404A;
            font-size: 16px;
            height: 43px;
            border: solid;
            border-color: #38404A;
            border-radius: 22px;
            cursor: pointer;
            font-family: 'Alexandria', sans-serif;
            font-weight: 400;
            transition: 0.4s;

        }

        button:hover {
            background-color: #f4cd33;
        }

        .login-with {
            font-size: 16px;
            margin-top: 11%;
            width: 100%;
        }

        .login-method {
            display: flex;
            justify-content: space-around;
            margin-top: 3%;
        }

        .login-method a {
            color: #FBC600;
            background: white;
            font-size: 37px;
            display: inline-flex;
            margin: 1%;
            text-decoration: none;
            width: 10%;
            height: 44px;
            border-radius: 30px;
            align-items: center;
            justify-content: center;
            border: solid;
            border-color: white;
            transition: 0.3s;
        }

        .login-method a:hover {
            background-color: #38404A;
            border-color: #FBC600;
            border: solid;
        }
    </style>
</head>

<body>
    <div class="login" >
        <h2>Log in</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="username">
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="forget">
                <br>
            </div>
            <button type="submit">Log in</button>
        </form>

        <div class="forget">
            <a href="{{ route('register') }}">Don't have an account? Create account</a>
        </div>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="jp">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{asset('style.css')}}">
	<title>Login</title>
</head>

<body>
	<header>
		<h1>受注管理システム</h1>
		<hr class="main-hr">

		<div class="sub-header">
			<div class="links">
				<!-- links -->
			</div>

			<div class="page-name">ログイン画面</div>

			<div class="earnings">
				<!--  -->
			</div>
		</div>
		<hr class="sub-hr">
	</header>
	<main>
		<form action="{{route('login')}}" method="post">
    		@csrf
    		<table class="order-form">
    			<tr>
    				<th>ユーザーID</th>
    				<td><input name="login_id" type="text" required="required" value="{{ old('login_id')}}"></td>
    			</tr>
    			<tr>
    				<th>パスワード</th>
    				<td><input name="password" type="password" required="required" value="{{ old('password')}}"></td>
    			</tr>
    			<tr>
    				<td colspan="2" class="submit-button">
    					<input type="submit" value="ログイン">
    				</td>
    			</tr>
    		</table>
		</form>
		
		@if(session('error'))
			<div class="password-missed" role="alert" style="display:block">
				{{ session('error') }}
			</div>
		@endif

        <div style="text-align: center">
            <div><a href="{{route('order.form')}}">ゲストとして注文する</a></div>
			<div><a href="{{route('user.register')}}">新規登録を行う</a></div>
        </div>
		
		
	</main>
	<footer>
	</footer>
</body>

</html>

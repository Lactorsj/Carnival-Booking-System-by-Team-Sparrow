<!doctype html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Tech Carnival 2022</title>

    <!-- Bootstrap -->

    <link rel="stylesheet" href="/css/app.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            font-family: "Cascadia Code", "Consolas";
            background-image: url(https://images.unsplash.com/photo-1510843572979-e4b9e790fdd7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1220&q=80);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="body"></div>
    </div>
    <div class="row body">
        <div class="box">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8" style="border: 0px solid #ddd;padding:50px;margin-top:80px;">
                <h1 style="margin-top:30px;text-align:center;">Tech Carnival 2022</h1>
                <h4 style="margin-top:20px;text-align:center;">a Festival for All Tech Nerds</h4>
                <hr style="height:3px;border:none;border-top:3px double #0066CC;" />
                <p style="margin-top:20px; text-align:center;">Join us by</p>
                <form style="margin-top:10px;text-align:center" method="get" action="{{ route('register') }}">
                    <button style="width: 20%;" type="submit" class="btn btn-warning">Register</button>
                </form>
                <p style="margin-top:20px; text-align:center;">If you already have an account...</p>
                <form style="margin-top:10px;text-align:center" method="get" action="{{ route('login') }}">
                    <button style="width: 20%;" type="submit" class="btn btn-success">Log in</button>
                </form>
                <hr style="height:1px;border:none;border-top:1px dashed #0066CC;" />
                @if($_ENV['CURRENT_DAY'] == 0)
                <p style="margin-top:20px; text-align:center;">Check in button is only available when the event starts</p>
                <form style="margin-top:10px;text-align:center">
                    <button style="width: 20%;" disabled="disabled" type="submit" class="btn btn-default">Check in</button>
                </form>
                @else
                <p style="margin-top:20px; text-align:center;">Click here when you arrive!</p>
                <form style="margin-top:10px;text-align:center" method="get" action="{{ route('checkin') }}">
                    <button style="width: 20%;" type="submit" class="btn btn-primary">Check in</button>
                </form>
                @endif


            </div>
        </div>
    </div>
    <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
</body>

</html>

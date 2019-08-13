<link rel="stylesheet" href="{{asset("assets/$theme/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset("assets/$theme/bower_components/font-awesome/css/font-awesome.min.css")}}">
<!-- Ionicons -->
<link rel="stylesheet" href="{{asset("assets/$theme/bower_components/Ionicons/css/ionicons.min.css")}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset("assets/$theme/dist/css/AdminLTE.min.css")}}">

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<link rel="stylesheet" href="{{asset("assets/css/login.css")}}">

<div class="main"> 
    <div class="container">
        <center>
            
        <div class="middle">
            
            <div id="login">
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <div class="alert-text">
                            @foreach ($errors->all() as $error)
                                <span>{{ $error }}</span>
                            @endforeach
                        </div>
                    </div>
                @endif
                <form action="{{route('login_post')}}" method="POST">
                    @csrf
                    <fieldset class="clearfix">
                        <p ><span class="fa fa-user"></span><input type="text" Placeholder="Usuario" name="usuario" value="{{old('usuario')}}" ></p>
                        <p><span class="fa fa-lock"></span><input type="password"  Placeholder="Contraseña" name="password" ></p>
                        <div>
                            <input type="submit" value="Iniciar Sesión">
                        </div>
                    </fieldset>
                    <div class="clearfix"></div>
                </form>
                <div class="clearfix"></div>
            </div> <!-- end login -->
            <div class="logo">LOGO
                <div class="clearfix"></div>
            </div>
        </div>
        </center>
    </div>
</div>
<script src="{{asset("assets/$theme/bower_components/jquery/dist/jquery.min.js")}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset("assets/$theme/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
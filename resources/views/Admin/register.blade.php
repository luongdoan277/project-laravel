@extends('template.loginRegister')

@section('title')
    Register
@endsection


@section('content')
    <div class="manipulation-register">
        <div class="img-register-admin">
            <img src="{{asset('images/register-admin.jpeg')}}" alt="">
        </div>
        <div class="content-register">
            <div class="title-register">
                <span>Create an account!!</span>
            </div>
            <form action="/register-admin" class="group-admin-register" method="post">
                @csrf
                @method('POST')
                <div class="information">
                    <input type="text" name="name" placeholder="Your Name...">
                </div>
                <div class="error-group">
                    <span>
                        {{$errors->first('name')}}
                    </span></div>
                <div class="information">
                    <input type="email" name="email" placeholder="Email...">
                </div>
                <div class="error-group">
                    <span>
                            {{$errors->first('email')}}
                    </span>
                </div>
                <div class="info-password">
                    <div class="password">
                        <input type="password" name="password" placeholder="Password...">
                        <div class="error-group">
                        <span>
                            {{$errors->first('password')}}
                        </span>
                        </div>
                    </div>
                    <div class="password">
                        <input type="password" name="repeat_password" placeholder="Repeat password...">
                        <div class="error-group">
                            <span>
                                {{$errors->first('repeat_password')}}
                            </span>
                        </div>
                    </div>

                </div>
                <div class="submit-register">
                    <button type="submit">Register</button>
                </div>
            </form>
            <div class="question">
                <a href="">Forgot Password?</a>
                <a href="{{url('get-login')}}">Already have an account?Login!</a>
            </div>
        </div>
    </div>
@endsection

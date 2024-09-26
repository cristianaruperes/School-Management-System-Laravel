@extends('layoutlogin.main_login')

@section('content')
<div class="card">
            <div class="body">
                 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <form id="sign_in" method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="msg">Reset Password</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>

                              @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                      <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SIGN UP</button>
                    
                </form>
            </div>
        </div>
@endsection

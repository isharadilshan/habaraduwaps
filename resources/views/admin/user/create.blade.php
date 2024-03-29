@extends('admin.layouts.app')
@section('head-section')
    <style>
        #background{
            background-image:url('/images/backgrounds/admin-background.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center; 
        }
    </style>
@endsection
@section('content')
    <div id="background">
        <div class="container"  style="padding-bottom:200px; padding-left:200px; padding-top:200px;">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" style="padding-bottom:50px;">{{ __('Register a Employee') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('user.store') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Assign a Role') }}</label>

                                    <div class="col-md-6">
                                        @foreach ($roles as $role)
                                            <div class="col-md-3">
                                                <div class="checkbox">
                                                    <label><input name="[]" value="{{ $role->id }}" type="checkbox">{{ $role->name }}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                        {{-- <select name="role" id="" class="form-control">
                                            <option value="0">Manager</option>
                                            <option value="1">Clerk</option>
                                        </select> --}}
                                        {{-- <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required> --}}
                                    </div>
                                </div>
                                    
                                <input id="role" type="hidden" class="form-control" name="role" value="admin">

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-success">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

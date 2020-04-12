@extends('layouts.adm.admin2')

@section('content')
    
    <h2>  Change Password</h2>

    <br>
    <div class="container">
        <form class="form-group" action="/admin/update-password" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="old_password" class="col-md-4 col-form-label text-md-right"><b>Password</b></label>
                <div class="col-md-6">
                    <input id="old_password" class="form-control" type="password" name="old_password">
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right"><b>{{ __('New Password') }}</b></label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><b>{{ __('Confirm New Password') }}</b></label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update Password</button>
            </div>
        </form>
        <br>
    </div>



@endsection
@extends('layouts.app')

@section('content')
<label></label>
@if((Auth::user()->location) == "NULL")
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 " style="width: 100%; height: 500px;">
        <div style="position: absolute; top:50%; left: 50%; transform: translate(-50%,-50%); width: 350px; min-height: 150px; max-height: 160px; box-sizing: border-box;">
            <h3 style="color: red; margin-left: 50%;"  align="center" class="fa fa-heart fa-4x"></h3>
            <h3 style="color: black;"> Welcome {{ Auth::user()->name}}, you have susccfuly registered!</h3>
            <p>Do you want to complete your <a href="/profile"><strong>profile</strong></a> or just see <a href="/posts"><strong>posts</strong></a></p>
        </div>
    </div>
@else
<div class="container" style="height: 600px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> 2<sup>nd</sup>part of Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" action="/add_type" method="POST">

                        <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                            <label for="location" class="col-md-4 control-label">Vendor type</label>

                            <div class="col-md-6 input-group">
                                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                <select class="form-control" name="type">
                                    <option>Beauty (Spa)</option>
                                    <option>Car</option>
                                    <option>Cake Bakeries</option>
                                    <option>Clothes (Wedding)</option>
                                    <option>Decoration</option>
                                    <option>Dj (Band)</option>
                                    <option>Equipment Rental</option>
                                    <option>Gift Shop</option>
                                    <option>Invitation Card</option>
                                    <option>Hall</option>
                                    <option>Hotel</option>
                                    <option>Photo And Video</option>
                                    <option>Travel Agent</option>
                                    <option>Wedding Gardens</option>
                                    <option>Wedding Drinks</option>
                                    <option>Wedding Planer</option>
                                    <option>Other Types</option>
                                </select>

                                @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                            <label for="phone_number" class="col-md-4 control-label">Phone Number</label>

                            <div class="col-md-6 input-group">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required autofocus>

                                @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div>
                            <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-plus"></i>
                                    Register
                                </button><br>
                                If you are registered you can Login<a href="{{ route('login') }}" class="btn btn-link">Here.</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection

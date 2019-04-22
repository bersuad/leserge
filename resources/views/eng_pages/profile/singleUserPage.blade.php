@extends('layouts.app')

@section('content')
    <div style="background-color: white;">
        <label></label>
        <div class="row">
            @include('inc.left')

            <div class="col-lg-6 col-md-6 col-sm-6" >

                @if(count($profile) > 0)

                    <div style="background-image:url(/storage/profile_image/{{$profile[0]->user->profile_pic}}); height: 258px; min-height: auto; max-height: 258px; background-repeat: no-repeat; background-size: cover;">
                        <div class="well col-lg-12 col-xs-12" style="margin-top: 0px; max-height: 20px; min-height: 10px; background: rgba(0,0,0,0.19);">
                            <h6 style="color: white; margin-top: -5px;" align="center"><b>Wellcome To {{ $profile[0]->user->name }} Profile Page.</b></h6>
                            <div class="row" style="background: rgba(0,0,0,0.7);">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" style="margin-top: 0px;">
                                    <img src="/storage/profile_image/{{$profile[0]->user->profile_pic}}" id="profilePic">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="color: white; max-width: auto; background: rgba(0,0,0,0.19);">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12" style="">
                                            <p><b> {{ $profile[0]->user->profile_discription }}</b></p>
                                        </div>
                                        @if($profile[0]->user->location != "NULL")
                                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12" style="">
                                                <small>Location: <i class="fa fa-map-marker"><b>{{ $profile[0]->user->location }}</b></i></small>
                                            </div>
                                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12" style="">
                                                <small>phone: <i class="fa fa-phone"><b>{{ $profile[0]->user->phone_number }}</b></i></small>
                                            </div>
                                        @else
                                            <label></label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @if($profile[0]->user->location != "NULL")
                            <div class="well col-lg-12 col-xs-12" style="background: rgba(0,0,0,0.19); color: white;">
                                <b>{{ $profile[0]->user->name }} is {{ $profile[0]->user->type }} Service Provider.</b>
                            </div>
                        @else
                            <label></label>
                        @endif
                    </div>

                </div>
                <h6 align="center"><b> Posts of {{ $profile[0]->user->name }}</b></h6>

                	@foreach($profile as $post)

                		<div style="background-color: #f6f6f6; border-bottom: 1px solid #ccc; border-left: 1px solid #ccc;">
                            <hr>
                            <h4 style="color: #48D1CC"> <a href="{{$post->user->id}}"> {{$post->user->name}}</a></h4>
                            <p>
                                @if($post->posted_image == " ")
                                <a href="/posts/{{$post->id}}">
                                    <img src="/storage/profile_image/{{$post->user->profile_pic}}" style="min-width: auto; min-height: auto; max-height: 400px; max-width: 95%; margin-left: 12px;"/>
                                </a>
                                @else
                                    <a href="/posts/{{$post->id}}">
                                        <img style="min-width: auto; min-height: auto; max-height: 400px; max-width: 95%; margin-left: 12px;" src="/storage/posted_image/{{$post->posted_image}}">
                                    </a>
                                @endif
                             </p>
                                <blockquote id="post_contient">
                                    {{ substr(strip_tags($post->body),0,40) }}
                                    @if(strlen(strip_tags($post->body)) > 40)
                                        ...<a href="/posts/{!! $post->id !!}"><i style="font-size: 11px;"> Read More</i></a>
                                    @endif
                                    
                                </blockquote>
                            <footer id="indexrow">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <label>
                                            <!-- cahcking wther the user is login or not -->
                                            @if (Auth::guest())
                                                <label id="comment"><span class="fa fa-heart unLiked"> </span> ({{ count($post->likes) }})</label>
                                            @else
                                                <label class="unLiked">
                                                    <i class="fa fa-heart {{ $post->isLiked()?'liked':''}}" onclick="likeIt('{{ $post->id}}', this)"></i>
                                                </label> 
                                                <label>
                                                    ({{ count($post->likes) }})
                                                </label>

                                            @endif
                                        </label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <label>
                                            <a href="/posts/{{$post->id}}"><span class="fa fa-comment"></span> ({{ count($post->comments)}})</a>
                                        </label>
                                    </div>
                                    @if($profile[0]->user->location != "NULL")
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <label>
                                                <small class="fa fa-phone">
                                                    <a href="tel:{{$post->user->phone_number}}">{{$post->user->phone_number}}</a>
                                                </small>
                                            </label>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label>
                                                <small class="fa fa-map-marker" style="color: green;"> {{$post->user->location}}</small>
                                            </label>
                                        </div>
                                    @else
                                        <label></label>
                                    @endif
                                </div>
                            </footer>                               
                            <hr>
                            <small>posted in {{ date('Y, F d', strtotime($post->created_at->todatestring() )) }}
                                at {{ date('h:i a', strtotime($post->created_at)) }}</small>
                        </div>

                	@endforeach

                @else
                	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 well" style="width: 100%; height: 500px;">
                        <div style="position: absolute; top:50%; left: 50%; transform: translate(-50%,-50%); width: 350px; min-height: 150px; max-height: 160px; box-sizing: border-box;">
                            <h3 style="color: black; margin-left: 150px;" align="center" class="fa fa-newspaper-o fa-4x"></h3>
                            <h3 style="color: black;"> No Post To Show.</h3>
                        </div>
                    </div>
                @endif
            </div>
            

            @include('inc.right')
        </div>
    </div>
@endsection
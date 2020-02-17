@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-waw1-1.cdninstagram.com/v/t51.2885-19/s150x150/83213956_3360255157381124_5752385570823208960_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com&_nc_ohc=qNYP8jXEMgoAX9D5IBX&oh=acc3dbf27bb6557cab9917184fd97d9e&oe=5ECEBCBA" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="#">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>class
           <div><a href="#">{{$user->profile->url ?? 'N/A'}}</a> </div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://scontent-waw1-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.106.921.921a/s640x640/84770545_2609265086061431_6387769783591162166_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com&_nc_cat=111&_nc_ohc=wzD-rtA33d0AX8xnp42&oh=21c16c65d1cd9e5ef85795823cc7b050&oe=5EC4FDED" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-waw1-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c1.0.748.748a/s640x640/82339013_604012433755999_687788727040640519_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com&_nc_cat=107&_nc_ohc=Z0xswacDMToAX_6fzPX&oh=b67e7cc00a7eaf378549b0baa7eee11f&oe=5EFC0CA4" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-waw1-1.cdninstagram.com/v/t51.2885-15/e35/c95.0.560.560a/83685533_642392923240008_2402831147948054363_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com&_nc_cat=100&_nc_ohc=fdIABezXCmMAX8wHhfY&oh=e4f6c7a988d945edaad103b5b798348a&oe=5EFC6073" class="w-100">
        </div>
    </div>
</div>
@endsection

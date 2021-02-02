@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-3  p-5">
      <img src="https://image.shutterstock.com/z/stock-vector-initial-letter-fd-logotype-company-name-colored-blue-and-magenta-swoosh-design-vector-logo-for-1024335778.jpg" width="100" height="100" class="rounded-circle">
    </div>
    <div class="col-9 pt-5">
      <div>{{ $user->username }}</h1></div>
      <div class="d-flex">

      <div class="pr-5"><strong>153</strong>posts</div>
      <div class="pr-5"><strong>23k</strong>followers</div>
      <div class="pr-5"><strong>212</strong>following</div>
      

      </div>
      <div class="pt-4 font-weight-bold">{{ $user->profile->title}}</div>
      <div>{{ $user->profile->description}}</div>
      <div><a href="#">{{ $user->profile->url}}</a></div>
    </div>

    <div class="row pt-5">
    <div class="col-4">
     <img src="https://scontent.famd5-1.fna.fbcdn.net/v/t1.0-1/c0.0.200.200a/p200x200/129629880_940694923136706_8495841964791166273_n.jpg?_nc_cat=111&ccb=2&_nc_sid=7206a8&_nc_ohc=-OPjNAthyLoAX-1Sgae&_nc_ht=scontent.famd5-1.fna&tp=27&oh=61165b9a83584306b643bfd2c9411512&oe=603D287D"class="w-100">
    </div>
    <div class="col-4">
     <img src="https://scontent.famd5-1.fna.fbcdn.net/v/t1.0-1/c0.0.200.200a/p200x200/129629880_940694923136706_8495841964791166273_n.jpg?_nc_cat=111&ccb=2&_nc_sid=7206a8&_nc_ohc=-OPjNAthyLoAX-1Sgae&_nc_ht=scontent.famd5-1.fna&tp=27&oh=61165b9a83584306b643bfd2c9411512&oe=603D287D"class="w-100">
    </div>
    <div class="col-4">
     <img src="https://scontent.famd5-1.fna.fbcdn.net/v/t1.0-1/c0.0.200.200a/p200x200/129629880_940694923136706_8495841964791166273_n.jpg?_nc_cat=111&ccb=2&_nc_sid=7206a8&_nc_ohc=-OPjNAthyLoAX-1Sgae&_nc_ht=scontent.famd5-1.fna&tp=27&oh=61165b9a83584306b643bfd2c9411512&oe=603D287D"class="w-100">
    </div>

    </div>
    </div>
</div>
@endsection

<h1>Welcome Page</h1>
<!-- <a href="/about">About</a> -->
 <!-- <a href="{{URL::to('/about')}}">About</a>
 <br>
 <a href="{{URL::to('/home')}}">Home</a>

<br>
 <a href="{{URL::to('about-user', ['anil'])}}">About Anil</a>
 <br>

 <a href="{{url('home/profile/anil') }}">Go To Anil Page</a>
 <br> -->

 
<h1>Choose Your Language</h1>
<a href="/setlang/en">English</a>
<a href="/setlang/hi">Hindi</a>
<a href="/setlang/ko">Korean</a>
<br><br>

 <div>
    <h1>{{__('welcome.heading1')}}</h1>
</div>

<h3>{{__('welcome.subHeading')}}</h3>

<a href="/about2">{{__('welcome.about2')}}</a>
<br>
<a href="/">{{__('welcome.home2')}}</a>
<br>
<a href="/contact2">{{__('welcome.contact2')}}</a>
<br>

<h1>{{__('welcome.aboutName', ["name"=>"Dewanand Kurrey"])}}</h1>

@include('common.header')

<x-message-banner msg="User Login Successfully" type="success"/>

<br>

<x-message-banner msg="User Login Failed" type="failed"/>

<br>

<x-message-banner msg="Password not correct, Please try again" type="warning" />

<br>

<h1>Home Page</h1>

<a href="/about">About</a>

<h3>
    <!-- {{URL::current()}} -->
    Current URL : {{url()->current()}}
</h3>

<h3>
    <!-- {{URL::full()}} -->
    Full URL : {{url()->full()}}
</h3>

<h3>
    {{URL::previous()}}
</h3>


@include('common.inner', ['page' => "This is Home page"]);


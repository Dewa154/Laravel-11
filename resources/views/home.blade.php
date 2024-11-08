@include('common.header')

<x-message-banner msg="User Login Successfully" type="success"/>

<br>

<x-message-banner msg="User Login Failed" type="failed"/>

<br>

<x-message-banner msg="Password not correct, Please try again" type="warning" />

<br>

<h1>Home Page</h1>


@include('common.inner', ['page' => "This is Home page"]);


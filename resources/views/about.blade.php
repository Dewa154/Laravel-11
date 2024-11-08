@include('common.header')
<h1>About Page</h1>

<!-- @includeif('common.inner', ['page' => "This is About page"]);  -->

<x-message-banner msg="About User Message" />

@include('common.inner', ['page' => "This is About page"]);
 

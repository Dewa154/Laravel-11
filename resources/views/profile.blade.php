<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <h1>Profile Page</h1>
    <!-- @if(session('username'))
        <h1>Welcome, {{session('username')}}</h1>
        <a href="logout2">Logout</a>
    @else
        <h1>No User Found in session</h1>
        <a href="login2">Login</a>
    @endif -->

    <!-- <br><br> -->
    <!-- {{print_r(session('allData'))}} -->

    @if(session('allData'))
    <h1>Welcome, {{session('allData')['username']}}</h1>
        
        <h3>Your Username : {{session('allData')['username']}}</h3>
      
        <h3> Password : {{session('allData')['password']}}</h3>
        
        <h3> <a href="logout2">Logout</a></h3>
    @else
        <h1>No User Found in session</h1>
        
        <h3><a href="login2">Login</a></h3>
    @endif

</div>

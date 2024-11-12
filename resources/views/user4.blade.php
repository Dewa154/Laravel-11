<div>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
    <h1>User-4 : Add New User</h1>

    @if(session('message'))
    <span class="success-message">{{session('message')}}</span>
    @endif

    @if(session('username'))
    <span class="success-message">{{session('username')}}</span>
    @endif

    {{session()->keep(['username'])}}

    <form action="/add" method="post">
        @csrf <!-- Include CSRF token for security -->
        <table border="1">
            <tr>
                <td>
                    <label for="username">Username :</label>
                </td>
                <td>
                    <input type="text" id="username" name="username" placeholder="Enter Username" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email :</label>
                </td>
                <td>
                    <input type="email" id="email" name="email" placeholder="Enter Email" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password :</label>
                </td>
                <td>
                    <input type="password" id="password" name="password" placeholder="Enter Password" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="phone no">Phone NO. :</label>
                </td>
                <td>
                    <input type="phone no" id="phone no" name="phone no" placeholder="Enter Phone No." required>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <button type="submit">Login</button>
                </td>
            </tr>
        </table>
    </form>
</div>

<style>
    .success-message {
        background-color: lightgreen;
        border-radius: 2px;
        padding: 2px 20px;
        margin-bottom: 10px;
        display: inline-block;
    }
</style>

<div>
    <!-- An unexamined life is not worth living. - Socrates -->
    <h1>Login2</h1>
    <form action="/login2" method="post">
        @csrf <!-- Include CSRF token for security -->
        <table border="1">
            <tr>
                <td>
                    <label for="username">Name :</label>
                </td>
                <td>
                    <input type="text" id="username" name="username" placeholder="Enter Username" required>
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
                <td colspan="2" style="text-align: center;">
                    <button type="submit">Login</button>
                </td>
            </tr>
        </table>
    </form>
</div>

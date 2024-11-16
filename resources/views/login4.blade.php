@extends('layout')

@section('title', "This is login Page")

@section('main')

<div class="main">
    <h1>User Login</h1>
    <form action="" method="POST">
        @csrf <!-- Include CSRF token for security -->
        <div class="form-container">
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
                        <!-- <button type="submit">Login</button> -->
                        <button type="button" class="btn btn-primary">Login</button>
                    </td>
                </tr>
            </table>
        </div>
    </form>
</div>

@endsection
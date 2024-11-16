<x-layout>
    <x-slot name="title">Login3 Page</x-slot>
    <x-slot name="main">
        <div>
            <h1 id="heading" class="heading">User3 Login</h1>
            <form action="" method="post">
            @csrf <!-- Include CSRF token for security -->
                <table border="1">
                <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="staticEmail" value="email@example.com">
                </div>
                </div>
                <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword">
                </div>
                 </div>
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <button onClick="changeColor()" type="button" class="btn btn-primary">Login</button>
                            <button onClick="blueColor()" type="button" class="btn btn-primary">Login</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <br><br>
    </x-slot>
</x-layout>
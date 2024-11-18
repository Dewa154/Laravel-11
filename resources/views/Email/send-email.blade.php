<div>
    <h1>Add Details for Send Email</h1>
    <form action="send-email" method="POST">
        @csrf <!-- Include CSRF token for security -->
        <div class="form-container">
            <table border="1">
                <tr>
                    <td>
                        <label for="to">To :</label>
                    </td>
                    <td>
                        <input type="text" id="to" name="to" placeholder="Enter Email Address" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="subject">Subject :</label>
                    </td>
                    <td>
                        <input type="text" id="subject" name="subject" placeholder="Subject" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="message">Message :</label>
                    </td>
                    <td>
                        <textarea input type="text" id="message" name="message" placeholder="Enter Your Message" required >
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <button >Send Email</button>
                    </td>
                </tr>
            </table>
        </div>
    </form>
</div>

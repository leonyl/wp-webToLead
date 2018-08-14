<div class="wrap">
    <form>
        <table class="form-table">
            <tr>
                <th><label>SugarCRM URL</label></th>
                <td>
                    <input type="text" name="wp_sugar_url" class="regular-text" required>
                    <p class="description" id="tagline-description">
                        Your SugarCRM REST API URL will be /service/v4_1/rest.php.
                    </p>
                    <p class="description" id="tagline-description">
                        i.e. http://yourcrm.com/service/v4_1/rest.php or http://demo.yourcrm.com/service/v4_1/rest.php
                    </p>
                </td>
            </tr>
            <tr>
                <th><label>Username</label></th>
                <td><input type="text" name="wp_sugar_username" class="regular-text" required></td>
            </tr>
            <tr>
                <th><label>Password</label></th>
                <td><input type="password" name="wp_sugar_password" class="regular-text" required></td>
            </tr>
        </table>
        <p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes"></p>
    </form>
</div>
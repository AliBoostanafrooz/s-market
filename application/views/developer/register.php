<div class="s-rtl-forms">
    <h2> ثبت نام توسعه دهنده</h2>

    <div style="color: red">
        <?php echo validation_errors(); ?>
        <?php echo @$error_login; ?>
        <?php echo form_open('developer/register'); ?>

    </div>

    <table class="table form-group">

        <tr>
            <td>ایمیل:</td>
            <td><input type="text" name="email" class="form-control"></td>
        </tr>

        <tr>
            <td>موبایل:</td>
            <td><input type="text" name="phone" class="form-control"></td>
        </tr>

        <tr>
            <td>رمز ورود:</td>
            <td><input type="password" name="password" class="form-control"></td>
        </tr>

        <tr>
            <td>تکرار رمز ورود:</td>
            <td><input type="password" name="repassword" class="form-control"></td>
        </tr>

        <tr>
            <td>کد ملی:</td>
            <td><input type="number" name="nationalcode" class="form-control"></td>
        </tr>

        <tr>
            <td colspan="2">
                <button class="btn btn-success" style="width: 100%" type="submit"> ثبت نام</button>
            </td>

        </tr>

    </table>
    </form>
</div>

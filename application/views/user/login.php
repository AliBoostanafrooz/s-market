<div class="s-rtl-forms">
    <h2> ورود کاربر</h2>

    <div style="color: red">
        <?php echo validation_errors(); ?>
        <?php echo @$error_login;?>
        <?php echo form_open('user/login'); ?>

    </div>


    <table class="table form-group">
        <tr>
            <td>نام کاربری  یا شماره موبایل:</td>
            <td><input type="text" name="email_phone" class="form-control"></td>
        </tr>
        <tr>
            <td>رمز ورود:</td>
            <td><input type="password" name="password" class="form-control"></td>
        </tr>
        <tr>
            <td >
                <button class="btn btn-primary" style="width: 100%" type="submit"> ورود</button>
            </td>
            <td >
                <a href="<?php echo base_url('user/register'); ?>" class="btn btn-primary"style="width: 100%"> ثبت نام </a>
            </td>
        </tr>
    </table>
    </form>
</div>

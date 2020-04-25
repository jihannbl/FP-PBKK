<h2>Sign up using this form</h2>

<?php echo $this->tag->form("signup/register"); ?>

<p>
    <label for="username">Username</label>
    <?php echo $this->tag->textField("username"); ?>
</p>

<p>
    <label for="pwd">Password</label>
    <?php echo $this->tag->textField("pwd"); ?>
</p>

<p>
    <label for="tipe">Tipe User</label>
    <?php echo $this->tag->textField("tipe"); ?>
</p>

<p>
    <?php echo $this->tag->submitButton("Register"); ?>
</p>

</form>
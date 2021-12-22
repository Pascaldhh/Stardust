<?php $ln = new LN();?>
<div class="container container-fluid login_section">
    <form class="form-login bg-white p-5 d-flex flex-column gap-4 rounded" method="POST">
        <h1 class="text-center pb-2 text-black"><?php echo HEADER_ITEM[0]; ?></h1>
        <div class="form-group d-flex flex-column gap-2">
            <label for="email">Enter your email:</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="form-group d-flex flex-column gap-2">
            <label for="password">Enter your password:</label>
            <input type="password" name="password" id="password">
        </div>
        <div class="msg bg-green"><?php echo $ln->validation(); ?></div>
        <input type="submit" name="submit" class="btn btn-primary mt-4" value="Login!">
    </form>
</div>
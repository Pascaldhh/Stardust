<div class="container container-fluid login_section">
    <form class="form-login bg-white p-5 d-flex flex-column gap-4 rounded" method="POST">
        <h1 class="text-center pb-2 text-black"><?php echo HEADER_ITEM[1]; ?></h1>
        <div class="form-group d-flex flex-column gap-2">
            <label for="firstname">Enter your firstname:</label>
            <input type="text" name="Firstname" id="firstname">
        </div>
        <div class="form-group d-flex flex-column gap-2">
            <label for="lastname">Enter your lastname:</label>
            <input type="text" name="Lastname" id="lastname">
        </div>
        <div class="form-group d-flex flex-column gap-2">
            <label for="email">Enter your email:</label>
            <input type="email" pattern=".+@" name="Email" id="email">
        </div>
        <div class="form-group d-flex flex-column gap-2">
            <label for="password">Enter your password:</label>
            <input type="password" name="Password" id="password">
        </div>
        <div class="form-group d-flex flex-column gap-2">
            <label for="password">Verify password:</label>
            <input type="password" name="Password" id="password">
        </div>
        <div class="form-group d-flex align-items-center gap-2 mt-2">
            <input type="checkbox" id="checkbox" name="Accept">
            <label for="checkbox">Accept the <a href="#">policys</a></label>
        </div>
        
        <button type="submit" class="btn btn-primary">Register!</button>
    </form>
</div>
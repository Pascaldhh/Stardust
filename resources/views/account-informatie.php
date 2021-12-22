    <?php if(!isset($_SESSION['logged-in'])){header('Location: /?page=404page'); exit();}?>
    <div class="container container-fluid home_section d-flex align-items-center flex-column">
        <h1 class="text-center text-white mb-5">Account informatie</h1>
        <div class="bg-white rounded w-100 d-flex p-3">
            <div class="account_items d-flex align-items-center gap-2 mt-2 flex-column" style="width:40%">
                <div class="item">Account</div>
                <div class="item">Payment</div>
                <div class="item">Security</div>
            </div>
            <form class="d-flex flex-column gap-3 text-center p-3 rounded" style="width:60%;" method="post">
                <div class="form-group d-flex justify-content-between">
                    <label for="firstname">Firstname:</label>
                    <input type="text" name="firstname" id="firstname" placeholder="<?php echo $_SESSION['user_info']['firstname']; ?>">
                </div>
                <div class="form-group d-flex justify-content-between">
                    <label for="lastname">Lastname:</label>
                    <input type="text" name="lastname" id="lastname" placeholder="<?php echo $_SESSION['user_info']['lastname']; ?>">
                </div>
                <div class="form-group d-flex justify-content-between">
                    <label for="email">Email address:</label>
                    <input type="email" name="myEmail" id="email" placeholder="<?php echo $_SESSION['email']; ?>">
                </div>
                <div class="form-group d-flex justify-content-between">
                    <label for="email">Password:</label>
                    <input type="password" name="password" id="password">
                </div>
                <input type="submit" value="submit" class="btn btn-primary align-self-center w-50 mt-2">
            </form>
        </div>
    </div>
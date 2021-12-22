<?php if(!isset($_SESSION['logged-in'])){header('Location: /'.$_GET['lang'].'/'); exit();} ?>
    <div class="container container-fluid home_section d-flex flex-column align-items-center">
        <h1 class="text-center pb-5 text-white">Kerstboom</h1>
        <form method="post" class="bg-white p-5 w-50">
            <div class="form-group d-flex flex-column gap-2">
                <label for="kerstboom">Kerstboom:</label>
                <input type="number" placeholder="grote kerstboom" id="kerstboom" name="kerstboom">
            </div>
            <input type="submit" value="Verzenden" class="mt-3">
        </form>
    </div>

<?php showKerstboom(); ?>
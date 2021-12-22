    <div class="container container-fluid home_section">
        <h1 class="text-center mb-5  text-white"><?php echo 'Boeken' ?></h1>
        <div class="d-flex justify-content-center">
            <form class="d-flex flex-column gap-1 text-center bg-white p-3 rounded w-75" method="post" action="?page=boeken">
                <label for="start">Start date:</label>
                <input id="start" type="date" name="start-date">
                <label for="end">End date:</label>
                <input id="end" type="date" name="end-date">
                <label for="type">Room type:</label>
                <select name="type" id="type">
                    <?php 
                    foreach($db->Read('room_types', 'type', '1', PDO::FETCH_COLUMN) as $item)
                    {
                        echo '<option value="'.$item.'">'.$item.'</option>';
                    }; ?>
                </select>
                
                <input class="btn btn-primary mt-4" type="submit" name="submit" value="Next page ->">
            </form>
        </div>
    </div>
    
    
    <!--<pre> -->
    <?php 
        #$pair = $db->Read('pair_table', '*', 'lang_id = 1', PDO::FETCH_ASSOC, 'LEFT JOIN room_types = r ON pair_table.room_shared = r.shared_id');
        #var_dump($pair);
    ?>
    <!-- </pre> -->
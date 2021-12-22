<?php 
class Rooms 
{
    public $db;

    public function __construct()
    {
        $this->db = new DB();
    }
    public function getAllRooms()
    {
        $rooms = $this->db->Read('room_content', '*', 'lang_id = '.LANG_SWITCH);
        for($i=0; $i<count($rooms); $i++)
        {
            echo '  <div class="card d-flex flex-row gap-4">
                        <div class="card_img">
                            <img class="rounded" src="'.$rooms[$i]['room_img'].'" alt="">
                        </div>
                        <div class="d-flex flex-column">
                            <div class="card_title">
                                <h3>'.$rooms[$i]['room_title'].'</h3>
                            </div>
                            <div class="card_info">
                                <p>'.
                                    $rooms[$i]['room_description']
                              .'</p>
                            </div>
                            <div class="card_btn">
                                <a href="?page=boeken" class="btn btn-primary">'.$rooms[$i]['book_now'].'</a>
                            </div>
                            <div class="card_price align-self-end">
                                <p><span>'.$rooms[$i]['room_price'].'</span> '.$rooms[$i]['a_night'].'</p>
                            </div>
                        </div>
                    </div>';
        }
    }
}
$allRooms = new Rooms();
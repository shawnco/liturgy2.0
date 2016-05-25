<?php

/**
 * Fetches the current season, week, and day.
 * 
 * @author Shawn Contant <shawnc366@gmail.com>
 */

class Season_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getSeason(){
        $now = time();
        $year = date('Y');
        $output = array(
            'season' => '',
            'week' => '',
            'day' => date('w') + 1
        );
        
        // Identify the seasonal ranges
        $yearStart = strtotime('January 1, ' . $year);
        $easterStart = easter_date($year);
        $epiphany = strtotime('');
        $lent = strtotime('-46 days', $easterStart);
        $easter = $easterStart;
        $ordinary = strtotime('+50 days', $easterStart);
        $advent = strtotime('+3 days', strtotime('last Thursday of November ' . $year));
        $christmas = strtotime('December 25, ' . $year);
        $nextYear = strtotime('January 1, ' . ($year+1));
        $names = array('Christmas', 'Epiphany', 'Lent', 'Easter', 'Ordinary', 'Advent', 'Christmas', 'Next Year');
        $starts = array($yearStart, $epiphany, $lent, $easter, $ordinary, $advent, $christmas, $nextYear);
        for($i = 0; $i < count($starts) - 1; $i++){
            if($now >= $starts[$i] && $now <= $starts[$i+1]){
                $output['season'] = $names[$i];
                $output['week'] = ceil((($now / 86400) - ($starts[$i] / 86400)) / 7);
            }
        }
        return $output;
    }
}
?>

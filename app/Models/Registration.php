<?php


namespace App\Models;

use App\Traits\Service;

/**
 * Class Registration
 *
 * @package App\Models
 */
class Registration extends Model
{
    use Service;

    /**
     * Get the listing data from Db
     *
     * @return mixed
     */
    public function lists()
    {
        $this->db->query("SELECT * FROM registration");
        return $this->db->resultset();
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * CaseFlow
 *
 */
class Flow extends Model
{
    protected $table = 'case_flows';
    protected $fillable = array('case_id', 'case_type_id', 'step', 'purpose', 'priority');

    public function ccase() {
        return $this::hasOne('Ccase', 'id', 'case_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * CaseChecklist
 */
class Checklist extends Model
{
    protected $table = 'case_checklists';
    protected $fillable = array('case_type_id', 'name', 'case_id', 'completed', 'priority');
}

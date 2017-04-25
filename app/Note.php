<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Note
 *
 * @property-read \User $user 
 * @property-read \Ccase $Ccase 
 * @property-read \Contact $contact 
 */
class Note extends Model
{
    use SoftDeletingTrait;
    protected $table = 'notes';
    protected $dates = ['deleted_at'];
    
    public function user()
    {
        return $this->hasOne('User', 'id', 'user_id');
    }

    public function Ccase()
    {
        return $this->hasOne('Ccase', 'id', 'case_id');
    }

    public function contact()
    {
        return $this->hasOne('Contact', 'id', 'contact_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ContactModel extends Model
{
    use HasFactory;
    protected $table = 'contact_us';
    protected $fillable = [
        'email',
        'issue',
        'message',
        'created_at',
        'updated_at'
    ]; 
    static public function getSingle($id)
    {
        $return = self::find($id);
        return $return;
    }

    // getRecord
    static public function getRecord()
    {
        $return = self::select('contact_us.*');

        if (!empty(request()->get('email'))) {
            $return = $return->where('email', 'like', '%' . request()->get('email') . '%');
        }
        
        if (!empty(request()->get('issue'))) {
            $return = $return->where('issue', '=', request()->get('issue'));
        }
        

        if (!empty(request()->get('massage'))) {
            $return = $return->where('massage', 'like', '%' . request()->get('massage') . '%');
        }

        $return = $return->orderBy('id', 'desc')->paginate(3);
        return $return;

    }
} 

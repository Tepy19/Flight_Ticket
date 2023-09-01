<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    use HasFactory;
    protected $table = 'book';
    protected $fillable = [
        'from',
        'to',
        'class',
        'departure',
        'return',
        'adult',
        'children',
        'infants',
        'created_at',
        'updated_at'
    ]; 
    static public function getSingle($id)
    {
        $return = self::find($id);
        return $return;
    }
    // static public function getRecord()
    // {
    //     $return = self::select('book.*');
    
    //     if (!empty(request()->get('from'))) {
    //         $return = $return->where('from', 'like', '%' . request()->get('from') . '%');
    //     }
    
    //     if (!empty(request()->get('to'))) {
    //         $return = $return->where('to', '=', request()->get('to'));
    //     }
    
    //     $return = $return->orderBy('id', 'desc')->paginate(30);
    //     return $return->get();
    // }
   static public function getRecord()
    {
        $return = self::select('book.*');

        $from = request()->get('from');
        if (!empty($from)) {
            $return = $return->where('from', 'like', '%' . $from . '%');
        }

        $to = request()->get('to');
        if (!empty($to)) {
            $return = $return->where('to', '=', $to);
        }

        $return = $return->orderBy('id', 'desc')->paginate(5);
        return $return;
    }
}

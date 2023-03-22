<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Playlist extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $primaryKey = 'id';
    use SoftDeletes;
      /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
        /**
     * The data type of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    public function images()
    {
        return json_decode($this->thumbnails);
    }
    public function watch()
    {
        $this->watchedAt=now();
        $this->save();
    }
    public function unwatch()
    {
        $this->watchedAt=null;
        $this->save();
    }
    // public function delete()
    // {
    //     $this->deletedAt=now();
    //     $this->save();
    // }
    // public function undelete()
    // {
    //     $this->deletedAt=null;
    //     $this->save();
    // }
    public function moveBy($offset)
    {
        $this->order=$this->order+$offset;
        $this->save();
    }

    public function Category() {
        return $this->belongsTo(Category::class);
    }
}

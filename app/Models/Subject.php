<?php
//Head//
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//model of subject//
//Body//
class Subject extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'code',
        'semester',
    ];

    public function teacherSubjectList() {
        return $this->hasMany(TeacherSubject::class, 'subject_id');
    }



    
    public $table = "subjects";
}
//End//
//+++//

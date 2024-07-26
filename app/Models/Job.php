<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; 

class Job extends Model {
    use HasFactory;
    
    protected $table = 'job_listings_tables';

    protected $fillable = ['title', 'salary'];

    public function employed()
    {
        return $this->belongsTo((Employer::class));
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listings_tables_id");
    }
}
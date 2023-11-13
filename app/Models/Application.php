<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $table = "applications";

    protected $fillable = [
        "title",
        "link",
        "salary",
        "modality",
        "currency",
        "status",
        "comments",
        "company",
        "location",
        "platform_id",
    ];

    // public function platform()
    // {
    //     return $this->belongsTo(Platform::class, "platform_id");
    // }
}

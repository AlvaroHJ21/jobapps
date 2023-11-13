<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function platform(): BelongsTo
    {
        return $this->belongsTo(Platform::class, "platform_id");
    }
}

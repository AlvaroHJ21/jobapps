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
        "min_salary",
        "max_salary",
        "to_agree",
        "modality",
        "currency",
        "status",
        "comments",
        "description",
        "company",
        "location",
        "platform_id",
        "is_active",
    ];

    protected $casts = [
        "to_agree" => "boolean",
        "is_active" => "boolean",
    ];

    public function platform(): BelongsTo
    {
        return $this->belongsTo(Platform::class, "platform_id");
    }
}

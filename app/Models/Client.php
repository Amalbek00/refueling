<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
      'name', 'bin', 'phone', 'status'
    ];

    /**
     * @return HasMany
     */
    public function literBalances(): HasMany
    {
        return $this->hasMany(LiterBalance::class);
    }

}

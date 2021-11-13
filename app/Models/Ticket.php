<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'admin_id',
        'subject',
        'content',
        'priority_id',
        'category_id'
    ];

    protected $with = [
        'customer',
        'admin',
        'category',
        'agents',
        'comments.user'
    ];

    public function getStatusAttribute()
    {
        if ($this->closed_at) {
            return 'closed';
        }
        return 'open';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }

    public function admin()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeIsOpen( $query)
    {
        return $query->whereNull('closed_at');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function agents()
    {
        return $this->belongsToMany(User::class, 'ticket_agents', 'ticket_id', 'agent_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($content)
    {
        return $this->comments()
            ->create([
                'content' => $content,
                'user_id' => auth()->id()
            ]);
    }
}

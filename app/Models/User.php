<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the user's initials
     */
    public function initials(): string
    {
        return Str::of($this->name)
            ->explode(' ')
            ->map(fn (string $name) => Str::of($name)->substr(0, 1))
            ->implode('');
    }

    const ROLE_SUPER_ADMIN = 'superAdmin';
    const ROLE_PRIVATO = 'privato';
    const ROLE_AZIENDA = 'azienda';
    const ROLE_ENTE_PUBBLICO = 'ente pubblico';
    const SUBSCRIPTIONS_SUPER_ADMIN = 'superAdmin';
    const SUBSCRIPTIONS_BASIC = 'Basic';
    const SUBSCRIPTIONS_MEDIUM = 'medium';
    const SUBSCRIPTIONS_PREMIUM = 'premium';


    public const ROLES = [
        self::ROLE_SUPER_ADMIN,
        self::ROLE_PRIVATO,
        self::ROLE_AZIENDA,
        self::ROLE_ENTE_PUBBLICO
    ];

public const SUBSCRIPTIONS = [
     self::SUBSCRIPTIONS_SUPER_ADMIN,
     self::SUBSCRIPTIONS_BASIC,
     self::SUBSCRIPTIONS_MEDIUM,
     self::SUBSCRIPTIONS_PREMIUM
];

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function userInformation()
    {
        return $this->hasOne(UserInformation::class);
    }

    public function ads()
    {
        return $this->hasMany(Ad::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}

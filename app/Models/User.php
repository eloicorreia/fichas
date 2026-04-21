<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
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
     * Relacionamento com os papéis do usuário.
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(
            Role::class,
            'role_user',
            'user_id',
            'role_id'
        );
    }

    /**
     * Verifica se o usuário possui um papel específico ativo.
     */
    public function hasRole(string $roleName): bool
    {
        return $this->roles()
            ->where('roles.name', $roleName)
            ->where('roles.active', true)
            ->exists();
    }

    /**
     * Verifica se o usuário possui ao menos um dos papéis informados.
     *
     * @param array<int, string> $roleNames
     */
    public function hasAnyRole(array $roleNames): bool
    {
        return $this->roles()
            ->whereIn('roles.name', $roleNames)
            ->where('roles.active', true)
            ->exists();
    }

    /**
     * Verifica se o usuário possui uma permissão específica ativa,
     * herdada a partir de algum papel ativo.
     */
    public function hasPermission(string $permissionName): bool
    {
        return $this->roles()
            ->where('roles.active', true)
            ->whereHas('permissions', function ($query) use ($permissionName): void {
                $query->where('permissions.name', $permissionName)
                    ->where('permissions.active', true);
            })
            ->exists();
    }
}
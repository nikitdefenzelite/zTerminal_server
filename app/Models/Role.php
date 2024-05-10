<?php
/**
 *
 * @category ZStarter
 *
 * @ref     Defenzelite product
 * @author  <Defenzelite hq@defenzelite.com>
 * @license <https://www.defenzelite.com Defenzelite Private Limited>
 * @version <zStarter: 202402-V2.0>
 * @link    <https://www.defenzelite.com>
 */


namespace App\Models;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    public $guarded = [];
    protected $table = 'roles';

    // public function users()
    // {
    //     return $this->hasOne(User::class);
    // }
}

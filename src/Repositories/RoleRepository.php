<?php

namespace SecTheater\Marketplace\Repositories;

use SecTheater\Marketplace\Models\EloquentRole;


class RoleRepository extends Repository {
    protected $model;

    public function __construct(EloquentRole $model) {
        $this->model = $model;
    }
}

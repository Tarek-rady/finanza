<?php

        namespace App\Repositories\Sql;
        use App\Models\ServerEmail;
        use App\Repositories\Contract\ServerEmailRepositoryInterface;
        use Illuminate\Database\Eloquent\Collection;

        class ServerEmailRepository extends BaseRepository implements ServerEmailRepositoryInterface
        {

            public function __construct()
            {

                return $this->model = new ServerEmail();

            }

        }
        
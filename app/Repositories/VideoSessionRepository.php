<?php

namespace App\Repositories;

use App\Models\VideoSession;

class VideoSessionRepository
{
    public function all()
    {
        return VideoSession::latest()->get();
    }

    public function find(int $id): ?VideoSession
    {
        return VideoSession::find($id);
    }
}

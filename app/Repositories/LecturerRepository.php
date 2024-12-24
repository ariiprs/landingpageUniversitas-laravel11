<?php

namespace App\Repositories;

use App\Models\Lecturer;
use App\Repositories\Contracts\LecturerRepositoryInterface;

class LecturerRepository implements LecturerRepositoryInterface
{
    public function getAllLecturers($categoryPositionId)
    {
        return Lecturer::latest()->where('category_lecturer_id',$categoryPositionId)->get();
    }
}

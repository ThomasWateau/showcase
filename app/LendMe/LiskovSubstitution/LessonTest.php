<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Lendme;

interface LessonRepositoryInterface
{
    /**
     * fetch all records
     * @return array
     */
    public function getAll();
}


class FileLessonRepository implements LessonRepositoryInterface
{
    public function getAll()
    {
        return [];
    }
}

class DbLessonRepository implements LessonRepositoryInterface
{
    public function getAll()
    {
        return Lesson::all()->toArray();
    }
}


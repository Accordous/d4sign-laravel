<?php

namespace Accordous\D4sign\Services;

class Batches extends Client
{
    public function create($keys)
    {
        return $this->post('batches', ['keys' => $keys]);
    }
}

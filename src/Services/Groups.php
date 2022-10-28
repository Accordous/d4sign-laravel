<?php

namespace Accordous\D4sign\Services;

class Groups extends Client
{
    /**
     * @param $uuidSafe
     *
     * @return mixed
     */
    public function find($uuidSafe)
    {
        return $this->get('groups/' . $uuidSafe);
    }
}

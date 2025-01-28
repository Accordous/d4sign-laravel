<?php

namespace Accordous\D4sign\Services;

class Folders extends Client
{
    /**
     * @param $uuidSafe
     *
     * @return mixed
     */
    public function find($uuidSafe)
    {
        return $this->get('folders/'.$uuidSafe.'/find');
    }
    
    /**
     * @param $uuidSafe
     * @param $folderName
     *
     * @return mixed
     */
    public function create($uuidSafe, $folderName)
    {
        return $this->post('folders/'.$uuidSafe.'/create', [
            'folder_name' => $folderName,
        ]);
    }
    
    /**
     * @param $uuidSafe
     * @param $uuidFolder
     * @param $folderName
     *
     * @return mixed
     */
    public function rename($uuidSafe, $uuidFolder, $folderName)
    {
        return $this->post('folders/'.$uuidSafe.'/rename', [
            'folder_name' => $folderName,
            'uuid_folder' => $uuidFolder,
        ]);
    }

    public function createSubfolder(string $uuidSafe, string $uuidParentFolder, string $folderName)
    {
        return $this->post('folders/'.$uuidSafe.'/create', [
            'uuid_folder' => $uuidParentFolder,
            'folder_name' => $folderName,
        ]);
    }
}

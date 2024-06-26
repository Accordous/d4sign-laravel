<?php

namespace Accordous\D4sign\Services;

class Certificate extends Client
{

    /**
     * @param $fileUuid
     * @param $key_signer
     *
     * @return mixed
     */
    public function find($fileUuid, $key_signer)
    {
        return $this->post('certificate/'.$fileUuid.'/list', ['key_signer' => $key_signer]);
    }

    /**
     * @param $fileUuid
     * @param $key_signer
     * @param $documentType
     * @param  string  $documentNumber
     * @param  string  $pades
     *
     * @return mixed
     */
    public function add($fileUuid, $key_signer, $documentType, $documentNumber = '', $pades = '')
    {
        return $this->post("certificate/{$fileUuid}/add", [
            'key_signer'      => $key_signer,
            'document_type'   => $documentType,
            'pades'           => $pades,
            'document_number' => $documentNumber,
        ]);
    }

}

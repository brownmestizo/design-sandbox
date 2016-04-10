<?php

namespace Form;


use Symfony\Component\HttpFoundation\File\UploadedFile;

class UploadedPhotos
{
    /** @var UploadedFile */
    public  $p1;
    /** @var UploadedFile */
    public  $p2;
    /** @var UploadedFile */
    public  $p3;
    /** @var UploadedFile */
    public  $p4;

    public function getFileDirectory()
    {
        $path = __DIR__ . '/../../assets/img/prod';
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }
        $realpath = realpath($path);

        return $realpath;
    }

    public function getTblPhotos(\TblProdInfo $info)
    {
        $photos = new \TblProdPhotos();
        $photos->setProdSolo1($this->uploadFile($info->getProdId(), 1));
        $photos->setProdSolo2($this->uploadFile($info->getProdId(), 2));
        $photos->setProdSolo3($this->uploadFile($info->getProdId(), 3));
        $photos->setProdSolo4($this->uploadFile($info->getProdId(), 4));

        return $photos;
    }

    private function uploadFile($prodId, $num)
    {
        /** @var UploadedFile $file */
        $file = $this->{'p' . $num};
        if (!$file) {
            return '';
        }

        $ext = strtolower($file->getClientOriginalExtension());
        if (!in_array($ext, ['jpg', 'png', 'gif', 'jpeg'])) {
            throw new \Exception('Photo is not an image');
        }

        $fileName = sprintf('%d_%d.%s', $prodId, $num, $ext);
        if (is_file($this->getFileDirectory() . '/' . $fileName)) {
            @unlink($this->getFileDirectory() . '/' . $fileName);
        }
        $file->move($this->getFileDirectory(), $fileName);

        return $fileName;
    }
}
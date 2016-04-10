<?php

namespace Form;


use Symfony\Component\HttpFoundation\File\UploadedFile;

class UploadedPhotos
{
    /** @var UploadedFile */
    public $p1;
    /** @var UploadedFile */
    public $p2;
    /** @var UploadedFile */
    public $p3;
    /** @var UploadedFile */
    public $p4;

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
        if (!$photos = $info->getTblProdPhotos()) {
            $photos = new \TblProdPhotos();
            $info->setTblProdPhotos($photos);
        }

        $v = $this->uploadFile($info->getProdId(), 1);
        if ($v) {
            $photos->setProdSolo1($v);
        }
        $v = $this->uploadFile($info->getProdId(), 2);
        if ($v) {
            $photos->setProdSolo2($v);
        }
        $v = $this->uploadFile($info->getProdId(), 3);
        if ($v) {
            $photos->setProdSolo3($v);
        }
        $v = $this->uploadFile($info->getProdId(), 4);
        if ($v) {
            $photos->setProdSolo4($v);
        }

        return $photos;
    }

    private function uploadFile($prodId, $num)
    {
        /** @var UploadedFile $file */
        $file = $this->{'p' . $num};
        if (!$file) {
            return null;
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
        $this->{'p' . $num} = null;

        return $fileName;
    }
}
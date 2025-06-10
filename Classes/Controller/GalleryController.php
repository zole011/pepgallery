<?php
namespace Gmbit\Pepgallery\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Gmbit\Pepgallery\Domain\Model\Gallery;

class GalleryController extends ActionController
{
    /**
     * @var \Gmbit\Pepgallery\Domain\Repository\GalleryRepository
     */
    protected $galleryRepository;

    public function injectGalleryRepository(\Gmbit\Pepgallery\Domain\Repository\GalleryRepository $galleryRepository)
    {
        $this->galleryRepository = $galleryRepository;
    }

    public function listAction()
    {
        $galleries = $this->galleryRepository->findAll();
        $this->view->assign('galleries', $galleries);
    }

    public function showAction(\Gmbit\Pepgallery\Domain\Model\Gallery $gallery)
    {
        $folderPath = $gallery->getFolder();
        $images = [];
        if ($folderPath) {
            $resourceFactory = \TYPO3\CMS\Core\Resource\ResourceFactory::getInstance();
            $storage = $resourceFactory->getDefaultStorage();
            $folder = $storage->getFolder($folderPath);
            $images = $folder->getFiles();
        }
        $this->view->assignMultiple([
            'gallery' => $gallery,
            'images' => $images,
        ]);
    }
}
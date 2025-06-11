<?php
namespace Gmbit\Pepgallery\Controller;

use TYPO3\CMS\Core\Resource\ResourceFactory;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Psr7\Response\HtmlResponse;
use Psr\Http\Message\ResponseInterface;
use Gmbit\Pepgallery\Domain\Repository\GalleryRepository;

class GalleryController extends ActionController
{
    public function __construct(
        private readonly GalleryRepository $galleryRepository,
        private readonly ResourceFactory $resourceFactory  // Dodajte ovo
    ) {}

    public function listAction(): ResponseInterface
    {
        $galleries = $this->galleryRepository->findAll();
        
        $this->view->assign('galleries', $galleries);
        return $this->htmlResponse();
    }

public function showAction(\Gmbit\Pepgallery\Domain\Model\Gallery $gallery): ResponseInterface
{
    $folderPath = $gallery->getFolder();
    $images = [];

    if ($folderPath) {
        try {
            // Direktno koristi combined identifier
            $folder = $this->resourceFactory->getFolderObjectFromCombinedIdentifier($folderPath);
            $allFiles = $folder->getFiles();
            
            // Filtriraj samo slike
            foreach ($allFiles as $file) {
                if ($file->getType() === \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE) {
                    $images[] = $file;
                }
            }
            
        } catch (\Exception $e) {
            // Handle error silently or log it
        }
    }

    $this->view->assignMultiple([
        'gallery' => $gallery,
        'images' => $images,
    ]);

    return $this->htmlResponse();
}
}
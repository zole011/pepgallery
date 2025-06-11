<?php
namespace Gmbit\Pepgallery\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Gallery extends AbstractEntity
{
    protected string $title = '';
    protected string $description = '';
    protected ?FileReference $mainAsset = null;
    protected string $folder = '';

        // Dodajte ova polja
    protected int $crdate = 0;
    protected int $tstamp = 0;


    /**
     * @var ObjectStorage<Image>
     */
    protected $images;

    public function __construct()
    {
        $this->images = new ObjectStorage();
    }

    public function getTitle(): string
    {
        return $this->title;
    }
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getMainAsset(): ?FileReference
    {
        return $this->mainAsset;
    }
    public function setMainAsset(?FileReference $mainAsset): void
    {
        $this->mainAsset = $mainAsset;
    }

    /**
     * @return ObjectStorage<Image>
     */
    public function getImages()
    {
        return $this->images;
    }
    public function setImages(ObjectStorage $images): void
    {
        $this->images = $images;
    }

    public function getFolder(): string
    {
        return $this->folder;
    }
    public function setFolder(string $folder): void
    {
        $this->folder = $folder;
    }
    // Dodajte getters za date polja
    public function getCrdate(): int
    {
        return $this->crdate;
    }
    
    public function getTstamp(): int
    {
        return $this->tstamp;
    }
public function setCrdate(int $crdate): void
    {
        $this->crdate = $crdate;
    }
    
    public function setTstamp(int $tstamp): void
    {
        $this->tstamp = $tstamp;
    }
}
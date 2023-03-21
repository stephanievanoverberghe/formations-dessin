<?php

require_once(__DIR__ . '/../helpers/database.php');

class Submodule_video
{
    private int $id_sub_modules;
    private int $id_videos;

    private object $pdo;

    /**
     * Méthode appelée automatiquement lors de l'instanciation de la classe
     */
    public function __construct()
    {
        $this->pdo = Database::getInstance();
    }

    // ID_SUBMODULES GETTER AND SETTER ************************************************************************
    public function setId_sub_modules(int $id_sub_modules): void
    {
        $this->id_sub_modules = $id_sub_modules;
    }
    public function getId_sub_modules(): int
    {
        return $this->id_sub_modules;
    }
    // ID_VIDEOS GETTER AND SETTER ************************************************************************
    public function setId_videos(int $id_videos): void
    {
        $this->id_videos = $id_videos;
    }
    public function getId_videos(): int
    {
        return $this->id_videos;
    }
}
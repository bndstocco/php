<?php

namespace Alura\Threads\Student;

class ProfilePicture
{
    private string $filePath; // Propriedade privada que armazena o caminho do arquivo da imagem

    public function __construct(string $filePath)
    {
        $this->setFilePath($filePath); // Chama o método para definir o caminho do arquivo da imagem
    }

    private function setFilePath(string $filePath): void
    {
        // Verifica se o caminho especificado é um arquivo de imagem JPEG válido
        $isImage = strpos(mime_content_type($filePath), 'image/jp') === 0;
        
        // Lança uma exceção se o caminho não corresponder a um arquivo válido ou não for uma imagem JPEG
        if (!is_file($filePath) || !$isImage) {
            throw new \InvalidArgumentException('Invalid image file path');
        }

        // Define o caminho do arquivo da imagem
        $this->filePath = $filePath;
    }

    public function filePath(): string
    {
        return $this->filePath; // Retorna o caminho do arquivo da imagem
    }
}

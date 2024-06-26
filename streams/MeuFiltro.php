<?php

class MeuFiltro extends php_user_filter
{
    public $stream;

    // Método onCreate() para inicializar o filtro
    public function onCreate()
    {
        // Abre um novo stream temporário para armazenar os dados filtrados
        $this->stream = fopen('php://temp', 'w+');
        // Retorna true se o stream foi aberto com sucesso, ou false caso contrário
        return $this->stream !== false;
    }

    // Método filter() para aplicar o filtro aos dados
    public function filter($in, $out, &$consumed, $closing)
    {
        $saida = ''; // Variável para armazenar os dados filtrados

        // Enquanto houver dados para ler do stream de entrada ($in)
        while ($bucket = stream_bucket_make_writeable($in)) {
            // Divide os dados em linhas
            $linhas = explode("\n", $bucket->data);

            // Itera sobre cada linha
            foreach ($linhas as $linha) {
                // Verifica se a linha contém a palavra 'parte' (case-insensitive)
                if (stripos($linha, 'parte') !== false) {
                    // Adiciona a linha à variável $saida
                    $saida .= "$linha\n";
                }
            }
        }

        // Cria um novo bucket de stream com os dados filtrados
        $bucketSaida = stream_bucket_new($this->stream, $saida);
        // Adiciona o bucket de saída ao stream de saída ($out)
        stream_bucket_append($out, $bucketSaida);

        // Retorna PSFS_PASS_ON para indicar que o processamento deve continuar
        return PSFS_PASS_ON;
    }
    
}

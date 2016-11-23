<?php

class EnvioArquivo {

    public function __construct() {
        $this->ci = & get_instance();
    }

    public function upload_pdf($arquivo = NULL, $local = NULL) {

        $dir_upload = $local;
        if (!is_dir($local)) {
            mkdir($local, 0755, $recursive = true);
        }


//        if (is_null($idPlano)) {
//            $dir_upload = $local . md5(uniqid(rand(), true));
//            mkdir($dir_upload, 0755, $recursive = true);
//        } else {
//            $dir_upload = $local . $idPlano;
//            if (!is_dir($dir_upload)) {
//                mkdir($dir_upload, 0755, $recursive = true);
//            }
//        }

        $config['upload_path'] = $dir_upload;
        $config['allowed_types'] = 'pdf';
        //$config['max_size'] = '1000';
        $config['encrypt_name'] = TRUE;

        $this->ci->load->library('upload', $config);

        if (!$this->ci->upload->do_upload($arquivo)) {

            $dados = array(
                'tipo_msg' => 'erro',
                'mensagem' => $this->ci->upload->display_errors(),
                'nome_arquivo' => NULL,
                'dados_arquivo' => NULL,
            );
        } else {

            $dados = array(
                'tipo_msg' => 'sucesso',
                'mensagem' => 'Arquivo enviado com sucesso!',
                'nome_arquivo' => $this->ci->upload->data('file_name'),
                'dados_arquivo' => $this->ci->upload->data()
            );
        }

        return $dados;
    }

}

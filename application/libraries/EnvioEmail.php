<?php

class EnvioEmail {

    public function __construct() {
        $this->ci = & get_instance();
    }

    public function enviar($dados = NULL) {

        if (is_null($dados)) {
            return FALSE;
        }

        $mensagem_cabecalho = "<h3>Sistema de Normativa Docente</h3>";
        $mensagem_rodape = "<h3>Esta é uma mensagem automática do sistema, não responda. </h3>";
        
        $this->ci->load->library('email');

        $this->ci->email->from($dados['remetenteEmail'], $dados['remetenteNome']);
        $this->ci->email->to($dados['destinatarioEmail']);

        if ($dados['copiaCarbono']) {
            $this->ci->email->cc($dados['copiaCarbonoEmail']);
        }

        if ($dados['copiaCarbonoOculta']) {
            $this->ci->email->bcc($dados['copiaCarbonoOcultaEmail']);
        }

        $this->ci->email->subject($dados['assunto']);
        $this->ci->email->message($mensagem_cabecalho.$dados['mensagem'].$mensagem_rodape);

        if ($this->ci->email->send()) {
            $this->ci->email->clear(TRUE);
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

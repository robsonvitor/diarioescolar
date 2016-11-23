<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Message:: a library for giving feedback to the user
 *
 * @author  Adam Jackett
 * @url http://www.darkhousemedia.com/
 * @version 1.2.0
 */
class Message {

    public $CI;
    public $messages = array();
    public $wrapper = array('', '');

    public function __construct($config = null) {
        $this->CI = & get_instance();
        $this->CI->load->library('session');

        if ($this->CI->session->flashdata('_messages'))
            $this->messages = $this->CI->session->flashdata('_messages');

        if (is_array($config))
            $this->initialize($config);
    }

    public function initialize($config) {
        if (!is_array($config))
            return false;

        foreach ($config as $key => $val) {
            $this->$key = $val;
        }
    }

    public function set($type, $message, $flash = FALSE, $group = FALSE, $uset = FALSE) {
        if (!is_array($message))
            $message = array($message);
        foreach ($message as $msg) {
            $obj = new stdClass();
            $obj->message = $msg;
            $obj->type = $type;
            $obj->flash = $flash;
            $obj->group = $group;
            $this->messages[] = $obj;
        }

        $flash_messages = array();
        foreach ($this->messages as $msg) {
            if ($msg->flash)
                $flash_messages[] = $msg;
        }
        if (count($flash_messages))
            $this->CI->session->set_flashdata('_messages', $flash_messages);
    }

    public function display($group = FALSE, $wrapper = FALSE) {
        echo $this->get($group, $wrapper);
    }

    public function get($group = FALSE, $wrapper = FALSE) {
        $content = '';

        if (count($this->messages)) {
            $output = array();
            foreach ($this->messages as $msg) {
                if ($msg->group == $group) {
                    if (!isset($output[$msg->type]))
                        $output[$msg->type] = array();
                    $output[$msg->type][] = $msg->message;
                }
            }
            $content .= ($wrapper !== FALSE ? $wrapper[0] : $this->wrapper[0]) . "\r\n";
            foreach ($output as $type => $messages) {
                switch ($type) {
                    case 'erro':
                        $icone = '<i class="fa fa-thumbs-down"></i> <strong>Erro: </strong>';
                        $tipo_msg = 'danger';
                        break;
                    case 'sucesso':
                        $icone = '<i class="fa fa-thumbs-up"></i> <strong>Sucesso: </strong>';
                        $tipo_msg = 'success';
                        break;
                    case 'alerta':
                        $icone = '<i class="fa fa-exclamation-triangle"> </i> <strong>Alerta: </strong>';
                        $tipo_msg = 'warning';
                        break;
                    case 'info':
                        $icone = '<i class="fa fa-info-circle"></i> <strong>Informação: </strong>';
                        $tipo_msg = 'info';
                        break;

                    default:
                        $icone = '<i class="fa fa-info-circle"></i> <strong>Informação: </strong>';
                        $tipo_msg = 'info';
                        break;
                }

                $content .= '<div class="alert alert-' . $tipo_msg . ' alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . "\r\n";
                $content .= $icone;
                foreach ($messages as $msg) {
                    $content .= '<span>' . $msg . '</span>' . "\r\n";
                }
                $content .= '</div>' . "\r\n";
            }
            $content .= ($wrapper !== FALSE ? $wrapper[1] : $this->wrapper[1]) . "\r\n";
        }
        return $content;
    }

    public function validation_errors() {
        if (!function_exists('validation_errors'))
            $this->CI->load->helper('form');

        $temp_errors = explode("\n", strip_tags(validation_errors()));
        $errors = array();
        foreach ($temp_errors as $e) {
            if (!empty($e))
                $errors[] = $e;
        }
        return $errors;
    }

    public function keep() {
        $this->CI->session->keep_flashdata('_messages');
    }

}

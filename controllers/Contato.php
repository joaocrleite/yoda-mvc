<?php

class Contato {
    public function index(){
        view('contato');
    }

    public function enviar(){

        $data['nome'] =  input('nome');
        $data['email'] =  input('email');

        view('contato-enviar', $data);
    }
}
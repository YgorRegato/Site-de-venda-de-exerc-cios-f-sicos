<?php
namespace Models;

class ClassCadastro extends ClassCrud{

    #Realiza a inserção no banco de dados
    public function insertCad($arrVar){
        $this->insertDB(
            "users",
            "?,?,?,?,?,?,?,?,?,?",
            array(
                0,
                $arrVar['nome'],
                $arrVar['email'],
                $arrVar['hashSenha'],
                $arrVar['dataNascimento'],
                $arrVar['telefone'],
                $arrVar['endereco'],
                $arrVar['dataCreate'],
                'user',
                'confirmation'
            )
        );

        $this->insertDB(
          "confirmation",
          "?, ?, ?",
          array(
              0,
              $arrVar['email'],
              $arrVar['token']
          )
        );
    }
}
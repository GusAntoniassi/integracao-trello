<?php
namespace App\Validation;

use Respect\Validation\Validator;
use App\Exception;

class SprintValidation implements ValidationInterface
{
    /**
     * @var \App\Model\EntradaCriarSprint
     */
    private $dados;

    public function validar($dados)
    {
        $this->dados = $dados;

        $this->validaIdsprint();
        $this->validaNome();
        $this->validaPrefs();
    }

    private function validaIdsprint()
    {
        if (Validator::min(1)->validate($this->dados->getIdsprint())) {
            return true;
        }

        throw new Exception\InvalidArgumentException('Idsprint ser um número maior que 0');
    }

    private function validaNome() {
        if (Validator::notEmpty()->validate($this->dados->getNome())) {
            return true;
        }
        
        throw new Exception\InvalidArgumentException('Nome não pode ser vazio');
    }

    private function validaPrefs() {
        $this->validaDefaultLabels();
        $this->validaDefaultLists();
        $this->validaDesc();
        $this->validaIdOrganization();
        $this->validaIdBoardSource();
        $this->validaKeepFromSource();
        $this->validaPowerUps();
        $this->validaPrefsPermissionLevel();
        $this->validaPrefsVoting();
        $this->validaPrefsComments();
        $this->validaPrefsInvitations();
        $this->validaPrefsSelfJoin();
        $this->validaPrefsCardCovers();
        $this->validaPrefsBackground();
        $this->validaPrefsCardAging();
    }

    private function validaDefaultLabels() {

    }

    private function validaDefaultLists() {

    }

    private function validaDesc() {

    }

    private function validaIdOrganization() {

    }

    private function validaIdBoardSource() {

    }

    private function validaKeepFromSource() {

    }

    private function validaPowerUps() {

    }

    private function validaPrefsPermissionLevel() {

    }

    private function validaPrefsVoting() {

    }

    private function validaPrefsComments() {

    }

    private function validaPrefsInvitations() {

    }

    private function validaPrefsSelfJoin() {

    }

    private function validaPrefsCardCovers() {

    }

    private function validaPrefsBackground() {

    }

    private function validaPrefsCardAging() {

    }
}
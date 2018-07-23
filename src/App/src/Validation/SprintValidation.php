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
        if (Validator::boolType()->validate($this->dados->getPrefs()->getDefaultLabels())) {
            return true;
        }

        throw new Exception\InvalidArgumentException('DefaultLabels deve ser true ou false');
    }

    private function validaDefaultLists() {
        if (Validator::boolType()->validate($this->dados->getPrefs()->getDefaultLists())) {
            return true;
        }

        throw new Exception\InvalidArgumentException('DefaultLists deve ser true ou false');
    }

    private function validaDesc() {
        if (Validator::length(1, 16384)->validate($this->dados->getPrefs()->getDesc())) {
            return true;
        }

        throw new Exception\InvalidArgumentException('Desc não pode ser vazio');
    }

    private function validaIdOrganization() {
        if (Validator::notEmpty()->validate($this->dados->getPrefs()->getIdOrganization())) {
            return true;
        }

        throw new Exception\InvalidArgumentException('IdOrganization não pode ser vazio');
    }

    private function validaIdBoardSource() {
        if (Validator::notEmpty()->validate($this->dados->getPrefs()->getIdBoardSource())) {
            return true;
        }

        throw new Exception\InvalidArgumentException('IdBoardSource não pode ser vazio');
    }

    private function validaKeepFromSource() {
        if (Validator::notEmpty()->validate($this->dados->getPrefs()->getKeepFromSource())) {
            return true;
        }

        throw new Exception\InvalidArgumentException('KeepFromSource não pode ser vazio');
    }

    private function validaPowerUps() {
        return true;
    }

    private function validaPrefsPermissionLevel() {
        if (Validator::notEmpty()->validate($this->dados->getPrefs()->getPrefs_permissionLevel())) {
            return true;
        }

        throw new Exception\InvalidArgumentException('Prefs_permissionLevel não pode ser vazio');
    }

    private function validaPrefsVoting() {
        if (Validator::notEmpty()->validate($this->dados->getPrefs()->getPrefs_voting())) {
            return true;
        }

        throw new Exception\InvalidArgumentException('Prefs_voting não pode ser vazio');
    }

    private function validaPrefsComments() {
        if (Validator::notEmpty()->validate($this->dados->getPrefs()->getPrefs_comments())) {
            return true;
        }

        throw new Exception\InvalidArgumentException('Prefs_comments não pode ser vazio');
    }

    private function validaPrefsInvitations() {
        if (Validator::notEmpty()->validate($this->dados->getPrefs()->getPrefs_invitations())) {
            return true;
        }

        throw new Exception\InvalidArgumentException('Prefs_invitations não pode ser vazio');
    }

    private function validaPrefsSelfJoin() {
        if (Validator::boolType()->validate($this->dados->getPrefs()->getPrefs_selfJoin())) {
            return true;
        }

        throw new Exception\InvalidArgumentException('Prefs_selfJoin deve ser true ou false');
    }

    private function validaPrefsCardCovers() {
        if (Validator::boolType()->validate($this->dados->getPrefs()->getPrefs_cardCovers())) {
            return true;
        }

        throw new Exception\InvalidArgumentException('Prefs_cardCovers deve ser true ou false');
    }

    private function validaPrefsBackground() {
        if (Validator::notEmpty()->validate($this->dados->getPrefs()->getPrefs_background())) {
            return true;
        }

        throw new Exception\InvalidArgumentException('Prefs_background não pode ser vazio');
    }

    private function validaPrefsCardAging() {
        if (Validator::notEmpty()->validate($this->dados->getPrefs()->getPrefs_cardAging())) {
            return true;
        }

        throw new Exception\InvalidArgumentException('Prefs_cardAging não pode ser vazio');
    }
}
<?php
namespace App\Models;
use \CodeIgniter\Model;


class LoginModel extends Model{

    //Metodo para crear el usuario
    public function crearUsuarioGoogle($datos){
        $builder = $this->db->table('users')->insert($datos);

        if($this->db->affectedRows() == 1){
            return true;
        }else{
            return false;
        }
    }

    //metodo para actualizar el ususario
    public function actualizarUsuarioGoogle($datos, $id){
        $builder = $this->db->table('users')->where('oauth_id',$id)->update($datos);

        if($this->db->affectedRows() == 1){
            return true;
        }else{
            return false;
        }
    } 

    //MEtodo para verificar si el usuario ya existe
    public function usuarioGoogleExiste($id){
        $builder = $this->db->table('users')->where('oauth_id', $id);

        if($builder->countAllResults() == 1){
            return true;
        }else{
            return false;
        }
    }

    public function dataUser($id){
        $builder = $this->db->table('users')->select('*')->where('oauth_id',$id);
        return $builder->get()->getRowArray();
    } 
}



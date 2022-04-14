<? php 
defined('BASEPATH') or exit ('No direct cript access allowed');

class Beranda extends ci_controller
{
    public function index()
    {
        $this->template->load('view/template','view/beranda');
    }
}
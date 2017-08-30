<?php
namespace app\admin\model;
use think\Model;
class Information extends Model{
    protected $pk='id';
    protected $table='information';
    public function getArticle(){
        $article=$this
            ->db()
            ->select();
        return $article;
    }
}
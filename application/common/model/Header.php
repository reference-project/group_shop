<?php
/**
 * 城主
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-08-28
 * Time: 10:11
 */

namespace app\common\model;


use think\Cache;
use think\Model;

class Header extends Model
{
    protected function initialize()
    {
        parent::initialize();
    }

    protected $autoWriteTimestamp = true;

    /**
     * 城主余额变动
     */
    public function addMoney()
    {
        
    }




}
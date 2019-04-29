<?php
/**
 * Created by PhpStorm.
 * User: guojingfeng
 * Date: 2019/4/28
 * Time: 11:21 PM
 */
namespace App\Http\Requests;

class PostRequest extends Request
{
    public function rules()
    {
        switch ($this->method()) {
            default:
                return [];
                break;
        }
    }
}

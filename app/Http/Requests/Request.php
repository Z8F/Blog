<?php
/**
 * Created by PhpStorm.
 * User: guojingfeng
 * Date: 2019/4/28
 * Time: 11:19 PM
 */
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Request extends FormRequest
{
    public function authorize()
    {
        // Using policy for Authorization
        return true;
    }
}

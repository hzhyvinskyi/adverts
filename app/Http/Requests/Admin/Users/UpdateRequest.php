<?php

namespace App\Http\Requests\Admin\Users;

use App\Entity\User;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @property User $user
 */
class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:50',
            'email' => 'required|string|email|max:50|unique:users,id,' . $this->user->id
        ];
    }
}

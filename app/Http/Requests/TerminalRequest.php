<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TerminalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
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
            'command' => 'required|max:255',
            'command_answer' => 'required|max:500'
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'command.required' => 'Поле команда является обязательным',
            'command_answer.required' => 'Поле ответ является обязательным',
            'command.max' => 'Для поля команда - превышен лимит символов',
            'command_answer.max' => 'Для поля ответ - превышен лимит символов',
        ];
    }
}

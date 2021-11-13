<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketRequest extends FormRequest
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
    public function rules()
    {
        return [
            'subject' => 'required|max:255',
            'content' => 'required',
            'priority_id' => 'required',
            'category_id' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'subject.required' => 'Subject is required',
            'subject.max' => 'Subject must be less than 255 characters',
            'content.required' => 'Content is required',
            'priority_id.required' => 'Priority is required',
            'category_id.required' => 'Category is required',
        ];
    }
}

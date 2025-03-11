<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMeetingRequest extends FormRequest
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
            'scheduled_by' => 'required|string|max:255',
            'image' => 'required|nullable',
            'file' => 'nullable|nullable',
            'date_time' => 'nullable',
            'project' => 'nullable|string',
            'reason' => 'nullable|string',
            'description' => 'nullable|string',
            'status' => 'nullable|in:0,1',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class StoreToDoListRequest extends FormRequest
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
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'status' => 'nullable|in:0,1',
            'pin' => 'nullable|in:0,1',
            'font' => 'nullable|string',
            'color' => 'nullable|string',
            'assignee_id' => 'nullable|integer',
            'emp_id' => 'nullable|integer',
            'date' => 'nullable|date_format:Y-m-d',
        ];
    }

    protected function prepareForValidation(): void
    {
        $userId = !empty(request()->user_id) ? request()->user_id : request()->user()->id;
        $this->merge(['assignee_id' => request()->get('user_id'), 'emp_id' => $userId, 'date' => Carbon::now()->format("Y-m-d")]);
    }
}

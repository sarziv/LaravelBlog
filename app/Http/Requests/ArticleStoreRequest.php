<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleStoreRequest extends FormRequest
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
            'title' => 'string|required',
            'article_info' => 'string|required',
            'article_tags' => 'array|required',
            'image' => 'string|required'
        ];
    }

    public function messages()
    {
      return [
          'title.required' => 'Title is missing.',
          'article_info.required' => 'Article is missing.',
          'article_tags.required' => 'Tags are missing.',
          'image.required' => 'Image is missing.'
      ];
    }
}

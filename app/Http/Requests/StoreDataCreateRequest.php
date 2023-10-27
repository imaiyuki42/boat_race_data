<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDataCreateRequest extends FormRequest
{
    /**
     * リクエスト権限の有無の設定
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     *バリデーションルールの作成
     *
     * @return array
     */
    public function rules()
    {
        return [
            'race_date' => ['required'],
            'race_number' => ['required'],
            'race_location' => ['required'],
            'exacta_first' => ['required'],
            'exacta_second' => ['required'],
            'exacta_refund_price' => ['required','numeric'],
            'exacta_rank' => ['required','numeric'],
            'trifecta_first' => ['required'],
            'trifecta_second' => ['required'],
            'trifecta_third' => ['required'],
            'trifecta_refund_price' => ['required','numeric'],
            'trifecta_rank' => ['required','numeric'],
        ];
    }

    /**
     *バリデーションメッセージの作成
     *
     * @return array
     */
    public function messages()
    {
        return [
            'race_date.required' => 'レース日の入力は必須です。',
            'race_number.required' => 'レース番号の入力は必須です。',
            'race_location.required' => 'レース場の入力は必須です。',
            'exacta_first.required' => '2連単1着は入力必須です。',
            'exacta_second.required' => '2連単2着は入力必須です。',
            'exacta_refund_price.required' => '2連単払戻し金額の入力は必須です。',
            'exacta_refund_price.numeric' => '2連単払戻し金額は数字で入力してください。',
            'exacta_refund_price.max' => '2連単払戻し金額は7桁以下で入力してください。',
            'exacta_rank.required' => '2連単人気順は入力必須です。',
            'exacta_rank.numeric' => '2連単人気順は数字で入力して下さい。',
            'exacta_rank.max' => '2連単人気順は3桁以下で入力して下さい。',
            'trifecta_first.required' => '3連単1着は入力必須です。',
            'trifecta_second.required' => '3連単2着は入力必須です。',
            'trifecta_third.required' => '3連単3着は入力必須です。',
            'trifecta_refund_price.required' => '3連単払戻し金額の入力は必須です。',
            'trifecta_refund_price.numeric' => '3連単払戻し金額は数字で入力してください。',
            'trifecta_refund_price.max' => '3連単払戻し金額は7桁以下で入力してください。',
            'trifecta_rank.required' => '3連単人気順は入力必須です。',
            'trifecta_rank.numeric' => '3連単人気順は数字で入力して下さい。',
            'trifecta_rank.max' => '3連単人気順は3桁以下で入力して下さい。',
        ];
    }
}

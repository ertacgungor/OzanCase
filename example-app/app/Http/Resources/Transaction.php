<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Transaction extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        'id' => $this->id,
        'reference_no' => $this->reference_no,
        'description' => $this->description,
        'merchant_id' => $this->merchant_id,
        'customer_info_id' => $this->customer_info_id,
        'acquirer_id' => $this->acquirer_id,
        'message' => $this->message,
        'code' => $this->code,
        'status' => $this->status,
        'operation' => $this->operation,
        'payment_method' => $this->payment_method,
        'error_code' => $this->error_code,
        'amount' => $this->amount,
        'original_currency' => $this->original_currency,
        'created_at' => $this->created_at->format('m/d/Y'),
        'updated_at' => $this->updated_at->format('m/d/Y'),
    }
}

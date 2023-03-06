<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request); jika ingin semua di tambpilan

        //jika hanya ini saja yang di tampilkan
        return [
            'id' => $this->id,
            'title' => $this->title,
            'new_content' => $this->new_content,
            'created_at' =>date_format ( $this->created_at, "Y/m/d H:i:s")
        ];
    }
}

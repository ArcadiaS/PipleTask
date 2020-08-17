<?php

namespace App\Models;

use Elasticquent\ElasticquentTrait;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use ElasticquentTrait;
    
    protected $guarded = [];
    
    protected $mappingProperties = [
        'overview' => [
            'type' => 'text',
            'analyzer' => 'standard'
        ],
        'description' => [
            'type' => 'text',
            'analyzer' => 'standard'
        ],
        'references' => [
            'type' => 'text',
            'analyzer' => 'standard'
        ],
        'state_id' => [
            'type' => 'integer'
        ],
        'title' => [
            'type' => 'string',
            'analyzer' => 'standard'
        ],
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    
    function getIndexDocumentData()
    {
        return array(
            'id'      => $this->id,
            'title'   => $this->title,
            'overview'  => $this->overview,
            'description'  => $this->description,
            'references'  => $this->references,
            'state_id'  => $this->state_id,
            'user' => $this->user
        );
    }
    
    
}

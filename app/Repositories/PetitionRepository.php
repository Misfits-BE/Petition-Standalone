<?php 

namespace App\Repositories;

use Share; 

/**
 * Class PetitionRepository 
 * 
 * @package App\Repositories
 */
class PetitionRepository 
{
    /**
     * Get the shareable links for the petition. 
     * 
     * @return array
     */
    public function getSocialLinks(): array 
    {
        return Share::load(config('app.url'), 'Activisme_BE | Kindereren sluit men niet op Theo Francken.')
            ->services('facebook', 'gplus', 'twitter', 'linkedin', 'pinterest');
    }
}